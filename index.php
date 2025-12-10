<?php
// Neon Quest portfolio - PHP entry. Feel free to extend with backend logic.
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Space Explorer Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;900&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
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
          <div class="brand__subtitle">PORTFOLIO.MISSION</div>
        </div>
      </div>
    <button class="nav__toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="nav__toggle-line"></span>
      <span class="nav__toggle-line"></span>
      <span class="nav__toggle-line"></span>
    </button>
    <nav class="nav" id="primary-nav">
      <a class="nav__btn active" href="index.php">Home</a>
      <a class="nav__btn" href="pages/quests.php">Quests</a>
      <a class="nav__btn" href="pages/skills.php">Skills</a>
      <a class="nav__btn" href="pages/log.php">Log</a>
      <a class="nav__btn" href="pages/portal.php">Portal</a>
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
    <section id="hero" class="panel panel--hero">
      <div class="grid-bg"></div>
      <div class="hero__content card">
        <p class="eyebrow">Interactive Portfolio</p>
        <h1>Hi, I’m Gamal Musthofa.<br><span class="accent">System · Web · Mobile</span> developer.</h1>
        <p class="lede">Fullstack/system developer yang terbiasa Next.js/React, Laravel/PHP, WordPress/SEO, React Native, serta backend PostgreSQL/MySQL. Pernah pegang QA & helpdesk, jadi peka pada kualitas dan kebutuhan user.</p>
        <div class="hero__cta">
          <a class="btn btn--primary" href="pages/quests.php">Start Quest</a>
          <a class="btn btn--ghost" href="pages/portal.php">Open Portal</a>
        </div>
        <div class="statline">
          <div><span>Current Mission</span><strong>Information Systems</strong></div>
          <div><span>Focus</span><strong>Next.js · Laravel · React Native</strong></div>
          <div><span>Location</span><strong>Jawa Barat · Remote/Hybrid</strong></div>
        </div>
      </div>
      <div class="hero__avatar card">
        <div class="avatar__orb avatar__orb--photo" style="--avatar-url: url('assets/Foto GML.jpg'); background-image: url('assets/Foto GML.jpg');">
          <img src="assets/Foto GML.jpg" alt="Foto Profil Gamal Musthofa" loading="lazy" />
        </div>
        <div class="avatar__lines"></div>
        <div class="avatar__badge">ONLINE</div>
        <div class="avatar__label">PILOT: GAMAL</div>
      </div>
    </section>

    <section id="quests" class="panel">
      <div class="panel__header">
        <p class="eyebrow">Quests</p>
        <h2>Playable Projects</h2>
        <p class="lede">Cuplikan pekerjaan utama: sistem informasi pemerintah, mobile React Native, web korporat/WordPress, hingga SEO.</p>
      </div>
      <div class="grid">
        <article class="card quest">
          <div class="card__header">
            <span class="pill" style="background:var(--glow); color:#001016;">Ongoing</span>
            <span class="ping"></span>
          </div>
          <h3>New Product — In Development</h3>
          <p>Project terbaru yang sedang dikerjakan. Fokus ke deliver cepat, kualitas, dan pengalaman pengguna.</p>
          <div class="tags"><span>Next.js</span><span>Laravel</span><span>PostgreSQL</span></div>
          <a class="btn btn--tiny" href="project-ongoing.php">Detail</a>
        </article>
        <article class="card quest">
          <div class="card__header">
            <span class="pill">System Dev</span>
            <span class="ping"></span>
          </div>
          <h3>Information System @ BSN</h3>
          <p>Bangun sistem informasi untuk Badan Standardisasi Nasional (kontrak). Stack: Next.js/React + Laravel/PHP, PostgreSQL. Fokus ke kebutuhan instansi dan delivery cepat.</p>
          <div class="tags"><span>Next.js</span><span>Laravel</span><span>PostgreSQL</span></div>
          <a class="btn btn--tiny" href="project-bsn.php">Detail</a>
        </article>
        <article class="card quest">
          <div class="card__header">
            <span class="pill">Mobile</span>
            <span class="ping"></span>
          </div>
          <h3>Android/React Native @ Bosgil</h3>
          <p>Aplikasi Android/React Native untuk manajemen pesanan restoran Nasi Mandhi Bosgil (multi cabang). Training admin, integrasi MySQL, pengelolaan melalui Google Meet.</p>
          <div class="tags"><span>React Native</span><span>Android</span><span>MySQL</span></div>
          <a class="btn btn--tiny" href="project-bosgil-native.php">Detail</a>
        </article>
        <article class="card quest">
          <div class="card__header">
            <span class="pill">Web</span>
            <span class="ping"></span>
          </div>
          <h3>Web & SEO @ Bosgil Akademi</h3>
          <p>Website Bosgil Akademi (WordPress) dengan materi bisnis, SEO & cloud computing, landing produk, optimasi konten.</p>
          <div class="tags"><span>WordPress</span><span>SEO</span><span>Cloud</span></div>
          <a class="btn btn--tiny" href="project-bosgil-akademi.php">Detail</a>
        </article>
        <article class="card quest">
          <div class="card__header">
            <span class="pill">Corp Web</span>
            <span class="ping"></span>
          </div>
          <h3>Company Site @ Legal Handal</h3>
          <p>Bangun company profile untuk PT Legal Handal Sejahtera (WordPress). Koordinasi kebutuhan, rilis cepat, remote.</p>
          <div class="tags"><span>WordPress</span><span>Web</span><span>Client Work</span></div>
          <a class="btn btn--tiny" href="project-legal-handal.php">Detail</a>
        </article>
      </div>
    </section>

    <section id="skills" class="panel panel--alt">
      <div class="panel__header">
        <p class="eyebrow">Inventory</p>
        <h2>Skills & Power-ups</h2>
        <p class="lede">Tooling utama dari proyek-proyek terakhir.</p>
      </div>
      <div class="skills">
        <div class="skill card">
          <div class="skill__label">
            <span>Frontend Web</span>
            <div class="pill">S-tier</div>
          </div>
          <div class="bars"><span data-value="92"></span></div>
          <p>React, Next.js, TypeScript/JavaScript, integrasi API, styling modern.</p>
        </div>
        <div class="skill card">
          <div class="skill__label">
            <span>Mobile</span>
            <div class="pill">S-tier</div>
          </div>
          <div class="bars"><span data-value="95"></span></div>
          <p>React Native & Android, integrasi RESTful API, training admin, deployment.</p>
        </div>
        <div class="skill card">
          <div class="skill__label">
            <span>Backend & Data</span>
            <div class="pill">A-tier</div>
          </div>
          <div class="bars"><span data-value="86"></span></div>
          <p>Laravel/PHP, Node.js, PostgreSQL, MySQL, Firebase; auth, CRUD, SEO, cloud dasar.</p>
        </div>
      </div>
    </section>

    <section id="timeline" class="panel">
      <div class="panel__header">
        <p class="eyebrow">Quest Log</p>
        <h2>Milestones</h2>
        <p class="lede">Urutan pengalaman yang paling relevan.</p>
      </div>
      <div class="timeline">
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Ongoing Project — In Development</h4>
            <p>Fase perancangan dan implementasi awal; iterasi cepat bersama stakeholder.</p>
            <span class="pill">Nov 2025 — Sekarang</span>
          </div>
        </div>
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Information System Developer — BSN</h4>
            <p>Next.js/React + Laravel + PostgreSQL untuk sistem informasi instansi pemerintah.</p>
            <span class="pill">Nov 2023 — Sekarang</span>
          </div>
        </div>
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Android/React Native Developer — Bosgil</h4>
            <p>Aplikasi Android/React Native untuk admin pesanan multi cabang; MySQL.</p>
            <span class="pill">Mar 2024 — Sep 2024</span>
          </div>
        </div>
        <div class="timeline__item card">
          <div class="timeline__dot"></div>
          <div class="timeline__content">
            <h4>Freelance Web Developer — Bosgil Akademi</h4>
            <p>WordPress site, SEO, cloud; konten bisnis dan aktivitas akademi.</p>
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


    <section id="contact" class="panel panel--alt">
      <div class="panel__header">
        <p class="eyebrow">Portal</p>
        <h2>Ready to Play?</h2>
        <p class="lede">Drop a message to unlock the next co-op mission.</p>
      </div>
      <div class="contact card">
        <form method="post">
          <div class="field">
            <label>Name</label>
            <input type="text" name="name" placeholder="Player name">
          </div>
          <div class="field">
            <label>Email</label>
            <input type="email" name="email" placeholder="contact@domain.com">
          </div>
          <div class="field">
            <label>Message</label>
            <textarea rows="4" name="message" placeholder="Your mission brief..."></textarea>
          </div>
          <button type="submit" class="btn btn--primary">Send Transmission</button>
        </form>
        <div class="contact__meta">
          <div class="meta__line">
            <span>Response Time</span>
            <strong>Fast</strong>
          </div>
          <div class="meta__line">
            <span>Timezone</span>
            <strong>UTC+7</strong>
          </div>
          <div class="meta__line">
            <span>Status</span>
            <strong>Available</strong>
          </div>
          <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
            <div class="meta__line" style="color: var(--glow); border-color: rgba(70,255,232,0.3);">
              <span>Transmission received</span>
              <strong>Thanks, <?= htmlspecialchars($_POST["name"] ?? "Player") ?>!</strong>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

  <div class="cursor"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-QhZstjTzECszP2vCuxnxOQk4LLx7sMMEZe2qVDye3GQXffNk31DJ7tY79DbDeihdj5Z8SGvtQvECOH14R/2QRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/mobile-nav.js"></script>
  <script src="assets/js/hud.js"></script>
</body>
</html>

