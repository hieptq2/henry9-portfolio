<?php
	include_once('includes/variables.php');
  include_once('includes/functions.php');

  $title = "VIJAlink";
  $meta = "Connect human resources of Vietnam with Japanese Enterprises";

  // $background = "body--bg-dark";
?>

<?php include_once('includes/header.php'); ?>


<!-- BEGIN: Resume -->

	<div id="siteContent" class="site-content">
		<section class="section section--project">
			<div class="project project--vijalink">
				<div class="project__header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<div class="project__cover bg-cover" style="background-image: url('includes/vijalink/vijalink__cover.jpg');"></div>
								<div class="project__showcase"><img src="includes/vijalink/vijalink__showcase.png" alt="VIJAlink Showcase"></div>
								<div class="project__heading text-uppercase">
									<h1 class="project__heading__title">VIJA Link</h1>
									<h6 class="project__heading__subtitle">Connect human resources of Vietnam with Japanese Enterprises</h6>
								</div>
								<div class="project__tag">
									<div class="single-tag"><span>Web Design</span></div>
									<div class="single-tag"><span>Front-end Development</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12">
								<div class="text-center">
									<a href="http://vjl.com.vn/" target="_blank" class="launch-website text-uppercase">
										<img src="includes/vijalink/vijalink__logo.png" alt="VIJA Logo"><br>
										<span>Launch Website</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__screenshot pb-0 bg-color-grey-200">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<div class="row">
									<div class="col-xs-6 col-sm-4 mb-12">
										<img src="includes/vijalink/vijalink__screenshot--01.jpg" alt="A365 screenshot" class="d-block">
									</div>
									<div class="col-xs-6 col-sm-4 mb-12">
										<img src="includes/vijalink/vijalink__screenshot--02.jpg" alt="A365 screenshot" class="d-block">
									</div>
									<div class="col-xs-6 col-sm-4 mb-12">
										<img src="includes/vijalink/vijalink__screenshot--03.jpg" alt="A365 screenshot" class="d-block">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-4 mb-12">
										<img src="includes/vijalink/vijalink__screenshot--04.jpg" alt="A365 screenshot" class="d-block">
									</div>
									<div class="col-xs-6 col-sm-4 mb-12">
										<img src="includes/vijalink/vijalink__screenshot--05.jpg" alt="A365 screenshot" class="d-block">
									</div>
									<div class="col-xs-6 col-sm-4 mb-12">
										<img src="includes/vijalink/vijalink__screenshot--06.jpg" alt="A365 screenshot" class="d-block">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-4 mb-12">
										<img src="includes/vijalink/vijalink__screenshot--07.jpg" alt="A365 screenshot" class="d-block">
									</div>
									<div class="col-xs-6 col-sm-4 mb-12">
										<img src="includes/vijalink/vijalink__screenshot--08.jpg" alt="A365 screenshot" class="d-block">
									</div>
									<div class="col-xs-6 col-sm-4 mb-12">
										<img src="includes/vijalink/vijalink__screenshot--09.jpg" alt="A365 screenshot" class="d-block">
									</div>
								</div>
							</div>
						</div>
					</div>
						
				</div>
			</div>
		</section>
		<?php 
			$moreProjects = array(
				'ishopgo',
				'megoin',
				'ez4home'
			);
			seeMoreWork($moreProjects);
		?>
	</div>

<!-- END: Resume -->


<?php include_once('includes/footer.php'); ?>