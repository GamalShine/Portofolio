<?php
$pageTitle = 'Order Management System @ CV Makanan Segala Acara — Gamal Musthofa';
include 'includes/header.php';
?>
<main class="detail-page">
  <div class="container">
    <a class="back-link" href="index.php#work"><?= __('back_to_work') ?></a>

    <header class="detail-hero">
      <div>
        <p class="eyebrow"><span class="eyebrow__num">Case Study</span> Mar 2024 — Sep 2024</p>
        <h1><?= __('order_page_title') ?></h1>
        <p class="detail-lead"><?= __('order_hero_lead') ?></p>
        <ul class="hero__meta">
          <li><span><?= __('meta_role') ?></span><strong>Mobile Developer</strong></li>
          <li><span><?= __('meta_stack') ?></span><strong>React Native · Android · MySQL</strong></li>
          <li><span><?= __('meta_period') ?></span><strong>Mar 2024 — Sep 2024</strong></li>
        </ul>
      </div>
      <div class="detail-hero__img">
        <img src="assets/images/logo/Logobosgil.png" alt="Logo CV Makanan Segala Acara" loading="lazy">
      </div>
    </header>

    <section class="detail-section">
      <h2><?= __('order_goals_title') ?></h2>
      <p><?= __('order_goals_desc') ?></p>
      <div class="detail-cards">
        <article class="detail-card">
          <h3><?= __('order_objectives') ?></h3>
          <ul>
            <li><?= __('order_obj_1') ?></li>
            <li><?= __('order_obj_2') ?></li>
            <li><?= __('order_obj_3') ?></li>
          </ul>
        </article>
        <article class="detail-card">
          <h3><?= __('order_outcomes') ?></h3>
          <ul>
            <li><?= __('order_out_1') ?></li>
            <li><?= __('order_out_2') ?></li>
            <li><?= __('order_out_3') ?></li>
          </ul>
        </article>
        <article class="detail-card">
          <h3><?= __('order_highlights') ?></h3>
          <ul>
            <li><?= __('order_hi_1') ?></li>
            <li><?= __('order_hi_2') ?></li>
            <li><?= __('order_hi_3') ?></li>
          </ul>
        </article>
      </div>
    </section>

    <section class="detail-section">
      <h2><?= __('order_screens_title') ?></h2>
      <div class="detail-gallery">
        <img src="assets/images/menus/pesanbosgil.png" alt="Order Management screen 1" loading="lazy">
        <img src="assets/images/menus/pesanbosgil2.png" alt="Order Management screen 2" loading="lazy">
        <img src="assets/images/menus/pesanbosgil3.png" alt="Order Management screen 3" loading="lazy">
      </div>
    </section>
  </div>
</main>
<?php include 'includes/footer.php'; ?>
