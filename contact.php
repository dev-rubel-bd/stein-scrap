<?php
require_once __DIR__ . '/includes/lang.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Title & Intro -->
<section class="section" style="padding-top: 9rem; padding-bottom: 3rem;">
    <div class="container text-center">
        <div class="section-headline-container">
            <h1 class="section-title"><?= t('contact_headline') ?></h1>
            <p class="section-desc"><?= t('contact_intro') ?></p>
        </div>
    </div>
</section>

<!-- Contact Layout -->
<section class="section" style="padding-top: 0;">
    <div class="container contact-grid">
        <!-- Form Column -->
        <div class="card">
            <h2 class="text-white" style="font-size: 1.8rem; margin-bottom: 1.5rem;"><?= t('nav_get_quote') ?></h2>
            
            <form action="submit-quote.php" method="POST" enctype="multipart/form-data">
                <div class="grid-2" style="gap: 1.5rem;">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="form-name"><?= t('form_name') ?> *</label>
                        <input type="text" id="form-name" name="name" class="form-control" required placeholder="e.g. John Doe / Apex Plumbing">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="form-email"><?= t('form_email') ?> *</label>
                        <input type="email" id="form-email" name="email" class="form-control" required placeholder="name@company.com">
                    </div>
                </div>

                <div class="grid-2" style="gap: 1.5rem; margin-top: 1rem;">
                    <!-- Phone -->
                    <div class="form-group">
                        <label for="form-phone"><?= t('form_phone') ?> *</label>
                        <input type="tel" id="form-phone" name="phone" class="form-control" required placeholder="(310) 555-0199">
                    </div>

                    <!-- Interest -->
                    <div class="form-group">
                        <label for="form-service"><?= t('form_interest') ?></label>
                        <select id="form-service" name="service" class="form-control">
                            <option value="buy_metals"><?= t('opt_buy_metals') ?></option>
                            <option value="buy_aluminum"><?= t('opt_buy_aluminum') ?></option>
                            <option value="buy_paper_plastic"><?= t('opt_buy_paper_plastic') ?></option>
                            <option value="other"><?= t('opt_other') ?></option>
                        </select>
                    </div>
                </div>

                <!-- Material type & Estimated Weight -->
                <div class="form-group" style="margin-top: 1.5rem;">
                    <label for="form-materials"><?= t('form_materials') ?></label>
                    <input type="text" id="form-materials" name="materials" class="form-control" placeholder="e.g. 1000 lbs of 99.99% Copper Wire Scrap">
                </div>

                <!-- Text Description -->
                <div class="form-group" style="margin-top: 1.5rem;">
                    <label for="form-desc"><?= t('form_message') ?></label>
                    <textarea id="form-desc" name="message" class="form-control" rows="4" placeholder="<?= t('form_message_placeholder') ?>"></textarea>
                </div>

                <!-- Drag & Drop File Upload -->
                <div class="form-group" style="margin-top: 1.5rem; margin-bottom: 2rem;">
                    <label><?= t('form_file') ?></label>
                    <div id="file-zone" class="drag-drop-zone">
                        <div class="upload-icon">📁</div>
                        <p class="text-white" style="font-weight: 600; font-size: 0.95rem;"><?= t('form_file_desc') ?></p>
                        <p class="text-muted" style="font-size: 0.8rem; margin-top: 4px;">Supports JPG, PNG, PDF formats</p>
                        <input type="file" id="file-input" name="scrap_photos[]" class="file-input" multiple accept="image/*,application/pdf">
                    </div>
                    <!-- Thumbnails preview wrapper -->
                    <div id="thumbnails" class="preview-thumbnails"></div>
                </div>

                <button type="submit" class="btn btn-primary btn-block" style="font-size: 1.1rem; padding: 1rem;"><?= t('form_submit') ?></button>
            </form>
        </div>

        <!-- Info Column -->
        <div class="contact-card-info" style="display: flex; flex-direction: column; gap: 2.5rem;">
            <!-- Contacts Details -->
            <div>
                <h3 class="text-white" style="font-size: 1.4rem; margin-bottom: 1.2rem;"><?= t('footer_contact') ?></h3>
                <p class="text-muted" style="margin-bottom: 8px;"><strong>Phone Hotline:</strong> <?= $company_phone ?></p>
                <p class="text-muted"><strong>Email:</strong> <?= $company_email ?></p>
            </div>

            <!-- Addresses & Maps -->
            <div>
                <h3 class="text-white" style="font-size: 1.4rem; margin-bottom: 1.2rem;">Location Details</h3>
                
                <!-- Office -->
                <div style="margin-bottom: 2rem;">
                    <h4 class="text-copper" style="font-size: 1.05rem; margin-bottom: 4px;"><?= t('office_title') ?></h4>
                    <p class="text-muted" style="font-size: 0.9rem;">2220 Ave of the Stars UNIT 2602<br>Los Angeles, CA 90067, USA</p>
                    <div class="map-placeholder">
                        <div class="map-placeholder-inner">
                            <p style="font-size: 1.2rem; margin-bottom: 5px;">📍 Century City Map</p>
                            <p style="font-size: 0.75rem;">Ave of the Stars & Constellation Blvd</p>
                        </div>
                    </div>
                </div>

                <!-- Yard -->
                <div>
                    <h4 class="text-gold" style="font-size: 1.05rem; margin-bottom: 4px;"><?= t('yard_title') ?></h4>
                    <p class="text-muted" style="font-size: 0.9rem;">3000 E Pico Blvd<br>Los Angeles, CA 90023, USA</p>
                    <div class="map-placeholder">
                        <div class="map-placeholder-inner">
                            <p style="font-size: 1.2rem; margin-bottom: 5px;">🏗️ East LA Processing Yard</p>
                            <p style="font-size: 0.75rem;">E Pico Blvd near S Soto St</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Operating Hours -->
            <div>
                <h3 class="text-white" style="font-size: 1.4rem; margin-bottom: 1.2rem;"><?= t('footer_hours') ?></h3>
                <ul class="footer-hours-list" style="color: var(--color-text-muted); padding-left: 0;">
                    <li style="padding: 0.4rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);"><?= t('hours_weekday') ?></li>
                    <li style="padding: 0.4rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);"><?= t('hours_sat') ?></li>
                    <li style="padding: 0.4rem 0;"><?= t('hours_sun') ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
