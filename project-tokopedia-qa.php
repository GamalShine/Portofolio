<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project • QA Tester @ Tokopedia</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;900&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
  <link rel="apple-touch-icon" href="assets/Foto GML.jpg">
  <style>
    .embed { position: relative; width: 100%; height: 72vh; border-radius: 12px; overflow: hidden; }
    .embed iframe { position: absolute; inset: 0; width: 100%; height: 100%; border: 0; background: #0a0f12; }
    .note { color: var(--muted); font-size: 0.95rem; }
  </style>
</head>
<body>
  <div class="space-bg">
    <div class="nebula nebula-1"></div>
    <div class="nebula nebula-2"></div>
    <div class="planet"></div>
  </div>
  <canvas id="starfield"></canvas>

  <header class="hud">
    <div class="brand">
      <div class="brand__icon">◉</div>
      <div>
        <div class="brand__title">Gam's Space</div>
        <div class="brand__subtitle">PROJECT.MISSION</div>
      </div>
    </div>
    <button class="nav__toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="nav__toggle-line"></span>
      <span class="nav__toggle-line"></span>
      <span class="nav__toggle-line"></span>
    </button>
    <nav class="nav" id="primary-nav">
      <a class="nav__btn" href="index.php#hero">Home</a>
      <a class="nav__btn" href="index.php#quests">Quests</a>
      <a class="nav__btn" href="index.php#skills">Skills</a>
      <a class="nav__btn" href="index.php#timeline">Log</a>
      <a class="nav__btn" href="index.php#contact">Portal</a>
    </nav>
    <div class="status status--compact">
      <button class="status__pill" aria-expanded="false" aria-haspopup="true" aria-controls="status-dropdown">
        <span class="status__level">Lv <strong id="lvl">07</strong></span>
        <span class="status__dot"></span>
        <span class="status__xp">XP <span id="xp-perc">86%</span></span>
        <span class="status__dot"></span>
        <span class="status__energy">EN <span id="en-perc">74%</span></span>
      </button>
      <div class="status__dropdown" id="status-dropdown" hidden>
        <div class="status__item">
          <span>Level</span>
          <strong id="lvl-readonly">07</strong>
        </div>
        <div class="status__item">
          <span>XP</span>
          <div class="bar"><span id="xp-bar"></span></div>
        </div>
        <div class="status__item">
          <span>Energy</span>
          <div class="bar bar--alt"><span id="energy-bar"></span></div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <section class="panel panel--hero">
      <div class="grid-bg"></div>
      <div class="hero__content card">
        <p class="eyebrow">Case Study</p>
        <h1>QA Tester <span class="accent">@ Tokopedia</span></h1>
        <p class="lede">Dokumentasi test scenario & test case (login flow) yang dikerjakan secara manual testing.</p>
        <div class="hero__cta">
          <a class="btn btn--primary" href="index.php#timeline">← Back to Timeline</a>
          <a class="btn btn--ghost" target="_blank" rel="noopener" href="https://docs.google.com/spreadsheets/u/1/d/1pk3AaxkNIIRF9dND1rqqvQDO7VJP6iXB/htmlview">Open in Google Sheets</a>
        </div>
        <div class="statline">
          <div><span>Scope</span><strong>Manual Testing</strong></div>
          <div><span>Focus</span><strong>Scenario & Test Case</strong></div>
          <div><span>Period</span><strong>Nov 2023 — Des 2023</strong></div>
        </div>
      </div>
      <div class="hero__avatar card">
        <div class="avatar__orb avatar__orb--photo" style="--avatar-url: url('assets/images/logo/logotokped.png'); background-image: url('assets/images/logo/logotokped.png');">
          <img src="assets/images/logo/logotokped.png" alt="Tokopedia Logo" loading="lazy" />
        </div>
        <div class="avatar__lines"></div>
        <div class="avatar__badge">Case</div>
        <div class="avatar__label">PROJECT: QA</div>
      </div>
    </section>

    <section class="panel">
      <div class="panel__header">
        <p class="eyebrow">Artifact</p>
        <h2>Test Scenario & Test Case</h2>
        <p class="lede">Embed Google Sheets (read-only). Jika embed diblokir, gunakan tombol di atas untuk membuka langsung.</p>
      </div>
      <div class="card embed">
        <iframe title="Tokopedia QA Test Cases" src="https://docs.google.com/spreadsheets/u/1/d/1pk3AaxkNIIRF9dND1rqqvQDO7VJP6iXB/htmlview"></iframe>
      </div>
      <p class="note">Catatan: Beberapa browser/extension mungkin memblokir embed dari Google Docs. Gunakan tombol "Open in Google Sheets" jika iframe tidak tampil.</p>
    </section>
  </main>

  <div class="cursor"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/mobile-nav.js"></script>
  <script src="assets/js/hud.js"></script>
</body>
</html>
