<!--Footer -->
  </div> <!-- End Clearfix -->
  </div> <!-- End Protect Me -->
  <script src="<?= BASE_URL ?>/js/modernizr-custom-v2.7.1.min.js"></script>
  <script src="<?= BASE_URL ?>/js/jquery-2.1.1.min.js"></script>
  <script src="<?= BASE_URL ?>/js/wow.min.js"></script>
  <script src="<?= BASE_URL ?>/js/plugins.js"></script>
  <?php
    if(!empty($data->game_type)) {
  ?>
  <script type="text/javascript">
	  $(function(){
	  	$('body').addClass('<?= $data->game_type ?>');
	  });
  </script>
  <?php
    }
  ?>
</body>
</html>
<!-- End Footer -->