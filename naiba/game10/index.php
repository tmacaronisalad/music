<?php
define('TITLE', 'Tunugan - ALIN ANG NAIBA - Game 10');

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
							<h2>That Time of Year</h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>B</span></figure>
						<div class="content">
							<h2>A Wish On Christmas Night</h2>
						</div>
					</section>

					<section class="main_box3 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>C</span></figure>
						<div class="content">
							<h2>Christmas In Our Hearts</h2>
						</div>
					</section>

					<section class="main_box4 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>D</span></figure>
						<div class="content">
							<h2>This Beautiful Day</h2>
						</div>
					</section>

					<section class="main_box5 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>E</span></figure>
						<div class="content">
							<h2>Give Me Your Heart For Christmas</h2>
						</div>
					</section>

					<section class="main_box6 wow zoomIn answer hidden">
						<figure><img src="../../images/naiba/that-time-of-year.jpg" alt="that-time-of-year" /></figure>
						<div class="content">
							<h3>Jose Mari Chan <span>That Time of Year</span></h3>
						</div>
						<div class="content_answer wow flipInY hidden">
							<h1>Christmas in Our Hearts Album</h1>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
