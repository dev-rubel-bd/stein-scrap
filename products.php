<?php
require_once __DIR__ . '/includes/lang.php';
require_once __DIR__ . '/includes/header.php';

// Extract categories for filter buttons
$categories = [];
foreach ($products_data as $key => $p) {
    if (!in_array($p['category'], $categories)) {
        $categories[] = $p['category'];
    }
}
?>

<!-- Title & Intro -->
<section class="section" style="padding-top: 9rem; padding-bottom: 3rem;">
    <div class="container text-center">
        <div class="section-headline-container">
            <h1 class="section-title"><?= t('products_title') ?></h1>
            <p class="section-desc"><?= t('products_intro') ?></p>
        </div>
    </div>
</section>

<!-- Purchase Estimator Calculator Section -->
<section class="section" style="background: rgba(255, 255, 255, 0.01); border-top: 1px solid rgba(255,255,255,0.02); border-bottom: 1px solid rgba(255,255,255,0.02); padding: 4rem 1.5rem;">
    <div class="container">
        <div class="calculator-card">
            <div class="calc-grid">
                <div>
                    <h2 class="text-white mb-2" style="font-size: 1.8rem; margin-bottom: 0.8rem;"><?= t('calc_title') ?></h2>
                    <p class="text-muted" style="font-size: 0.95rem; margin-bottom: 2rem;"><?= t('calc_desc') ?></p>
                    
                    <div class="form-group">
                        <label for="calc-material">Commodity / Material</label>
                        <select id="calc-material" class="form-control">
                            <?php foreach ($products_data as $key => $p): ?>
                                <option value="<?= $key ?>"><?= $p['name'][$lang] ?> ($<?= number_format($p['price_per_lb'], 2) ?>/lb)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label for="calc-weight"><?= t('calc_weight') ?></label>
                        <input type="number" id="calc-weight" class="form-control" placeholder="e.g. 500" min="0">
                    </div>
                </div>

                <div class="calc-display">
                    <span class="calc-val-title"><?= t('calc_result') ?></span>
                    <span id="calc-result-val" class="calc-val">$0.00</span>
                    <span class="calc-notice">⚠️ <?= t('calc_disclaimer') ?></span>
                    <a href="contact.php" class="btn btn-primary" style="margin-top: 1.5rem; width: 100%;"><?= t('nav_get_quote') ?> &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid with Filters -->
<section class="section">
    <div class="container">
        <!-- Category Filters -->
        <div class="products-filter">
            <button class="filter-btn active" data-filter="all">All Commodities</button>
            <?php foreach ($categories as $cat): ?>
                <button class="filter-btn" data-filter="<?= $cat ?>"><?= $cat ?></button>
            <?php endforeach; ?>
        </div>

        <!-- Cards Grid -->
        <div class="grid-3">
            <?php foreach ($products_data as $key => $p): 
                // Determine placeholder file name based on key
                $img_src = "images/products/{$key}.jpg";
                // Fallback category images if file not generated yet
                $category_slug = strtolower($p['category']);
                $fallback_src = "images/{$category_slug}.jpg";
            ?>
                <div class="product-card" data-category="<?= $p['category'] ?>">
                    <div class="product-img-wrapper">
                        <span class="product-category"><?= $p['category'] ?></span>
                        <img src="<?= $fallback_src ?>" onerror="this.src='images/hero-scrap.jpg'" alt="<?= $p['name'][$lang] ?>">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><?= $p['name'][$lang] ?></h3>
                        <p class="product-desc"><?= $p['desc'][$lang] ?></p>
                        <div class="product-specs">
                            <strong>Specification:</strong>
                            <p><?= $p['specs'][$lang] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
