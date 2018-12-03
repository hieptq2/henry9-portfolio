<?php
	include_once('includes/variables.php');
  include_once('includes/functions.php');

  $title = "Ez4home";
  $meta = "The new way to design your home";

  // $background = "body--bg-dark";
?>

<?php include_once('includes/header.php'); ?>


<!-- BEGIN: Resume -->

	<div id="siteContent" class="site-content">
		<section class="section section--project">
			<div class="project project--ez4home">
				<div class="project__header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<div class="project__cover bg-cover" style="background-image: url('includes/ez4home/ez4home__cover.jpg');">
									<div class="project__cover__slogan">Get inspired. <br class="visible-xs-inline">Design your home. <br class="visible-xs-inline">Shop Products.</div>
								</div>
								<div class="project__heading text-uppercase">
									<h1 class="project__heading__title">The easiest way to design your home</h1>
									<h6 class="project__heading__subtitle">And lessons learned from failed startup.</h6>
								</div>
								<div class="project__tag">
									<div class="single-tag"><span>Web Design</span></div>
									<div class="single-tag"><span>Front-end Development</span></div>
									<div class="single-tag"><span>Startup Project</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12 col-lg-5">
								<div class="embed-responsive embed-responsive-16by9">
								  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xwvMNned4Y8" frameborder="0" allow=""></iframe>
								</div>
							</div>
							<div class="col-xs-12 col-lg-6">
								<h2 class="mt-0">The Oppoturnity</h2>
								<p>I met <b>Hieu Le</b> and <b>Tung Nguyen</b>. </p>
								<p>- <i>"That's the idea, and I need your help". <br>- "Yes, I'm in, tell me more".</i></p>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content bg-color-grey-100">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12 col-lg-6 col-lg-offset-1">
								<h2 class="mt-0">The Idea</h2>
								<p>EZ4HOME is an e-commerce website about housing interior. Ez4home provided free for those wishing to do interior renovation, have many choices, looking for the best enterprise  related to architectural , constractor ,furniture and building material.</p>
							</div>
							<div class="col-xs-12 col-lg-5">
								<div class="embed-responsive embed-responsive-16by9">
								  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/py8UdBog9zc?showinfo=0" frameborder="0" allow=""></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<h2 class="mt-0 text-center">The Product & Challenges</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content bg-color-grey-100">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<h2 class="mt-0">The Product & Challenges</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<div class="row">
									<div class="col-xs-12 col-md-7">
										<h2 class="mt-0">Outcome</h2>
										<p>Like all startups we believed in metrics and we thought we were making all the right decisions. With the relaunch of the site, we garnered a lot of attention from big players in the industry and the feedback from our customers was overwhelmingly positive.</p>
										<p>All the arrows were pointing up, but the business ultimately failed for all the clichéd entrepreneurial reasons: financial instability, time pressures, scalability, founder disagreements, etc. Even with the unsatisfactory outcome, it's been one of the most rewarding experiences in my life. The rollercoaster ride pushed me to the boundaries of my comfort zones, forcing me to acquire skills outside the areas of my expertise and reminded me of one of the most important lessons to be learned. At the root of all success is constant and continous failure. It's what we choose to do next that matters. Well... I guess it's on to the next one.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content bg-color-grey-200"></div>
			</div>
		</section>
		<?php 
			$moreProjects = array(
				'pushup',
				'ishopgo', 
				'megoin'
			);
			seeMoreWork($moreProjects);
		?>
	</div>

<!-- END: Resume -->


<?php include_once('includes/footer.php'); ?>