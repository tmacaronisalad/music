<?php
define('TITLE', 'Tunugan - SAMPOL SAMPOL - Game 3');

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
						<figure><img src="../../images/sampol/nsync.jpg" alt="nsync" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/it-makes-me-ill.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>NSYNC - It Makes Me Ill <span>(2000)</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/sampol/ariana-grande.jpg" alt="ariana grande" /></figure>
						<audio controls>
							<source src="../../mp3/sampol/break-up-with-your-girlfriend-im-bored.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<div class="hidden content wow zoomIn">
							<h2>Ariana Grande - break up with your girlfriend, i’m bored <span>(2019)</span></h2>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/sampol/game4" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
