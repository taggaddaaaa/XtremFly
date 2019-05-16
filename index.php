<!DOCTYPE html>
<html lang="fr">
<!--HEAD-->
<?php include "./php/partials/head.php" ?>

<body id="page-top">
<!--SECTION NAVIGATION-->
<?php include "./php/partials/nav.php" ?>

<!--SECTION HEADER-->
<?php include "./php/partials/header.php" ?>

<!--SECTION PARACHUTE ASCENSIONNEL-->
<?php include "./php/partials/parachute.php" ?>

<!--SECTION LES DEPARTS-->
<?php include "./php/partials/map.php" ?>

<!--SECTION LES TARIFS-->
<?php include "./php/partials/tarifs.php" ?>

<!--TODO: SECTION PARTENAIRES-->

<!--SECTION NOUS CONTACTER-->
<section class="mbr-section contactForm cid-qJWMa4qhrc" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"
                    style="padding-top: 2rem;"
                >NOUS CONTACTER</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Nous répondons à toutes vos questions au
                    <br>
                    <a style="font-size: 1.3rem;" href="tel:0673824102" title="0673824102" name="phone">06 73 82 41
                        02</a>
                    <br>
                    ou via notre formulaire de contact:
                </h3>

                <form class="mbr-form"
                      id="contactForm"
                      method="POST"
                      action="/assets-mai19/js/contact_me.js"
                      accept-charset="UTF-8"
                >

                    <div class="row row-sm-offset">

                        <div class="col-md-4 multi-horizontal">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name">Nom</label>
                                <input type="text"
                                       class="form-control form alpha-only"
                                       placeholder="Votre nom *"
                                       id="name"
                                       name="name"
                                       required
                                >
                            </div>
                        </div>

                        <div class="col-md-4 multi-horizontal">
                            <div class="form-group controls">
                                <label class="form-control-label mbr-fonts-style display-7" for="email">Email</label>
                                <input type="email"
                                       class="form-control"
                                       placeholder="Votre Email *"
                                       id="email"
                                       name="email"
                                       required
                                >
                            </div>
                        </div>

                        <div class="col-md-4 multi-horizontal">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7"
                                       for="phone">Téléphone</label>
                                <input type="tel"
                                       class="form-control"
                                       placeholder="Votre téléphone *"
                                       id="phone"
                                       name="phone"
                                       required
                                       maxlength="10"
                                >
                            </div>
                        </div>

                    </div>

                    <div class="form-group" data-for="message">
                        <label class="form-control-label mbr-fonts-style display-7" for="message">Message</label>
                        <textarea class="form-control"
                                  id="message"
                                  name="message"
                                  placeholder="Votre message *"
                                  rows="7"
                                  required
                        ></textarea>
                    </div>

                    <div class="clearfix"></div>

                    <div class="input-group-btn">
                        <div id="success-mail"></div>
                        <button type="submit" class="btn btn-primary btn-form display-4">ENVOYER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--SECTION INSTAGRAM FEED-->
<?php include "./php/partials/instaFeed.php" ?>

<!--SECTION FOOTER ET RS-->
<?php include "./php/partials/footer.php" ?>

<!------------------------------------------->
<!-- BUTTON STICK ON BOTTOM ON MOBILE SIZE -->
<!------------------------------------------->
<?php include "./php/partials/stickyBtn.php" ?>

<!------------------------------------------->
<!--                MODALS                 -->
<!------------------------------------------->
<!-- MODAL HORAIRES -->
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog"
     aria-labelledby="Horaires, Jours d'Ouverture, Accès et Tarifs." aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Horaires, Jours d'Ouverture, Accès et
                        Tarifs.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">Pour la saison 2018, nous vous accueillons tous les
                        jours de
                        <br>
                        <span class="text-center">début Mai à fin Septembre<br> de 9 h à 21 h.</span>
                        <br>
                        Gagnez du temps en commandant votre vol sur notre
                        <a href="https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF"
                           onclick="var w=window.open('https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF', 'Billetterie_weezevent', 'width=650, height=600, top=100, left=100, toolbar=no, resizable=yes, scrollbars=yes, status=no'); w.focus(); return false;"
                        >boutique en ligne</a> et réservez votre session au 
                        <br>
                        <a style="font-size: 1.3rem;" href="tel:0673824102" title="0673824102" name="telephone">06 73 82
                            41 02</a>.
                        <br>
                        Nous proposons <a href="#starts" data-window="external" data-dismiss="modal">5 points de départs
                            différents</a> sur le bassin pour vous rendre la vie plus
                        facile: 2 du côté du Cap-Ferret et 3 du côté d'Arcachon.
                        <br>
                        À partir de 45€/personne, nous pratiquons les tarifs les plus compétitifs du Bassin.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL VUE EXCEPTIONNELLE -->
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog"
     aria-labelledby="Une vue exceptionnelle à 50m d'altitude" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle2">Une vue exceptionnelle à 50m
                        d'altitude</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Le parachute ascensionnel vous offre une vue plongeante à couper le souffle sur le bassin
                        d'Arcachon et ses richesses. 
                        <br>
                        (Re-)Découvrez
                        <br>
                        la Forêt des Landes,
                        <br>
                        la Réserve Naturelle du Banc d'Arguin,
                        <br>
                        la Dune du Pyla,
                        <br>
                        l'Île aux Oiseaux...
                        <br>
                        Nous vous offrons un panorama pour des vacances inoubliables.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL SOLO DUO TRIO -->
<div class="modal fade solo" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="Seul ou à plusieurs"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle3">Seul ou à plusieurs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        L'expérience en vol est toujours plus plaisante à partager.
                        <br>
                        Que vous soyez accompagné ou non, nous effectuons des vols en solo, duo ou en trio.
                        Vous pouvez accompagner vos enfants, à partir de 6 ans*, et vivre un moment plein d'émotion
                        en famille. 
                        <br>
                        Nous recevons également
                        <a href="vues/pros.php" title="Groupes et CE" name="pros">les groupes et les CE</a>,
                        <a href="vues/anniversaire.php" title="CE" name="anniversaires">les anniversaires</a> et
                        <a href="vues/evj.php" title="EVJF/G" name="evjf/g">les enterrements de vie de jeune
                            fille/garçon</a>
                        , même déguisé!
                    </p>
                    <hr>
                    <p>*Les enfants mineurs de moins de 12 ans doivent être accompagnés obligatoirement d'une personne
                        adulte de plus de 18
                        ans.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL SECURITE -->
<div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="En toute sécurité" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle4">EN TOUTE SECURITE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Vous êtes encadré par un moniteur BPJEPS PARACHUTE ASCENSIONNEL.
                        Nous investissons dans du matériel de qualité chaque nouvelle saison.
                        <br>
                        Vous êtes assis en toute sécurité, aucune manipulation nécessaire, vos mains sont libres.
                        En cas de vent trop fort, nous préférons annuler et décaler votre sortie pour que votre
                        expérience à nos côtés reste inoubliable.
                    </p>
                    <img src="assets-mai19/images/voile.png" alt="parachute ascensionnel">
                    <h5>VOILE DE PARACHUTE ASCENSIONNEL</h5>
                    <p>Nous utilisons différents modèles en fonction du poids des personnes et de la force du vent.
                        Les voiles sont fabriquées dans du nylon de haute qualité, résistantes aux UVs et à l’air marin.
                        Maniables et robustes, ces voiles permettent un décollage et un atterrissage en douceur et
                        garantissent un grand confort de vol, quelque soit le nombre de passagers.
                    </p>
                    <p>À VOUS LES SENSATIONS, EN TOUTE SÉCURITÉ !</p>
                    <hr>
                    <img src="assets-mai19/images/boat1.jpg" style="width: 240px;" alt="bateau">
                    <h5>NOTRE BATEAU PARACHUTE ASCENSIONNEL</h5>
                    <p>Pour vous hisser dans les airs à 50 mètres de haut au dessus du Bassin d’Arcachon, nous utilisons
                        un bateau toute dernière génération : Mercan de 34 pieds et un moteur Volvo de 430 CV.
                        Piloté par un moniteur diplômé d’état.
                        Sa plate-forme située à l’arrière permet un décollage et atterrissage aisé.
                    </p>
                    <p>NOUS VOUS ATTENDONS À BORD !</p>
                    <hr>
                    <img src="assets-mai19/images/harnais.png" alt="harnais de sécurité">
                    <h5>HARNAIS POUR PARACHUTE ASCENSIONNEL</h5>
                    <p>Le harnais dans lequel vous volerez, est un modèle éprouvé pour son confort et sa solidité.
                        Il est couplé à une barre conçue pour 1, 2 ou 3 personnes.
                        Ce système de barre permet d’équilibrer le poids des personnes pour un grand confort de vol.
                    </p>
                    <hr>
                    <img src="assets-mai19/images/gilet.png" alt="gilet de sauvetage">
                    <h5>UN GILET HOMOLOGUÉ POUR VOTRE SÉCURITÉ</h5>
                    <p>Avec <span style="font-size: 1.3rem;color: #0EFAFA">XTREMFLY</span>, la sécurité est importante !
                        Vous serez équipé d’un gilet de sauvetage certifié CE ISO qui convient à tous.
                        Il vous garantie une protection optimale pour votre vol en parachute ascensionnel.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL BON A SAVOIR -->
<div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="Bon à savoir" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle5">Bon à savoir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Pas besoin de savoir nager!
                        <br>
                        En tenue de ville ou en maillot, vivez le décollage et atterrissage sur la plateforme du
                        bateau.
                        À moins de nous le demander, vous ne serez pas mouillé.
                        <br>
                        En cas de journée très ensoleillée, n'oubliez pas la crème solaire.
                        <br>
                        Le vol se fait en douceur, à partir de 6 ans* et sans limite d'âge, les enfants*, les
                        personnes âgées ou les personnes à mobilité réduite peuvent venir tenter l'expérience.
                    </p>
                    <hr>
                    <p>*Les enfants de moins de 12 ans doivent être accompagnés obligatoirement d'une personne adulte de
                        plus de 18 ans.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--MODAL Mentions Légales et Conditions generales de ventes-->
<?php include "./php/partials/privacy-legacy.php" ?>
<!------------------------------------------->
<!--             END   MODALS              -->
<!------------------------------------------->


<?php include "./php/partials/scripts.php" ?>
</body>
</html>
