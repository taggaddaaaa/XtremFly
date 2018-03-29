<!------------------------------------------->
<!-- CHANGEMENT LOGO AU SCROLL DE LA PAGE  -->
<!------------------------------------------->
$(document).scroll( function() {
  if($(document).scrollTop()>50){
    $("#logo").attr({src: "assets/images/logo-dark.png",});
  }else{
    $("#logo").attr({src: "assets/images/logo-XtremFly.png",});
  }
} );
