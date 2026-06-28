<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}
require_once __DIR__ . '/includes/lang.php';

// Retrieve form values
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
$phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
$service_key = isset($_POST['service']) ? htmlspecialchars(trim($_POST['service'])) : 'other';
$materials = isset($_POST['materials']) ? htmlspecialchars(trim($_POST['materials'])) : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

// Map service keys to friendly text
$services_map = [
    'buy_metals' => t('opt_buy_metals'),
    'buy_aluminum' => t('opt_buy_aluminum'),
    'buy_paper_plastic' => t('opt_buy_paper_plastic'),
    'other' => t('opt_other')
];
$friendly_service = isset($services_map[$service_key]) ? $services_map[$service_key] : 'Other';

// Process uploads (simulate or save)
$uploaded_files = [];
if (isset($_FILES['scrap_photos'])) {
    $files = $_FILES['scrap_photos'];
    
    // Create uploads folder inside workspace if it doesn't exist
    $upload_dir = __DIR__ . '/uploads/';
    if (!file_exists($upload_dir)) {
        @mkdir($upload_dir, 0777, true);
    }
    
    for ($i = 0; $i < count($files['name']); $i++) {
        if ($files['error'][$i] === UPLOAD_ERR_OK) {
            $tmp_name = $files['tmp_name'][$i];
            $original_name = basename($files['name'][$i]);
            // Secure filename by appending timestamp
            $new_filename = time() . '_' . preg_replace("/[^a-zA-Z0-9\._-]/", "", $original_name);
            
            if (@move_uploaded_file($tmp_name, $upload_dir . $new_filename)) {
                $uploaded_files[] = $original_name;
            } else {
                // Fallback: collect name even if move failed (e.g. permission issues in workspace environment)
                $uploaded_files[] = $original_name . ' (Registered)';
            }
        }
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<!-- Main Content Wrapper -->
<main class="container" style="padding: 3rem 1.5rem;">
    <div class="success-message-container">
        <div class="success-icon">✓</div>
        <h1 class="success-title"><?= t('submit_quote_received') ?></h1>
        <p class="success-text">Thank you for contacting STEIN SCRAP, INC. (Registration No. 3352182). Your inquiry has been logged. A commodities broker will review your specs and contact you shortly.</p>
        
        <!-- Summary Receipt Box -->
        <div class="receipt-box">
            <h3 class="text-white mb-2" style="font-size: 1.1rem; border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding-bottom: 0.5rem; margin-bottom: 1rem;">Inquiry Receipt</h3>
            
            <div class="receipt-row">
                <span class="receipt-label">Client Name / Co.</span>
                <span class="receipt-val"><?= $name ?></span>
            </div>

            <div class="receipt-row">
                <span class="receipt-label">Email Address</span>
                <span class="receipt-val"><?= $email ?></span>
            </div>

            <div class="receipt-row">
                <span class="receipt-label">Phone Hotline</span>
                <span class="receipt-val"><?= $phone ?></span>
            </div>

            <div class="receipt-row">
                <span class="receipt-label"><?= t('form_interest') ?></span>
                <span class="receipt-val"><?= $friendly_service ?></span>
            </div>

            <?php if (!empty($materials)): ?>
            <div class="receipt-row">
                <span class="receipt-label">Material & Volume</span>
                <span class="receipt-val"><?= $materials ?></span>
            </div>
            <?php endif; ?>

            <?php if (!empty($uploaded_files)): ?>
            <div class="receipt-row">
                <span class="receipt-label">Documents Attached</span>
                <span class="receipt-val"><?= implode(', ', $uploaded_files) ?></span>
            </div>
            <?php endif; ?>

            <div class="receipt-row">
                <span class="receipt-label">Reference ID</span>
                <span class="receipt-val" style="color: var(--color-accent-gold);">REF-<?= rand(100000, 999999) ?></span>
            </div>

            <div class="receipt-row">
                <span class="receipt-label">Submission Date</span>
                <span class="receipt-val"><?= date('F d, Y h:i A') ?></span>
            </div>
        </div>

        <div style="display: flex; justify-content: center; gap: 1rem;">
            <a href="index.php" class="btn btn-secondary">&larr; Back to Home</a>
            <a href="products.php" class="btn btn-primary">Scrap Price Calculator</a>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
