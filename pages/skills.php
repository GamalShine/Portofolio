<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skills • Inventory & Power-ups</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;900&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/styles.css" />
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
        <div class="brand__subtitle">SKILLS</div>
      </div>
    </div>
    <button class="nav__toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="nav__toggle-line"></span>
      <span class="nav__toggle-line"></span>
      <span class="nav__toggle-line"></span>
    </button>
    <nav class="nav" id="primary-nav">
      <a class="nav__btn" href="../index.php">Home</a>
      <a class="nav__btn" href="./quests.php">Quests</a>
      <a class="nav__btn active" href="./skills.php">Skills</a>
      <a class="nav__btn" href="./log.php">Log</a>
      <a class="nav__btn" href="./portal.php">Portal</a>
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
        <p class="eyebrow">Inventory</p>
        <h1>Skills & Power-ups</h1>
        <p class="lede">Penjabaran lebih detail dari bagian Skills pada halaman utama.</p>
        <div class="hero__cta">
          <a class="btn btn--primary" href="../index.php#skills">← Back to Home Section</a>
          <a class="btn btn--ghost" href="./portal.php">Contact</a>
        </div>
      </div>
      <div class="hero__avatar card">
        <div class="avatar__orb avatar__orb--photo" style="--avatar-url: url('../assets/images/Skill.png'); background-image: url('../assets/images/Skill.png');">
          <img src="../assets/images/Skill.png" alt="Skill" loading="lazy" />
        </div>
        <div class="avatar__lines"></div>
        <div class="avatar__badge">Detail</div>
        <div class="avatar__label">PAGE: SKILLS</div>
      </div>
    </section>

    <section class="panel">
      <div class="panel__header">
        <p class="eyebrow">Frontend Web</p>
        <h2>React, Next.js, TypeScript</h2>
        <p class="lede">Integrasi API, state, styling modern, dan praktik aksesibilitas.</p>
      </div>
      <div class="skills">
        <div class="skill card">
          <div class="skill__label"><span>Frontend Web</span><div class="pill">S-tier</div></div>
          <div class="bars"><span data-value="92"></span></div>
          <p>Komponen reusable, SSR, routing, optimasi performa, dan testing dasar.</p>
        </div>
        <div class="skill card">
          <div class="skill__label"><span>Mobile</span><div class="pill">S-tier</div></div>
          <div class="bars"><span data-value="95"></span></div>
          <p>React Native, integrasi REST, dan strategi deployment.</p>
        </div>
        <div class="skill card">
          <div class="skill__label"><span>Backend & Data</span><div class="pill">A-tier</div></div>
          <div class="bars"><span data-value="86"></span></div>
          <p>Laravel/PHP, Node.js, PostgreSQL/MySQL, autentikasi dan CRUD.</p>
        </div>
      </div>
    </section>
  </main>

  <div class="cursor"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" crossorigin="anonymous"></script>
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/mobile-nav.js"></script>
  <script src="../assets/js/hud.js"></script>
</body>
</html>
