(function () {
  'use strict';

  // --- Header & Scroll Tracking ---
  const header = document.querySelector(".site-header");
  const navLinks = document.querySelectorAll(".site-nav a[href^='#']");
  const sections = document.querySelectorAll("main section[id]");

  function onScroll() {
    if (header) {
      header.classList.toggle("is-scrolled", window.scrollY > 20);
    }

    if (!sections.length) return;

    let activeId = sections[0].id;
    const marker = window.scrollY + 160;

    sections.forEach((section) => {
      if (marker >= section.offsetTop) activeId = section.id;
    });

    navLinks.forEach((link) => {
      const href = link.getAttribute("href");
      link.classList.toggle("is-active", href === `#${activeId}`);
    });
  }

  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  // --- Smooth Scroll Navigation ---
  navLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      const id = link.getAttribute("href")?.slice(1);
      const target = id ? document.getElementById(id) : null;
      if (!target) return;

      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth", block: "start" });

      if (header?.classList.contains("nav-open")) {
        header.classList.remove("nav-open");
        document.querySelector(".nav-toggle")?.setAttribute("aria-expanded", "false");
      }
    });
  });

  // --- Spotlight Mouse Tracking Effect ---
  const spotlightCards = document.querySelectorAll(".spotlight-card");
  spotlightCards.forEach((card) => {
    card.addEventListener("mousemove", (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      card.style.setProperty("--mouse-x", `${x}px`);
      card.style.setProperty("--mouse-y", `${y}px`);
    });
  });

  // --- Toast Notification System ---
  function showToast(message) {
    let toast = document.querySelector(".toast-notification");
    if (!toast) {
      toast = document.createElement("div");
      toast.className = "toast-notification";
      document.body.appendChild(toast);
    }
    toast.innerHTML = `<span style="color: var(--accent-emerald);">✓</span> ${message}`;
    toast.classList.add("is-visible");

    setTimeout(() => {
      toast.classList.remove("is-visible");
    }, 3000);
  }

  // --- Copy Email Button Handler ---
  const copyBtn = document.querySelector(".email-copy-btn");
  if (copyBtn) {
    copyBtn.addEventListener("click", () => {
      const email = copyBtn.getAttribute("data-email") || "gamalmusthofa@gmail.com";
      navigator.clipboard.writeText(email).then(() => {
        const textSpan = copyBtn.querySelector(".copy-text");
        if (textSpan) {
          const origText = textSpan.textContent;
          textSpan.textContent = "Copied to Clipboard!";
          showToast("Email address copied to clipboard!");
          setTimeout(() => {
            textSpan.textContent = origText;
          }, 2500);
        }
      }).catch(err => {
        showToast("Email: " + email);
      });
    });
  }

  // --- Portfolio Work Category Filtering ---
  const filterBtns = document.querySelectorAll(".filter-btn");
  const workItems = document.querySelectorAll(".work-item");

  filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      filterBtns.forEach((b) => b.classList.remove("is-active"));
      btn.classList.add("is-active");

      const filter = btn.getAttribute("data-filter");

      workItems.forEach((item) => {
        const category = item.getAttribute("data-category") || "";
        if (filter === "all" || category.includes(filter)) {
          item.style.display = "flex";
          setTimeout(() => {
            item.style.opacity = "1";
            item.style.transform = "translateY(0)";
          }, 50);
        } else {
          item.style.opacity = "0";
          item.style.transform = "translateY(15px)";
          setTimeout(() => {
            item.style.display = "none";
          }, 250);
        }
      });
    });
  });

  // --- Scroll Reveal Animations ---
  const reveals = document.querySelectorAll(".reveal");
  if (reveals.length && "IntersectionObserver" in window) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.classList.add("is-in");
          io.unobserve(entry.target);
        });
      },
      { threshold: 0.1, rootMargin: "0px 0px -40px 0px" }
    );
    reveals.forEach((el) => io.observe(el));
  } else {
    reveals.forEach((el) => el.classList.add("is-in"));
  }

  // --- Contact Form Interactive Handler ---
  const contactForm = document.querySelector(".contact-form");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      const nameInput = contactForm.querySelector("#name");
      const name = nameInput ? nameInput.value : "Teman";
      showToast(`Terima kasih ${name}, pesan Anda berhasil dikirim!`);
    });
  }

  // --- Theme Toggle Handler ---
  const themeToggle = document.getElementById("theme-toggle");
  if (themeToggle) {
    themeToggle.addEventListener("click", () => {
      const root = document.documentElement;
      const isDark = root.getAttribute("data-theme") === "dark";
      const newTheme = isDark ? "light" : "dark";
      
      root.setAttribute("data-theme", newTheme);
      localStorage.setItem("theme", newTheme);
      
      const themeMeta = document.getElementById("theme-color-meta");
      if (themeMeta) {
        themeMeta.setAttribute("content", newTheme === "dark" ? "#090b10" : "#f8fafc");
      }
    });
  }

  // --- Lightbox Image Gallery ---
  const galleryContainers = document.querySelectorAll('[class*="-gallery"], [class*="gallery-"]');
  
  if (galleryContainers.length > 0) {
    // Create Lightbox DOM
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.innerHTML = `
      <button class="lightbox-btn lightbox-close" aria-label="Close"><i class="ph ph-x"></i></button>
      <button class="lightbox-btn lightbox-prev" aria-label="Previous"><i class="ph ph-caret-left"></i></button>
      <button class="lightbox-btn lightbox-next" aria-label="Next"><i class="ph ph-caret-right"></i></button>
      <div class="lightbox-content">
        <div class="lightbox-loader"></div>
        <img src="" alt="" class="lightbox-img">
      </div>
    `;
    document.body.appendChild(lightbox);

    const lightboxImg = lightbox.querySelector('.lightbox-img');
    const closeBtn = lightbox.querySelector('.lightbox-close');
    const prevBtn = lightbox.querySelector('.lightbox-prev');
    const nextBtn = lightbox.querySelector('.lightbox-next');

    let currentImages = [];
    let currentIndex = 0;

    function openLightbox(images, index) {
      currentImages = images;
      currentIndex = index;
      updateLightboxImage();
      lightbox.classList.add('is-active');
      document.body.style.overflow = 'hidden'; // Prevent scrolling while open
    }

    function closeLightbox() {
      lightbox.classList.remove('is-active');
      document.body.style.overflow = '';
      setTimeout(() => {
        lightboxImg.src = '';
      }, 300);
    }

    function updateLightboxImage() {
      const src = currentImages[currentIndex];
      lightbox.classList.add('is-loading');
      lightboxImg.onload = () => {
        lightbox.classList.remove('is-loading');
      };
      lightboxImg.src = src;

      prevBtn.style.display = currentImages.length > 1 ? 'flex' : 'none';
      nextBtn.style.display = currentImages.length > 1 ? 'flex' : 'none';
    }

    function showNext() {
      if (currentImages.length <= 1) return;
      currentIndex = (currentIndex + 1) % currentImages.length;
      updateLightboxImage();
    }

    function showPrev() {
      if (currentImages.length <= 1) return;
      currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
      updateLightboxImage();
    }

    galleryContainers.forEach(container => {
      // Find all images within this specific gallery container
      const images = Array.from(container.querySelectorAll('img'));
      if (images.length === 0) return;

      const imageSrcs = images.map(img => {
        // If wrapped in a link, use link href, otherwise image src
        const parentLink = img.closest('a');
        if (parentLink && parentLink.getAttribute('href')) {
          parentLink.addEventListener('click', e => e.preventDefault());
          return parentLink.getAttribute('href');
        }
        return img.getAttribute('src');
      });

      images.forEach((img, index) => {
        img.style.cursor = 'zoom-in';
        
        // Handle click on image directly
        img.addEventListener('click', (e) => {
          e.preventDefault();
          e.stopPropagation();
          openLightbox(imageSrcs, index);
        });
        
        // Also handle click if wrapped in A tag
        const parentLink = img.closest('a');
        if (parentLink) {
          parentLink.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            openLightbox(imageSrcs, index);
          });
        }
      });
    });

    closeBtn.addEventListener('click', closeLightbox);
    nextBtn.addEventListener('click', (e) => { e.stopPropagation(); showNext(); });
    prevBtn.addEventListener('click', (e) => { e.stopPropagation(); showPrev(); });

    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox || e.target.classList.contains('lightbox-content')) {
        closeLightbox();
      }
    });

    document.addEventListener('keydown', (e) => {
      if (!lightbox.classList.contains('is-active')) return;
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowRight') showNext();
      if (e.key === 'ArrowLeft') showPrev();
    });
    
    // Add touch support for mobile swipe
    let touchStartX = 0;
    let touchEndX = 0;
    lightbox.addEventListener('touchstart', e => {
      touchStartX = e.changedTouches[0].screenX;
    }, {passive: true});
    
    lightbox.addEventListener('touchend', e => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    }, {passive: true});
    
    function handleSwipe() {
      if (touchEndX < touchStartX - 50) showNext();
      if (touchEndX > touchStartX + 50) showPrev();
    }
  }

})();
