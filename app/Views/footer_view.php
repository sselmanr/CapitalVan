<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer class="navbar-fixed-bottom">
<hr class="d-flex justify-content-center">

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