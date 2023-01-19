<?php
define('TITLE', 'Tunugan - ALIN ANG NAIBA - Game 4');

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
							<h2>When You Believe</h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>B</span></figure>
						<div class="content">
							<h2>Endless Love</h2>
						</div>
					</section>

					<section class="main_box3 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>C</span></figure>
						<div class="content">
							<h2>We Could Be In Love</h2>
						</div>
					</section>

					<section class="main_box4 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>D</span></figure>
						<div class="content">
							<h2>Somewhere Out There</h2>
						</div>
					</section>

					<section class="main_box5 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>E</span></figure>
						<div class="content">
							<h2>Suddenly</h2>
						</div>
					</section>

					<section class="main_box6 wow zoomIn answer hidden">
						<figure><img src="../../images/naiba/when-you-believe.jpg" alt="when-you-believe" /></figure>
						<div class="content">
							<h3>Mariah Carey & Whitney Houston <span>When You Believe</span></h3>
						</div>
						<div class="content_answer wow flipInY hidden">
							<h1>Male-Female Duet</h1>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/naiba/game5" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
