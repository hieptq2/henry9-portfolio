// main.js

jQuery(document).ready(function() {

  // FadeIn when page load
  // $('#siteContainer').fadeIn(500);

	// -----------------------
	// Scroll
  function scrollTo($element, $time = 1000){
  	$('html, body').stop().animate({
      scrollTop: $($element).offset().top - 96
    }, $time, 'easeInOutCubic');
  };

  if($('.site-header').hasClass('site-header--home')){
  	var $currentURL = window.location.href; 
  	var $siteURL = $currentURL.split("?")[0];
  	var $id = $currentURL.split("=")[1];
  	if($id){
      scrollTo('#' + $id);
  		window.setTimeout(function() {
			  window.history.replaceState(null, null, $siteURL);
			}, 100);
  	}
  }
  $('.site-header--home .menu__link').click(function(e){
  	e.preventDefault();
  	$href = $(this).attr("href");
    $id = $href.split("=")[1];
  	scrollTo('#' + $id);
  });


  // -----------------------
  // Delay Click
  $('a').not('.site-header--home .menu__link').not('.no-redirect').click(function (e) {
    e.preventDefault();
    var target = $(this).attr('target');
    var href = $(this).attr('href');
    // var fancybox = $(this).attr('');

    if(target=='_blank'){
      window.open(href, '_blank');
    }else{
      $('.preloader').addClass('active');
      $('#siteContainer').delay(1000).fadeOut(500);
      setTimeout(function(){
        window.location = href;
      }, 2000);
    }  
  }); 


  //
  // Fake notification
  $('button.contact-form__submit').click(function(e){
    e.preventDefault();
    setTimeout(function() {
      $('.contact-form__notify')
        .addClass('error')
        .html('<span class="notify-icon">&#x2639;</span><span class="notify-text">Oh damn, something went wrong, <br> please contact me in another way.</span>');
      }, 2000);
  });

});