<?php
define('TITLE', 'Tunugan - SAMPOL SAMPOL - Game 4');

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
						<figure><img src="../../images/sampol/rick-james.jpg" alt="rick james" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/super-freak.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>Rick James - Super Freak <span>(1981)</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/sampol/mc-hammer.jpg" alt="mc-hammer" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/cant-touch-this.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>MC Hammer - U Can’t Touch This <span>(1990)</span></h2>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/sampol/game5" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
