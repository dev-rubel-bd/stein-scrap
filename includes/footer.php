<?php
require_once __DIR__ . '/lang.php';
?>
    <!-- Premium Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="footer-grid">
                <!-- Branding column -->
                <div class="footer-col branding-col">
                    <a href="index.php" class="logo footer-logo">
                        <span class="logo-accent">STEIN</span><span class="logo-main">SCRAP</span>
                        <span class="logo-sub">INC.</span>
                    </a>
                    <p class="footer-text"><?= t('footer_desc') ?></p>
                    <p class="footer-reg"><?= t('footer_reg') ?></p>
                </div>

                <!-- Quick links -->
                <div class="footer-col">
                    <h3 class="footer-title"><?= t('footer_links') ?></h3>
                    <ul class="footer-links-list">
                        <li><a href="index.php"><?= t('nav_home') ?></a></li>
                        <li><a href="products.php"><?= t('nav_products') ?></a></li>
                        <li><a href="services.php"><?= t('nav_services') ?></a></li>
                        <li><a href="about.php"><?= t('nav_about') ?></a></li>
                        <li><a href="contact.php"><?= t('nav_contact') ?></a></li>
                        <li><a href="admin.php">Admin Panel</a></li>
                    </ul>
                </div>

                <!-- Operating Hours -->
                <div class="footer-col">
                    <h3 class="footer-title"><?= t('footer_hours') ?></h3>
                    <ul class="footer-hours-list">
                        <li><?= t('hours_weekday') ?></li>
                        <li><?= t('hours_sat') ?></li>
                        <li><?= t('hours_sun') ?></li>
                    </ul>
                </div>

                <!-- Locations & Contact -->
                <div class="footer-col contact-col">
                    <h3 class="footer-title"><?= t('footer_contact') ?></h3>
                    <div class="contact-item">
                        <strong><?= t('office_title') ?>:</strong>
                        <p>2220 Ave of the Stars UNIT 2602<br>Los Angeles, CA 90067, USA</p>
                    </div>
                    <div class="contact-item">
                        <strong><?= t('yard_title') ?>:</strong>
                        <p>3000 E Pico Blvd<br>Los Angeles, CA 90023, USA</p>
                    </div>
                    <div class="contact-item mt-2">
                        <p><strong>Phone:</strong> <?= $company_phone ?></p>
                        <p><strong>Email:</strong> <?= $company_email ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-container">
                <p class="copyright">&copy; <?= date('Y') ?> STEIN SCRAP, INC. All Rights Reserved. CA Reg #3352182.</p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <span class="legal-divider">|</span>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/<?= $company_whatsapp ?>" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <svg viewBox="0 0 24 24">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.457L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.37 9.864-9.799.002-2.63-1.023-5.101-2.885-6.97C16.528 2.083 14.068.788 11.455.788 6.015.788 1.593 5.16 1.589 10.589c-.002 1.76.474 3.479 1.38 5.02L1.93 21.09l5.064-1.312c1.554.846 3.402 1.294 5.061 1.294h.017zm12.52-6.967c-.073-.109-.271-.174-.567-.323-.298-.149-1.752-.865-2.024-.964-.271-.099-.468-.149-.667.149-.199.299-.77 1.04-.943 1.238-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.521.151-.174.2-.298.299-.497.099-.198.05-.371-.025-.52-.075-.149-.667-1.611-.913-2.203-.239-.574-.48-.496-.667-.506-.172-.01-.371-.01-.568-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.752-.717 2.001-1.412.248-.694.248-1.289.173-1.412z"/>
        </svg>
    </a>

    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>
</html>
