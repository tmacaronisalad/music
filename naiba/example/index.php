<?php
define('TITLE', 'Tunugan - ALIN ANG NAIBA - Warm Up');

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
						<figure><img src="../../images/naiba/lose-yourself.jpg" alt="lose yourself" /> <span>A</span></figure>
						<div class="content">
							<h2>Eminem <span>Lose Yourself</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/naiba/circle-of-life.jpg" alt="circle of life" /> <span>B</span></figure>
						<div class="content">
							<h2>Elton John <span>Circle of Life</span></h2>
						</div>
					</section>

					<section class="main_box3 wow fadeInUp">
						<figure><img src="../../images/naiba/my-heart-will-go-on.jpg" alt="my heart will go on" /> <span>C</span></figure>
						<div class="content">
							<h2>Celine Dion <span>My Heart Will Go On</span></h2>
						</div>
					</section>

					<section class="main_box4 wow fadeInUp">
						<figure><img src="../../images/naiba/shallow.jpg" alt="shallow" /> <span>D</span></figure>
						<div class="content">
							<h2>Lady Gaga <span>Shallow</span></h2>
						</div>
					</section>

					<section class="main_box5 wow fadeInUp">
						<figure><img src="../../images/naiba/youll-be-in-my-heart.jpg" alt="youll be in my heart" /> <span>E</span></figure>
						<div class="content">
							<h2>Phil Collins <span>You'll Be in My Heart</span></h2>
						</div>
					</section>

					<section class="main_box6 wow zoomIn answer hidden">
						<figure><img src="../../images/naiba/circle-of-life.jpg" alt="circle of life" /></figure>
						<div class="content">
							<h3>Elton John <span>Circle of Life</span></h3>
						</div>
						<div class="content_answer wow flipInY hidden">
							<h1>Best Original Song Winners</h1>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/naiba/game1" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
