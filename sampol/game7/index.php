<?php
define('TITLE', 'Tunugan - SAMPOL SAMPOL - Game 7');

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
						<figure><img src="../../images/sampol/dave-brubeck.jpg" alt="dave brubeck" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/kathys-waltz.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>Dave Brubeck - Kathy's Waltz <span>(1959)</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/sampol/the-beatles.jpg" alt="the beatles" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/all-my-loving.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>The Beatles - All My Loving <span>(1963)</span></h2>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/sampol/game8" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
