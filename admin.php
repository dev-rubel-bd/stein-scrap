<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/includes/lang.php';

// Authentication settings
$admin_user = 'admin';
$admin_pass = 'stein_admin123';
$auth_error = '';

// Handle Logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['admin_logged_in']);
    header('Location: admin.php');
    exit;
}

// Handle Login Form POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $auth_error = 'Invalid administrative credentials.';
    }
}

// Check authorization
$is_logged_in = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;

// Handle CRUD operations if authorized
if ($is_logged_in && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_GET['action']) ? $_GET['action'] : '';
    $json_path = __DIR__ . '/data/products.json';

    // 1. DELETE PRODUCT
    if ($action === 'delete') {
        $delete_key = isset($_POST['key']) ? trim($_POST['key']) : '';
        if ($delete_key && isset($products_data[$delete_key])) {
            unset($products_data[$delete_key]);
            
            // Save updated JSON
            file_put_contents($json_path, json_encode($products_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            $_SESSION['admin_msg'] = 'Product removed successfully.';
            header('Location: admin.php');
            exit;
        }
    }

    // 2. ADD PRODUCT
    if ($action === 'add') {
        $key = isset($_POST['key']) ? preg_replace("/[^a-z0-9_]/", "", strtolower(trim($_POST['key']))) : '';
        $name_en = isset($_POST['name_en']) ? htmlspecialchars(trim($_POST['name_en'])) : '';
        $name_es = isset($_POST['name_es']) ? htmlspecialchars(trim($_POST['name_es'])) : '';
        $category = isset($_POST['category']) ? htmlspecialchars(trim($_POST['category'])) : 'Other';
        $desc_en = isset($_POST['desc_en']) ? htmlspecialchars(trim($_POST['desc_en'])) : '';
        $desc_es = isset($_POST['desc_es']) ? htmlspecialchars(trim($_POST['desc_es'])) : '';
        $specs_en = isset($_POST['specs_en']) ? htmlspecialchars(trim($_POST['specs_en'])) : '';
        $specs_es = isset($_POST['specs_es']) ? htmlspecialchars(trim($_POST['specs_es'])) : '';
        $price = isset($_POST['price']) ? floatval($_POST['price']) : 0.0;

        if (empty($key) || empty($name_en) || empty($name_es)) {
            $_SESSION['admin_err'] = 'Key, English Name, and Spanish Name are required.';
        } elseif (isset($products_data[$key])) {
            $_SESSION['admin_err'] = 'Product key already exists. Use a unique identifier.';
        } else {
            // Add to dictionary
            $products_data[$key] = [
                'name' => ['en' => $name_en, 'es' => $name_es],
                'category' => $category,
                'desc' => ['en' => $desc_en, 'es' => $desc_es],
                'specs' => ['en' => $specs_en, 'es' => $specs_es],
                'price_per_lb' => $price
            ];

            // Save updated JSON
            file_put_contents($json_path, json_encode($products_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            $_SESSION['admin_msg'] = 'Product added successfully.';
            header('Location: admin.php');
            exit;
        }
    }
}

// Fetch flash messages
$admin_msg = '';
$admin_err = '';
if (isset($_SESSION['admin_msg'])) {
    $admin_msg = $_SESSION['admin_msg'];
    unset($_SESSION['admin_msg']);
}
if (isset($_SESSION['admin_err'])) {
    $admin_err = $_SESSION['admin_err'];
    unset($_SESSION['admin_err']);
}

require_once __DIR__ . '/includes/header.php';
?>

<!-- Main Content Wrapper -->
<main class="container" style="padding: 9rem 1.5rem 6rem 1.5rem;">
    <?php if (!$is_logged_in): ?>
        <!-- Login Form Interface -->
        <div style="max-width: 450px; margin: 4rem auto;" class="card">
            <h2 class="text-white text-center" style="margin-bottom: 2rem;">Stein Admin Portal</h2>
            
            <?php if (!empty($auth_error)): ?>
                <div style="background: rgba(239, 68, 68, 0.1); border: 1px solid rgba(239, 68, 68, 0.3); color: #EF4444; padding: 0.8rem; border-radius: var(--border-radius-md); margin-bottom: 1.5rem; font-size: 0.9rem;">
                    ⚠️ <?= $auth_error ?>
                </div>
            <?php endif; ?>

            <form action="admin.php" method="POST">
                <input type="hidden" name="login" value="1">
                
                <div class="form-group">
                    <label for="admin-user">Username</label>
                    <input type="text" id="admin-user" name="username" class="form-control" required placeholder="e.g. admin">
                </div>

                <div class="form-group" style="margin-bottom: 2rem;">
                    <label for="admin-pass">Password</label>
                    <input type="password" id="admin-pass" name="password" class="form-control" required placeholder="••••••••••••">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Authenticate</button>
            </form>
        </div>
    <?php else: ?>
        <!-- Dashboard Interface -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem;">
            <div>
                <h1 class="text-white">Stein Scrap Admin Dashboard</h1>
                <p class="text-muted">Manage the commodities list displayed on the products page and calculator.</p>
            </div>
            <a href="admin.php?action=logout" class="btn btn-secondary">Logout</a>
        </div>

        <!-- Alerts -->
        <?php if (!empty($admin_msg)): ?>
            <div style="background: rgba(16, 185, 129, 0.1); border: 1px solid rgba(16, 185, 129, 0.3); color: var(--color-accent-green); padding: 1rem; border-radius: var(--border-radius-md); margin-bottom: 2rem;">
                ✓ <?= $admin_msg ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($admin_err)): ?>
            <div style="background: rgba(239, 68, 68, 0.1); border: 1px solid rgba(239, 68, 68, 0.3); color: #EF4444; padding: 1rem; border-radius: var(--border-radius-md); margin-bottom: 2rem;">
                ⚠️ <?= $admin_err ?>
            </div>
        <?php endif; ?>

        <div class="calc-grid" style="gap: 3rem;">
            <!-- Products List (Left Column) -->
            <div>
                <h2 class="text-white" style="font-size: 1.5rem; margin-bottom: 1.5rem;">Current Commodities</h2>
                
                <div style="overflow-x: auto; background: var(--color-bg-card); border: 1px solid var(--color-glass-border); border-radius: var(--border-radius-lg);">
                    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.9rem;">
                        <thead>
                            <tr style="border-bottom: 1px solid var(--color-glass-border); background: rgba(0, 0, 0, 0.2);">
                                <th style="padding: 1rem;">Category</th>
                                <th style="padding: 1rem;">Commodity Name</th>
                                <th style="padding: 1rem;">Price/lb</th>
                                <th style="padding: 1rem; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products_data as $key => $p): ?>
                                <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.05); transition: var(--transition-fast);">
                                    <td style="padding: 1rem;"><span class="product-category" style="position: static; font-size: 0.7rem;"><?= $p['category'] ?></span></td>
                                    <td style="padding: 1rem; font-weight: 600; color: #FFFFFF;">
                                        <?= $p['name']['en'] ?><br>
                                        <span class="text-muted" style="font-size: 0.75rem; font-weight: 400;"><?= $p['name']['es'] ?></span>
                                    </td>
                                    <td style="padding: 1rem; font-weight: 600; color: var(--color-accent-gold);">$<?= number_format($p['price_per_lb'], 2) ?></td>
                                    <td style="padding: 1rem; text-align: center;">
                                        <form action="admin.php?action=delete" method="POST" onsubmit="return confirm('Are you sure you want to remove this product? This action cannot be undone.');">
                                            <input type="hidden" name="key" value="<?= $key ?>">
                                            <button type="submit" class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.8rem; border-color: rgba(239, 68, 68, 0.3); color: #EF4444;">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Add Product Form (Right Column) -->
            <div class="card" style="height: fit-content;">
                <h2 class="text-white" style="font-size: 1.5rem; margin-bottom: 1.5rem;">Add New Commodity</h2>
                
                <form action="admin.php?action=add" method="POST">
                    <div class="grid-2" style="gap: 1.2rem;">
                        <div class="form-group">
                            <label for="prod-key">Product Key *</label>
                            <input type="text" id="prod-key" name="key" class="form-control" required placeholder="e.g. lead_ingot" pattern="[a-z0-9_]+">
                            <p style="font-size: 0.7rem; color: var(--color-text-muted); margin-top: 4px;">Lowercases, numbers, and underscores only</p>
                        </div>
                        <div class="form-group">
                            <label for="prod-price">Price ($ per lb) *</label>
                            <input type="number" id="prod-price" name="price" class="form-control" required step="0.01" min="0" placeholder="e.g. 1.25">
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 1rem;">
                        <label for="prod-cat">Category *</label>
                        <select id="prod-cat" name="category" class="form-control">
                            <option value="Copper">Copper</option>
                            <option value="Aluminum">Aluminum</option>
                            <option value="Ferrous">Ferrous</option>
                            <option value="E-Scrap">E-Scrap</option>
                            <option value="Paper">Paper</option>
                            <option value="Brass">Brass</option>
                            <option value="Plastics">Plastics</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <!-- English Text -->
                    <div style="border-top: 1px solid rgba(255, 255, 255, 0.05); margin-top: 1.5rem; padding-top: 1rem;">
                        <h4 class="text-copper" style="font-size: 0.95rem; margin-bottom: 1rem;">English Specifications</h4>
                        <div class="form-group">
                            <label for="prod-name-en">Product Name (EN) *</label>
                            <input type="text" id="prod-name-en" name="name_en" class="form-control" required placeholder="e.g. 99.9% Pure Lead Ingots">
                        </div>
                        <div class="form-group">
                            <label for="prod-desc-en">Description (EN)</label>
                            <input type="text" id="prod-desc-en" name="desc_en" class="form-control" placeholder="Brief material description">
                        </div>
                        <div class="form-group">
                            <label for="prod-specs-en">Specification details (EN)</label>
                            <input type="text" id="prod-specs-en" name="specs_en" class="form-control" placeholder="Purity, size, or LME grading details">
                        </div>
                    </div>

                    <!-- Spanish Text -->
                    <div style="border-top: 1px solid rgba(255, 255, 255, 0.05); margin-top: 1.5rem; padding-top: 1rem; margin-bottom: 2rem;">
                        <h4 class="text-gold" style="font-size: 0.95rem; margin-bottom: 1rem;">Spanish Specifications (Español)</h4>
                        <div class="form-group">
                            <label for="prod-name-es">Nombre del Producto (ES) *</label>
                            <input type="text" id="prod-name-es" name="name_es" class="form-control" required placeholder="e.g. Lingotes de Plomo Puro 99.9%">
                        </div>
                        <div class="form-group">
                            <label for="prod-desc-es">Descripción (ES)</label>
                            <input type="text" id="prod-desc-es" name="desc_es" class="form-control" placeholder="Descripción breve del material">
                        </div>
                        <div class="form-group">
                            <label for="prod-specs-es">Detalle de especificaciones (ES)</label>
                            <input type="text" id="prod-specs-es" name="specs_es" class="form-control" placeholder="Detalles de pureza, dimensiones o calidad">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Add Product Entry</button>
                </form>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
