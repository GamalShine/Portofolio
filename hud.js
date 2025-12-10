// Compact Status HUD: percentage sync and dropdown toggle
(function () {
  const pill = document.querySelector('.status__pill');
  const dropdown = document.getElementById('status-dropdown');
  const xpPerc = document.getElementById('xp-perc');
  const enPerc = document.getElementById('en-perc');
  const xpBar = document.getElementById('xp-bar');
  const enBar = document.getElementById('energy-bar');

  // Fallback targets if GSAP hasn't animated yet
  const defaultXP = 86;
  const defaultEN = 74;

  function parseWidth(el) {
    if (!el) return null;
    const w = el.style?.width || '';
    const m = /([0-9]+)\%/.exec(w);
    return m ? parseInt(m[1], 10) : null;
  }

  function updatePerc() {
    const xs = parseWidth(xpBar) ?? defaultXP;
    const es = parseWidth(enBar) ?? defaultEN;
    if (xpPerc) xpPerc.textContent = `${xs}%`;
    if (enPerc) enPerc.textContent = `${es}%`;
  }

  // Initial and delayed sync (after GSAP animation likely finished)
  updatePerc();
  setTimeout(updatePerc, 1800);

  if (pill && dropdown) {
    function open() {
      dropdown.hidden = false;
      pill.setAttribute('aria-expanded', 'true');
    }
    function close() {
      dropdown.hidden = true;
      pill.setAttribute('aria-expanded', 'false');
    }
    function toggle() {
      const expanded = pill.getAttribute('aria-expanded') === 'true';
      expanded ? close() : open();
    }

    pill.addEventListener('click', (e) => {
      e.stopPropagation();
      toggle();
    });

    document.addEventListener('click', (e) => {
      if (!dropdown.hidden && !dropdown.contains(e.target) && !pill.contains(e.target)) {
        close();
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') close();
    });
  }
})();
