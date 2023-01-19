<?php
define('TITLE', 'Tunugan - SAMPOL SAMPOL - Game 8');

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
						<figure><img src="../../images/sampol/daft-punk.jpg" alt="daft punk" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/harder-better-faster-stronger.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>Daft Punk - Harder, Better, Faster, Stronger <span>(2001)</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/sampol/kanye-west.jpg" alt="kanye west" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/stronger.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>Kanye West - Stronger <span>(2007)</span></h2>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/sampol/game9" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
