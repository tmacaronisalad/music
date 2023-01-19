<?php
define('TITLE', 'Tunugan - ALIN ANG NAIBA - Game 1');

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
						<figure><img src="../../images/naiba/all-of-the-lights.jpg" alt="all of the lights" /> <span>A</span></figure>
						<div class="content">
							<h2>Kanye West <span>All of the Lights</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/naiba/flashlight.jpg" alt="flashlight" /> <span>B</span></figure>
						<div class="content">
							<h2>Jessie J. <span>Flashlight</span></h2>
						</div>
					</section>

					<section class="main_box3 wow fadeInUp">
						<figure><img src="../../images/naiba/lighters.jpg" alt="lighters" /> <span>C</span></figure>
						<div class="content">
							<h2>Bad Meets Evil <span>Lighters</span></h2>
						</div>
					</section>

					<section class="main_box4 wow fadeInUp">
						<figure><img src="../../images/naiba/set-fire-to-the-rain.jpg" alt="set fire to the rain" /> <span>D</span></figure>
						<div class="content">
							<h2>Adele <span>Set Fire To The Rain</span></h2>
						</div>
					</section>

					<section class="main_box5 wow fadeInUp">
						<figure><img src="../../images/naiba/blinding-lights.jpg" alt="blinding lights" /> <span>E</span></figure>
						<div class="content">
							<h2>The Weeknd <span>Blinding Lights</span></h2>
						</div>
					</section>

					<section class="main_box6 wow zoomIn answer hidden">
						<figure><img src="../../images/naiba/set-fire-to-the-rain.jpg" alt="set fire to the rain" /></figure>
						<div class="content">
							<h3>Adele <span>Set Fire To The Rain</span></h3>
						</div>
						<div class="content_answer wow flipInY hidden">
							<h1>Light</h1>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/naiba/game2" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
