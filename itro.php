<?php
	include_once('includes/variables.php');
  include_once('includes/functions.php');

  $title = "iTro";
  $meta = "Find homes and apartments for rent";

  // $background = "body--bg-dark";
?>

<?php include_once('includes/header.php'); ?>


<!-- BEGIN: Resume -->

	<div id="siteContent" class="site-content">
		<section class="section section--project">
			<div class="project project--itro">
				<div class="project__header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<div class="project__cover bg-cover" style="background-image: url('includes/itro/itro__cover.jpg');"></div>
								<div class="project__showcase"><img src="includes/itro/itro__showcase.png" alt="iTro Showcase"></div>
								<div class="project__heading text-uppercase">
									<h1 class="project__heading__title">Find homes and apartments for rent</h1>
									<h6 class="project__heading__subtitle">Filter result by price, neighborhood, price, pets,...</h6>
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
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<div class="text-center mt-12">
									<a href="https://itro.vn/" target="_blank" class="launch-website text-uppercase">
										<img src="includes/itro/itro__logo.png" alt="iTro Logo" width="72px"><br>
										<span>Launch Website</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__screenshot bg-color-grey-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-lg-8 col-lg-offset-2">
								<div class="row">
									<div class="col-xs-12">
										<img src="includes/itro/itro__screenshot--home.jpg" alt="iTro Homepage" class="d-block mb-12">
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
				'megoin',
				'vijalink',
				'a365'
			);
			seeMoreWork($moreProjects, true);
		?>
	</div>

<!-- END: Resume -->


<?php include_once('includes/footer.php'); ?>