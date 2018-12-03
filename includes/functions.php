

<!-- START: list work -->
<?php
	function listWork($selectedProjects, $isHomepage = false){ 
		$projects = array(
			'a365' => array(
				'title'			=> 'Autism 365',
				'featured'	=> false,
				'status'		=> 'completed',
				'caption' 	=> 'Early detection of children at risk for autism and developmental disorders.',
				'action'		=> 'View Project'
			),
			'ishopgo' => array(
				'title'			=> 'iShopGo',
				'featured'	=> true,
				'status'		=> 'completed',
				'caption' 	=> 'One suite of 10+ integrated business and productivity applications, provides a complete ERP solution for sales, distribution and manufacturing business for SME.',
				'action'		=> 'View Case Study'
			),
			'vijalink' => array(
				'title'			=> 'ViJaLink',
				'featured'	=> false,
				'status'		=> 'completed',
				'caption' 	=> 'Connects career opportunities from Japanese firms with Vietnamese.',
				'action'		=> 'View Project'
			),
			'mediwhite' => array(
				'title'			=> 'MediWhite',
				'featured'	=> false,
				'status'		=> 'updating',
				'caption' 	=> 'E-commerce website on beauty cosmetics.',
				'action'		=> 'Content Updating'
			),
			'megoin' => array(
				'title'			=> 'Megoin',
				'featured'	=> false,
				'status'		=> 'completed',
				'caption' 	=> 'Location-based social network connects people who share the same interests',
				'action'		=> 'View Case Study'
			),
			'ez4home' => array(
				'title'			=> 'Ez4home',
				'featured'	=> true,
				'status'		=> 'updating',
				'caption' 	=> 'Marketplace and social network, bringing homeowners & professionals together. Nominated tech starup in multiple contests and got funded by VSVA.',
				'action'		=> 'Content Updating'
			),
			'itro' => array(
				'title'			=> 'iTro',
				'featured'	=> false,
				'status'		=> 'completed',
				'caption' 	=> 'Find homes and apartments for rent, filter result by price, neighborhood, price, pets,...',
				'action'		=> 'View Project'
			),
			'pushup' => array(
				'title'			=> 'PushUp',
				'featured'	=> false,
				'status'		=> 'updating',
				'caption' 	=> 'Counts push-ups workout, calculates calories during excercises and makes training plan.',
				'action'		=> 'Content Updating'
			),
			'icheck' => array(
				'title'			=> 'iCheck',
				'featured'	=> false,
				'status'		=> 'updating',
				'caption' 	=> 'E-commerce verion of iCheck',
				'action'		=> 'Content Updating'
			),
			'themebundle' => array(
				'title'			=> 'Theme Bundle',
				'featured'	=> false,
				'status'		=> 'updating',
				'caption' 	=> 'Collection of mockups, app UI <br> and website templates.',
				'action'		=> 'Content Updating'
			),
		);

		foreach ($selectedProjects as $item){
			$value = $projects[$item];
			$col = '4';
			$size = '';
			if($isHomepage && $value['featured'] ){
				$col = '8';
				$size = ' size-lg';
			};
			$action = '';
			$wrapperStart = '';
			$wrapperEnd = '';
			if($value['status'] == 'updating'){
				$wrapperStart = '<div ';
				$wrapperEnd = '</div>';
				$action = '<span class="content-updating">'.$value['action'].'</span>';
			}else{
				$wrapperStart = '<a href="'.$item.'" ';
				$wrapperEnd = '</a>';
				$action = '<span>'.$value['action'].'</span>';
			}
?>
	<div class="col-xs-12 col-sm-<?php echo $col ?>">
		<?php echo $wrapperStart; ?>class="single-project<?php echo $size; ?>" style="background-image: url('includes/<?php echo $item; ?>/<?php echo $item; ?>__thumbnail.jpg')">
			<div class="single-project__logo"><img src="includes/<?php echo $item; ?>/<?php echo $item; ?>__logo--light.png" alt="<?php echo $value['title']; ?>"></div>
			<div class="single-project__description">
				<div class="single-project__caption"><?php echo $value['caption']; ?></div>
				<div class="single-project__button"><?php echo $action; ?></div>
			</div>
		<?php echo $wrapperEnd; ?>
	</div>
<?php 
		}
	} 
?>
<!-- END: list work -->


<!-- START: See more work -->
<?php 
	function seeMoreWork($selectedProjects){ 
		global $baseURL;
?>
	
	<section class="section section--see-more-work">
		<div class="container container--has-mw-on-xs">
			<div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">
					<div class="section__header">
						<div class="section__heading">
							<h1 class="section__heading__title">See more</h1>
							<h6 class="section__heading__subtitle">or see the <a href="<?php echo $baseURL; ?>?section=work"">full list</a> of works</h6>
						</div>
					</div>
					<div class="section-content">
						<div class="my-projects">
							<div class="row">
								<?php listWork($selectedProjects); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
<!-- END: See more work -->