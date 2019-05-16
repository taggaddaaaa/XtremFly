<!------------------------------------------->
<!-- CHANGEMENT LOGO AU SCROLL DE LA PAGE  -->
<!------------------------------------------->
let srcLogoDark = '../../assets/images/logo-dark.png';
let srcLogoNormal = '../../assets/images/logo-XtremFly.png';

// on donne une valeur à l'attribut source de la balise img dans le fichier nav.php suivant l'url de la page en cours
$("#logoPrincipal").attr({src: srcLogoNormal});
$("#logoUK").attr({src: srcLogoNormal});
$("#logoGroups").attr({src: srcLogoDark});

// on change cette valeur si besoin au scroll de la page. Cela permet de changer le logo suivant si le fond est noir ou blanc
$(document).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $("#logoPrincipal").attr({src: srcLogoDark});
        $("#logoUK").attr({src: srcLogoDark});
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
