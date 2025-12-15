<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project • Dashboard Bosgil Group</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;900&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
  <link rel="apple-touch-icon" href="assets/Foto GML.jpg">
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
        <h1>Dashboard Bosgil Group</h1>
        <p class="lede">Aplikasi Android, iOS, dan Web dengan 3 role (User, Admin, Owner). Frontend React Native, backend Express.js, database PostgreSQL, dan server di VPS.</p>
        <div class="hero__cta">
          <a class="btn btn--primary" href="index.php#quests">← Back to Quests</a>
          <a class="btn btn--ghost" href="index.php#contact">Contact</a>
        </div>
        <div class="statline">
          <div><span>Role</span><strong>Fullstack & DevOps</strong></div>
          <div><span>Stack</span><strong>React Native · Express.js · PostgreSQL</strong></div>
          <div><span>Period</span><strong>Sep 2025 — Des 2025</strong></div>
        </div>
      </div>
      <div class="hero__avatar card">
        <div class="avatar__orb avatar__orb--photo" style="--avatar-url: url('assets/images/logo/Logobosgil.png'); background-image: url('assets/images/logo/Logobosgil.png');">
          <img src="assets/images/logo/Logobosgil.png" alt="Logo Bosgil Group" loading="lazy" />
        </div>
        <div class="avatar__lines"></div>
        <div class="avatar__badge">Case</div>
        <div class="avatar__label">PROJECT: BOSGIL DASHBOARD</div>
      </div>
    </section>

    <section class="panel">
      <div class="panel__header">
        <p class="eyebrow">Overview</p>
        <h2>Goals & Outcomes</h2>
        <p class="lede">Aplikasi lintas platform (Android, iOS, Web) untuk operasional Bosgil Group: manajemen data, peran, dan insight.</p>
      </div>
      <div class="grid">
        <article class="card">
          <h3>Objectives</h3>
          <ul class="tags">
            <li>Autentikasi 3 role (User, Admin, Owner)</li>
            <li>REST API Express.js</li>
            <li>Skema PostgreSQL</li>
          </ul>
        </article>
        <article class="card">
          <h3>Outcomes</h3>
          <ul class="tags">
            <li>Operasional terpusat</li>
            <li>Data konsisten</li>
            <li>Deployment di VPS</li>
          </ul>
        </article>
        <article class="card">
          <h3>Highlights</h3>
          <ul class="tags">
            <li>React Native (Android/iOS)</li>
            <li>Express.js service</li>
            <li>Monitoring & backup</li>
          </ul>
        </article>
      </div>
    </section>

    <section class="panel panel--alt">
      <div class="panel__header">
        <p class="eyebrow">Gallery</p>
        <h2>Screens & Flows</h2>
        <p class="lede">Atas permintaan pemilik hak cipta, tampilan UI tidak ditampilkan. Konten visual diganti dengan placeholder.</p>
      </div>
      <div class="grid">
        <div class="card" style="min-height:180px; display:flex; align-items:center; justify-content:center; color:var(--muted);">
          <span>UI tidak ditampilkan (copyright)</span>
        </div>
        <div class="card" style="min-height:180px; display:flex; align-items:center; justify-content:center; color:var(--muted);">
          <span>UI tidak ditampilkan (copyright)</span>
        </div>
        <div class="card" style="min-height:180px; display:flex; align-items:center; justify-content:center; color:var(--muted);">
          <span>UI tidak ditampilkan (copyright)</span>
        </div>
      </div>
    </section>
  </main>

  <div class="cursor"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/mobile-nav.js"></script>
  <script src="assets/js/hud.js"></script>
</body>
</html>
