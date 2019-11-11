jQuery(document).ready(function() {

  jQuery('.toggle-menu').on('click', function() {
    jQuery('.menu').toggleClass('opensesame');
    jQuery(this).toggleClass('active')
  });
  jQuery('.toggle').on('click', function(){
    jQuery('.menu-hide').removeClass('show');
    jQuery('.menu-tab').removeClass('active');
  });

  const dancerList = jQuery(".dancer-name");
  const aArray = [];

  for (let i=0; i < dancerList.length; i++) {
    let aChild = dancerList[i];
    let ahref = jQuery(aChild).attr('href');
    aArray.push(ahref);
  }

  jQuery(window).scroll(function(){
    let windowPos = jQuery(window).scrollTop() + (100);
    console.log("windowPOS= " + windowPos);
    let windowHeight = jQuery(window).height();
    let docHeight = jQuery(document).height();
    console.log(`windowPos: jQuery{windowPos}, windowHeight: jQuery{windowHeight}, docHeight: jQuery{docHeight}`)
    for (let i=0; i < aArray.length; i++) {
        const theID = aArray[i];
        let divPos = jQuery(theID).offset().top;
        let divHeight = jQuery(theID).height();
        //change active class for scrollLinks when scrolling thru sections
        if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
            jQuery("a[href='" + theID + "']").addClass("active");
        } else {
            jQuery("a[href='" + theID + "']").removeClass("active");
        }
    }
    if(windowHeight == docHeight) {
      if (!jQuery(".dancer-name").hasClass("active")) {
          var navActiveCurrent = jQuery(".active").attr("href");
          jQuery("a[href='" + navActiveCurrent + "']").removeClass("active");
          jQuery("a.dancer-name").addClass("active");
      }
    }
  }); // end window scroll function

});
