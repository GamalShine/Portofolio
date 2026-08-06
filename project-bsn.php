<?php
$pageTitle = 'Information System @ BSN — Gamal Musthofa';
include 'includes/header.php';
?>
<style>
  /* ── BSN Detail Page Extras ── */
  .bsn-projects {
    display: grid;
    gap: 56px;
    margin-top: 16px;
  }

  .bsn-project {
    border-radius: var(--radius-lg);
    overflow: hidden;
    border: 1px solid var(--border-color);
    background: var(--bg-card);
    backdrop-filter: blur(16px);
  }

  .bsn-project__header {
    padding: 32px 36px 24px;
    border-bottom: 1px solid var(--border-color);
    display: flex;
    align-items: flex-start;
    gap: 20px;
  }

  .bsn-project__num {
    flex-shrink: 0;
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: var(--accent-gradient);
    display: grid;
    place-items: center;
    font-family: var(--font-display);
    font-size: 1rem;
    font-weight: 800;
    color: #fff;
    margin-top: 4px;
  }

  .bsn-project__title-wrap {
    flex: 1;
  }

  .bsn-project__title-wrap h2 {
    font-size: 1.6rem;
    margin-bottom: 8px;
    color: var(--text-main);
  }

  .bsn-project__desc {
    font-size: 1rem;
    color: var(--text-muted);
    line-height: 1.7;
    max-width: 72ch;
  }

  .bsn-project__meta {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding: 20px 36px;
    border-bottom: 1px solid var(--border-color);
    background: rgba(255,255,255,0.02);
  }

  .bsn-meta-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    font-family: var(--font-mono);
    font-size: 0.78rem;
    font-weight: 500;
    color: var(--accent-cyan);
    background: rgba(57, 197, 207, 0.08);
    border: 1px solid rgba(57, 197, 207, 0.2);
    border-radius: 999px;
  }

  .bsn-project__body {
    padding: 28px 36px 36px;
  }

  .bsn-highlights {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
    margin-bottom: 28px;
  }

  .bsn-highlight-item {
    padding: 16px 20px;
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
  }

  .bsn-highlight-item h4 {
    font-family: var(--font-mono);
    font-size: 0.72rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--accent-teal);
    margin-bottom: 8px;
  }

  .bsn-highlight-item ul {
    display: grid;
    gap: 6px;
  }

  .bsn-highlight-item li {
    position: relative;
    padding-left: 16px;
    font-size: 0.9rem;
    color: var(--text-muted);
  }

  .bsn-highlight-item li::before {
    content: "▹";
    position: absolute;
    left: 0;
    color: var(--accent-primary);
    font-size: 0.8rem;
  }

  .gallery-label {
    font-family: var(--font-mono);
    font-size: 0.76rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--accent-cyan);
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .gallery-label::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--border-color);
  }

  .bsn-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 16px;
  }

  .bsn-gallery a {
    display: block;
    border-radius: var(--radius-md);
    overflow: hidden;
    border: 1px solid var(--border-color);
    transition: border-color 0.25s var(--ease-out), transform 0.25s var(--ease-out);
  }

  .bsn-gallery a:hover {
    border-color: var(--accent-primary);
    transform: translateY(-3px);
  }

  .bsn-gallery img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
    transition: transform 0.4s var(--ease-out);
  }

  .bsn-gallery a:hover img {
    transform: scale(1.04);
  }

  .no-image-note {
    padding: 24px;
    background: rgba(255,255,255,0.02);
    border: 1px dashed var(--border-color);
    border-radius: var(--radius-md);
    text-align: center;
    font-family: var(--font-mono);
    font-size: 0.85rem;
    color: var(--text-subtle);
  }

  .sparta-link-wrap {
    margin-bottom: 24px;
  }

  .sparta-doc-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 24px;
    background: rgba(220, 38, 38, 0.08);
    border: 1px solid rgba(220, 38, 38, 0.3);
    border-radius: var(--radius-md);
    font-family: var(--font-display);
    font-size: 0.92rem;
    font-weight: 600;
    color: var(--accent-primary);
    transition: all 0.25s var(--ease-out);
  }

  .sparta-doc-link:hover {
    background: rgba(220, 38, 38, 0.15);
    border-color: var(--accent-primary);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(220, 38, 38, 0.2);
  }

  .sparta-doc-link i {
    width: 20px;
    height: 20px;
    font-size: 20px;
  }

  .team-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 12px;
    padding: 8px 16px;
    background: rgba(227, 162, 40, 0.08);
    border: 1px solid rgba(227, 162, 40, 0.25);
    border-radius: 999px;
    font-family: var(--font-mono);
    font-size: 0.8rem;
    color: var(--accent-amber);
  }

  @media (max-width: 768px) {
    .bsn-project__header,
    .bsn-project__body,
    .bsn-project__meta {
      padding-left: 20px;
      padding-right: 20px;
    }
    .bsn-gallery {
      grid-template-columns: 1fr;
    }
  }
</style>

<main class="detail-page">
  <div class="container">
    <a class="back-link" href="index.php#work"><?= __('back_to_work') ?></a>

    <!-- HERO HEADER -->
    <header class="detail-hero">
      <div>
        <p class="eyebrow"><span class="eyebrow__num">Case Study</span> Nov 2025 — Mei 2026</p>
        <h1><?= __('bsn_page_title') ?></h1>
        <p class="detail-lead">
          <?= __('bsn_hero_lead') ?>
        </p>
        <ul class="hero__meta">
          <li><span><?= __('meta_role') ?></span><strong>Fullstack Developer</strong></li>
          <li><span><?= __('meta_stack') ?></span><strong>CodeIgniter · Laravel · Next.js · PostgreSQL</strong></li>
          <li><span><?= __('meta_period') ?></span><strong>Nov 2025 — Mei 2026</strong></li>
        </ul>
      </div>
      <div class="detail-hero__img">
        <img src="assets/images/logo/logobsn.png" alt="Logo BSN" loading="lazy">
      </div>
    </header>

    <!-- SUB-PROJECTS -->
    <div class="bsn-projects">

      <!-- 1. JDIH -->
      <div class="bsn-project reveal">
        <div class="bsn-project__header">
          <div class="bsn-project__num">01</div>
          <div class="bsn-project__title-wrap">
            <h2><?= __('bsn_jdih_title') ?></h2>
            <p class="bsn-project__desc">
              <?= __('bsn_jdih_desc') ?>
            </p>
          </div>
        </div>
        <div class="bsn-project__meta">
          <span class="bsn-meta-tag"><i class="ph ph-gear"></i> CodeIgniter</span>
          <span class="bsn-meta-tag"><i class="ph ph-database"></i> PostgreSQL</span>
          <span class="bsn-meta-tag"><i class="ph ph-wrench"></i> Bug Fixing</span>
          <span class="bsn-meta-tag"><i class="ph ph-package"></i> Modul Baru</span>
          <span class="bsn-meta-tag"><i class="ph ph-clipboard-text"></i> Fitur Custom</span>
        </div>
        <div class="bsn-project__body">
          <div class="bsn-highlights">
            <div class="bsn-highlight-item">
              <h4><?= __('bsn_jdih_work') ?></h4>
              <ul>
                <li><?= __('bsn_jdih_work_1') ?></li>
                <li><?= __('bsn_jdih_work_2') ?></li>
                <li><?= __('bsn_jdih_work_3') ?></li>
                <li><?= __('bsn_jdih_work_4') ?></li>
              </ul>
            </div>
            <div class="bsn-highlight-item">
              <h4><?= __('bsn_tech_stack') ?></h4>
              <ul>
                <li><?= __('bsn_jdih_tech_1') ?></li>
                <li><?= __('bsn_jdih_tech_2') ?></li>
                <li><?= __('bsn_jdih_tech_3') ?></li>
                <li><?= __('bsn_jdih_tech_4') ?></li>
              </ul>
            </div>
          </div>

          <p class="gallery-label"><i class="ph ph-camera"></i> <?= __('gallery_screenshot') ?></p>
          <div class="bsn-gallery">
            <a href="assets/images/menus/JDIH/JDIH 1.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/JDIH/JDIH 1.png" alt="JDIH Screenshot 1" loading="lazy">
            </a>
            <a href="assets/images/menus/JDIH/JDIH 2.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/JDIH/JDIH 2.png" alt="JDIH Screenshot 2" loading="lazy">
            </a>
            <a href="assets/images/menus/JDIH/JDIH 3.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/JDIH/JDIH 3.png" alt="JDIH Screenshot 3" loading="lazy">
            </a>
            <a href="assets/images/menus/JDIH/JDIH 4.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/JDIH/JDIH 4.png" alt="JDIH Screenshot 4" loading="lazy">
            </a>
          </div>
        </div>
      </div>

      <!-- 2. Pengelolaan Data SNI -->
      <div class="bsn-project reveal">
        <div class="bsn-project__header">
          <div class="bsn-project__num">02</div>
          <div class="bsn-project__title-wrap">
            <h2><?= __('bsn_sni_title') ?></h2>
            <p class="bsn-project__desc">
              <?= __('bsn_sni_desc') ?>
            </p>
          </div>
        </div>
        <div class="bsn-project__meta">
          <span class="bsn-meta-tag"><i class="ph ph-lightning"></i> Next.js / React</span>
          <span class="bsn-meta-tag"><i class="ph ph-cube"></i> Laravel</span>
          <span class="bsn-meta-tag"><i class="ph ph-database"></i> PostgreSQL</span>
          <span class="bsn-meta-tag"><i class="ph ph-link"></i> API Integration</span>
          <span class="bsn-meta-tag"><i class="ph ph-file-pdf"></i> PDF Viewer</span>
          <span class="bsn-meta-tag"><i class="ph ph-archive-box"></i> CRUD System</span>
        </div>
        <div class="bsn-project__body">
          <div class="bsn-highlights">
            <div class="bsn-highlight-item">
              <h4><?= __('bsn_sni_features') ?></h4>
              <ul>
                <li><?= __('bsn_sni_feat_1') ?></li>
                <li><?= __('bsn_sni_feat_2') ?></li>
                <li><?= __('bsn_sni_feat_3') ?></li>
                <li><?= __('bsn_sni_feat_4') ?></li>
              </ul>
            </div>
            <div class="bsn-highlight-item">
              <h4><?= __('bsn_architecture') ?></h4>
              <ul>
                <li><?= __('bsn_sni_arch_1') ?></li>
                <li><?= __('bsn_sni_arch_2') ?></li>
                <li><?= __('bsn_sni_arch_3') ?></li>
                <li><?= __('bsn_sni_arch_4') ?></li>
              </ul>
            </div>
          </div>

          <div class="no-image-note">
            <i class="ph ph-camera"></i> <?= __('no_screenshot') ?>
          </div>
        </div>
      </div>

      <!-- 3. Back Office -->
      <div class="bsn-project reveal">
        <div class="bsn-project__header">
          <div class="bsn-project__num">03</div>
          <div class="bsn-project__title-wrap">
            <h2><?= __('bsn_bo_title') ?></h2>
            <p class="bsn-project__desc">
              <?= __('bsn_bo_desc') ?>
            </p>
          </div>
        </div>
        <div class="bsn-project__meta">
          <span class="bsn-meta-tag"><i class="ph ph-cube"></i> Laravel</span>
          <span class="bsn-meta-tag"><i class="ph ph-database"></i> PostgreSQL</span>
          <span class="bsn-meta-tag"><i class="ph ph-link"></i> API Integration</span>
          <span class="bsn-meta-tag"><i class="ph ph-buildings"></i> Internal System</span>
          <span class="bsn-meta-tag"><i class="ph ph-chart-bar"></i> Business Management</span>
        </div>
        <div class="bsn-project__body">
          <div class="bsn-highlights">
            <div class="bsn-highlight-item">
              <h4><?= __('bsn_bo_scope') ?></h4>
              <ul>
                <li><?= __('bsn_bo_scope_1') ?></li>
                <li><?= __('bsn_bo_scope_2') ?></li>
                <li><?= __('bsn_bo_scope_3') ?></li>
                <li><?= __('bsn_bo_scope_4') ?></li>
              </ul>
            </div>
            <div class="bsn-highlight-item">
              <h4><?= __('bsn_tech_stack') ?></h4>
              <ul>
                <li><?= __('bsn_bo_tech_1') ?></li>
                <li><?= __('bsn_bo_tech_2') ?></li>
                <li><?= __('bsn_bo_tech_3') ?></li>
                <li><?= __('bsn_bo_tech_4') ?></li>
              </ul>
            </div>
          </div>

          <p class="gallery-label"><i class="ph ph-camera"></i> <?= __('gallery_screenshot') ?></p>
          <div class="bsn-gallery">
            <a href="assets/images/menus/BACKOFFICE/BO 1.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/BACKOFFICE/BO 1.png" alt="Back Office Screenshot 1" loading="lazy">
            </a>
            <a href="assets/images/menus/BACKOFFICE/BO 2.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/BACKOFFICE/BO 2.png" alt="Back Office Screenshot 2" loading="lazy">
            </a>
            <a href="assets/images/menus/BACKOFFICE/BO 3.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/BACKOFFICE/BO 3.png" alt="Back Office Screenshot 3" loading="lazy">
            </a>
            <a href="assets/images/menus/BACKOFFICE/BO4.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/BACKOFFICE/BO4.png" alt="Back Office Screenshot 4" loading="lazy">
            </a>
          </div>
        </div>
      </div>

      <!-- 4. SPARTA -->
      <div class="bsn-project reveal">
        <div class="bsn-project__header">
          <div class="bsn-project__num">04</div>
          <div class="bsn-project__title-wrap">
            <h2><?= __('bsn_sparta_title') ?></h2>
            <p class="bsn-project__desc">
              <?= __('bsn_sparta_desc') ?>
            </p>
            <div class="team-badge">
              <i class="ph ph-users"></i> <?= __('bsn_sparta_team') ?>
            </div>
          </div>
        </div>
        <div class="bsn-project__meta">
          <span class="bsn-meta-tag"><i class="ph ph-wrench"></i> System Fix & Refactor</span>
          <span class="bsn-meta-tag"><i class="ph ph-flask"></i> QA Collaboration</span>
          <span class="bsn-meta-tag"><i class="ph ph-clipboard-text"></i> 300+ Test Cases</span>
          <span class="bsn-meta-tag"><i class="ph ph-bank"></i> Metrologi / Pelayanan Publik</span>
        </div>
        <div class="bsn-project__body">
          <div class="bsn-highlights">
            <div class="bsn-highlight-item">
              <h4><?= __('bsn_sparta_work') ?></h4>
              <ul>
                <li><?= __('bsn_sparta_work_1') ?></li>
                <li><?= __('bsn_sparta_work_2') ?></li>
                <li><?= __('bsn_sparta_work_3') ?></li>
                <li><?= __('bsn_sparta_work_4') ?></li>
              </ul>
            </div>
            <div class="bsn-highlight-item">
              <h4><?= __('bsn_sparta_method') ?></h4>
              <ul>
                <li><?= __('bsn_sparta_method_1') ?></li>
                <li><?= __('bsn_sparta_method_2') ?></li>
                <li><?= __('bsn_sparta_method_3') ?></li>
                <li><?= __('bsn_sparta_method_4') ?></li>
              </ul>
            </div>
          </div>

          <!-- Link Test Case -->
          <div class="sparta-link-wrap">
            <a class="sparta-doc-link" href="https://docs.google.com/spreadsheets/u/0/d/1FrdfvSgjHYVMDRXdOBpw-NrmV9fM7jOWZCy5pQLR0qI/htmlview?pli=1" target="_blank" rel="noopener noreferrer">
              <i class="ph ph-file-text"></i>
              <?= __('bsn_sparta_doc_link') ?> <i class="ph ph-arrow-up-right"></i>
            </a>
          </div>

          <p class="gallery-label"><i class="ph ph-camera"></i> <?= __('gallery_screenshot') ?></p>
          <div class="bsn-gallery">
            <a href="assets/images/menus/SPARTA/SPARTA1.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/SPARTA/SPARTA1.png" alt="SPARTA Screenshot 1" loading="lazy">
            </a>
            <a href="assets/images/menus/SPARTA/SPARTA2.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/SPARTA/SPARTA2.png" alt="SPARTA Screenshot 2" loading="lazy">
            </a>
            <a href="assets/images/menus/SPARTA/SPARTA3.png" target="_blank" rel="noopener">
              <img src="assets/images/menus/SPARTA/SPARTA3.png" alt="SPARTA Screenshot 3" loading="lazy">
            </a>
          </div>
        </div>
      </div>

    </div><!-- /.bsn-projects -->
  </div>
</main>
<?php include 'includes/footer.php'; ?>
