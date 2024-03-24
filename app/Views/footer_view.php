<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer class="mt-auto container">
<hr class="d-flex justify-content-center">
<div class="container">
  <div class="d-flex justify-content-between">
    <a href="<?php site_url()?>home" class="pt-1">
      <figure class="px-3">
        <img class="img" src="public/assets/img/volver.svg" alt="" class="d-inline-block p-4" width="50">
        <figcaption class="text-center">Volver</figcaption>
      </figure>
    </a>
    <button type="submit" class="btn">
    <figure class="px-3">
      <img class="img" src="public/assets/img/diskette.svg" alt="" class="d-inline-block p-4" width="50">
      <figcaption class="text-center">Guardar</figcaption>
    </figure>
    </button>
    </form>
  </div>
</div>
<!-- <p>Environment: <?= ENVIRONMENT ?></p> -->
</footer>

<!-- SCRIPTS -->

<script {csp-script-nonce}>
  document.getElementById("menuToggle").addEventListener('click', toggleMenu);
  function toggleMenu() {
      var menuItems = document.getElementsByClassName('menu-item');
      for (var i = 0; i < menuItems.length; i++) {
          var menuItem = menuItems[i];
          menuItem.classList.toggle("hidden");
      }
  }
</script>

<!-- -->

</body>
</html>