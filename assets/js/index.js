<!------------------------------------------->
<!-- CHANGEMENT LOGO AU SCROLL DE LA PAGE  -->
<!------------------------------------------->
var imgDirectoryFromIndex = 'assets/images';

$(document).scroll( function() {
  if($(document).scrollTop()>50){
    $("#logoPrincipal").attr({src: imgDirectoryFromIndex + "/logo-dark.png",});
  }else{
    $("#logoPrincipal").attr({src: imgDirectoryFromIndex + "/logo-XtremFly.png",});
  }
} );
