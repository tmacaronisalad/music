<?php
define('TITLE', 'Tunugan - ALIN ANG NAIBA - Game 9');

require('../../constant.php');

include('../../header.php');

$data->game_type = 'alin_ang_naiba';
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<div class="main_boxes">

					<section class="main_box1 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>A</span></figure>
						<div class="content">
							<h2>Jovit Baldivino <span>Mula Sa Puso</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>B</span></figure>
						<div class="content">
							<h2>Gary Valenciano <span>Wag Ka Nang Umiyak</span></h2>
						</div>
					</section>

					<section class="main_box3 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>C</span></figure>
						<div class="content">
							<h2>Erik Santos <span>Maging Sino Ka Man</span></h2>
						</div>
					</section>

					<section class="main_box4 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>D</span></figure>
						<div class="content">
							<h2>Sexbomb Girls <span>Daisy Siete</span></h2>
						</div>
					</section>

					<section class="main_box5 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>E</span></figure>
						<div class="content">
							<h2>Sandwich <span>Zaido</span></h2>
						</div>
					</section>

					<section class="main_box6 wow zoomIn answer hidden">
						<figure><img src="../../images/naiba/ang-probinsyano.jpg" alt="ang-probinsyano" /></figure>
						<div class="content">
							<h3>Gary Valenciano <span>Wag Ka Nang Umiyak</span></h3>
						</div>
						<div class="content_answer wow flipInY hidden">
							<h1>TV Program Titles</h1>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/naiba/game10" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
