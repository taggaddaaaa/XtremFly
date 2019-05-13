<!------------------------------------------->
<!-- CHANGEMENT LOGO AU SCROLL DE LA PAGE  -->
<!------------------------------------------->
let imgDirectoryFromIndex = 'assets/images';
let imgDirectoryFromVues = '../assets/images';

$(document).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $("#logoPrincipal").attr({src: imgDirectoryFromIndex + "/logo-dark.png",});
    } else {
        $("#logoPrincipal").attr({src: imgDirectoryFromIndex + "/logo-XtremFly.png",});
    }
});


$(document).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $("#logoPrincipalUK").attr({src: imgDirectoryFromVues + "/logo-dark.png",});
    } else {
        $("#logoPrincipalUK").attr({src: imgDirectoryFromVues + "/logo-XtremFly.png",});
    }
});


<!------------------------------------------->
<!-- TRY TO MAKE SOME RULES ON FORM INPUTS -->
<!------------------------------------------->
//Dans un input avec cette classe 'alpha-only', on accepte seulement les lettres et autres caracteres d'edition de texte
$(".alpha-only")
    .on("keydown", function (event) {
        // Ignore controls such as backspace
        let arr = [8, 16, 17, 20, 35, 36, 37, 38, 39, 40, 45, 46];

        // Allow letters
        for (let i = 65; i <= 90; i++) {
            arr.push(i);
        }

        if (jQuery.inArray(event.which, arr) === -1) {
            event.preventDefault();
        }
    })
    .on("input", function () {
        let regexp = /[^a-zA-Z]/g;
    });
