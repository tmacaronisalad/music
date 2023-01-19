<?php
define('TITLE', 'Tunugan - KOMPOSTORYA - Warm Up');

require('../../constant.php');

include('../../header.php');

$data->game_type = 'film_score';
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<div class="main_content wow fadeInUp">
					<div class="main_imgs">
						<div class="main_box1">
							<figure class="main1_img1"><img src="../../images/film/thumbnail-composer.jpg" alt="guess the composer" /></figure>
							<figure class="main1_img2 wow flipInY hidden"><img src="../../images/film/alan-silvestri.jpg" alt="alan silvestri" /></figure>
						</div>
						<div class="main_box2">
							<figure class="main2_img1"><img src="../../images/film/thumbnail-movie.jpg" alt="guess the movie" /></figure>
							<figure class="main2_img2 wow flipInY hidden"><img src="../../images/film/forrest-gump.jpg" alt="forrest gump" /></figure>
						</div>
					</div>

					<audio controls>
						<source src="../../mp3/film/im-forrest-forrest-gump.mp3" type="audio/mpeg">
						Your browser does not support the audio element.
					</audio>

					<div class="content wow zoomIn hidden">
						<h2>Alan Silvestri / Forrest Gump (1994)</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/film/game1" class="next disabled1">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
