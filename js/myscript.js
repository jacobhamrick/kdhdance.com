
jQuery(document).ready(function() {
  jQuery('.toggle-menu, .nav-link').on('click', function() {
    jQuery('.menu').toggleClass('opensesame');
    jQuery(this).toggleClass('active');
  });
  jQuery('.toggle').on('click', function(){
    jQuery('.menu-hide').removeClass('show');
    jQuery('.menu-tab').removeClass('active');
  });
  


});
