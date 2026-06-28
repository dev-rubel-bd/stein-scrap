<?php
require_once __DIR__ . '/includes/lang.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Title & Intro -->
<section class="section" style="padding-top: 9rem; padding-bottom: 3rem;">
    <div class="container text-center">
        <div class="section-headline-container">
            <h1 class="section-title"><?= t('services_headline') ?></h1>
            <p class="section-desc"><?= t('services_intro') ?></p>
        </div>
    </div>
</section>

<!-- Core Services Grid -->
<section class="section" style="padding-top: 0;">
    <div class="container grid-2">
        <!-- Service 1 -->
        <div class="card" style="display: flex; flex-direction: column;">
            <div class="card-icon text-copper">🏭</div>
            <h3 class="card-title"><?= t('service_1_name') ?></h3>
            <p class="card-text" style="flex-grow: 1;"><?= t('service_1_desc') ?></p>
            <a href="contact.php" class="btn btn-secondary" style="margin-top: 2rem; align-self: flex-start;"><?= t('nav_get_quote') ?> &rarr;</a>
        </div>

        <!-- Service 2 -->
        <div class="card" style="display: flex; flex-direction: column;">
            <div class="card-icon text-gold">🚛</div>
            <h3 class="card-title"><?= t('service_2_name') ?></h3>
            <p class="card-text" style="flex-grow: 1;"><?= t('service_2_desc') ?></p>
            <a href="#containers" class="btn btn-secondary" style="margin-top: 2rem; align-self: flex-start;">View Ocean Containers &darr;</a>
        </div>

        <!-- Service 3 -->
        <div class="card" style="display: flex; flex-direction: column;">
            <div class="card-icon text-green">🔍</div>
            <h3 class="card-title"><?= t('service_3_name') ?></h3>
            <p class="card-text" style="flex-grow: 1;"><?= t('service_3_desc') ?></p>
            <a href="contact.php" class="btn btn-secondary" style="margin-top: 2rem; align-self: flex-start;">Inquire Online</a>
        </div>

        <!-- Service 4 -->
        <div class="card" style="display: flex; flex-direction: column;">
            <div class="card-icon text-copper">🔧</div>
            <h3 class="card-title"><?= t('service_4_name') ?></h3>
            <p class="card-text" style="flex-grow: 1;"><?= t('service_4_desc') ?></p>
            <a href="contact.php" class="btn btn-secondary" style="margin-top: 2rem; align-self: flex-start;">Submit LOI</a>
        </div>
    </div>
</section>

<!-- Ocean Container Visualizer Section -->
<section id="containers" class="section" style="background: rgba(255, 255, 255, 0.01); border-top: 1px solid rgba(255,255,255,0.02); border-bottom: 1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div class="section-headline-container">
            <h2 class="section-title">Ocean Shipping Container Sizes</h2>
            <p class="section-desc">Verify package density and payload weight limits for ocean cargo shipping from the Port of Los Angeles.</p>
        </div>

        <div class="cargo-container-visualizer">
            <!-- Tabs selector -->
            <div class="cargo-container-tabs">
                <div class="cargo-container-tab active" data-size="10">
                    <h4>20FT ST</h4>
                    <p>Standard Container</p>
                </div>
                <div class="cargo-container-tab" data-size="20">
                    <h4>40FT ST</h4>
                    <p>Standard Container</p>
                </div>
                <div class="cargo-container-tab" data-size="30">
                    <h4>40FT HC</h4>
                    <p>High-Cube Container</p>
                </div>
            </div>

            <!-- Showcase graphics and specs -->
            <div class="cargo-container-showcase">
                <div class="cargo-container-graphics" data-size="10">
                    <!-- Pure CSS container model box -->
                    <div class="cargo-container-model-box" style="background: var(--color-accent-copper);"></div>
                </div>

                <div class="cargo-container-info">
                    <h3 id="cargo-container-title">20ft Standard Ocean Container</h3>
                    <ul class="cargo-container-specs-list">
                        <li>
                            <span>Internal Dimensions:</span>
                            <strong id="cargo-container-dim">19.4ft Long x 7.8ft Wide x 7.9ft High</strong>
                        </li>
                        <li>
                            <span>Max Payload Capacity:</span>
                            <strong id="cargo-container-cap">47,900 lbs / 21.7 Metric Tons (Volume: 1,172 cu ft)</strong>
                        </li>
                        <li>
                            <span>Best Suited Commodities:</span>
                            <strong id="cargo-container-use" style="text-align: right; max-width: 60%;">Heavy materials: copper cathodes, wire coils, lead ingots, and heavy melting steel scraps.</strong>
                        </li>
                    </ul>
                    <a href="contact.php" class="btn btn-green btn-block" style="margin-top: 1.5rem;">Request Container Booking</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Commercial Programs banner -->
<section class="section">
    <div class="container card" style="background: linear-gradient(135deg, #14171A 60%, rgba(16, 185, 129, 0.05)); padding: 4rem;">
        <div class="grid-2" style="align-items: center; gap: 4rem;">
            <div>
                <h3 class="text-white mb-2" style="font-size: 1.8rem; margin-bottom: 0.8rem;">Foundry Supply Audits & Assays</h3>
                <p class="text-muted" style="font-size: 0.95rem; line-height: 1.8;">STEIN SCRAP, INC. provides custom material auditing and metallurgical assays for smelters, foundries, and raw material procurement divisions. We verify chemistry, density, and packaging specs to fit your automated furnace loading systems. Contact our engineering team in Los Angeles to set up a supply stream review.</p>
            </div>
            <div>
                <a href="contact.php" class="btn btn-primary btn-block" style="margin-bottom: 1rem;">Request Supply Program Audit</a>
                <p class="text-muted text-center" style="font-size: 0.8rem;">State Certification Registration #3352182.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
