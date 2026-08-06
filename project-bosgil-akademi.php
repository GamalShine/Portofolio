<?php
$pageTitle = 'Web & SEO @ Bosgil Akademi — Gamal Musthofa';
include 'includes/header.php';
?>
<style>
  /* ── Akademi Detail Page Extras ── */
  .akademi-section {
    margin-bottom: 48px;
  }
  .akademi-section h2 {
    font-size: 1.6rem;
    margin-bottom: 16px;
    color: var(--text-main);
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .akademi-lead {
    font-size: 1rem;
    color: var(--text-muted);
    line-height: 1.7;
    max-width: 75ch;
    margin-bottom: 24px;
  }
  .akademi-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-bottom: 32px;
  }
  .akademi-card {
    padding: 24px;
    background: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
  }
  .akademi-card h3 {
    font-family: var(--font-mono);
    font-size: 0.85rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--accent-teal);
    margin-bottom: 12px;
  }
  .akademi-card ul {
    display: grid;
    gap: 10px;
  }
  .akademi-card li {
    position: relative;
    padding-left: 20px;
    font-size: 0.95rem;
    color: var(--text-muted);
    line-height: 1.5;
  }
  .akademi-card li::before {
    content: "▹";
    position: absolute;
    left: 0;
    color: var(--accent-primary);
  }
  
  .gallery-label {
    font-family: var(--font-mono);
    font-size: 0.76rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--accent-cyan);
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .gallery-label::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--border-color);
  }
  .akademi-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
  }
  .akademi-gallery a {
    display: block;
    border-radius: var(--radius-md);
    overflow: hidden;
    border: 1px solid var(--border-color);
    transition: all 0.3s var(--ease-out);
  }
  .akademi-gallery a:hover {
    border-color: var(--accent-primary);
    transform: translateY(-4px);
  }
  .akademi-gallery img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s var(--ease-out);
  }
  .akademi-gallery a:hover img {
    transform: scale(1.05);
  }
</style>

<main class="detail-page">
  <div class="container">
    <a class="back-link" href="index.php#work"><?= __('back_to_work') ?></a>

    <header class="detail-hero">
      <div>
        <p class="eyebrow"><span class="eyebrow__num">Case Study</span> Sep 2023 — Des 2023</p>
        <h1><?= __('akademi_page_title') ?></h1>
        <p class="detail-lead">
          <?= __('akademi_hero_lead') ?>
        </p>
        <ul class="hero__meta">
          <li><span><?= __('meta_role') ?></span><strong>Web Developer & SEO</strong></li>
          <li><span><?= __('meta_stack') ?></span><strong>WordPress · SEO Optimization</strong></li>
          <li><span><?= __('meta_team') ?></span><strong>2 Programmer</strong></li>
          <li><span><?= __('meta_period') ?></span><strong>Sep 2023 — Des 2023</strong></li>
        </ul>
      </div>
      <div class="detail-hero__img">
        <img src="assets/images/logo/Logobosgil.png" alt="Logo Bosgil Akademi" loading="lazy">
      </div>
    </header>

    <section class="akademi-section reveal">
      <h2>🎯 <?= __('akademi_goals_title') ?></h2>
      <p class="akademi-lead">
        <?= __('akademi_goals_desc') ?>
      </p>
      
      <div class="akademi-cards">
        <article class="akademi-card">
          <h3><?= __('akademi_dev_focus') ?></h3>
          <ul>
            <li><?= __('akademi_dev_1') ?></li>
            <li><?= __('akademi_dev_2') ?></li>
            <li><?= __('akademi_dev_3') ?></li>
          </ul>
        </article>
        <article class="akademi-card">
          <h3><?= __('akademi_seo') ?></h3>
          <ul>
            <li><?= __('akademi_seo_1') ?></li>
            <li><?= __('akademi_seo_2') ?></li>
            <li><?= __('akademi_seo_3') ?></li>
          </ul>
        </article>
      </div>
    </section>

    <section class="akademi-section reveal">
      <p class="gallery-label">📸 <?= __('gallery_label') ?></p>
      <div class="akademi-gallery">
        <a href="assets/images/menus/bosgilakademi/BA 1.jpg" target="_blank" rel="noopener">
          <img src="assets/images/menus/bosgilakademi/BA 1.jpg" alt="Bosgil Akademi Web 1" loading="lazy">
        </a>
        <a href="assets/images/menus/bosgilakademi/BA 2.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/bosgilakademi/BA 2.png" alt="Bosgil Akademi Web 2" loading="lazy">
        </a>
        <a href="assets/images/menus/bosgilakademi/BA 3.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/bosgilakademi/BA 3.png" alt="Bosgil Akademi Web 3" loading="lazy">
        </a>
        <a href="assets/images/menus/bosgilakademi/BA 4.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/bosgilakademi/BA 4.png" alt="Bosgil Akademi Web 4" loading="lazy">
        </a>
        <a href="assets/images/menus/bosgilakademi/BA 5.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/bosgilakademi/BA 5.png" alt="Bosgil Akademi Web 5" loading="lazy">
        </a>
      </div>
    </section>

  </div>
</main>
<?php include 'includes/footer.php'; ?>
