<?php
$pageTitle = 'ERP System CV Makanan Segala Acara — Gamal Musthofa';
include 'includes/header.php';
?>
<style>
  /* ── ERP Detail Page ── */
  .erp-section {
    margin-bottom: 52px;
  }

  .erp-section-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-main);
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .erp-section-title .title-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: var(--accent-gradient);
    display: grid;
    place-items: center;
    font-size: 1rem;
    flex-shrink: 0;
  }

  .erp-section-sub {
    font-size: 0.97rem;
    color: var(--text-muted);
    margin-bottom: 20px;
    line-height: 1.7;
    max-width: 72ch;
  }

  /* Platform pills */
  .platform-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 24px;
  }

  .platform-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 18px;
    border-radius: 999px;
    font-family: var(--font-mono);
    font-size: 0.82rem;
    font-weight: 600;
    border: 1px solid;
  }

  .platform-pill--android {
    background: rgba(61, 220, 132, 0.08);
    border-color: rgba(61, 220, 132, 0.3);
    color: #3ddc84;
  }

  .platform-pill--ios {
    background: rgba(255, 255, 255, 0.06);
    border-color: rgba(255, 255, 255, 0.2);
    color: #e0e0e0;
  }

  .platform-pill--web {
    background: rgba(220, 38, 38, 0.08);
    border-color: rgba(220, 38, 38, 0.3);
    color: var(--accent-primary);
  }

  .platform-pill--api {
    background: rgba(227, 162, 40, 0.08);
    border-color: rgba(227, 162, 40, 0.3);
    color: var(--accent-amber);
  }

  /* Highlight cards row */
  .erp-highlights {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
    gap: 16px;
    margin-bottom: 28px;
  }

  .erp-card {
    padding: 20px 22px;
    background: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    backdrop-filter: blur(12px);
  }

  .erp-card h4 {
    font-family: var(--font-mono);
    font-size: 0.72rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--accent-teal);
    margin-bottom: 10px;
  }

  .erp-card ul {
    display: grid;
    gap: 7px;
  }

  .erp-card li {
    position: relative;
    padding-left: 16px;
    font-size: 0.9rem;
    color: var(--text-muted);
    line-height: 1.5;
  }

  .erp-card li::before {
    content: "▹";
    position: absolute;
    left: 0;
    color: var(--accent-primary);
    font-size: 0.8rem;
  }

  /* Timeline stages */
  .stage-list {
    display: grid;
    gap: 14px;
    margin-bottom: 28px;
  }

  .stage-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px 20px;
    background: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    transition: border-color 0.25s var(--ease-out);
  }

  .stage-item:hover {
    border-color: rgba(220, 38, 38, 0.3);
  }

  .stage-num {
    flex-shrink: 0;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: rgba(220, 38, 38, 0.12);
    border: 1px solid rgba(220, 38, 38, 0.25);
    display: grid;
    place-items: center;
    font-family: var(--font-mono);
    font-size: 0.78rem;
    font-weight: 700;
    color: var(--accent-primary);
  }

  .stage-text {
    font-size: 0.96rem;
    color: var(--text-muted);
    line-height: 1.55;
    padding-top: 4px;
  }

  /* Gallery sections */
  .gallery-label {
    font-family: var(--font-mono);
    font-size: 0.76rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--accent-cyan);
    margin-bottom: 14px;
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

  /* Mobile gallery - portrait orientation */
  .gallery-mobile {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    margin-bottom: 8px;
  }

  .gallery-mobile a {
    display: block;
    border-radius: var(--radius-md);
    overflow: hidden;
    border: 1px solid var(--border-color);
    transition: border-color 0.25s var(--ease-out), transform 0.25s var(--ease-out);
    flex: 0 0 auto;
    width: calc(20% - 12px);
    min-width: 140px;
  }

  .gallery-mobile a:hover {
    border-color: var(--accent-primary);
    transform: translateY(-3px);
  }

  .gallery-mobile img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    display: block;
    transition: transform 0.4s var(--ease-out);
  }

  .gallery-mobile a:hover img {
    transform: scale(1.04);
  }

  /* Web gallery - landscape */
  .gallery-web {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 16px;
  }

  .gallery-web a {
    display: block;
    border-radius: var(--radius-md);
    overflow: hidden;
    border: 1px solid var(--border-color);
    transition: border-color 0.25s var(--ease-out), transform 0.25s var(--ease-out);
  }

  .gallery-web a:hover {
    border-color: var(--accent-primary);
    transform: translateY(-3px);
  }

  .gallery-web img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
    transition: transform 0.4s var(--ease-out);
  }

  .gallery-web a:hover img {
    transform: scale(1.04);
  }

  /* Stats row */
  .erp-stats {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin-bottom: 32px;
  }

  .erp-stat {
    padding: 16px 24px;
    background: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    text-align: center;
    min-width: 120px;
  }

  .erp-stat__num {
    font-family: var(--font-display);
    font-size: 2rem;
    font-weight: 800;
    color: var(--accent-amber);
    line-height: 1;
    margin-bottom: 4px;
  }

  .erp-stat__label {
    font-size: 0.78rem;
    color: var(--text-subtle);
    font-family: var(--font-mono);
  }

  .divider {
    border: none;
    border-top: 1px solid var(--border-color);
    margin: 40px 0;
  }

  @media (max-width: 768px) {
    .gallery-mobile a {
      width: calc(50% - 8px);
    }
    .gallery-mobile img {
      height: 220px;
    }
  }
</style>

<main class="detail-page">
  <div class="container">
    <a class="back-link" href="index.php#work"><?= __('back_to_work') ?></a>

    <!-- HERO HEADER -->
    <header class="detail-hero">
      <div>
        <p class="eyebrow"><span class="eyebrow__num">Case Study</span> Jun 2025 — Nov 2025</p>
        <h1><?= __('erp_page_title') ?></h1>
        <p class="detail-lead">
          <?= __('erp_hero_lead') ?>
        </p>
        <ul class="hero__meta">
          <li><span><?= __('meta_role') ?></span><strong>Fullstack & DevOps</strong></li>
          <li><span><?= __('meta_stack') ?></span><strong>React Native · React · Express.js · MySQL</strong></li>
          <li><span><?= __('meta_team') ?></span><strong>2 Programmer + Stakeholder Tester</strong></li>
          <li><span><?= __('meta_period') ?></span><strong>Jun 2025 — Nov 2025</strong></li>
        </ul>
      </div>
      <div class="detail-hero__img">
        <img src="assets/images/logo/Logobosgil.png" alt="Logo CV Makanan Segala Acara" loading="lazy">
      </div>
    </header>

    <!-- OVERVIEW STATS -->
    <div class="erp-stats reveal">
      <div class="erp-stat">
        <div class="erp-stat__num">3</div>
        <div class="erp-stat__label"><?= __('erp_stat_1') ?></div>
      </div>
      <div class="erp-stat">
        <div class="erp-stat__num">1</div>
        <div class="erp-stat__label"><?= __('erp_stat_2') ?></div>
      </div>
      <div class="erp-stat">
        <div class="erp-stat__num">268</div>
        <div class="erp-stat__label"><?= __('erp_stat_3') ?></div>
      </div>
      <div class="erp-stat">
        <div class="erp-stat__num">2</div>
        <div class="erp-stat__label"><?= __('erp_stat_4') ?></div>
      </div>
      <div class="erp-stat">
        <div class="erp-stat__num">3</div>
        <div class="erp-stat__label"><?= __('erp_stat_5') ?></div>
      </div>
    </div>

    <!-- PLATFORM OVERVIEW -->
    <div class="erp-section reveal">
      <h2 class="erp-section-title">
        <span class="title-icon"><i class="ph ph-layers"></i></span>
        <?= __('erp_platform_title') ?>
      </h2>
      <p class="erp-section-sub">
        <?= __('erp_platform_desc') ?>
      </p>
      <div class="platform-pills">
        <span class="platform-pill platform-pill--android"><i class="ph ph-android-logo"></i> Android (React Native)</span>
        <span class="platform-pill platform-pill--ios"><i class="ph ph-apple-logo"></i> iOS (React Native)</span>
        <span class="platform-pill platform-pill--web"><i class="ph ph-browsers"></i> Website (React)</span>
        <span class="platform-pill platform-pill--api"><i class="ph ph-plugs-connected"></i> 1 API — Express.js</span>
      </div>

      <div class="erp-highlights">
        <div class="erp-card">
          <h4><?= __('erp_hi_mobile_title') ?></h4>
          <ul>
            <li><?= __('erp_hi_mobile_1') ?></li>
            <li><?= __('erp_hi_mobile_2') ?></li>
            <li><?= __('erp_hi_mobile_3') ?></li>
            <li><?= __('erp_hi_mobile_4') ?></li>
          </ul>
        </div>
        <div class="erp-card">
          <h4><?= __('erp_hi_web_title') ?></h4>
          <ul>
            <li><?= __('erp_hi_web_1') ?></li>
            <li><?= __('erp_hi_web_2') ?></li>
            <li><?= __('erp_hi_web_3') ?></li>
            <li><?= __('erp_hi_web_4') ?></li>
          </ul>
        </div>
        <div class="erp-card">
          <h4><?= __('erp_hi_be_title') ?></h4>
          <ul>
            <li><?= __('erp_hi_be_1') ?></li>
            <li><?= __('erp_hi_be_2') ?></li>
            <li><?= __('erp_hi_be_3') ?></li>
            <li><?= __('erp_hi_be_4') ?></li>
          </ul>
        </div>
      </div>
    </div>

    <hr class="divider">

    <!-- TAHAPAN PENGERJAAN -->
    <div class="erp-section reveal">
      <h2 class="erp-section-title">
        <span class="title-icon"><i class="ph ph-clipboard-text"></i></span>
        <?= __('erp_stages_title') ?>
      </h2>
      <p class="erp-section-sub">
        <?= __('erp_stages_desc') ?>
      </p>
      <div class="stage-list">
        <div class="stage-item">
          <span class="stage-num">01</span>
          <span class="stage-text"><strong><?= __('erp_stage_1_title') ?></strong> — <?= __('erp_stage_1_desc') ?></span>
        </div>
        <div class="stage-item">
          <span class="stage-num">02</span>
          <span class="stage-text"><strong><?= __('erp_stage_2_title') ?></strong> — <?= __('erp_stage_2_desc') ?></span>
        </div>
        <div class="stage-item">
          <span class="stage-num">03</span>
          <span class="stage-text"><strong><?= __('erp_stage_3_title') ?></strong> — <?= __('erp_stage_3_desc') ?></span>
        </div>
        <div class="stage-item">
          <span class="stage-num">04</span>
          <span class="stage-text"><strong><?= __('erp_stage_4_title') ?></strong> — <?= __('erp_stage_4_desc') ?></span>
        </div>
        <div class="stage-item">
          <span class="stage-num">05</span>
          <span class="stage-text"><strong><?= __('erp_stage_5_title') ?></strong> — <?= __('erp_stage_5_desc') ?></span>
        </div>
        <div class="stage-item">
          <span class="stage-num">06</span>
          <span class="stage-text"><strong><?= __('erp_stage_6_title') ?></strong> — <?= __('erp_stage_6_desc') ?></span>
        </div>
      </div>
    </div>

    <hr class="divider">

    <!-- PRE-LAUNCH TESTING -->
    <div class="erp-section reveal">
      <h2 class="erp-section-title">
        <span class="title-icon"><i class="ph ph-flask"></i></span>
        <?= __('erp_testing_title') ?>
      </h2>
      <p class="erp-section-sub">
        <?= __('erp_testing_desc') ?>
      </p>
      <div class="erp-highlights">
        <div class="erp-card">
          <h4><?= __('erp_test_scope_title') ?></h4>
          <ul>
            <li><?= __('erp_test_scope_1') ?></li>
            <li><?= __('erp_test_scope_2') ?></li>
            <li><?= __('erp_test_scope_3') ?></li>
            <li><?= __('erp_test_scope_4') ?></li>
          </ul>
        </div>
        <div class="erp-card">
          <h4><?= __('erp_test_target_title') ?></h4>
          <ul>
            <li><?= __('erp_test_target_1') ?></li>
            <li><?= __('erp_test_target_2') ?></li>
            <li><?= __('erp_test_target_3') ?></li>
            <li><?= __('erp_test_target_4') ?></li>
          </ul>
        </div>
      </div>
    </div>

    <hr class="divider">

    <!-- GALLERY MOBILE -->
    <div class="erp-section reveal">
      <h2 class="erp-section-title">
        <span class="title-icon"><i class="ph ph-device-mobile"></i></span>
        <?= __('erp_mobile_title') ?>
      </h2>
      <p class="erp-section-sub"><?= __('erp_mobile_desc') ?></p>
      <p class="gallery-label"><i class="ph ph-camera"></i> <?= __('screenshot_mobile') ?></p>
      <div class="gallery-mobile">
        <a href="assets/images/menus/BACKOFFICE/mobile/DB 1 A.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/BACKOFFICE/mobile/DB 1 A.png" alt="Mobile App Screen 1" loading="lazy">
        </a>
        <a href="assets/images/menus/BACKOFFICE/mobile/DB 2 A.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/BACKOFFICE/mobile/DB 2 A.png" alt="Mobile App Screen 2" loading="lazy">
        </a>
        <a href="assets/images/menus/BACKOFFICE/mobile/DB 3 A.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/BACKOFFICE/mobile/DB 3 A.png" alt="Mobile App Screen 3" loading="lazy">
        </a>
        <a href="assets/images/menus/BACKOFFICE/mobile/DB 4 A.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/BACKOFFICE/mobile/DB 4 A.png" alt="Mobile App Screen 4" loading="lazy">
        </a>
        <a href="assets/images/menus/BACKOFFICE/mobile/DB 5 A.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/BACKOFFICE/mobile/DB 5 A.png" alt="Mobile App Screen 5" loading="lazy">
        </a>
      </div>
    </div>

    <hr class="divider">

    <!-- GALLERY WEBSITE -->
    <div class="erp-section reveal">
      <h2 class="erp-section-title">
        <span class="title-icon"><i class="ph ph-monitor"></i></span>
        <?= __('erp_web_title') ?>
      </h2>
      <p class="erp-section-sub"><?= __('erp_web_desc') ?></p>
      <p class="gallery-label"><i class="ph ph-camera"></i> <?= __('gallery_screenshot') ?></p>
      <div class="gallery-web">
        <a href="assets/images/menus/BACKOFFICE/website/BW 1.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/BACKOFFICE/website/BW 1.png" alt="Website Dashboard Screen 1" loading="lazy">
        </a>
        <a href="assets/images/menus/BACKOFFICE/website/BW 2.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/BACKOFFICE/website/BW 2.png" alt="Website Dashboard Screen 2" loading="lazy">
        </a>
        <a href="assets/images/menus/BACKOFFICE/website/BW 3.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/BACKOFFICE/website/BW 3.png" alt="Website Dashboard Screen 3" loading="lazy">
        </a>
        <a href="assets/images/menus/BACKOFFICE/website/BW 4.png" target="_blank" rel="noopener">
          <img src="assets/images/menus/BACKOFFICE/website/BW 4.png" alt="Website Dashboard Screen 4" loading="lazy">
        </a>
      </div>
    </div>

  </div>
</main>
<?php include 'includes/footer.php'; ?>
