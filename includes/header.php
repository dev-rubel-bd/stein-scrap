<?php
require_once __DIR__ . '/lang.php';
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="<?= get_lang() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= t('meta_title') ?></title>
    <meta name="description" content="<?= t('meta_desc') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Premium Header -->
    <header class="header">
        <div class="header-container">
            <a href="index.php" class="logo">
                <span class="logo-accent">STEIN</span><span class="logo-main">SCRAP</span>
                <span class="logo-sub">INC.</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="nav-menu">
                <a href="index.php" class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?>"><?= t('nav_home') ?></a>
                <a href="products.php" class="nav-link <?= $current_page == 'products.php' ? 'active' : '' ?>"><?= t('nav_products') ?></a>
                <a href="services.php" class="nav-link <?= $current_page == 'services.php' ? 'active' : '' ?>"><?= t('nav_services') ?></a>
                <a href="about.php" class="nav-link <?= $current_page == 'about.php' ? 'active' : '' ?>"><?= t('nav_about') ?></a>
                <a href="contact.php" class="nav-link <?= $current_page == 'contact.php' ? 'active' : '' ?>"><?= t('nav_contact') ?></a>
            </nav>

            <div class="header-actions">
                <!-- Language Toggler -->
                <div class="lang-selector">
                    <a href="?lang=en" class="lang-btn <?= get_lang() == 'en' ? 'active' : '' ?>">EN</a>
                    <span class="lang-divider">|</span>
                    <a href="?lang=es" class="lang-btn <?= get_lang() == 'es' ? 'active' : '' ?>">ES</a>
                </div>

                <!-- Call to Action -->
                <a href="contact.php" class="btn btn-primary btn-nav"><?= t('nav_get_quote') ?></a>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-btn" aria-label="Toggle Menu">
                    <span class="hamburger-bar"></span>
                    <span class="hamburger-bar"></span>
                    <span class="hamburger-bar"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer -->
    <div class="mobile-drawer">
        <div class="mobile-drawer-close">&times;</div>
        <nav class="mobile-nav">
            <a href="index.php" class="mobile-link <?= $current_page == 'index.php' ? 'active' : '' ?>"><?= t('nav_home') ?></a>
            <a href="products.php" class="mobile-link <?= $current_page == 'products.php' ? 'active' : '' ?>"><?= t('nav_products') ?></a>
            <a href="services.php" class="mobile-link <?= $current_page == 'services.php' ? 'active' : '' ?>"><?= t('nav_services') ?></a>
            <a href="about.php" class="mobile-link <?= $current_page == 'about.php' ? 'active' : '' ?>"><?= t('nav_about') ?></a>
            <a href="contact.php" class="mobile-link <?= $current_page == 'contact.php' ? 'active' : '' ?>"><?= t('nav_contact') ?></a>
        </nav>
        <div class="mobile-drawer-footer">
            <div class="lang-selector mobile-lang">
                <a href="?lang=en" class="lang-btn <?= get_lang() == 'en' ? 'active' : '' ?>">EN</a>
                <span class="lang-divider">|</span>
                <a href="?lang=es" class="lang-btn <?= get_lang() == 'es' ? 'active' : '' ?>">ES</a>
            </div>
            <a href="contact.php" class="btn btn-primary btn-block"><?= t('nav_get_quote') ?></a>
        </div>
    </div>
    <div class="mobile-drawer-overlay"></div>
