<?php
	include_once('includes/variables.php');
  include_once('includes/functions.php');

  $title = "A365";
  $meta = "Autism Support Center for Individuals and Families.";

  // $background = "body--bg-dark";
?>

<?php include_once('includes/header.php'); ?>


<!-- BEGIN: Resume -->

	<div id="siteContent" class="site-content">
		<section class="section section--project">
			<div class="project project--a365">
				<div class="project__header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<div class="project__cover bg-cover" style="background-image: url('includes/a365/a365__cover.jpg');"></div>
								<div class="project__showcase"><img src="includes/a365/a365__showcase.png" alt="A365 Showcase"></div>
								<div class="project__heading text-uppercase">
									<h1 class="project__heading__title">Autism Support Center for Individuals and Families</h1>
									<h6 class="project__heading__subtitle">Connect people with autism, their families, and caretakers to information, tools, and resources.</h6>
								</div>
								<div class="project__tag">
									<div class="single-tag"><span>UI Design</span></div>
									<div class="single-tag"><span>Front-End Development</span></div>
									<div class="single-tag"><span>Wordpress Theme Development</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12 col-lg-8 col-lg-offset-1">
								<p>The A365 (short for Autism365) supports parents and other family members, medical workers, teachers and other professionals working with children. A365 was developed by the Center for Creative Initiatives in Health and Population (CCIHP), Vietnam Autism Network (VAN) and Intelligent Applications for Autism project, gathering national and international experts in coordination. Grand Challenges Canada Foundation is a major sponsor from 2014-2016.</p>
							</div>
							<div class="col-xs-12 col-lg-2">
								<div class="text-center mt-12">
									<a href="https://a365.vn/" target="_blank" class="launch-website text-uppercase">
										<img src="includes/a365/a365__logo.png" alt="A365 Logo"><br>
										<span>Launch Website</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__screenshot">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-lg-8 col-lg-offset-2">
								<div class="row">
									<div class="col-xs-12">
										<img src="includes/a365/a365__screenshot--home.jpg" alt="A365 Homepage" class="d-block mb-12">
									</div>
									<div class="col-xs-6">
										<img src="includes/a365/a365__screenshot--01.jpg" alt="A365 screenshot" class="d-block mb-12">
										<img src="includes/a365/a365__screenshot--02.jpg" alt="A365 screenshot" class="d-block mb-12">
										<img src="includes/a365/a365__screenshot--03.jpg" alt="A365 screenshot" class="d-block">
									</div>
									<div class="col-xs-6">
										<img src="includes/a365/a365__screenshot--05.jpg" alt="A365 screenshot" class="d-block mb-12">
										<img src="includes/a365/a365__screenshot--04.jpg" alt="A365 screenshot" class="d-block mb-12">
										<img src="includes/a365/a365__screenshot--06.jpg" alt="A365 screenshot" class="d-block">
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
				'vijalink',
				'ishopgo',
				'megoin'
			);
			seeMoreWork($moreProjects);
		?>
	</div>

<!-- END: Resume -->


<?php include_once('includes/footer.php'); ?>