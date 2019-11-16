jQuery(document).ready(function() {
  jQuery('.toggle-menu, .nav-link').on('click', function() {
    jQuery('.menu').toggleClass('opensesame');
    jQuery(this).toggleClass('active');
  });
  jQuery('.toggle').on('click', function(){
    jQuery('.menu-hide').removeClass('show');
    jQuery('.menu-tab').removeClass('active');
  });
  jQuery('.nav-link').on('click', function() {
    jQuery('#body-wrapper').toggleClass('loading');
  });

});

jQuery(window).on('load', function() {
  jQuery('#loader').addClass('loaded');
  jQuery("#body-wrapper").delay(1000).removeClass('loading');
});
