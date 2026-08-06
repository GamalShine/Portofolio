<?php
require_once __DIR__ . '/i18n.php';
$pageTitle = $pageTitle ?? 'Gamal Musthofa — Fullstack & Mobile Engineer';
$root = $root ?? '';
?><!DOCTYPE html>
<html lang="<?= $current_lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="<?= $root ?>assets/css/styles.css?v=<?= time() ?>">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="icon" type="image/svg+xml" href="<?= $root ?>assets/favicon.svg?v=4">
  <meta name="theme-color" content="#f8fafc" id="theme-color-meta">
  <script>
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.setAttribute('data-theme', 'dark');
      document.getElementById('theme-color-meta').setAttribute('content', '#090b10');
    }
  </script>
</head>
<body>
  <div class="page-bg" aria-hidden="true"></div>
  <header class="site-header">
    <div class="container header__inner">
      <a class="logo" href="<?= $root ?>index.php#home">GM<span>.</span></a>
      <nav class="site-nav" id="primary-nav">
        <a href="<?= $root ?>index.php#work"><?= __('nav_work') ?></a>
        <a href="<?= $root ?>index.php#about"><?= __('nav_about') ?></a>
        <a href="<?= $root ?>index.php#experience"><?= __('nav_experience') ?></a>
        <a class="nav-cta" href="<?= $root ?>index.php#contact"><?= __('nav_contact') ?></a>
      </nav>
      <div class="header-actions">
        <?php
          $switch_to = $current_lang === 'id' ? 'en' : 'id';
          $switch_label = $current_lang === 'id' ? 'EN' : 'ID';
        ?>
        <a href="?lang=<?= $switch_to ?>" class="lang-toggle" title="Switch to <?= strtoupper($switch_to) ?>">
          <?= $switch_label ?>
        </a>
        <button class="theme-toggle" id="theme-toggle" aria-label="Toggle dark mode">
          <i class="ph ph-sun sun-icon" style="display: none;"></i>
          <i class="ph ph-moon moon-icon"></i>
        </button>
        <button class="nav-toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Open menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>
