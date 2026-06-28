<?php
require_once __DIR__ . '/includes/lang.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container hero-grid">
        <div class="hero-text-content">
            <div class="badge">
                <span class="text-green">⚡</span> <?= t('hero_badge') ?>
            </div>
            <h1 class="hero-title"><?= t('hero_title') ?></h1>
            <p class="hero-subtitle"><?= t('hero_subtitle') ?></p>
            <div class="hero-ctas">
                <a href="products.php" class="btn btn-primary"><?= t('hero_cta_sell') ?></a>
                <a href="contact.php" class="btn btn-secondary"><?= t('hero_cta_rent') ?></a>
            </div>
        </div>
        <div class="hero-image-container">
            <div class="hero-image-wrapper">
                <img src="images/hero-scrap.jpg" alt="Industrial Metal Recycling Yard">
            </div>
            <div class="hero-decor-card">
                <div class="decor-icon">⚙️</div>
                <div>
                    <h4 class="text-white" style="font-size: 0.9rem; font-weight: 700;"><?= t('footer_reg') ?></h4>
                    <p class="text-muted" style="font-size: 0.75rem;">Licensed Global Exporter</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- USP / Core Features Section -->
<section class="section" style="background: rgba(255,255,255,0.01); border-top: 1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div class="section-headline-container">
            <h2 class="section-title"><?= t('usp_header') ?></h2>
            <p class="section-desc">Delivering purity, verified grading, and global supply logistics since 2007.</p>
        </div>

        <div class="grid-4">
            <!-- USP 1 -->
            <div class="card">
                <div class="card-icon text-copper">💰</div>
                <h3 class="card-title"><?= t('usp_1_title') ?></h3>
                <p class="card-text"><?= t('usp_1_desc') ?></p>
            </div>

            <!-- USP 2 -->
            <div class="card">
                <div class="card-icon text-gold">⚖️</div>
                <h3 class="card-title"><?= t('usp_2_title') ?></h3>
                <p class="card-text"><?= t('usp_2_desc') ?></p>
            </div>

            <!-- USP 3 -->
            <div class="card">
                <div class="card-icon text-green">🚚</div>
                <h3 class="card-title"><?= t('usp_3_title') ?></h3>
                <p class="card-text"><?= t('usp_3_desc') ?></p>
            </div>

            <!-- USP 4 -->
            <div class="card">
                <div class="card-icon text-copper">🛡️</div>
                <h3 class="card-title"><?= t('usp_4_title') ?></h3>
                <p class="card-text"><?= t('usp_4_desc') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- About Teaser / Credentials Section -->
<section class="section">
    <div class="container grid-2" style="align-items: center;">
        <div>
            <h2 class="section-title" style="margin-bottom: 1.5rem; text-align: left;"><?= t('home_about_headline') ?></h2>
            <p class="text-muted" style="margin-bottom: 1.5rem; line-height: 1.8;"><?= t('home_about_text') ?></p>
            <div style="display: flex; gap: 1rem;">
                <a href="about.php" class="btn btn-secondary"><?= t('nav_about') ?></a>
                <a href="contact.php" class="btn btn-primary"><?= t('nav_contact') ?></a>
            </div>
        </div>
        <div class="credential-block">
            <span class="badge-reg"><?= t('footer_reg') ?></span>
            <h3 class="text-white" style="font-size: 1.5rem;">Corporate Credentials & Operations</h3>
            <p class="text-muted" style="font-size: 0.95rem;">STEIN SCRAP, INC. maintains active licenses, certificates of insurance, and compliance documents for global trading accounts. We operate custom logistics channels routing bulk containers from the Port of Los Angeles to foundries and manufacturing yards internationally.</p>
            <div style="display: flex; flex-direction: column; gap: 0.8rem; border-top: 1px solid rgba(255,255,255,0.05); padding-top: 1.2rem;">
                <p style="font-size: 0.85rem;"><strong class="text-copper">Corporate Office:</strong> 2220 Ave of the Stars, Los Angeles, CA 90067</p>
                <p style="font-size: 0.85rem;"><strong class="text-gold">Processing Yard:</strong> 3000 E Pico Blvd, Los Angeles, CA 90023</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Showcase -->
<div class="stats-bar">
    <div class="container stats-grid">
        <div class="stat-item">
            <h3>$15M+</h3>
            <p><?= t('stat_payouts') ?></p>
        </div>
        <div class="stat-item">
            <h3>450+</h3>
            <p><?= t('stat_tons') ?></p>
        </div>
        <div class="stat-item">
            <h3>12K+</h3>
            <p><?= t('stat_customers') ?></p>
        </div>
    </div>
</div>

<!-- Featured Products Section -->
<section class="section" style="background: rgba(255,255,255,0.01);">
    <div class="container">
        <div class="section-headline-container">
            <h2 class="section-title">Key Recycled Commodities</h2>
            <p class="section-desc">We export certified, high-purity recycled copper, aluminum, iron, paper, and polymer commodities.</p>
        </div>

        <div class="featured-grid">
            <!-- Copper -->
            <div class="featured-card">
                <div class="featured-icon text-copper">🧲</div>
                <div class="featured-info">
                    <h4>99.99% Copper Wire Scrap</h4>
                    <p>Clean uncoated wire (Bare Bright) and cathode plate materials.</p>
                </div>
            </div>

            <!-- Aluminum -->
            <div class="featured-card">
                <div class="featured-icon text-gold">🚘</div>
                <div class="featured-info">
                    <h4>Aluminum Wheel Rim Scrap</h4>
                    <p>Clean alloy wheels, profiles, wire, and A7 ingots.</p>
                </div>
            </div>

            <!-- E-Scrap -->
            <div class="featured-card">
                <div class="featured-icon text-green">💾</div>
                <div class="featured-info">
                    <h4>CPU Ceramic Processor Scrap</h4>
                    <p>Ceramic processors and logic units with high gold-pin yield.</p>
                </div>
            </div>

            <!-- Cardboard OCC -->
            <div class="featured-card">
                <div class="featured-icon text-copper">📦</div>
                <div class="featured-info">
                    <h4>OCC Waste Paper Scrap</h4>
                    <p>Corrugated boxes and kraft materials in tightly bound bales.</p>
                </div>
            </div>

            <!-- Plastics -->
            <div class="featured-card">
                <div class="featured-icon text-gold">🥤</div>
                <div class="featured-info">
                    <h4>PET Plastic Bottle Scrap</h4>
                    <p>Clean washed plastic bottle bales and sorted polymers.</p>
                </div>
            </div>

            <!-- Films -->
            <div class="featured-card">
                <div class="featured-icon text-green">🎞️</div>
                <div class="featured-info">
                    <h4>LDPE / LLDPE Film Scraps</h4>
                    <p>Stretch wraps and clear polymer packaging films.</p>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="products.php" class="btn btn-secondary"><?= t('products_intro') ?> &rarr;</a>
        </div>
    </div>
</section>

<!-- Call To Action Banner -->
<section class="section">
    <div class="container">
        <div class="cta-banner">
            <h2><?= t('home_cta_title') ?></h2>
            <p><?= t('home_cta_desc') ?></p>
            <div class="cta-actions">
                <a href="contact.php" class="btn btn-primary"><?= t('nav_get_quote') ?></a>
                <a href="products.php" class="btn btn-secondary"><?= t('calc_title') ?></a>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
