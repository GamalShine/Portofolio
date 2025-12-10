// Mobile hamburger nav toggle
(function () {
  const hud = document.querySelector('.hud');
  const toggle = document.querySelector('.nav__toggle');
  const nav = document.getElementById('primary-nav');
  if (!hud || !toggle || !nav) return;

  function openNav() {
    hud.classList.add('nav-open');
    toggle.setAttribute('aria-expanded', 'true');
  }
  function closeNav() {
    hud.classList.remove('nav-open');
    toggle.setAttribute('aria-expanded', 'false');
  }
  function toggleNav() {
    const open = hud.classList.contains('nav-open');
    open ? closeNav() : openNav();
  }

  toggle.addEventListener('click', toggleNav);

  // Close when clicking any nav button
  nav.addEventListener('click', (e) => {
    const btn = e.target.closest('.nav__btn');
    if (btn) closeNav();
  });

  // Close on Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeNav();
  });

  // Reset on resize to desktop
  const breakpoint = 768;
  window.addEventListener('resize', () => {
    if (window.innerWidth > breakpoint) {
      closeNav();
    }
  });
})();
