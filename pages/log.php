<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log • Milestones</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;900&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/styles.css" />
  <link rel="icon" type="image/jpeg" href="../assets/Foto GML.jpg">
  <link rel="apple-touch-icon" href="../assets/Foto GML.jpg">
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
        <div class="brand__subtitle">LOG</div>
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
      <a class="nav__btn" href="./skills.php">Skills</a>
      <a class="nav__btn active" href="./log.php">Log</a>
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
        <p class="eyebrow">Quest Log</p>
        <h1>Milestones</h1>
        <p class="lede">Urutan pengalaman yang paling relevan, penjabaran dari bagian Log pada halaman utama.</p>
        <div class="hero__cta">
          <a class="btn btn--primary" href="../index.php#timeline">← Back to Home Section</a>
          <a class="btn btn--ghost" href="./portal.php">Contact</a>
        </div>
      </div>
      <div class="hero__avatar card">
        <div class="avatar__orb avatar__orb--photo" style="--avatar-url: url('../assets/images/Log.png'); background-image: url('../assets/images/Log.png');">
          <img src="../assets/images/Log.png" alt="Log" loading="lazy" />
        </div>
        <div class="avatar__lines"></div>
        <div class="avatar__badge">Detail</div>
        <div class="avatar__label">PAGE: LOG</div>
      </div>
    </section>

    <section class="panel">
      <div class="panel__header">
        <p class="eyebrow">Timeline</p>
        <h2>Milestones & Experience</h2>
        <p class="lede">Detail tambahan pada setiap milestone (kegiatan, peran, tooling, dan hasil).</p>
      </div>
      <div class="timeline">
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Dashboard Bosgil Group — Mobile & Web</h4>
            <p>React Native (Android/iOS) + Express.js + PostgreSQL, 3 role: User, Admin, Owner. Server di VPS.</p>
            <span class="pill">Sep 2025 — Des 2025</span>
          </div>
        </div>
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Information System Developer — BSN</h4>
            <p>Next.js/React + Laravel + PostgreSQL, membangun modul pelayanan, role-based access, dan audit log.</p>
            <span class="pill">Nov 2023 — Sekarang</span>
          </div>
        </div>
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Android/React Native Developer — Bosgil</h4>
            <p>Aplikasi admin pesanan multi cabang; sinkronisasi cabang dan pelatihan admin.</p>
            <span class="pill">Mar 2024 — Sep 2024</span>
          </div>
        </div>
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Freelance Web Developer — Bosgil Akademi</h4>
            <p>WordPress site, SEO, cloud; optimasi struktur konten dan performa.</p>
            <span class="pill">Nov 2023 — Des 2023</span>
          </div>
        </div>
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Web Developer — PT Legal Handal</h4>
            <p>Company profile WordPress, koordinasi kebutuhan, rilis cepat.</p>
            <span class="pill">Jun 2022 — Jul 2022</span>
          </div>
        </div>
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Project Intern — PT Mandiri Jaya Top</h4>
            <p>Inventory & sales web (CodeIgniter + MySQL), tim kecil, on-site.</p>
            <span class="pill">Apr 2022 — Mei 2022</span>
          </div>
        </div>
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Help Desk — PT PLN (Persero)</h4>
            <p>Menangani laporan user ke engineering melalui website PLN.</p>
            <span class="pill">Jan 2024 — Mar 2024</span>
          </div>
        </div>
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Quality Assurance Tester — Tokopedia</h4>
            <p>Test scenario & test case login Tokopedia (manual testing).</p>
            <span class="pill">Nov 2023 — Des 2023</span>
          </div>
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
