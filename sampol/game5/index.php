<?php
define('TITLE', 'Tunugan - SAMPOL SAMPOL - Game 5');

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
						<figure><img src="../../images/sampol/david-mccallum.jpg" alt="david mccallum" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/the-edge.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>David McCallum - The Edge <span>(1968)</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/sampol/dr-dre.jpg" alt="dr. dre" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/the-next-episode.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>Dr. Dre - The Next Episode ft. Snoop Dogg <span>(1999)</span></h2>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/sampol/game6" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
