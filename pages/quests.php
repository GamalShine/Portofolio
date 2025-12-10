<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quests • Playable Projects</title>
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
        <div class="brand__subtitle">QUESTS</div>
      </div>
    </div>
    <button class="nav__toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="nav__toggle-line"></span>
      <span class="nav__toggle-line"></span>
      <span class="nav__toggle-line"></span>
    </button>
    <nav class="nav" id="primary-nav">
      <a class="nav__btn" href="../index.php">Home</a>
      <a class="nav__btn active" href="./quests.php">Quests</a>
      <a class="nav__btn" href="./skills.php">Skills</a>
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
        <p class="eyebrow">Quests</p>
        <h1>Playable Projects Overview</h1>
        <p class="lede">Ringkasan pekerjaan utama dengan detail lebih lengkap dari bagian Quests pada halaman utama.</p>
        <div class="hero__cta">
          <a class="btn btn--primary" href="../index.php#quests">← Back to Home Section</a>
          <a class="btn btn--ghost" href="./portal.php">Contact</a>
        </div>
      </div>
      <div class="hero__avatar card">
        <div class="avatar__orb avatar__orb--photo" style="--avatar-url: url('../assets/images/Quest.png'); background-image: url('../assets/images/Quest.png');">
          <img src="../assets/images/Quest.png" alt="Quest" loading="lazy" />
        </div>
        <div class="avatar__lines"></div>
        <div class="avatar__badge">Detail</div>
        <div class="avatar__label">PAGE: QUESTS</div>
      </div>
    </section>

    <section class="panel panel--alt">
      <div class="panel__header">
        <p class="eyebrow">Now Playing</p>
        <h2>Ongoing Project</h2>
        <p class="lede">Proyek yang sedang berjalan. Lihat detail progres dan rencana rilis.</p>
      </div>
      <div class="grid">
        <article class="card quest">
          <div class="card__header">
            <span class="pill" style="background:var(--glow); color:#001016;">Ongoing</span>
            <span class="ping"></span>
          </div>
          <h3>New Product — In Development</h3>
          <p>Fokus pada pengembangan fitur inti, iterasi cepat, dan kualitas pengalaman pengguna.</p>
          <div class="tags"><span>Next.js</span><span>Laravel</span><span>PostgreSQL</span></div>
          <a class="btn btn--tiny" href="../project-ongoing.php">Detail</a>
        </article>
      </div>
    </section>

    <section class="panel">
      <div class="panel__header">
        <p class="eyebrow">Projects</p>
        <h2>Information System @ BSN</h2>
        <p class="lede">Stack: Next.js/React + Laravel/PHP, PostgreSQL. Fokus ke kebutuhan instansi dan delivery cepat.</p>
      </div>
      <div class="grid">
        <article class="card">
          <h3>Scope</h3>
          <ul class="tags"><li>Frontend SSR + caching</li><li>Laravel API + policy</li><li>Backup & monitoring</li></ul>
        </article>
        <article class="card">
          <h3>Outcomes</h3>
          <ul class="tags"><li>Reliability</li><li>Faster delivery</li><li>Documentation</li></ul>
        </article>
        <article class="card">
          <h3>Links</h3>
          <div class="tags"><a class="btn btn--tiny" href="../project-bsn.php">Case Study</a></div>
        </article>
      </div>
    </section>

    <section class="panel panel--alt">
      <div class="panel__header">
        <p class="eyebrow">Projects</p>
        <h2>Android/React Native @ Bosgil</h2>
        <p class="lede">Aplikasi admin pesanan multi cabang. Integrasi MySQL, training admin.</p>
      </div>
      <div class="grid">
        <article class="card">
          <h3>Scope</h3>
          <ul class="tags"><li>CRUD real-time</li><li>Sinkronisasi cabang</li><li>Notifikasi status</li></ul>
        </article>
        <article class="card">
          <h3>Outcomes</h3>
          <ul class="tags"><li>Operasional efisien</li><li>Training</li><li>Dokumentasi</li></ul>
        </article>
        <article class="card">
          <h3>Links</h3>
          <div class="tags"><a class="btn btn--tiny" href="../project-bosgil-native.php">Case Study</a></div>
        </article>
      </div>
    </section>

    <section class="panel">
      <div class="panel__header">
        <p class="eyebrow">Projects</p>
        <h2>Web & SEO @ Bosgil Akademi</h2>
        <p class="lede">Website WordPress, SEO, dan landing produk.</p>
      </div>
      <div class="grid">
        <article class="card">
          <h3>Scope</h3>
          <ul class="tags"><li>Struktur konten</li><li>SEO on-page</li><li>Integrasi landing</li></ul>
        </article>
        <article class="card">
          <h3>Outcomes</h3>
          <ul class="tags"><li>CTR & engagement naik</li><li>Traffic organik</li><li>Landing siap iklan</li></ul>
        </article>
        <article class="card">
          <h3>Links</h3>
          <div class="tags"><a class="btn btn--tiny" href="../project-bosgil-akademi.php">Case Study</a></div>
        </article>
      </div>
    </section>

    <section class="panel panel--alt">
      <div class="panel__header">
        <p class="eyebrow">Projects</p>
        <h2>Company Site @ Legal Handal</h2>
        <p class="lede">Company profile WordPress, koordinasi kebutuhan, rilis cepat.</p>
      </div>
      <div class="grid">
        <article class="card">
          <h3>Scope</h3>
          <ul class="tags"><li>Tema ringan</li><li>Optimasi aset</li><li>Konfigurasi hosting</li></ul>
        </article>
        <article class="card">
          <h3>Outcomes</h3>
          <ul class="tags"><li>Branding rapi</li><li>Konten jelas</li><li>Go-live tepat waktu</li></ul>
        </article>
        <article class="card">
          <h3>Links</h3>
          <div class="tags"><a class="btn btn--tiny" href="../project-legal-handal.php">Case Study</a></div>
        </article>
      </div>
    </section>

    <section class="panel">
      <div class="panel__header">
        <p class="eyebrow">Experience</p>
        <h2>Help Desk @ PLN</h2>
        <p class="lede">Menangani laporan user ke engineering melalui website PLN.</p>
      </div>
      <div class="grid">
        <article class="card">
          <h3>Scope</h3>
          <ul class="tags"><li>Ticket triage</li><li>Koordinasi engineering</li><li>Pelaporan</li></ul>
        </article>
        <article class="card">
          <h3>Outcomes</h3>
          <ul class="tags"><li>Respon cepat</li><li>Tracking yang jelas</li><li>Kepuasan user</li></ul>
        </article>
        <article class="card">
          <h3>Links</h3>
          <div class="tags"><span class="pill">Internal</span></div>
        </article>
      </div>
    </section>

    <section class="panel panel--alt">
      <div class="panel__header">
        <p class="eyebrow">Experience</p>
        <h2>QA Tester @ Tokopedia</h2>
        <p class="lede">Test scenario & test case login (manual testing).</p>
      </div>
      <div class="grid">
        <article class="card">
          <h3>Scope</h3>
          <ul class="tags"><li>Test scenario</li><li>Test case</li><li>Pelaporan bug</li></ul>
        </article>
        <article class="card">
          <h3>Outcomes</h3>
          <ul class="tags"><li>Stabilitas meningkat</li><li>Dokumentasi QA</li><li>Kolaborasi tim</li></ul>
        </article>
        <article class="card">
          <h3>Links</h3>
          <div class="tags"><span class="pill">Internal</span></div>
        </article>
      </div>
    </section>

    <section class="panel">
      <div class="panel__header">
        <p class="eyebrow">Projects</p>
        <h2>Project Intern @ Mandiri Jaya Top</h2>
        <p class="lede">Inventory & sales web (CodeIgniter + MySQL), tim kecil, on-site.</p>
      </div>
      <div class="grid">
        <article class="card">
          <h3>Scope</h3>
          <ul class="tags"><li>CRUD inventory</li><li>Laporan penjualan</li><li>Role permission dasar</li></ul>
        </article>
        <article class="card">
          <h3>Outcomes</h3>
          <ul class="tags"><li>Operasional terbantu</li><li>Proses terdokumentasi</li><li>Transfer knowledge</li></ul>
        </article>
        <article class="card">
          <h3>Links</h3>
          <div class="tags">
            <a class="btn btn--tiny" href="../project-mandiri-jaya-top.php">Case Study</a>
            <span class="pill">On-site</span>
          </div>
        </article>
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
