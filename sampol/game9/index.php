<?php
define('TITLE', 'Tunugan - SAMPOL SAMPOL - Game 9');

require('../../constant.php');

include('../../header.php');

$data->game_type = 'sampol_sampol';
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<div class="main_boxes">

					<section class="main_box1 wow fadeInUp">
						<figure><img src="../../images/sampol/major-lazer.jpg" alt="major lazer" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/pon-de-floor.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>Major Lazer - Pon De Floor <span>(2009)</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/sampol/beyonce.jpg" alt="beyonce" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/run-the-world.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>Beyoncé - Run the World (Girls) <span>(2011)</span></h2>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/sampol/game10" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
