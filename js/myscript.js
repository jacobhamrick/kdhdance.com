jQuery(document).ready(function() {

  jQuery('.toggle-menu').on('click', function() {
    jQuery('.menu').toggleClass('openSesame');
    jQuery(this).toggleClass('active');
  });
  jQuery('.toggle').on('click', function(){
    jQuery('.menu-hide').removeClass('show');
    jQuery('.menu-tab').removeClass('active');
  });
  
});
