(function () {
  const header = document.querySelector(".site-header");
  const toggle = document.querySelector(".nav-toggle");
  const nav = document.getElementById("primary-nav");
  if (!header || !toggle || !nav) return;

  function openNav() {
    header.classList.add("nav-open");
    toggle.setAttribute("aria-expanded", "true");
  }

  function closeNav() {
    header.classList.remove("nav-open");
    toggle.setAttribute("aria-expanded", "false");
  }

  toggle.addEventListener("click", () => {
    header.classList.contains("nav-open") ? closeNav() : openNav();
  });

  nav.addEventListener("click", (e) => {
    if (e.target.closest("a")) closeNav();
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeNav();
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth > 768) closeNav();
  });
})();
