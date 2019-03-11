jQuery(document).ready(function() {
  jQuery(".toggle-menu").on('click', function() {
    jQuery(this).toggleClass("active");
    jQuery('.menu').toggleClass("openSesame");
    var openSesame = jQuery('.menu').hasClass("openSesame");
    jQuery('.menu').animate({ marginLeft: openSesame ? '0' : '100%'}, 500);
  });
});
