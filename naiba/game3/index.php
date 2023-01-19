<?php
define('TITLE', 'Tunugan - ALIN ANG NAIBA - Game 3');

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
						<figure><img src="../../images/naiba/we-are-young.jpg" alt="we are young" /> <span>A</span></figure>
						<div class="content">
							<h2>fun. <span>We Are Young</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/naiba/empire-state-of-mind.jpg" alt="empire state of mind" /> <span>B</span></figure>
						<div class="content">
							<h2>Jay-Z <span>Empire State of Mind</span></h2>
						</div>
					</section>

					<section class="main_box3 wow fadeInUp">
						<figure><img src="../../images/naiba/special-education.jpg" alt="special education" /> <span>C</span></figure>
						<div class="content">
							<h2>Goodie Mob <span>Special Education</span></h2>
						</div>
					</section>

					<section class="main_box4 wow fadeInUp">
						<figure><img src="../../images/naiba/sweet-life.jpg" alt="sweet life" /> <span>D</span></figure>
						<div class="content">
							<h2>Jeezy <span>Sweet Life</span></h2>
						</div>
					</section>

					<section class="main_box5 wow fadeInUp">
						<figure><img src="../../images/naiba/pressure-off.jpg" alt="pressure off" /> <span>E</span></figure>
						<div class="content">
							<h2>Duran Duran <span>Pressure Off</span></h2>
						</div>
					</section>

					<section class="main_box6 wow zoomIn answer hidden">
						<figure><img src="../../images/naiba/empire-state-of-mind.jpg" alt="empire state of mind" /></figure>
						<div class="content">
							<h3>Jay-Z <span>Empire State of Mind</span></h3>
						</div>
						<div class="content_answer wow flipInY hidden">
							<h1>Janelle Monáe Features</h1>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/naiba/game4" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
