<!------------------------------------------->
<!-- CHANGEMENT LOGO AU SCROLL DE LA PAGE  -->
<!------------------------------------------->
let imgDirectoryFromIndex = 'assets/images';
let imgDirectoryFromVues = '../assets/images';

$(document).scroll( function() {
  if($(document).scrollTop()>50){
    $("#logoPrincipal").attr({src: imgDirectoryFromIndex + "/logo-dark.png",});
  }else{
    $("#logoPrincipal").attr({src: imgDirectoryFromIndex + "/logo-XtremFly.png",});
  }
} );


$(document).scroll( function() {
  if($(document).scrollTop()>50){
    $("#logoPrincipalUK").attr({src: imgDirectoryFromVues + "/logo-dark.png",});
  }else{
    $("#logoPrincipalUK").attr({src: imgDirectoryFromVues + "/logo-XtremFly.png",});
  }
} );
