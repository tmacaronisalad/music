<?php
define('TITLE', 'Tunugan - SAMPOL SAMPOL - Game 1');

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
						<figure><img src="../../images/sampol/coldplay.jpg" alt="coldplay" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/the-scientist.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>Coldplay - The Scientist <span>(2002)</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/sampol/taylor-swift.jpg" alt="taylor swift" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/haunted.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>Taylor Swift - Haunted <span>(2010)</span></h2>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/sampol/game2" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
