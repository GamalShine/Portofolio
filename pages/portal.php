<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal • Contact</title>
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
        <div class="brand__title">SPACE EXPLORER</div>
        <div class="brand__subtitle">PORTAL</div>
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
      <a class="nav__btn" href="./log.php">Log</a>
      <a class="nav__btn active" href="./portal.php">Portal</a>
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
        <p class="eyebrow">Portal</p>
        <h1>Ready to Play?</h1>
        <p class="lede">Form kontak terpisah yang merujuk dari bagian Portal pada halaman utama.</p>
      </div>
      <div class="hero__avatar card">
        <div class="avatar__orb avatar__orb--photo" style="--avatar-url: url('../assets/images/Portal.png'); background-image: url('../assets/images/Portal.png');">
          <img src="../assets/images/Portal.png" alt="Portal" loading="lazy" />
        </div>
        <div class="avatar__lines"></div>
        <div class="avatar__badge">Detail</div>
        <div class="avatar__label">PAGE: PORTAL</div>
      </div>
    </section>

    <section class="panel panel--alt">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" crossorigin="anonymous"></script>
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/mobile-nav.js"></script>
  <script src="../assets/js/hud.js"></script>
</body>
</html>
