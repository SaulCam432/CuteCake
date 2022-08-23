<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/js/bootstrap/js/bootstrap.bundle.min.js"></script>


  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>