// Arcade Mini-game (guarded so it only initializes on pages with #game-canvas)
(() => {
  const canvas = document.getElementById("game-canvas");
  if (!canvas) return; // do nothing if Arcade section not present

  const ctx = canvas.getContext("2d");
  const overlay = document.getElementById("game-overlay");
  const scoreEl = document.getElementById("game-score");
  const hpEl = document.getElementById("game-hp");
  const btnStart = document.getElementById("btn-start");
  const btnPause = document.getElementById("btn-pause");
  const btnRestart = document.getElementById("btn-restart");

  // Responsive: match canvas pixel size to its displayed size
  function fitGameCanvas() {
    const rect = canvas.getBoundingClientRect();
    const dpr = Math.min(window.devicePixelRatio || 1, 2);
    canvas.width = Math.floor(rect.width * dpr);
    canvas.height = Math.floor(rect.height * dpr);
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
  }

  window.addEventListener("resize", fitGameCanvas);
  fitGameCanvas();

  // Game state
  const keys = {};
  let running = false;
  let paused = true;
  let lastTime = 0;
  let score = 0;
  let hp = 100;

  const world = {
    width: () => canvas.getBoundingClientRect().width,
    height: () => canvas.getBoundingClientRect().height,
  };

  const player = {
    x: 80,
    y: world.height() / 2,
    r: 12,
    speed: 260, // px/s
    cooldown: 0,
  };

  const bullets = [];
  const enemies = [];

  function spawnEnemy() {
    const h = world.height();
    const y = Math.random() * (h - 40) + 20;
    enemies.push({
      x: world.width() + 20,
      y,
      r: 12 + Math.random() * 10,
      speed: 120 + Math.random() * 80,
      hp: 1,
    });
  }

  let enemyTimer = 0;
  let enemyInterval = 0.9; // seconds

  function shoot() {
    if (player.cooldown > 0) return;
    bullets.push({ x: player.x + player.r + 4, y: player.y, vx: 420, r: 4 });
    player.cooldown = 0.18; // seconds
  }

  function circleCollide(a, b) {
    const dx = a.x - b.x;
    const dy = a.y - b.y;
    const r = a.r + b.r;
    return dx * dx + dy * dy <= r * r;
  }

  function clamp(v, min, max) { return Math.max(min, Math.min(max, v)); }

  function update(dt) {
    // player movement
    const w = world.width();
    const h = world.height();
    let vx = 0, vy = 0;
    if (keys["ArrowLeft"] || keys["a"]) vx -= 1;
    if (keys["ArrowRight"] || keys["d"]) vx += 1;
    if (keys["ArrowUp"] || keys["w"]) vy -= 1;
    if (keys["ArrowDown"] || keys["s"]) vy += 1;
    const len = Math.hypot(vx, vy) || 1;
    player.x += (vx / len) * player.speed * dt;
    player.y += (vy / len) * player.speed * dt;
    player.x = clamp(player.x, 16, w - 16);
    player.y = clamp(player.y, 16, h - 16);

    // cooldown
    player.cooldown = Math.max(0, player.cooldown - dt);

    // bullets
    for (let i = bullets.length - 1; i >= 0; i--) {
      const b = bullets[i];
      b.x += b.vx * dt;
      if (b.x > w + 20) bullets.splice(i, 1);
    }

    // enemies
    enemyTimer += dt;
    if (enemyTimer >= enemyInterval) {
      enemyTimer = 0;
      spawnEnemy();
    }
    for (let i = enemies.length - 1; i >= 0; i--) {
      const e = enemies[i];
      e.x -= e.speed * dt;
      // collide with player
      if (circleCollide(e, player)) {
        enemies.splice(i, 1);
        hp -= 20;
        if (hp <= 0) gameOver();
        continue;
      }
      // collide with bullets
      for (let j = bullets.length - 1; j >= 0; j--) {
        const b = bullets[j];
        if (circleCollide(e, b)) {
          bullets.splice(j, 1);
          enemies.splice(i, 1);
          score += 10;
          break;
        }
      }
      if (e && e.x < -30) enemies.splice(i, 1);
    }

    // difficulty ramp
    enemyInterval = Math.max(0.4, enemyInterval - dt * 0.002);

    // UI
    scoreEl.textContent = String(score);
    hpEl.textContent = String(Math.max(0, Math.ceil(hp)));
  }

  function draw() {
    const w = world.width();
    const h = world.height();
    ctx.clearRect(0, 0, w, h);

    // background stars parallax hint
    ctx.save();
    ctx.globalAlpha = 0.15;
    for (let i = 0; i < 40; i++) {
      const x = (i * 97) % w;
      const y = ((i * 53) % h);
      ctx.fillStyle = i % 3 === 0 ? "#7ff" : "#4df";
      ctx.beginPath();
      ctx.arc(x, y, (i % 5) * 0.6 + 0.6, 0, Math.PI * 2);
      ctx.fill();
    }
    ctx.restore();

    // player ship
    ctx.save();
    ctx.translate(player.x, player.y);
    ctx.fillStyle = "#00f0ff";
    ctx.strokeStyle = "rgba(0,200,255,0.6)";
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(12, 0);
    ctx.lineTo(-10, -8);
    ctx.lineTo(-10, 8);
    ctx.closePath();
    ctx.fill();
    ctx.stroke();
    ctx.restore();

    // bullets
    ctx.fillStyle = "#ffd93d";
    bullets.forEach((b) => {
      ctx.beginPath();
      ctx.arc(b.x, b.y, b.r, 0, Math.PI * 2);
      ctx.fill();
    });

    // enemies
    enemies.forEach((e) => {
      const grd = ctx.createRadialGradient(e.x - 3, e.y - 3, 2, e.x, e.y, e.r + 6);
      grd.addColorStop(0, "rgba(255,107,53,0.9)");
      grd.addColorStop(1, "rgba(255,107,53,0.2)");
      ctx.fillStyle = grd;
      ctx.beginPath();
      ctx.arc(e.x, e.y, e.r, 0, Math.PI * 2);
      ctx.fill();
    });
  }

  function loop(ts) {
    if (!running) return;
    if (paused) { requestAnimationFrame(loop); return; }
    if (!lastTime) lastTime = ts;
    const dt = Math.min(0.033, (ts - lastTime) / 1000);
    lastTime = ts;
    update(dt);
    draw();
    requestAnimationFrame(loop);
  }

  function startGame() {
    if (running && paused) {
      paused = false;
      overlay.classList.add("hidden");
      return;
    }
    running = true;
    paused = false;
    overlay.classList.add("hidden");
    lastTime = 0;
    requestAnimationFrame(loop);
  }

  function pauseGame() {
    if (!running) return;
    paused = true;
    overlay.classList.remove("hidden");
    overlay.querySelector("h3").textContent = "Paused";
    overlay.querySelector("p").textContent = "Press Space or click Start to resume.";
  }

  function gameOver() {
    running = false;
    paused = true;
    overlay.classList.remove("hidden");
    overlay.querySelector("h3").textContent = "Game Over";
    overlay.querySelector("p").textContent = `Score: ${score}. Press Restart to play again.`;
  }

  function restartGame() {
    bullets.length = 0;
    enemies.length = 0;
    score = 0;
    hp = 100;
    enemyInterval = 0.9;
    player.x = 80;
    player.y = world.height() / 2;
    startGame();
  }

  // Events
  document.addEventListener("keydown", (e) => {
    keys[e.key] = true;
    if (e.key === " " || e.code === "Space") {
      e.preventDefault();
      if (!running || paused) {
        startGame();
      } else {
        shoot();
      }
    }
    if (e.key.toLowerCase() === "p") {
      if (paused) startGame(); else pauseGame();
    }
  });
  document.addEventListener("keyup", (e) => { keys[e.key] = false; });

  btnStart?.addEventListener("click", startGame);
  btnPause?.addEventListener("click", () => (paused ? startGame() : pauseGame()));
  btnRestart?.addEventListener("click", restartGame);

  // Initialize overlay as visible until first start
  overlay.classList.remove("hidden");
  overlay.querySelector("h3").textContent = "Ready";
  overlay.querySelector("p").textContent = "Press Start or Space to begin.";
})();
