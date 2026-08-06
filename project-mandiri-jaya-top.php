<?php
$pageTitle = 'E-Commerce Alat Konstruksi @ PT Mandiri Jaya Top — Gamal Musthofa';
include 'includes/header.php';
?>
<style>
  /* ── Mandiri Jaya Top Detail Page Extras ── */
  .mjt-section {
    margin-bottom: 48px;
  }
  .mjt-section h2 {
    font-size: 1.6rem;
    margin-bottom: 16px;
    color: var(--text-main);
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .mjt-lead {
    font-size: 1rem;
    color: var(--text-muted);
    line-height: 1.7;
    max-width: 75ch;
    margin-bottom: 24px;
  }
  .mjt-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-bottom: 32px;
  }
  .mjt-card {
    padding: 24px;
    background: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
  }
  .mjt-card h3 {
    font-family: var(--font-mono);
    font-size: 0.85rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--accent-teal);
    margin-bottom: 12px;
  }
  .mjt-card ul {
    display: grid;
    gap: 10px;
  }
  .mjt-card li {
    position: relative;
    padding-left: 20px;
    font-size: 0.95rem;
    color: var(--text-muted);
    line-height: 1.5;
  }
  .mjt-card li::before {
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
  .mjt-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
  }
  .mjt-gallery a {
    display: block;
    border-radius: var(--radius-md);
    overflow: hidden;
    border: 1px solid var(--border-color);
    transition: all 0.3s var(--ease-out);
  }
  .mjt-gallery a:hover {
    border-color: var(--accent-primary);
    transform: translateY(-4px);
  }
  .mjt-gallery img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s var(--ease-out);
  }
  .mjt-gallery a:hover img {
    transform: scale(1.05);
  }
</style>

<main class="detail-page">
  <div class="container">
    <a class="back-link" href="index.php#work"><?= __('back_to_work') ?></a>

    <header class="detail-hero">
      <div>
        <p class="eyebrow"><span class="eyebrow__num">Kerja Praktek</span> Jan 2022 — Mei 2022</p>
        <h1><?= __('mjt_page_title') ?></h1>
        <p class="detail-lead">
          <?= __('mjt_hero_lead') ?>
        </p>
        <ul class="hero__meta">
          <li><span><?= __('meta_role') ?></span><strong>Fullstack Developer</strong></li>
          <li><span><?= __('meta_stack') ?></span><strong>CodeIgniter · MySQL</strong></li>
          <li><span><?= __('meta_team') ?></span><strong>3 Programmer (Kerja Praktek)</strong></li>
          <li><span><?= __('meta_period') ?></span><strong>Jan 2022 — Mei 2022</strong></li>
        </ul>
      </div>
      <div class="detail-hero__img">
        <img src="assets/images/logo/logoptmandirijayatop.png" alt="Logo PT Mandiri Jaya Top" loading="lazy">
      </div>
    </header>

    <section class="mjt-section reveal">
      <h2>🎯 <?= __('mjt_goals_title') ?></h2>
      <p class="mjt-lead">
        <?= __('mjt_goals_desc') ?>
      </p>
      
      <div class="mjt-cards">
        <article class="mjt-card">
          <h3><?= __('mjt_system') ?></h3>
          <ul>
            <li><?= __('mjt_sys_1') ?></li>
            <li><?= __('mjt_sys_2') ?></li>
            <li><?= __('mjt_sys_3') ?></li>
          </ul>
        </article>
        <article class="mjt-card">
          <h3><?= __('mjt_collab') ?></h3>
          <ul>
            <li><?= __('mjt_col_1') ?></li>
            <li><?= __('mjt_col_2') ?></li>
            <li><?= __('mjt_col_3') ?></li>
          </ul>
        </article>
      </div>
    </section>

    <section class="mjt-section reveal">
      <p class="gallery-label">📸 <?= __('gallery_label') ?></p>
      <div class="mjt-gallery">
        <a href="assets/images/menus/ptmandirijayatop.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/ptmandirijayatop.png" alt="Mandiri Jaya Top Screenshot 1" loading="lazy">
        </a>
        <a href="assets/images/menus/ptmandirijayatop2.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/ptmandirijayatop2.png" alt="Mandiri Jaya Top Screenshot 2" loading="lazy">
        </a>
        <a href="assets/images/menus/ptmandirijayatop3.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/ptmandirijayatop3.png" alt="Mandiri Jaya Top Screenshot 3" loading="lazy">
        </a>
        <a href="assets/images/menus/ptmandirijayatop4.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/ptmandirijayatop4.png" alt="Mandiri Jaya Top Screenshot 4" loading="lazy">
        </a>
      </div>
    </section>

  </div>
</main>
<?php include 'includes/footer.php'; ?>
