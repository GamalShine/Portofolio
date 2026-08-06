  <footer class="site-footer">
    <div class="container footer__inner">
      <p>&copy; <?= date("Y") ?> <?= __('footer_text') ?></p>
      <a href="<?= $root ?? '' ?>index.php#home" style="display: inline-flex; align-items: center; gap: 4px;"><?= __('footer_back_top') ?> <i class="ph ph-arrow-up"></i></a>
    </div>
  </footer>
  <script src="<?= $root ?? '' ?>assets/js/script.js"></script>
  <script src="<?= $root ?? '' ?>assets/js/mobile-nav.js"></script>
</body>
</html>
