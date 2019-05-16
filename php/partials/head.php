<?php
//------------------------------------------->
//--         VARIABLES GLOBALES            -->
//------------------------------------------->
$url         = $_SERVER['REQUEST_URI'];
$isUK        = false;
$urlXtremfly = "https://www.xtremfly.fr";


//------------------------------------------->
//--        DEFAULT VARIABLES METAS        -->
//------------------------------------------->
$webSiteTitle = "XtremFly - Parachute ascensionnel";
//DESC: 200 caracteres maximum
$webSiteDescription = "Avec XTREMFLY envolez-vous et goûtez au plaisir extrême du parachute ascensionnel en découvrant les merveilles du bassin d’Arcachon.";
$twitterPseudo      = "@xtremfly";
$twitterCreator     = "@taggaddaaaa";
$webSiteName        = "XtremFly";
$publisher          = "Ionos";
$email              = "contact@xtremfly.fr";
$author             = "Sabine Caizergues";
//ROBOTS: Permet de spécifier les répertoires à référencer ou à exclure lorsque les robots des moteurs examineront le site.
$robots = "<meta name=\"robots\" content=\"index, follow\">";
//URL: Compatible avec tous moteurs. Permets de specifier l'url du site'
$urlWebSite = "<meta name=\"identifier-url\" content=\"https://www.xtremfly.fr\">";
//------------------------------------------->
//--     END DEFAULT VARIABLES METAS       -->
//------------------------------------------->


//------------------------------------------->
//--        SPECIFIC METAS FROM URL        -->
//------------------------------------------->
switch ( true ) {
	case strpos( $url, 'UK' ):
		$webSiteTitle       = "XtremFly - Parasailing in Arcachon, France";
		$webSiteDescription = "With XTREMFLY fly away and taste the extreme pleasure of the parasailing by discovering
          the marvels of the Bay of Arcachon.";
		$isUK               = true;
		break;
	case strpos( $url, 'pros' ):
		$webSiteDescription = "Venez faire du Parachute ascensionnel avec toute votre équipe de travail. Team Building, 
		incentive sur le Bassin d'Arcachon.";
		break;
	case strpos( $url, 'evj' ):
		$webSiteDescription = "Un enterrement de vie de jeune fille ou garçon inoubliable avec Xtremfly.";
		break;
	case strpos( $url, 'anniversaire' ):
		$webSiteDescription = "Faites-lui plaisir pour son anniversaire avec un vol inoubliable en parachute ascensionnel au dessus 
		du Bassin d'Arcachon.";
		break;
}
?>

<head>
    <!-- COMMON TAGS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
    <meta name="publisher" content="<?= $publisher ?>"/>
    <meta name="reply-to" content="<?= $email ?>">
    <meta name="author" lang="fr" content="<?= $author ?>">
	<?= $robots ?>
	<?= $urlWebSite ?>

    <meta charset="UTF-8"/>

    <title><?= $webSiteTitle ?></title>

    <!-- Search Engine -->
    <meta name="description" content="<?= $webSiteDescription ?>">
    <meta name="image" content="<?= $urlXtremfly ?>/assets/images/img-header.jpg">

    <!-- Schema.org for Google -->
    <meta property="name" content="<?= $webSiteTitle ?>">
    <meta property="description" content="<?= $webSiteDescription ?>">
    <meta property="image" content="<?= $urlXtremfly ?>/assets/images/img-header.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= $webSiteTitle ?>">
    <meta name="twitter:description" content="<?= $webSiteDescription ?>">
    <meta name="twitter:site" content="<?= $twitterPseudo ?>">
    <meta name="twitter:creator" content="<?= $twitterCreator ?>">
    <meta name="twitter:image:src" content="<?= $urlXtremfly ?>/assets/images/img-header.jpg">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:title" content="<?= $webSiteTitle ?>"/>
    <meta property="og:description" content="<?= $webSiteDescription ?>"/>
    <meta property="og:image" content="<?= $urlXtremfly ?>/assets/images/img-header.jpg"/>
    <meta property="og:url" content="<?= $urlXtremfly ?>"/>
    <meta property="og:site_name" content="<?= $webSiteName ?>"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:type" content="website"/>


    <link rel="shortcut icon" href="<?= $urlXtremfly ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= $urlXtremfly ?>/assets/images/favicon.png" type="image/x-icon">

    <!--manifest-->
    <link rel="manifest" href="/manifest.json">

    <!--Stylesheet imports-->
    <link rel="stylesheet" href="../../assets/libraries/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="../../assets/libraries/tether/tether.min.css">
    <link rel="stylesheet" href="../../assets/libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/libraries/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../assets/libraries/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../assets/libraries/dropdown/css/style.css">
    <link rel="stylesheet" href="../../assets/libraries/socicon/css/styles.css">
    <link rel="stylesheet" href="../../assets/libraries/animatecss/animate.min.css">
    <link rel="stylesheet" href="../../assets/libraries/theme/css/style.css">
    <link rel="stylesheet" href="../../assets/libraries/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="../../assets/libraries/slick/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="../../assets/libraries/slick/slick/slick-theme.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Fonts imports -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi|Chau+Philomene+One|Concert+One|Fugaz+One|Mogra|Patrick+Hand+SC|Righteous|Shrikhand|Walter+Turncoat"
          rel="stylesheet">

    <!-- Google analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118716942-1"></script>
    <script>
        "use strict";
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-118716942-1');
    </script>

</head>
