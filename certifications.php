<?php
require_once __DIR__ . '/includes/i18n.php';

$cert = $_GET['cert'] ?? '';

$certData = [
    'bnsp' => [
        'title'    => __('cert_bnsp_title'),
        'issuer'   => __('cert_bnsp_issuer'),
        'year'     => '2025',
        'desc'     => __('cert_detail_bnsp_desc'),
        'file'     => 'assets/images/certificate/Sertifikat BNSP.pdf',
        'icon'     => 'ph-seal-check',
        'color'    => '#dc2626',
    ],
    'maganghub' => [
        'title'    => __('cert_maganghub_title'),
        'issuer'   => __('cert_maganghub_issuer'),
        'year'     => '2025',
        'desc'     => __('cert_detail_maganghub_desc'),
        'file'     => 'assets/images/certificate/Certificate MagangHub Badan Standarisasi Nasional.pdf',
        'icon'     => 'ph-briefcase',
        'color'    => '#0284c7',
    ],
    'digital' => [
        'title'    => __('cert_digital_title'),
        'issuer'   => __('cert_digital_issuer'),
        'year'     => '2026',
        'desc'     => __('cert_detail_digital_desc'),
        'file'     => 'assets/images/certificate/Certificate MAGANGHUB Essential Skills Digital Literacy.pdf',
        'icon'     => 'ph-monitor',
        'color'    => '#0d9488',
    ],
    'pmm' => [
        'title'    => __('cert_pmm_title'),
        'issuer'   => __('cert_pmm_issuer'),
        'year'     => '2022',
        'desc'     => __('cert_detail_pmm_desc'),
        'file'     => 'assets/images/certificate/Certificate PMM BALI.pdf',
        'icon'     => 'ph-globe',
        'color'    => '#059669',
    ],
    'react' => [
        'title'    => __('cert_react_title'),
        'issuer'   => __('cert_react_issuer'),
        'year'     => '2022',
        'desc'     => __('cert_detail_react_desc'),
        'file'     => 'assets/images/certificate/Developing website with React and API Integration.pdf',
        'icon'     => 'ph-code',
        'color'    => '#7c3aed',
    ],
    'mobile' => [
        'title'    => __('cert_mobile_title'),
        'issuer'   => __('cert_mobile_issuer'),
        'year'     => '2022',
        'desc'     => __('cert_detail_mobile_desc'),
        'file'     => 'assets/images/certificate/Certificate Workshop Mobile Apps UNPAM.pdf',
        'icon'     => 'ph-device-mobile-camera',
        'color'    => '#d97706',
    ],
];

// If a specific cert is requested, show its detail. Otherwise show all.
$showAll = !isset($certData[$cert]);
$activeCert = $showAll ? null : $certData[$cert];
$pageTitle = $showAll
    ? __('cert_title') . ' — Gamal Musthofa'
    : ($activeCert['title'] . ' — Gamal Musthofa');
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
    .cert-detail-page {
      padding: calc(var(--header-height) + 48px) 0 80px;
    }
    .cert-detail-back {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.9rem;
      color: var(--text-subtle);
      margin-bottom: 32px;
      transition: color 0.2s ease;
    }
    .cert-detail-back:hover { color: var(--accent-primary); }

    /* ----  GRID VIEW (All Certs) ---- */
    .cert-all-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 24px;
      margin-top: 40px;
    }
    .cert-all-card {
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: var(--radius-lg);
      padding: 28px;
      display: flex;
      flex-direction: column;
      gap: 16px;
      transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
      backdrop-filter: blur(16px);
    }
    .cert-all-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-card-hover);
      border-color: var(--border-color-hover);
    }
    .cert-all-card__icon {
      width: 52px;
      height: 52px;
      border-radius: 14px;
      display: grid;
      place-items: center;
      font-size: 1.5rem;
      color: white;
    }
    .cert-all-card__year {
      font-family: var(--font-mono);
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--text-subtle);
      letter-spacing: 0.08em;
    }
    .cert-all-card h3 {
      font-size: 1rem;
      line-height: 1.3;
      margin: 0;
    }
    .cert-all-card p {
      font-size: 0.875rem;
      color: var(--text-muted);
      margin: 0;
      flex: 1;
    }
    .cert-all-card__actions {
      display: flex;
      gap: 10px;
      margin-top: auto;
    }
    .cert-all-card__actions a {
      flex: 1;
      text-align: center;
      padding: 10px 16px;
      border-radius: 999px;
      font-size: 0.85rem;
      font-weight: 500;
      border: 1px solid var(--border-color);
      background: var(--bg-card);
      color: var(--text-main);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      transition: all 0.2s ease;
    }
    .cert-all-card__actions a:hover,
    .cert-all-card__actions a.primary {
      background: var(--accent-primary);
      border-color: var(--accent-primary);
      color: white;
    }

    /* ---- SINGLE CERT DETAIL ---- */
    .cert-single-header {
      display: flex;
      align-items: flex-start;
      gap: 24px;
      margin-bottom: 40px;
    }
    .cert-single-icon {
      width: 72px;
      height: 72px;
      border-radius: 20px;
      display: grid;
      place-items: center;
      font-size: 2rem;
      color: white;
      flex-shrink: 0;
    }
    .cert-single-meta h1 { font-size: clamp(1.5rem, 4vw, 2.2rem); margin-bottom: 6px; }
    .cert-single-meta .issuer {
      font-size: 1rem;
      color: var(--text-muted);
      margin-bottom: 12px;
    }
    .cert-single-meta .year-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 5px 14px;
      font-family: var(--font-mono);
      font-size: 0.8rem;
      font-weight: 700;
      border-radius: 999px;
      background: rgba(220,38,38,0.1);
      color: var(--accent-primary);
      border: 1px solid rgba(220,38,38,0.2);
    }
    .cert-doc-label {
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
    .cert-doc-label::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--border-color);
    }
    .cert-doc-desc {
      font-size: 1rem;
      color: var(--text-muted);
      line-height: 1.7;
      margin-bottom: 28px;
      max-width: 70ch;
    }
    .cert-pdf-fallback {
      padding: 60px 40px;
      text-align: center;
      background: var(--bg-card);
      border: 1px dashed var(--border-color);
      border-radius: var(--radius-md);
    }
    .cert-nav-list {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 32px;
    }
    .cert-nav-list a {
      padding: 8px 18px;
      border-radius: 999px;
      border: 1px solid var(--border-color);
      font-size: 0.85rem;
      color: var(--text-muted);
      background: var(--bg-card);
      transition: all 0.2s ease;
    }
    .cert-nav-list a.is-active,
    .cert-nav-list a:hover {
      background: var(--accent-primary);
      color: white;
      border-color: var(--accent-primary);
    }
    .cert-pdf-viewer {
      width: 100%;
      min-height: 700px;
      border-radius: var(--radius-md);
      border: 1px solid var(--border-color);
      background: var(--bg-card);
      box-shadow: var(--shadow-card);
      display: block;
    }
    @media (max-width: 640px) {
      .cert-single-header { flex-direction: column; gap: 16px; }
      .cert-pdf-viewer { min-height: 420px; }
      .cert-all-grid { grid-template-columns: 1fr; }
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
          $langParam = $cert ? "cert=$cert&lang=$switch_to" : "lang=$switch_to";
        ?>
        <a href="?<?= $langParam ?>" class="lang-toggle"><?= $switch_label ?></a>
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
    <div class="cert-detail-page">
      <div class="container">
        <a href="index.php#certifications" class="cert-detail-back">
          <i class="ph ph-arrow-left"></i> <?= __('cert_detail_back') ?>
        </a>

        <?php if ($showAll): ?>
          <!-- ALL CERTS VIEW -->
          <p class="eyebrow"><span class="eyebrow__num">–</span> <?= __('cert_eyebrow') ?></p>
          <h1 style="font-size: clamp(1.8rem, 5vw, 2.8rem); margin-bottom: 12px;"><?= __('cert_title') ?></h1>
          <p style="color: var(--text-muted); max-width: 60ch;"><?= __('cert_desc') ?></p>

          <div class="cert-all-grid">
            <?php foreach ($certData as $key => $c): ?>
              <div class="cert-all-card spotlight-card">
                <div>
                  <div class="cert-all-card__icon" style="background: linear-gradient(135deg, <?= $c['color'] ?>, <?= $c['color'] ?>aa);">
                    <i class="ph <?= $c['icon'] ?>"></i>
                  </div>
                </div>
                <div>
                  <span class="cert-all-card__year"><?= $c['year'] ?></span>
                  <h3><?= htmlspecialchars($c['title']) ?></h3>
                  <p><?= htmlspecialchars($c['issuer']) ?></p>
                </div>
                <div class="cert-all-card__actions">
                  <a href="certifications.php?cert=<?= $key ?><?= $current_lang !== 'id' ? '&lang='.$current_lang : '' ?>" class="primary">
                    <i class="ph ph-file-pdf"></i> <?= __('cert_detail_label') ?>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        <?php else: ?>
          <!-- SINGLE CERT VIEW -->
          <!-- Quick nav between certs -->
          <div class="cert-nav-list">
            <?php foreach ($certData as $key => $c): ?>
              <a href="certifications.php?cert=<?= $key ?><?= $current_lang !== 'id' ? '&lang='.$current_lang : '' ?>"
                 class="<?= $cert === $key ? 'is-active' : '' ?>">
                <?= htmlspecialchars($c['year']) ?> — <?= mb_strimwidth(htmlspecialchars($c['title']), 0, 28, '…') ?>
              </a>
            <?php endforeach; ?>
          </div>

          <!-- Header -->
          <div class="cert-single-header">
            <div class="cert-single-icon" style="background: linear-gradient(135deg, <?= $activeCert['color'] ?>, <?= $activeCert['color'] ?>88);">
              <i class="ph <?= $activeCert['icon'] ?>"></i>
            </div>
            <div class="cert-single-meta">
              <span class="year-badge"><i class="ph ph-calendar-blank"></i> <?= $activeCert['year'] ?></span>
              <h1><?= htmlspecialchars($activeCert['title']) ?></h1>
              <p class="issuer"><i class="ph ph-buildings" style="margin-right:4px;"></i><?= htmlspecialchars($activeCert['issuer']) ?></p>
            </div>
          </div>

          <!-- Document -->
          <div class="cert-doc-label"><i class="ph ph-file-pdf"></i> <?= __('cert_detail_label') ?></div>
          <p class="cert-doc-desc"><?= $activeCert['desc'] ?></p>

          <?php if (file_exists($activeCert['file'])): ?>
            <iframe
              src="<?= htmlspecialchars($activeCert['file']) ?>#toolbar=0&navpanes=0"
              class="cert-pdf-viewer"
              title="<?= htmlspecialchars($activeCert['title']) ?>"
            ></iframe>
            <div style="margin-top: 16px; display: flex; gap: 12px; justify-content: flex-end;">
              <a href="certifications.php<?= $current_lang !== 'id' ? '?lang='.$current_lang : '' ?>" class="btn btn--ghost">
                <i class="ph ph-list"></i> <?= __('cert_view_all') ?>
              </a>
            </div>
          <?php else: ?>
            <div class="cert-pdf-fallback">
              <i class="ph ph-file-pdf" style="font-size: 3rem; color: var(--accent-primary); margin-bottom: 12px; display: block;"></i>
              <p style="color: var(--text-muted);">File tidak ditemukan: <code><?= htmlspecialchars($activeCert['file']) ?></code></p>
              <p style="color: var(--text-subtle); font-size: 0.875rem; margin-top: 8px;">Pastikan file sudah diupload ke direktori yang benar.</p>
            </div>
          <?php endif; ?>

        <?php endif; ?>
      </div>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container footer__inner">
      <p>© <?= date('Y') ?> <?= __('footer_text') ?></p>
      <a href="index.php#certifications" style="display: inline-flex; align-items: center; gap: 4px;">
        <?= __('cert_detail_back') ?> <i class="ph ph-arrow-left"></i>
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
