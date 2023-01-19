<?php
define('TITLE', 'Tunugan - ALIN ANG NAIBA - Game 6');

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
						<figure><img src="../../images/naiba/olivia-rodrigo.jpg" alt="olivia rodrigo" /> <span>A</span></figure>
						<div class="content">
							<h2>Olivia Rodrigo</h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/naiba/50-cent.jpg" alt="50 cent" /> <span>B</span></figure>
						<div class="content">
							<h2>50 Cent</h2>
						</div>
					</section>

					<section class="main_box3 wow fadeInUp">
						<figure><img src="../../images/naiba/dua-lipa.jpg" alt="dua lipa" /> <span>C</span></figure>
						<div class="content">
							<h2>Dua Lipa</h2>
						</div>
					</section>

					<section class="main_box4 wow fadeInUp">
						<figure><img src="../../images/naiba/chance-the-rapper.jpg" alt="chance the rapper" /> <span>D</span></figure>
						<div class="content">
							<h2>Chance the Rapper</h2>
						</div>
					</section>

					<section class="main_box5 wow fadeInUp">
						<figure><img src="../../images/naiba/laury-hill.jpg" alt="laury-hill" /> <span>E</span></figure>
						<div class="content">
							<h2>Lauryn Hill</h2>
						</div>
					</section>

					<section class="main_box6 wow zoomIn answer hidden">
						<figure><img src="../../images/naiba/50-cent.jpg" alt="50-cent" /></figure>
						<div class="content">
							<h3>50 Cent</h3>
						</div>
						<div class="content_answer wow flipInY hidden">
							<h1>Best New Artist Winners</h1>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/naiba/game7" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
