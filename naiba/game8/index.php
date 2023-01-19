<?php
define('TITLE', 'Tunugan - ALIN ANG NAIBA - Game 8');

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
						<figure><img src="../../images/naiba/walk-like-an-egyptian.jpg" alt="walk like an egyptian" /> <span>A</span></figure>
						<div class="content">
							<h2>The Bangles <span>Walk Like an Egyptian</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/naiba/i-want-you.jpg" alt="i want you" /> <span>B</span></figure>
						<div class="content">
							<h2>Savage Garden <span>I Want You</span></h2>
						</div>
					</section>

					<section class="main_box3 wow fadeInUp">
						<figure><img src="../../images/naiba/the-great-pretender.jpg" alt="the great pretender" /> <span>C</span></figure>
						<div class="content">
							<h2>Freddie Mercury <span>The Great Pretender</span></h2>
						</div>
					</section>

					<section class="main_box4 wow fadeInUp">
						<figure><img src="../../images/naiba/freekn-you.jpg" alt="freekn you" /> <span>D</span></figure>
						<div class="content">
							<h2>Jodeci <span>Freek'N You</span></h2>
						</div>
					</section>

					<section class="main_box5 wow fadeInUp">
						<figure><img src="../../images/naiba/roundabout.jpg" alt="roundabout" /> <span>E</span></figure>
						<div class="content">
							<h2>Yes <span>Roundabout</span></h2>
						</div>
					</section>

					<section class="main_box6 wow zoomIn answer hidden">
						<figure><img src="../../images/naiba/great-pretender.jpg" alt="great pretender" /></figure>
						<div class="content">
							<h3>Freddie Mercury <span>The Great Pretender</span></h3>
						</div>
						<div class="content_answer wow flipInY hidden">
							<h1>Jojo Ending Songs</h1>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/naiba/game9" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
