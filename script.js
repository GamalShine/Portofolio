const cursor = document.querySelector(".cursor");
// Only bind smooth-scroll to elements explicitly using data-target
const navButtons = document.querySelectorAll("[data-target]");
const sections = document.querySelectorAll("section");
const xpBar = document.getElementById("xp-bar");
const energyBar = document.getElementById("energy-bar");
const starCanvas = document.getElementById("starfield");
const ctx = starCanvas.getContext("2d");

const stars = [];
let mouse = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
let ticking = false;

function fitCanvas() {
  starCanvas.width = window.innerWidth;
  starCanvas.height = window.innerHeight;
}

function createStars() {
  stars.length = 0;
  const count = Math.floor((window.innerWidth + window.innerHeight) / 14);
  for (let i = 0; i < count; i++) {
    stars.push({
      x: Math.random() * starCanvas.width,
      y: Math.random() * starCanvas.height,
      z: Math.random() * 1.2 + 0.2,
      s: Math.random() * 1.2 + 0.2,
    });
  }
}

function renderStars() {
  ctx.clearRect(0, 0, starCanvas.width, starCanvas.height);
  for (const star of stars) {
    const parallaxX = (mouse.x - starCanvas.width / 2) * star.z * 0.01;
    const parallaxY = (mouse.y - starCanvas.height / 2) * star.z * 0.01;
    const brightness = 0.5 + star.s * 0.5;
    ctx.fillStyle = `rgba(0, 200, 255, ${brightness})`;
    ctx.beginPath();
    ctx.arc(star.x - parallaxX, star.y - parallaxY, star.s * 1.5, 0, Math.PI * 2);
    ctx.fill();
    ctx.shadowBlur = 10;
    ctx.shadowColor = 'rgba(0, 200, 255, 0.8)';
  }
  requestAnimationFrame(renderStars);
}

function handleMouse(e) {
  mouse = { x: e.clientX, y: e.clientY };
  cursor.style.left = `${mouse.x}px`;
  cursor.style.top = `${mouse.y}px`;
}

function activateCursor() {
  cursor.classList.add("cursor--active");
}

function deactivateCursor() {
  cursor.classList.remove("cursor--active");
}

function scrollToSection(id) {
  const el = document.getElementById(id);
  if (el) {
    el.scrollIntoView({ behavior: "smooth", block: "start" });
  }
}

function handleNavClick(e) {
  const target = e.currentTarget.dataset.target;
  if (target) {
    e.preventDefault();
    scrollToSection(target);
  }
}

function updateNavHighlight() {
  if (ticking) return;
  ticking = true;
  requestAnimationFrame(() => {
    let activeId = "hero";
    const scrollPos = window.scrollY + window.innerHeight / 2.5;
    sections.forEach((section) => {
      if (scrollPos >= section.offsetTop) activeId = section.id;
    });
    document.querySelectorAll(".nav__btn").forEach((btn) => {
      btn.classList.toggle("active", btn.dataset.target === activeId);
    });
    ticking = false;
  });
}

function animateBars() {
  document.querySelectorAll(".bars span").forEach((bar) => {
    const value = Number(bar.dataset.value) || 0;
    gsap.fromTo(
      bar,
      { width: "0%" },
      { width: `${value}%`, duration: 1.4, ease: "power3.out", delay: 0.3 }
    );
  });
}

function initParallax() {
  document.querySelectorAll(".card, .hero__avatar").forEach((card) => {
    card.addEventListener("mousemove", (e) => {
      const rect = card.getBoundingClientRect();
      const dx = (e.clientX - rect.left) / rect.width - 0.5;
      const dy = (e.clientY - rect.top) / rect.height - 0.5;
      card.style.transform = `rotateX(${dy * -4}deg) rotateY(${dx * 6}deg) translateY(-6px)`;
    });
    card.addEventListener("mouseleave", () => {
      card.style.transform = "rotateX(0deg) rotateY(0deg)";
    });
  });
}

function introAnimation() {
  gsap.set("main, .hud", { opacity: 0, y: 20 });
  gsap.to(".hud", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out" });
  gsap.to("main", { opacity: 1, y: 0, duration: 1, ease: "power3.out", delay: 0.1 });
  gsap.from(".panel", {
    opacity: 0,
    y: 30,
    stagger: 0.12,
    ease: "power3.out",
    duration: 0.9,
    delay: 0.2,
  });
  gsap.from(".hero__avatar", { scale: 0.92, opacity: 0, duration: 0.9, ease: "power2.out" });
  gsap.to("#xp-bar", { width: "86%", duration: 1.6, ease: "power2.out" });
  gsap.to("#energy-bar", { width: "74%", duration: 1.6, ease: "power2.out", delay: 0.1 });
  animateBars();
}

function initButtons() {
  navButtons.forEach((btn) => {
    btn.addEventListener("click", handleNavClick);
    btn.addEventListener("mouseenter", activateCursor);
    btn.addEventListener("mouseleave", deactivateCursor);
  });
}

function initHoverables() {
  document.querySelectorAll(".card, .nav__btn, .btn, input, textarea").forEach((el) => {
    el.addEventListener("mouseenter", activateCursor);
    el.addEventListener("mouseleave", deactivateCursor);
  });
}

function initHeroGridMotion() {
  const grid = document.querySelector(".grid-bg");
  if (!grid) return;
  document.addEventListener("mousemove", (e) => {
    const dx = (e.clientX / window.innerWidth - 0.5) * 8;
    const dy = (e.clientY / window.innerHeight - 0.5) * 8;
    grid.style.transform = `perspective(800px) rotateX(${68 + dy}deg) translateY(${-40 + dy * 1.6}px) translateX(${dx}px)`;
  });
}

function initStarfield() {
  fitCanvas();
  createStars();
  renderStars();
  window.addEventListener("resize", () => {
    fitCanvas();
    createStars();
  });
}

function init() {
  fitCanvas();
  initStarfield();
  initButtons();
  initHoverables();
  initParallax();
  initHeroGridMotion();
  introAnimation();
  updateNavHighlight();
}

document.addEventListener("mousemove", handleMouse);
document.addEventListener("scroll", updateNavHighlight);
window.addEventListener("resize", fitCanvas);

init();


