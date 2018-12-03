<?php
	include_once('includes/variables.php');
  include_once('includes/functions.php');

  $title = "Megoin";
  $meta = "Making new friends by going to your favorite places.";

  // $background = "body--bg-dark";
?>

<?php include_once('includes/header.php'); ?>


<!-- BEGIN: Resume -->

	<div id="siteContent" class="site-content">
		<section class="section section--project">
			<div class="project project--megoin">
				<div class="project__header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<div class="project__cover bg-cover" style="background-image: url('includes/megoin/megoin__cover.jpg');"></div>
								<div class="project__showcase"><img src="includes/megoin/megoin__showcase.png" alt="Megoin Showcase"></div>
								<div class="project__heading text-uppercase">
									<h1 class="project__heading__title">Making new friends by going to your favorite places</h1>
									<h6 class="project__heading__subtitle">Discovering things is better when having companies</h6>
								</div>
								<div class="project__tag">
									<div class="single-tag"><span>App Design</span></div>
									<div class="single-tag"><span>Startup Project</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<p><b>Megoin</b> is a location-based social network and recommender system that will be available on both web or via iOS and Android platform, which allows users to research places around, read reviews and tips from its community, connect people who share the same interests, and local businesses with their ideal customers.  Megoin helps you not only find amazing places to explore, but also great people to share these experiences with, because <i>“Discovering things is better when having companies”</i>. It's easy, friendly and super fun.</p>
							</div>
						</div>
						<div class="row mt-24">
							<div class="col-xs-12 col-md-8 col-md-offset-2">
								<img src="includes/megoin/megoin__preview.jpg" alt="Megoin Screenshot" class="d-block mb-12">
							</div>
						</div>
					</div>
				</div>
				<div class="project__content bg-color-grey-50 mb-0">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<p>By taking into account the places where a user goes, their tastes, activities or the things they have told the app that they like, Megoin provides for its users: recommended places to go or groups to join, near user’s current or selected location. Megoin manages strictly information and status of venues, helps users avoid scams, spams or waste time for non-exist or closed places. Rather than browsing and searching for destinations and information, users can choose to post questions in a forum-like format in which other users can then reply and provide specific answers.</p>
							</div>
						</div>
						<div class="row mt-24">
							<div class="col-xs-12 col-md-8 col-md-offset-2">
								<img src="includes/megoin/megoin__step.png" alt="Megoin Screenshot" class="d-block mb-12">
							</div>
						</div>
					</div>
				</div>
				<div class="project__content my-0">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1">
								<div class="row">
									<div class="col-xs-12 col-sm-5">
										<blockquote class="my-12"><i>“ Social location services tops the areas of interest for marketers, with 48% saying they're interested in using social apps and location technologies to drive customers in store. ”</i></blockquote>
									</div>
									<div class="col-xs-12 col-sm-7">
										<p><b>Megoin for Business</b> is a suite of tools for businesses to manage their listing on the service. After creating / claiming and verifying business, the owner can access Megoin’s Business Tools. Promote business with a platform designed to attract customers: reach the right people, at the right time: Create advertising campaigns and see visitor statistics, Enable reservation online functions and Access advanced features in Business Manager Tools.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content bg-color-grey-50 pt-24 pb-0">
					<div class="container container--has-mw-on-xs">
						<div class="row">
							<div class="col-xs-12 col-lg-10 col-lg-offset-1 text-center">
								<h3 class="mt-0 ls-1 text-uppercase">The Team</h3>
								<div class="team-member mt-24"><img src="includes/megoin/megoin__team.png" alt="Megoin Team"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="project__content py-12 bg-color-grey-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 text-center">
								<div class="team-member"><img src="includes/megoin/megoin__vietchallenge.jpg" alt="Megoin Team"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php 
			$moreProjects = array(
				'ishopgo',
				'a365',
				'ez4home'
			);
			seeMoreWork($moreProjects, true);
		?>
	</div>

<!-- END: Resume -->


<?php include_once('includes/footer.php'); ?>