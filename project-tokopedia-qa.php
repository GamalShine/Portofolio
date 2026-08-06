<?php
$pageTitle = 'QA Tester @ Tokopedia — Gamal Musthofa';
include 'includes/header.php';
?>
<main class="detail-page">
  <div class="container">
    <a class="back-link" href="index.php#experience"><?= __('back_to_exp') ?></a>

    <header class="detail-hero">
      <div>
        <p class="section__label">Case Study</p>
        <h1><?= __('qa_page_title') ?></h1>
        <p class="detail-lead"><?= __('qa_hero_lead') ?></p>
        <ul class="hero__meta">
          <li><span><?= __('meta_role') ?></span><strong>QA Tester</strong></li>
          <li><span><?= __('meta_focus') ?></span><strong>Manual Testing</strong></li>
          <li><span><?= __('meta_period') ?></span><strong>November — Desember 2023</strong></li>
        </ul>
      </div>
      <div class="detail-hero__img">
        <img src="assets/images/logo/logotokped.png" alt="Logo Tokopedia" loading="lazy">
      </div>
    </header>

    <section class="detail-section">
      <h2><?= __('qa_section_title') ?></h2>
      <p><?= __('qa_section_desc') ?></p>
      <div class="detail-embed">
        <iframe title="Tokopedia QA Test Cases" src="https://docs.google.com/spreadsheets/u/1/d/1pk3AaxkNIIRF9dND1rqqvQDO7VJP6iXB/htmlview"></iframe>
      </div>
      <p class="detail-note"><?= __('qa_note') ?></p>
    </section>
  </div>
</main>
<?php include 'includes/footer.php'; ?>
