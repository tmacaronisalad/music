<?php
define('TITLE', 'Tunugan - ALIN ANG NAIBA - Game 7');

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
							<h2>Ric Bunga <span>Sway</span></h2>
						</div>
					</section>

					<section class="main_box2 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>B</span></figure>
						<div class="content">
							<h2>Good Charlotte <span>The Anthem</span></h2>
						</div>
					</section>

					<section class="main_box3 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>C</span></figure>
						<div class="content">
							<h2>Blink-182 <span>Everytime I Look For You</span></h2>
						</div>
					</section>

					<section class="main_box4 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>D</span></figure>
						<div class="content">
							<h2>Sum 41 <span>In Too Deep</span></h2>
						</div>
					</section>

					<section class="main_box5 wow fadeInUp">
						<figure><img src="../../images/naiba/thumbnail.jpg" alt="thumbnail" /> <span>E</span></figure>
						<div class="content">
							<h2>Bowling for Soup <span>I Ran (So Far Away)</span></h2>
						</div>
					</section>

					<section class="main_box6 wow zoomIn answer hidden">
						<figure><img src="../../images/naiba/van-wilder.jpg" alt="van-wilder" /></figure>
						<div class="content">
							<h3>Bowling for Soup <span>I Ran (So Far Away)</span></h3>
						</div>
						<div class="content_answer wow flipInY hidden">
							<h1>American Pie Soundtrack</h1>
						</div>
					</section>

				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/naiba/game8" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
