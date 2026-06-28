<?php
require_once __DIR__ . '/includes/lang.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Title & Intro -->
<section class="section" style="padding-top: 9rem; padding-bottom: 3rem;">
    <div class="container text-center">
        <div class="section-headline-container">
            <h1 class="section-title"><?= t('about_title') ?></h1>
            <p class="section-desc"><?= t('about_intro') ?></p>
        </div>
    </div>
</section>

<!-- Company History & Identity -->
<section class="section" style="padding-top: 0;">
    <div class="container grid-2" style="align-items: center; gap: 4rem;">
        <div>
            <span class="badge-reg" style="margin-bottom: 1rem;"><?= t('footer_reg') ?></span>
            <h2 class="text-white mb-2" style="font-size: 2rem; margin-bottom: 1rem;"><?= t('about_history_title') ?></h2>
            <p class="text-muted" style="line-height: 1.8; margin-bottom: 1.5rem;"><?= t('about_history_text') ?></p>
            <p class="text-muted" style="line-height: 1.8;">Established in 2007, STEIN SCRAP, INC. has evolved from a local metal collection yard into a full-scale commodities brokerage and logistics operator. We process and package ferrous and non-ferrous metals to meet strict domestic foundry specifications and global export requirements, maintaining long-term logistics partnerships with shipping lines and ports.</p>
        </div>
        <div style="position: relative;">
            <div class="hero-image-wrapper" style="aspect-ratio: 16/11; border-radius: var(--border-radius-lg);">
                <img src="images/hero-scrap.jpg" onerror="this.src='images/hero-scrap.jpg'" alt="Industrial Metal Processing Yard" style="object-fit: cover; width: 100%; height: 100%;">
            </div>
        </div>
    </div>
</section>

<!-- Safety and Eco standards -->
<section class="section" style="background: rgba(255, 255, 255, 0.01); border-top: 1px solid rgba(255,255,255,0.02); border-bottom: 1px solid rgba(255,255,255,0.02);">
    <div class="container grid-2" style="align-items: center; gap: 4rem;">
        <div class="credential-block" style="background: rgba(0, 0, 0, 0.3);">
            <h3 class="text-white" style="font-size: 1.4rem;">Regulatory Compliance & Licensing</h3>
            <ul style="color: var(--color-text-muted); list-style: none; display: flex; flex-direction: column; gap: 1rem;">
                <li style="border-bottom: 1px solid rgba(255, 255, 255, 0.05); padding-bottom: 0.8rem; display: flex; align-items: center; gap: 10px;">
                    <span class="text-green">✓</span> <span><strong>State Corporate Registration ID:</strong> 3352182</span>
                </li>
                <li style="border-bottom: 1px solid rgba(255, 255, 255, 0.05); padding-bottom: 0.8rem; display: flex; align-items: center; gap: 10px;">
                    <span class="text-green">✓</span> <span><strong>EPA Registry ID:</strong> Compliant Material Processor</span>
                </li>
                <li style="border-bottom: 1px solid rgba(255, 255, 255, 0.05); padding-bottom: 0.8rem; display: flex; align-items: center; gap: 10px;">
                    <span class="text-green">✓</span> <span><strong>County Weighmaster Certificate:</strong> Scales calibrated & sealed annually by weights and measures division</span>
                </li>
                <li style="display: flex; align-items: center; gap: 10px;">
                    <span class="text-green">✓</span> <span><strong>General Liability Insurance:</strong> Industrial-grade commercial accounts coverage</span>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="text-white mb-2" style="font-size: 2rem; margin-bottom: 1rem;"><?= t('about_eco_title') ?></h2>
            <p class="text-muted" style="line-height: 1.8; margin-bottom: 1.5rem;"><?= t('about_eco_text') ?></p>
            <p class="text-muted" style="line-height: 1.8;">Our facility features state-approved separation zones for different commodities to ensure no crossover contamination. From sorting out lead plates in vehicle battery casings to containing copper wiring residues, our handling policies prioritize ecological health. We are proud partners in the Los Angeles Clean Business initiative, advancing zero-waste goals.</p>
        </div>
    </div>
</section>

<!-- Office vs Yard Locations -->
<section class="section">
    <div class="container">
        <div class="section-headline-container">
            <h2 class="section-title">Operational Infrastructure</h2>
            <p class="section-desc">We split our operations to maximize efficiency: executive broker management in Century City and heavy logistics processing in East LA.</p>
        </div>

        <div class="grid-2">
            <!-- Office -->
            <div class="card">
                <div class="card-icon text-copper">🏢</div>
                <h3 class="card-title"><?= t('office_title') ?></h3>
                <p class="card-text" style="margin-bottom: 1rem;">Our corporate headquarters coordinates international container freight, pricing indexes, bulk broker trades, and contractor service contracts.</p>
                <p class="text-white"><strong>Address:</strong> 2220 Ave of the Stars UNIT 2602, Los Angeles, CA 90067</p>
            </div>

            <!-- Yard -->
            <div class="card">
                <div class="card-icon text-gold">🏗️</div>
                <h3 class="card-title"><?= t('yard_title') ?></h3>
                <p class="card-text" style="margin-bottom: 1rem;">Our primary sorting facility is equipped with vehicle scales, metal analyzers, hydraulic shears, copper cable strip lines, and export shipping container loading systems.</p>
                <p class="text-white"><strong>Address:</strong> 3000 E Pico Blvd, Los Angeles, CA 90023</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
