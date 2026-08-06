<?php
require_once __DIR__ . '/includes/i18n.php';

// Handle AJAX Contact Form Submission
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['ajax_contact'])) {
    header('Content-Type: application/json');
    $name = htmlspecialchars($_POST["name"] ?? "Teman");
    $email = filter_var($_POST["email"] ?? "", FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"] ?? "");
    
    // Ganti email ini dengan email asli Anda jika sudah di hosting
    $to = "gamalmusthofa@gmail.com"; 
    $subject = "Pesan Baru dari Portfolio Web: $name";
    
    $headers = "From: noreply@gamalmusthofa.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    
    // Fungsi mail() mungkin tidak jalan di localhost (Laragon) tanpa konfigurasi SMTP
    // Tapi akan jalan normal saat website di-upload ke hosting (cPanel/VPS)
    @mail($to, $subject, $body, $headers);
    
    echo json_encode(["status" => "success", "message" => "Terkirim"]);
    exit;
}
?>
<!DOCTYPE html>
<html lang="<?= $current_lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gamal Musthofa — Fullstack & Mobile Engineer</title>
  <meta name="description"
    content="Portfolio Gamal Musthofa — System, Web & Mobile Developer. Next.js, Laravel, React Native, PostgreSQL.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="assets/css/styles.css?v=<?= time() ?>">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg?v=4">
  <meta name="theme-color" content="#f8fafc" id="theme-color-meta">
  <script>
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.setAttribute('data-theme', 'dark');
      document.getElementById('theme-color-meta').setAttribute('content', '#090b10');
    }
  </script>
</head>

<body>
  <div class="page-bg" aria-hidden="true"></div>

  <!-- Header Navigation -->
  <header class="site-header">
    <div class="container header__inner">
      <a class="logo" href="#home">GM<span>.</span></a>
      <nav class="site-nav" id="primary-nav">
        <a href="#work"><?= __('nav_work') ?></a>
        <a href="#about"><?= __('nav_about') ?></a>
        <a href="#experience"><?= __('nav_experience') ?></a>
        <a class="nav-cta" href="#contact"><?= __('nav_contact') ?></a>
      </nav>
      <div class="header-actions">
        <?php
          $switch_to = $current_lang === 'id' ? 'en' : 'id';
          $switch_label = $current_lang === 'id' ? 'EN' : 'ID';
        ?>
        <a href="?lang=<?= $switch_to ?>" class="lang-toggle" aria-label="Switch language to <?= strtoupper($switch_to) ?>" title="Switch to <?= strtoupper($switch_to) ?>">
          <?= $switch_label ?>
        </a>
        <button class="theme-toggle" id="theme-toggle" aria-label="Toggle dark mode">
          <i class="ph ph-sun sun-icon" style="display: none;"></i>
          <i class="ph ph-moon moon-icon"></i>
        </button>
        <button class="nav-toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Buka menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  <main>
    <!-- HERO SECTION -->
    <section id="home" class="hero">
      <div class="container">
        <div class="hero__layout">
          <div class="hero__copy">
            <div class="hero__status">
              <span class="status-dot"></span>
              <span><?= __('hero_status') ?></span>
            </div>

            <h1 class="hero__name">
              <span class="hero__name-gradient">Gamal</span><br>
              <span class="hero__name-accent">Musthofa</span>
            </h1>

            <div class="hero__role">
              <span class="role-decorator">//</span> <?= __('hero_role') ?>
            </div>

            <p class="hero__bio">
              <?= __('hero_bio') ?>
            </p>

            <div class="hero__actions">
              <a class="btn btn--primary" href="#work">
                <?= __('hero_cta') ?> <i class="ph ph-arrow-down" style="margin-left: 4px;"></i>
              </a>
              <button class="email-copy-btn" data-email="gamalmusthofa@gmail.com" title="Klik untuk menyalin email">
                <span class="copy-icon">
                  <i class="ph ph-copy"></i>
                </span>
                <span class="copy-text">gamalmusthofa@gmail.com</span>
              </button>
            </div>
          </div>

          <!-- Hero Avatar Frame -->
          <figure class="hero__visual">
            <div class="hero__badge-floating hero__badge-floating--1">
              <span class="hero__badge-icon"><i class="ph ph-atom"></i></span>
              <span>React & React Native</span>
            </div>
            <div class="hero__badge-floating hero__badge-floating--2">
              <span class="hero__badge-icon"><i class="ph ph-database"></i></span>
              <span>Laravel & PostgreSQL</span>
            </div>
            <div class="hero__visual-frame spotlight-card">
              <img src="assets/Foto GML.jpg" alt="Gamal Musthofa" width="480" height="560" loading="eager">
            </div>
          </figure>
        </div>

        <!-- Social Links Grid Below Hero Layout -->
        <div class="hero-social">
          <p class="hero-social__label"><?= __('hero_contact_via') ?></p>
          <ul class="hero-social__stack">
            <li>
              <a class="social-card social-card--linkedin" href="https://www.linkedin.com/in/gamalmusthofa/"
                target="_blank" rel="noopener noreferrer">
                <span class="social-card__icon" aria-hidden="true">
                  <i class="ph-fill ph-linkedin-logo"></i>
                </span>
                <span class="social-card__body">
                  <span class="social-card__name">LinkedIn</span>
                  <span class="social-card__url">linkedin.com/in/gamalmusthofa</span>
                </span>
                <span class="social-card__arrow" aria-hidden="true"><i class="ph ph-arrow-up-right"></i></span>
              </a>
            </li>
            <li>
              <a class="social-card social-card--gmail" href="mailto:gamalmusthofa@gmail.com" target="_blank"
                rel="noopener noreferrer">
                <span class="social-card__icon" aria-hidden="true">
                  <i class="ph-fill ph-envelope-simple"></i>
                </span>
                <span class="social-card__body">
                  <span class="social-card__name">Gmail</span>
                  <span class="social-card__url">gamalmusthofa@gmail.com</span>
                </span>
                <span class="social-card__arrow" aria-hidden="true"><i class="ph ph-arrow-up-right"></i></span>
              </a>
            </li>
            <li>
              <a class="social-card social-card--instagram" href="https://instagram.com/gamalmust" target="_blank"
                rel="noopener noreferrer">
                <span class="social-card__icon" aria-hidden="true">
                  <i class="ph-fill ph-instagram-logo"></i>
                </span>
                <span class="social-card__body">
                  <span class="social-card__name">Instagram</span>
                  <span class="social-card__url">instagram.com/gamalmust</span>
                </span>
                <span class="social-card__arrow" aria-hidden="true"><i class="ph ph-arrow-up-right"></i></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- SELECTED WORK SECTION -->
    <section id="work" class="section">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow"><span class="eyebrow__num">01</span> <?= __('work_eyebrow') ?></p>
          <h2><?= __('work_title') ?></h2>
        </div>

        <!-- Filter Controls -->
        <div class="filter-tabs reveal">
          <button class="filter-btn is-active" data-filter="all"><?= __('filter_all') ?></button>
          <button class="filter-btn" data-filter="fullstack"><?= __('filter_fullstack') ?></button>
          <button class="filter-btn" data-filter="mobile"><?= __('filter_mobile') ?></button>
          <button class="filter-btn" data-filter="qa"><?= __('filter_qa') ?></button>
        </div>

        <div class="work-list">
          <!-- Item 1: BSN -->
          <!-- Item 1: BSN -->
          <article class="work-item spotlight-card reveal" data-category="fullstack web">
            <div class="work-item__media">
              <img src="assets/images/logo/logobsn.png" alt="BSN Logo" loading="lazy">
            </div>
            <div class="work-item__body">
              <div class="work-item__meta">
                <span>Nov 2025 — Mei 2026</span>
              </div>
              <h3><?= __('proj_bsn_title') ?></h3>
              <p><?= __('proj_bsn_desc') ?></p>
              <ul class="tags">
                <li>Next.js</li>
                <li>Laravel</li>
                <li>PostgreSQL</li>
              </ul>
              <a class="text-link" href="project-bsn.php"><?= __('link_case_study') ?> <i class="ph ph-arrow-up-right"></i></a>
            </div>
          </article>

          <!-- Item 2: CV Makanan ERP -->
          <article class="work-item spotlight-card reveal" data-category="mobile fullstack">
            <div class="work-item__media">
              <img src="assets/images/logo/Logobosgil.png" alt="CV Makanan Segala Acara Logo" loading="lazy">
            </div>
            <div class="work-item__body">
              <div class="work-item__meta">
                <span>Jun — Nov 2025</span>
              </div>
              <h3><?= __('proj_erp_title') ?></h3>
              <p><?= __('proj_erp_desc') ?></p>
              <ul class="tags">
                <li>React Native</li>
                <li>React</li>
                <li>Express.js</li>
                <li>MySQL</li>
              </ul>
              <a class="text-link" href="project-bosgil-dashboard.php"><?= __('link_case_study') ?> <i class="ph ph-arrow-up-right"></i></a>
            </div>
          </article>

          <!-- Item 3: CV Makanan Order Management -->
          <article class="work-item spotlight-card reveal" data-category="mobile">
            <div class="work-item__media">
              <img src="assets/images/logo/Logobosgil.png" alt="CV Makanan Segala Acara Logo" loading="lazy">
            </div>
            <div class="work-item__body">
              <div class="work-item__meta">
                <span>Mar — Sep 2024</span>
              </div>
              <h3><?= __('proj_order_title') ?></h3>
              <p><?= __('proj_order_desc') ?></p>
              <ul class="tags">
                <li>React Native</li>
                <li>Android</li>
                <li>MySQL</li>
              </ul>
              <a class="text-link" href="project-bosgil-native.php"><?= __('link_case_study') ?> <i class="ph ph-arrow-up-right"></i></a>
            </div>
          </article>

          <!-- Item 4: Tokopedia QA -->
          <article class="work-item spotlight-card reveal" data-category="qa">
            <div class="work-item__media">
              <img src="assets/images/logo/logotokped.png" alt="Tokopedia Logo" loading="lazy">
            </div>
            <div class="work-item__body">
              <div class="work-item__meta">
                <span>Nov — Des 2023</span>
              </div>
              <h3><?= __('proj_qa_title') ?></h3>
              <p><?= __('proj_qa_desc') ?></p>
              <ul class="tags">
                <li>Automation Testing</li>
                <li>Test Case</li>
                <li>QA</li>
              </ul>
              <a class="text-link" href="project-tokopedia-qa.php"><?= __('link_qa_detail') ?> <i class="ph ph-arrow-up-right"></i></a>
            </div>
          </article>

          <!-- Item 5: Bosgil Akademi -->
          <article class="work-item spotlight-card reveal" data-category="web">
            <div class="work-item__media">
              <img src="assets/images/logo/Logobosgil.png" alt="Bosgil Akademi" loading="lazy">
            </div>
            <div class="work-item__body">
              <div class="work-item__meta">
                <span>Sep — Des 2023</span>
              </div>
              <h3><?= __('proj_akademi_title') ?></h3>
              <p><?= __('proj_akademi_desc') ?></p>
              <ul class="tags">
                <li>WordPress</li>
                <li>Google SEO</li>
                <li>Team Collaboration</li>
              </ul>
              <a class="text-link" href="project-bosgil-akademi.php"><?= __('link_case_study') ?> <i class="ph ph-arrow-up-right"></i></a>
            </div>
          </article>

          <!-- Item 6: Legal Handal -->
          <article class="work-item spotlight-card reveal" data-category="web">
            <div class="work-item__media">
              <img src="assets/images/logo/logolegalhandal.png" alt="Legal Handal Logo" loading="lazy">
            </div>
            <div class="work-item__body">
              <div class="work-item__meta">
                <span>Mei — Jul 2022</span>
              </div>
              <h3><?= __('proj_legal_title') ?></h3>
              <p><?= __('proj_legal_desc') ?></p>
              <ul class="tags">
                <li>WordPress</li>
                <li>UI Design</li>
                <li>Corporate</li>
              </ul>
              <a class="text-link" href="project-legal-handal.php"><?= __('link_case_study') ?> <i class="ph ph-arrow-up-right"></i></a>
            </div>
          </article>

          <!-- Item 7: Mandiri Jaya Top -->
          <article class="work-item spotlight-card reveal" data-category="fullstack web">
            <div class="work-item__media">
              <img src="assets/images/logo/logoptmandirijayatop.png" alt="Mandiri Jaya Top Logo" loading="lazy">
            </div>
            <div class="work-item__body">
              <div class="work-item__meta">
                <span>Jan — Mei 2022</span>
              </div>
              <h3><?= __('proj_ecommerce_title') ?></h3>
              <p><?= __('proj_ecommerce_desc') ?></p>
              <ul class="tags">
                <li>CodeIgniter</li>
                <li>MySQL</li>
                <li>Teamwork</li>
              </ul>
              <a class="text-link" href="project-mandiri-jaya-top.php"><?= __('link_case_study') ?> <i class="ph ph-arrow-up-right"></i></a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ABOUT & TECH MATRIX (BENTO GRID) -->
    <section id="about" class="section">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow"><span class="eyebrow__num">02</span> <?= __('about_eyebrow') ?></p>
        </div>

        <div class="bento-grid">
          <!-- Tile 1: About Copy -->
          <div class="bento-card spotlight-card bento-col-8 reveal">
            <h3><?= __('about_philosophy_title') ?></h3>
            <p><?= __('about_philosophy_1') ?></p>
            <p><?= __('about_philosophy_2') ?></p>
          </div>

          <!-- Tile 2: Metrics Stats -->
          <div class="bento-card spotlight-card bento-col-4 reveal">
            <h3><?= __('about_metrics_title') ?></h3>
            <div class="metrics-grid">
              <div class="metric-item">
                <div class="metric-number">3+</div>
                <div class="metric-label"><?= __('metric_years') ?></div>
              </div>
              <div class="metric-item">
                <div class="metric-number">7+</div>
                <div class="metric-label"><?= __('metric_projects') ?></div>
              </div>
              <div class="metric-item">
                <div class="metric-number">100%</div>
                <div class="metric-label"><?= __('metric_delivery') ?></div>
              </div>
            </div>
          </div>

          <!-- Tile 3: Tech Stack Chips Matrix -->
          <div class="bento-card spotlight-card bento-col-12 reveal">
            <h3><?= __('about_tech_title') ?></h3>

            <div class="skill-matrix" style="margin-top: 24px;">
              <div>
                <p class="skill-category__title"><?= __('tech_frontend') ?></p>
                <div class="skill-chips">
                  <span class="skill-chip"><i class="ph ph-atom"></i> React.js</span>
                  <span class="skill-chip"><i class="ph ph-triangle"></i> Next.js</span>
                  <span class="skill-chip"><i class="ph ph-code"></i> TypeScript</span>
                  <span class="skill-chip"><i class="ph ph-brackets-curly"></i> JavaScript (ES6+)</span>
                  <span class="skill-chip"><i class="ph ph-paint-brush-broad"></i> Modern CSS3 & Tailwind</span>
                  <span class="skill-chip"><i class="ph ph-browsers"></i> HTML5 / Responsive</span>
                </div>
              </div>

              <div>
                <p class="skill-category__title"><?= __('tech_mobile') ?></p>
                <div class="skill-chips">
                  <span class="skill-chip"><i class="ph ph-device-mobile"></i> React Native</span>
                  <span class="skill-chip"><i class="ph ph-android-logo"></i> Android Studio</span>
                  <span class="skill-chip"><i class="ph ph-plugs-connected"></i> REST API Integration</span>
                  <span class="skill-chip"><i class="ph ph-rocket-launch"></i> App Deployment</span>
                </div>
              </div>

              <div>
                <p class="skill-category__title"><?= __('tech_backend') ?></p>
                <div class="skill-chips">
                  <span class="skill-chip"><i class="ph ph-cube"></i> Laravel</span>
                  <span class="skill-chip"><i class="ph ph-code-block"></i> PHP 8+</span>
                  <span class="skill-chip"><i class="ph ph-hexagon"></i> Node.js / Express</span>
                  <span class="skill-chip"><i class="ph ph-database"></i> PostgreSQL</span>
                  <span class="skill-chip"><i class="ph ph-hard-drive"></i> MySQL</span>
                  <span class="skill-chip"><i class="ph ph-flame"></i> Firebase</span>
                </div>
              </div>

              <div>
                <p class="skill-category__title"><?= __('tech_devops') ?></p>
                <div class="skill-chips">
                  <span class="skill-chip"><i class="ph ph-hard-drives"></i> VPS / Nginx Deployment</span>
                  <span class="skill-chip"><i class="ph ph-bug"></i> Manual QA Testing</span>
                  <span class="skill-chip"><i class="ph ph-book-open-text"></i> Technical Documentation</span>
                  <span class="skill-chip"><i class="ph ph-github-logo"></i> Git / GitHub</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- EXPERIENCE SECTION -->
    <section id="experience" class="section">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow"><span class="eyebrow__num">03</span> <?= __('exp_eyebrow') ?></p>
          <h2><?= __('exp_title') ?></h2>
        </div>

        <div class="exp-timeline">
          <div class="exp-card spotlight-card reveal">
            <div class="exp-time">Nov 2025 — Mei 2026</div>
            <div class="exp-content">
              <h3>Information System Developer</h3>
              <div class="exp-company">Badan Standardisasi Nasional (BSN)</div>
              <p class="exp-desc"><?= __('exp_bsn_desc') ?></p>
            </div>
          </div>

          <div class="exp-card spotlight-card reveal">
            <div class="exp-time">Jun 2025 — Nov 2025</div>
            <div class="exp-content">
              <h3>Fullstack Developer & DevOps</h3>
              <div class="exp-company">CV Makanan Segala Acara</div>
              <p class="exp-desc"><?= __('exp_erp_desc') ?></p>
            </div>
          </div>

          <div class="exp-card spotlight-card reveal">
            <div class="exp-time">Mar 2024 — Sep 2024</div>
            <div class="exp-content">
              <h3>Android / React Native Developer</h3>
              <div class="exp-company">CV Makanan Segala Acara</div>
              <p class="exp-desc"><?= __('exp_order_desc') ?></p>
            </div>
          </div>

          <div class="exp-card spotlight-card reveal">
            <div class="exp-time">Jan 2024 — Mar 2024</div>
            <div class="exp-content">
              <h3>Help Desk Specialist</h3>
              <div class="exp-company">PT PLN (Persero)</div>
              <p class="exp-desc"><?= __('exp_pln_desc') ?></p>
            </div>
          </div>

          <div class="exp-card spotlight-card reveal">
            <div class="exp-time">Nov 2023 — Des 2023</div>
            <div class="exp-content">
              <h3>QA Automation Tester (Project)</h3>
              <div class="exp-company">Personal / Portfolio Project</div>
              <p class="exp-desc"><?= __('exp_qa_desc') ?></p>
            </div>
          </div>

          <div class="exp-card spotlight-card reveal">
            <div class="exp-time">Mei 2022 — Jul 2022</div>
            <div class="exp-content">
              <h3>Web Developer</h3>
              <div class="exp-company">PT Legal Handal Sejahtera</div>
              <p class="exp-desc"><?= __('exp_legal_desc') ?></p>
            </div>
          </div>

          <div class="exp-card spotlight-card reveal">
            <div class="exp-time">Jan 2022 — Mei 2022</div>
            <div class="exp-content">
              <h3>Project Intern Developer</h3>
              <div class="exp-company">PT Mandiri Jaya Top</div>
              <p class="exp-desc"><?= __('exp_intern_desc') ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="section">
      <div class="container contact-wrap">
        <div class="contact-intro reveal">
          <p class="eyebrow"><span class="eyebrow__num">04</span> <?= __('contact_eyebrow') ?></p>
          <h2><?= __('contact_title') ?></h2>
          <p><?= __('contact_desc') ?></p>

          <div class="contact-facts">
            <div class="contact-fact-item">
              <span class="contact-fact-label">Timezone</span>
              <span class="contact-fact-val">WIB (UTC+7)</span>
            </div>
            <div class="contact-fact-item">
              <span class="contact-fact-label"><?= __('contact_loc_label') ?></span>
              <span class="contact-fact-val"><?= __('contact_loc_val') ?></span>
            </div>
            <div class="contact-fact-item">
              <span class="contact-fact-label"><?= __('contact_avail_label') ?></span>
              <span class="contact-fact-val" style="color: var(--accent-emerald);"><?= __('contact_avail_val') ?></span>
            </div>
          </div>
        </div>

        <form class="contact-form spotlight-card reveal" method="post">
          <div class="field">
            <label for="name"><?= __('form_name_label') ?></label>
            <input type="text" id="name" name="name" placeholder="<?= __('form_name_ph') ?>" required>
          </div>
          <div class="field">
            <label for="email"><?= __('form_email_label') ?></label>
            <input type="email" id="email" name="email" placeholder="<?= __('form_email_ph') ?>" required>
          </div>
          <div class="field">
            <label for="message"><?= __('form_msg_label') ?></label>
            <textarea id="message" name="message" rows="5"
              placeholder="<?= __('form_msg_ph') ?>" required></textarea>
          </div>
          <button type="submit" class="btn btn--primary btn--full"><?= __('form_submit') ?> <i class="ph ph-paper-plane-right" style="margin-left: 6px;"></i></button>
        </form>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer__inner">
      <p>© <?= date("Y") ?> <?= __('footer_text') ?></p>
      <a href="#home" style="display: inline-flex; align-items: center; gap: 4px;"><?= __('footer_back_top') ?> <i class="ph ph-arrow-up"></i></a>
    </div>
  </footer>

  <script src="assets/js/script.js"></script>
  <script src="assets/js/mobile-nav.js"></script>
</body>

</html>