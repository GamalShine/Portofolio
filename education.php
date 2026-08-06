<?php
require_once __DIR__ . '/includes/i18n.php';

$school = $_GET['school'] ?? 'unpam';
$validSchools = ['unpam', 'stikom'];
if (!in_array($school, $validSchools)) $school = 'unpam';

if ($school === 'unpam') {
    $pageTitle   = __('edu_page_title_unpam');
    $schoolName  = __('edu_unpam_name');
    $major       = __('edu_unpam_major');
    $gpa         = __('edu_unpam_gpa');
    $period      = __('edu_unpam_period');
    $location    = __('edu_unpam_loc');
    $degree      = __('edu_degree_s1');
    $docDesc     = __('edu_detail_transcript_desc_unpam');
    $pdfFile     = 'assets/images/khsunpam/Transkrip Unpam.pdf';
    $iconClass   = 'ph-graduation-cap';
    $accentColor = 'var(--accent-primary)';
    $badge       = $degree;
} else {
    $pageTitle   = __('edu_page_title_stikom');
    $schoolName  = __('edu_stikom_name');
    $major       = __('edu_stikom_major');
    $gpa         = __('edu_stikom_gpa');
    $period      = __('edu_stikom_period');
    $location    = __('edu_stikom_loc');
    $degree      = __('edu_degree_exchange');
    $docDesc     = __('edu_detail_transcript_desc_stikom');
    $pdfFile     = 'assets/images/khsstikom/KHS ITB STIKOM BALI.pdf';
    $iconClass   = 'ph-student';
    $accentColor = 'var(--accent-cyan)';
    $badge       = $degree;
}
?>
<!DOCTYPE html>
<html lang="<?= $current_lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="assets/css/styles.css?v=<?= time() ?>">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
  <meta name="theme-color" content="#f8fafc" id="theme-color-meta">
  <script>
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.setAttribute('data-theme', 'dark');
      document.getElementById('theme-color-meta').setAttribute('content', '#090b10');
    }
  </script>
  <style>
    .edu-detail-hero {
      padding: calc(var(--header-height) + 48px) 0 48px;
    }
    .edu-detail-back {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.9rem;
      color: var(--text-subtle);
      margin-bottom: 32px;
      transition: color 0.2s ease;
    }
    .edu-detail-back:hover { color: var(--accent-primary); }

    .edu-detail-header {
      display: flex;
      align-items: flex-start;
      gap: 24px;
      margin-bottom: 40px;
    }
    .edu-detail-icon {
      width: 72px;
      height: 72px;
      border-radius: 20px;
      display: grid;
      place-items: center;
      font-size: 2rem;
      flex-shrink: 0;
      background: linear-gradient(135deg, var(--accent-primary), #b91c1c);
      color: white;
    }
    .edu-detail-icon--exchange {
      background: linear-gradient(135deg, var(--accent-cyan), #0369a1);
    }
    .edu-detail-title h1 {
      font-size: clamp(1.6rem, 4vw, 2.4rem);
      margin-bottom: 8px;
    }
    .edu-detail-title .edu-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 5px 14px;
      font-size: 0.8rem;
      font-weight: 600;
      border-radius: 999px;
      margin-bottom: 12px;
      background: rgba(220,38,38,0.1);
      color: var(--accent-primary);
      border: 1px solid rgba(220,38,38,0.25);
    }
    .edu-badge--exchange {
      background: rgba(2,132,199,0.1);
      color: var(--accent-cyan);
      border-color: rgba(2,132,199,0.25);
    }
    .edu-meta-row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 8px;
    }
    .edu-meta-chip {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 0.875rem;
      color: var(--text-muted);
    }
    .edu-meta-chip i { color: var(--accent-primary); }

    .edu-doc-section {
      margin-top: 40px;
    }
    .edu-doc-label {
      font-family: var(--font-mono);
      font-size: 0.76rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--accent-cyan);
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .edu-doc-label::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--border-color);
    }
    .edu-doc-desc {
      font-size: 1rem;
      color: var(--text-muted);
      line-height: 1.7;
      margin-bottom: 28px;
      max-width: 70ch;
    }
    .edu-pdf-viewer {
      width: 100%;
      min-height: 680px;
      border-radius: var(--radius-md);
      border: 1px solid var(--border-color);
      background: var(--bg-card);
      box-shadow: var(--shadow-card);
      display: block;
    }
    .edu-pdf-fallback {
      padding: 40px;
      text-align: center;
      background: var(--bg-card);
      border: 1px dashed var(--border-color);
      border-radius: var(--radius-md);
    }
    .edu-pdf-fallback p {
      margin-bottom: 16px;
    }
    .edu-switcher {
      display: flex;
      gap: 12px;
      margin-bottom: 32px;
    }
    .edu-switcher a {
      padding: 10px 22px;
      border-radius: 999px;
      border: 1px solid var(--border-color);
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--text-muted);
      background: var(--bg-card);
      transition: all 0.2s ease;
    }
    .edu-switcher a.is-active,
    .edu-switcher a:hover {
      background: var(--accent-primary);
      color: white;
      border-color: var(--accent-primary);
    }
    /* PDF Modal */
    .pdf-modal-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.88);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
      z-index: 9999;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
    }
    .pdf-modal-backdrop.is-open {
      opacity: 1;
      pointer-events: auto;
    }
    .pdf-modal-box {
      background: var(--bg-card-solid);
      border: 1px solid var(--border-color);
      border-radius: var(--radius-lg);
      width: min(860px, 94vw);
      max-height: 90vh;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      box-shadow: 0 24px 80px rgba(0,0,0,0.5);
      transform: scale(0.96);
      transition: transform 0.3s cubic-bezier(0.16,1,0.3,1);
    }
    .pdf-modal-backdrop.is-open .pdf-modal-box {
      transform: scale(1);
    }
    .pdf-modal-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 24px;
      border-bottom: 1px solid var(--border-color);
      flex-shrink: 0;
    }
    .pdf-modal-header h3 {
      font-size: 1rem;
      font-weight: 600;
      color: var(--text-main);
      margin: 0;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .pdf-modal-header h3 i { color: var(--accent-primary); }
    .pdf-modal-close {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      border: 1px solid var(--border-color);
      background: transparent;
      cursor: pointer;
      display: grid;
      place-items: center;
      color: var(--text-muted);
      font-size: 1.1rem;
      transition: all 0.2s ease;
    }
    .pdf-modal-close:hover {
      background: var(--accent-primary);
      border-color: var(--accent-primary);
      color: white;
    }
    .pdf-modal-body {
      flex: 1;
      overflow: hidden;
      position: relative;
    }
    .pdf-modal-body iframe {
      width: 100%;
      height: 100%;
      min-height: 560px;
      border: none;
      display: block;
    }
    .doc-preview-card {
      display: flex;
      align-items: center;
      gap: 20px;
      padding: 24px 28px;
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: var(--radius-md);
      margin-top: 8px;
    }
    .doc-preview-icon {
      width: 56px;
      height: 56px;
      border-radius: 14px;
      background: rgba(220,38,38,0.1);
      border: 1px solid rgba(220,38,38,0.2);
      display: grid;
      place-items: center;
      font-size: 1.6rem;
      color: var(--accent-primary);
      flex-shrink: 0;
    }
    .doc-preview-info { flex: 1; }
    .doc-preview-info h4 { font-size: 0.95rem; margin-bottom: 4px; }
    .doc-preview-info p { font-size: 0.85rem; color: var(--text-muted); margin: 0; }
    .doc-preview-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 22px;
      background: var(--accent-gradient);
      color: white;
      border-radius: 999px;
      font-size: 0.9rem;
      font-weight: 600;
      cursor: pointer;
      border: none;
      transition: all 0.25s ease;
      box-shadow: 0 4px 16px rgba(220,38,38,0.3);
      flex-shrink: 0;
    }
    .doc-preview-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(220,38,38,0.45);
    }
    @media (max-width: 640px) {
      .edu-detail-header { flex-direction: column; gap: 16px; }
      .edu-pdf-viewer { min-height: 400px; }
    }
  </style>
</head>
<body>
  <div class="page-bg" aria-hidden="true"></div>

  <!-- Header -->
  <header class="site-header">
    <div class="container header__inner">
      <a class="logo" href="index.php#home">GM<span>.</span></a>
      <nav class="site-nav" id="primary-nav">
        <a href="index.php#work"><?= __('nav_work') ?></a>
        <a href="index.php#about"><?= __('nav_about') ?></a>
        <a href="index.php#experience"><?= __('nav_experience') ?></a>
        <a class="nav-cta" href="index.php#contact"><?= __('nav_contact') ?></a>
      </nav>
      <div class="header-actions">
        <?php
          $switch_to = $current_lang === 'id' ? 'en' : 'id';
          $switch_label = $current_lang === 'id' ? 'EN' : 'ID';
        ?>
        <a href="?school=<?= $school ?>&lang=<?= $switch_to ?>" class="lang-toggle"><?= $switch_label ?></a>
        <button class="theme-toggle" id="theme-toggle" aria-label="Toggle dark mode">
          <i class="ph ph-sun sun-icon" style="display:none;"></i>
          <i class="ph ph-moon moon-icon"></i>
        </button>
        <button class="nav-toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Open menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  <main>
    <section class="edu-detail-hero">
      <div class="container">
        <a href="index.php#education" class="edu-detail-back">
          <i class="ph ph-arrow-left"></i> <?= __('edu_detail_back') ?>
        </a>

        <!-- School Switcher -->
        <div class="edu-switcher">
          <a href="education.php?school=unpam<?= $current_lang !== 'id' ? '&lang='.$current_lang : '' ?>"
             class="<?= $school === 'unpam' ? 'is-active' : '' ?>">
            Universitas Pamulang
          </a>
          <a href="education.php?school=stikom<?= $current_lang !== 'id' ? '&lang='.$current_lang : '' ?>"
             class="<?= $school === 'stikom' ? 'is-active' : '' ?>">
            STIKOM Bali (PMM)
          </a>
        </div>

        <!-- Header Block -->
        <div class="edu-detail-header">
          <div class="edu-detail-icon <?= $school === 'stikom' ? 'edu-detail-icon--exchange' : '' ?>">
            <i class="ph <?= $iconClass ?>"></i>
          </div>
          <div class="edu-detail-title">
            <div class="edu-badge <?= $school === 'stikom' ? 'edu-badge--exchange' : '' ?>">
              <i class="ph <?= $iconClass ?>"></i> <?= htmlspecialchars($badge) ?>
            </div>
            <h1><?= htmlspecialchars($schoolName) ?></h1>
            <p style="color: var(--text-muted); margin-bottom:0;"><?= htmlspecialchars($major) ?></p>
            <div class="edu-meta-row">
              <span class="edu-meta-chip"><i class="ph ph-star"></i> <?= htmlspecialchars($gpa) ?></span>
              <span class="edu-meta-chip"><i class="ph ph-calendar-blank"></i> <?= htmlspecialchars($period) ?></span>
              <span class="edu-meta-chip"><i class="ph ph-map-pin"></i> <?= htmlspecialchars($location) ?></span>
            </div>
          </div>
        </div>

        <!-- Document Section -->
        <div class="edu-doc-section">
          <div class="edu-doc-label"><i class="ph ph-file-text"></i> <?= __('edu_detail_transcript_label') ?></div>
          <p class="edu-doc-desc"><?= $docDesc ?></p>

          <?php if (file_exists($pdfFile)): ?>
            <iframe
              src="<?= htmlspecialchars($pdfFile) ?>#toolbar=0&navpanes=0"
              class="edu-pdf-viewer"
              title="<?= htmlspecialchars($schoolName) ?> Document"
            ></iframe>
          <?php else: ?>
            <div class="edu-pdf-fallback">
              <i class="ph ph-file-pdf" style="font-size: 3rem; color: var(--accent-primary); margin-bottom: 12px; display: block;"></i>
              <p style="color: var(--text-muted);">Dokumen PDF tidak ditemukan di path: <code><?= htmlspecialchars($pdfFile) ?></code></p>
              <p style="color: var(--text-subtle); font-size: 0.875rem;">Pastikan file sudah diupload ke direktori yang benar.</p>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer__inner">
      <p>© <?= date('Y') ?> <?= __('footer_text') ?></p>
      <a href="index.php#education" style="display: inline-flex; align-items: center; gap: 4px;">
        <?= __('edu_detail_back') ?> <i class="ph ph-arrow-left"></i>
      </a>
    </div>
  </footer>

  <script src="assets/js/script.js"></script>
  <script>
    // 1. Disable Right Click (Context Menu)
    document.addEventListener('contextmenu', function(e) {
      e.preventDefault();
    });

    // 2. Disable Inspect Element Shortcuts
    document.onkeydown = function(e) {
      // F12
      if (e.keyCode === 123) return false;
      // Ctrl+Shift+I or Ctrl+Shift+J
      if (e.ctrlKey && e.shiftKey && (e.keyCode === 73 || e.keyCode === 74)) return false;
      // Ctrl+U (View Source)
      if (e.ctrlKey && e.keyCode === 85) return false;
      // Ctrl+P (Print)
      if (e.ctrlKey && e.keyCode === 80) return false;
      
      // Prevent PrintScreen key
      if (e.key === 'PrintScreen' || e.keyCode === 44) {
        navigator.clipboard.writeText('');
        return false;
      }
    };

    // Backup listener for PrintScreen
    window.addEventListener('keyup', (e) => {
      if (e.key === 'PrintScreen' || e.keyCode === 44) {
        navigator.clipboard.writeText('');
      }
    });
  </script>
  <script src="assets/js/mobile-nav.js"></script>
</body>
</html>

