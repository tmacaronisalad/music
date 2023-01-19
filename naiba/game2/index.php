<?php
define('TITLE', 'Tunugan - ALIN ANG NAIBA - Game 2');

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
						<figure><img src="../../images/naiba/revival.jpg" alt="revival" /> <span>A</span></figure>
						<div class="content">
							<h2>Selena Gomez <span>Revival</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/naiba/doo-wops-and-hooligans.jpg" alt="doo wops and hooligans" /> <span>B</span></figure>
						<div class="content">
							<h2>Bruno Mars <span>Talking to the Moon</span></h2>
						</div>
					</section>

					<section class="main_box3 wow fadeInUp">
						<figure><img src="../../images/naiba/to-pimp-a-butterfly.jpg" alt="to pimp a butterfly" /> <span>C</span></figure>
						<div class="content">
							<h2>Kendrick Lamar <span>Wesley's Theory</span></h2>
						</div>
					</section>

					<section class="main_box4 wow fadeInUp">
						<figure><img src="../../images/naiba/the-spirit-room.jpg" alt="the-spirit-room" /> <span>D</span></figure>
						<div class="content">
							<h2>Michelle Branch <span>Everywhere</span></h2>
						</div>
					</section>

					<section class="main_box5 wow fadeInUp">
						<figure><img src="../../images/naiba/drops-of-jupiter.jpg" alt="drops-of-jupiter" /> <span>E</span></figure>
						<div class="content">
							<h2>Train <span>She's on Fire</span></h2>
						</div>
					</section>

					<section class="main_box6 wow zoomIn answer hidden">
						<figure><img src="../../images/naiba/doo-wops-and-hooligans.jpg" alt="doo wops and hooligans" /></figure>
						<div class="content">
							<h3>Bruno Mars <span>Talking to the Moon</span></h3>
						</div>
						<div class="content_answer wow flipInY hidden">
							<h1>Album Opening</h1>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/naiba/game3" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
