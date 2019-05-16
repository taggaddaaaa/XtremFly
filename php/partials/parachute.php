<?php
$isUK = strpos( $_SERVER['REQUEST_URI'], 'UK' );

$parachuteTitle    = $isUK ? "PARASAILING" : "PARACHUTE ASCENSIONNEL";
$parachuteSubtitle = $isUK
	? "With <span style='font-size: 1.3rem;color: #0EFAFA'>XTREMFLY</span> fly away and taste the extreme pleasure of 
the parasailing by discovering the marvels of the Bay of Arcachon."
	: "Avec <span style='font-size: 1.3rem;color: #0EFAFA'>XTREMFLY</span> envolez-vous et goûtez au plaisir extrême 
du parachute ascensionnel en découvrant les merveilles du bassin d’Arcachon.";

$horaires          = $isUK ? "Schedules, Access <br>and prices" : "Horaires, Accès <br>et Tarifs";
$vue               = $isUK ? "An exceptional<br>vue" : "Une vue <br>exceptionnelle";
$solo              = $isUK ? "Solo, Duo <br> or Trio" : "Solo, Duo <br> ou Trio";
$securite          = $isUK ? "Safely" : "En toute <br> sécurité";
$savoir            = $isUK ? "Good to know" : "Bon <br> à savoir";

$parachuteTexte    = $isUK
	? "It will be for you the opportunity to discover huts built on stits, oyster parks,
                    Famous Pyla Dune, the bench of Arguin, the Atlantic Ocean and the forest of moors seen by the sky
                    At a 50 meter height.
                    <br>
                    In a few seconds you do not land any more!
                    <br>
                    Your air adventure begins with a small boat ride with the team
                    <span style=\"font-size: 1.3rem;color: #0EFAFA\">XTREMFLY</span>,
                    Instructor awarded a diploma in parasailing.
                    <br>
                    Our STAFF will equip you with a life jacket and with a safety harness connected in
                    parasailing. Quite smoothly you will fly away for a panoramic trip in 360 °.
                    Thus let submerge you by a sensation to be well and take advantage of this moment
                    Of exception in the air!
                    <br>
                    The landing will be made by enjoying affecting the water with your feet or quite smoothly
                    on the platform of the boat.
                    <br>
                    Then do not wait any more to share this moment solo, in family, between friends …
                    ATMOSPHERE AND GUARANTEED SENSATIONS."
	: "Ce sera pour vous l’occasion de découvrir les cabanes Tchanquées, les parcs ostréicoles, la
                fameuse dune du Pyla, le banc d’Arguin, l’océan atlantique et la forêt des landes vue du ciel
                à une hauteur de 50 mètres.
                <br>
                En quelques secondes vous ne touchez plus terre !
                <br>
                Votre aventure aérienne commence par un petit tour en bateau avec l’équipe
                <span style=\"font-size: 1.3rem;color: #0EFAFA\">XTREMFLY</span>,
                moniteur diplômé en parachute ascensionnel.
                <br>
                Notre STAFF vous équipera d’un gilet de sauvetage et d’un harnais de sécurité relié au
                parachute. Tout en douceur vous vous envolerez pour une virée panoramique à 360°.
                Laissez vous donc submerger par une sensation de bien-être et profitez de ce moment
                d’exception dans les airs !
                <br>
                L’atterrissage se fera en s’amusant à toucher l’eau avec vos pieds ou tout en douceur sur la
                plateforme du bateau.
                <br>
                Alors n’attendez plus pour partager ce moment en solo, en famille, entre amis… AMBIANCE
                ET SENSATIONS GARANTIES.";

?>

<section class="mbr-section content4 cid-qJWPCUBxW1" id="parachute">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-11">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><?= $parachuteTitle ?></h2>
                <h4 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style"
                    style="color: white;"><?= $parachuteSubtitle ?></h4>
            </div>
        </div>
    </div>
    <div class="container cid-qJWLpuzoGc">
        <div class="container">
            <div class="row justify-content-center">
                <!--horaires-->
                <div class="card-wrapper col-md-3 col-sm-6" style="background-color: white; padding:1em; margin:1em;">
                    <div class="card-wrapper">
                        <a class="card-overlay" href="#modal-1" data-toggle="modal">
                            <img class="overlay-img" src="../../assets/images/plus.svg" alt="en savoir plus">
                        </a>
                        <div class="card-img">
                            <img src="../../assets/images/DSC_8580.jpg" alt="bateau à l'eau et parachute ascensionnel"
                                 title="">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-3 mbr-fonts-style display-7"><?= $horaires ?></h4>
                        </div>
                    </div>
                </div>
                <!--une vue exceptionnelle-->
                <div class="card-wrapper col-md-3 col-sm-6" style="background-color: white; padding:1em; margin:1em;">
                    <div class="card-wrapper"><a class="card-overlay" href="#modal-2" data-toggle="modal">
                            <img class="overlay-img" src="../../assets/images/plus.svg" alt="en savoir plus">
                        </a>
                        <div class="card-img">
                            <img src="../../assets/images/DSCN0252.jpg" alt="Cabanes tchanquées"
                                 title="cabanes tchanquées">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-3 mbr-fonts-style display-7"><?= $vue ?></h4>
                        </div>
                    </div>
                </div>
                <!--Solo duo Trio -->
                <div class="card-wrapper col-md-3 col-sm-6" style="background-color: white; padding:1em; margin:1em;">
                    <div class="card-wrapper">
                        <a class="card-overlay" href="#modal-3" data-toggle="modal">
                            <img class="overlay-img" src="../../assets/images/plus.svg" alt="en savoir plus">
                        </a>
                        <div class="card-img">
                            <img src="../../assets/images/IMG-2062.jpg" alt="Amies" title="amies">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-3 mbr-fonts-style display-7"><?= $solo ?></h4>
                        </div>
                    </div>
                </div>
                <!--en toute sécurité-->
                <div class="card-wrapper col-md-3 col-sm-6" style="background-color: white; padding:1em; margin:1em;">
                    <div class="card-wrapper">
                        <a class="card-overlay" href="#modal-4" data-toggle="modal">
                            <img class="overlay-img" src="../../assets/images/plus.svg" alt="en savoir plus">
                        </a>
                        <div class="card-img">
                            <img src="../../assets/images/DSC_8104.jpg" alt="En toute sécurité" title="">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-3 mbr-fonts-style display-7"><?= $securite ?></h4>
                        </div>
                    </div>
                </div>
                <!--Bon à savoir-->
                <div class="card-wrapper col-md-3 col-sm-6" style="background-color: white; padding:1em; margin:1em;">
                    <div class="card-wrapper">
                        <a class="card-overlay" href="#modal-5" data-toggle="modal">
                            <img class="overlay-img" src="../../assets/images/plus.svg" alt="en savoir plus">
                        </a>
                        <div class="card-img">
                            <img src="../../assets/images/DSC_8161.jpg" alt="Bon à savoir" title="">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-3 mbr-fonts-style display-7"><?= $savoir ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="media-container-row">
        <div class="title col-12 col-md-10">
            <p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"
               style="margin-bottom: 50px;"><?= $parachuteTexte ?></p>
        </div>
    </div>
</section>
