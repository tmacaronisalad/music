<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Warm Up');

require('../../constant.php');

include('../../header.php');

$data->game_type = 'isang_kanta_lang';
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<div class="main_content wow fadeInUp">
					<div class="main_boxes">
						<figure class="main_box1"><img class="img_data" src="../../images/isang/taylor-swift.jpg" alt="taylor swift" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/future.jpg" alt="future" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/ed-sheeran.jpg" alt="ed sheeran" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Taylor Swift - End Game ft. Future & Ed Sheeran</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang/game1" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
