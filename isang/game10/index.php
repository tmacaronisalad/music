<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Game 10');

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
						<figure class="main_box1"><img class="img_data" src="../../images/isang/diana-ross.jpg" alt="diana ross" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/michael-jackson.jpg" alt="michael jackson" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/nipsey-russell.jpg" alt="nipsey russell" /></figure>
						<figure class="main_box4"><img class="img_data" src="../../images/isang/ted-ross.jpg" alt="ted ross" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Diana Ross - Brand New Day ft. Michael Jackson, Nipsey Russell & Ted Ross</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/result.php" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
