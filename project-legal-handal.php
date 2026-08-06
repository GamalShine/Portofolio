<?php
$pageTitle = 'Company Site @ Legal Handal — Gamal Musthofa';
include 'includes/header.php';
?>
<style>
  /* ── Legal Handal Detail Page Extras ── */
  .legal-section {
    margin-bottom: 48px;
  }
  .legal-section h2 {
    font-size: 1.6rem;
    margin-bottom: 16px;
    color: var(--text-main);
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .legal-lead {
    font-size: 1rem;
    color: var(--text-muted);
    line-height: 1.7;
    max-width: 75ch;
    margin-bottom: 24px;
  }
  .legal-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-bottom: 32px;
  }
  .legal-card {
    padding: 24px;
    background: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
  }
  .legal-card h3 {
    font-family: var(--font-mono);
    font-size: 0.85rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--accent-teal);
    margin-bottom: 12px;
  }
  .legal-card ul {
    display: grid;
    gap: 10px;
  }
  .legal-card li {
    position: relative;
    padding-left: 20px;
    font-size: 0.95rem;
    color: var(--text-muted);
    line-height: 1.5;
  }
  .legal-card li::before {
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
  .legal-gallery {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
    max-width: 900px;
  }
  .legal-gallery a {
    display: block;
    border-radius: var(--radius-md);
    overflow: hidden;
    border: 1px solid var(--border-color);
    transition: all 0.3s var(--ease-out);
  }
  .legal-gallery a:hover {
    border-color: var(--accent-primary);
    transform: translateY(-4px);
  }
  .legal-gallery img {
    width: 100%;
    height: auto;
    object-fit: cover;
    display: block;
    transition: transform 0.5s var(--ease-out);
  }
  .legal-gallery a:hover img {
    transform: scale(1.02);
  }
</style>

<main class="detail-page">
  <div class="container">
    <a class="back-link" href="index.php#work"><?= __('back_to_work') ?></a>

    <header class="detail-hero">
      <div>
        <p class="eyebrow"><span class="eyebrow__num">Case Study</span> Mei 2022 — Jul 2022</p>
        <h1><?= __('legal_page_title') ?></h1>
        <p class="detail-lead">
          <?= __('legal_hero_lead') ?>
        </p>
        <ul class="hero__meta">
          <li><span><?= __('meta_role') ?></span><strong>Web Developer</strong></li>
          <li><span><?= __('meta_stack') ?></span><strong>WordPress</strong></li>
          <li><span><?= __('meta_focus') ?></span><strong>Company Profile · UI/UX</strong></li>
          <li><span><?= __('meta_period') ?></span><strong>Mei 2022 — Jul 2022</strong></li>
        </ul>
      </div>
      <div class="detail-hero__img">
        <img src="assets/images/logo/logolegalhandal.png" alt="Logo Legal Handal" loading="lazy">
      </div>
    </header>

    <section class="legal-section reveal">
      <h2>🎯 <?= __('legal_goals_title') ?></h2>
      <p class="legal-lead">
        <?= __('legal_goals_desc') ?>
      </p>
      
      <div class="legal-cards">
        <article class="legal-card">
          <h3><?= __('legal_objectives') ?></h3>
          <ul>
            <li><?= __('legal_obj_1') ?></li>
            <li><?= __('legal_obj_2') ?></li>
            <li><?= __('legal_obj_3') ?></li>
          </ul>
        </article>
        <article class="legal-card">
          <h3><?= __('legal_outcomes') ?></h3>
          <ul>
            <li><?= __('legal_out_1') ?></li>
            <li><?= __('legal_out_2') ?></li>
            <li><?= __('legal_out_3') ?></li>
          </ul>
        </article>
      </div>
    </section>

    <section class="legal-section reveal">
      <p class="gallery-label">📸 <?= __('gallery_label') ?></p>
      <div class="legal-gallery">
        <a href="assets/images/menus/legalhandal/image.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/legalhandal/image.png" alt="Legal Handal Website Screenshot" loading="lazy">
        </a>
      </div>
    </section>
  </div>
</main>
<?php include 'includes/footer.php'; ?>
