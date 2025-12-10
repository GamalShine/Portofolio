<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project • Ongoing Case Study</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;900&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css" />
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
        <h1>Ongoing Project <span class="accent">— In Development</span></h1>
        <p class="lede">Project sedang berjalan. Halaman ini akan diperbarui seiring progres (milestones, stack, dan screens).</p>
        <div class="hero__cta">
          <a class="btn btn--primary" href="index.php#quests">← Back to Quests</a>
          <a class="btn btn--ghost" href="index.php#contact">Contact</a>
        </div>
        <div class="statline">
          <div><span>Status</span><strong>Ongoing</strong></div>
          <div><span>Focus</span><strong>Delivery · Quality</strong></div>
          <div><span>Next Update</span><strong>Weekly</strong></div>
        </div>
      </div>
      <div class="hero__avatar card">
        <div class="avatar__orb avatar__orb--photo" style="background-image: radial-gradient(circle at 30% 30%, rgba(0,200,255,0.9), rgba(100,50,200,0.6));"></div>
        <div class="avatar__lines"></div>
        <div class="avatar__badge">WIP</div>
        <div class="avatar__label">PROJECT: ONGOING</div>
      </div>
    </section>

    <section class="panel">
      <div class="panel__header">
        <p class="eyebrow">Overview</p>
        <h2>Goals & Outcomes</h2>
        <p class="lede">Tujuan awal, ekspektasi hasil, dan garis besar fitur prioritas.</p>
      </div>
      <div class="grid">
        <article class="card">
          <h3>Objectives</h3>
          <ul class="tags">
            <li>Fitur inti prioritas</li>
            <li>Arsitektur yang rapi</li>
            <li>Timeline realistis</li>
          </ul>
        </article>
        <article class="card">
          <h3>Outcomes</h3>
          <ul class="tags">
            <li>Milestone mingguan</li>
            <li>Umpan balik cepat</li>
            <li>Dokumentasi progres</li>
          </ul>
        </article>
        <article class="card">
          <h3>Highlights</h3>
          <ul class="tags">
            <li>Iterasi cepat</li>
            <li>CI/CD sederhana</li>
            <li>Monitoring dasar</li>
          </ul>
        </article>
      </div>
    </section>

    <section class="panel panel--alt">
      <div class="panel__header">
        <p class="eyebrow">Gallery</p>
        <h2>Screens & Flows</h2>
        <p class="lede">Placeholder screens — akan diisi dengan tangkapan layar versi terbaru.</p>
      </div>
      <div class="grid">
        <div class="card" style="min-height:180px"></div>
        <div class="card" style="min-height:180px"></div>
        <div class="card" style="min-height:180px"></div>
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
