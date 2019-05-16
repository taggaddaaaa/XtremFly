<!DOCTYPE html >
<html lang="fr">
<!--HEAD-->
<?php include "../php/partials/head.php"?>

<body id="page-top">
<!--SECTION NAVIGATION-->
<?php include "../php/partials/nav.php" ?>

<!--SECTION GROUPES ET CE-->
<section class="mbr-section content4 cid-qJWPCUBxW1 portfolioHeader" id="portfolioHeader"
         style="background-image: url('../assets/images/texture2.jpg');">
    <div class="container" style="padding-bottom: 2rem;">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">GROUPES et CE</h2>

                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-7"
                    style="font-size: 1.3rem;color: #0EFAFA; padding: 1.5rem;"
                >
                    CHALLENGE D'ENTREPRISE
                    <br>
                    DYNAMISEZ VOTRE ÉQUIPE SUR LE DÉPASSEMENT DE SOI
                </h3>
                <p class="align-center text-white display-5">
                    Venez découvrir des nouvelles activités avec <span
                        style="font-size: 1.3rem;color: #0EFAFA">XTREMFLY</span>.
                    <br>
                    Il n’y a pas mieux pour travailler son dépassement de soi, partager un moment FUN et
                    rempli de sensations en toute sécurité.
                </p>
                <p class="align-center text-white display-5">
                    <span style="font-size: 1.3rem;color: #0EFAFA">XTREMFLY</span> vous organise un programme à la carte
                    avec ses différents partenaires.
                    Invitez vos partenaires, clients, collaborateurs pour un événement inoubliable
                    conjuguant travail, détente, sensations et découverte des merveilles du bassin par la mer
                    et par les airs.
                </p>
                <p class="align-center text-white display-5"
                >Imaginons et organisons ensemble la prestation sur mesure qui répondra à vos attentes.</p>
            </div>
        </div>
    </div>
</section>

<!--SECTION FORMULES ET DEVIS-->
<section class="cid-qJWPCUBxW1">
    <div class="container features8 cid-qJWLCqu0ol">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2 text-white">
                    FORMULES ET DEVIS</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    Contactez-nous au
                    <br>
                    <a href="tel:0673824102" title="0673824102" style="font-size: 1.3rem;">06 73 82 41 02</a> ou sur
                    <a href="#devis" title="formulaire de contact" style="font-size: 1.3rem;"> notre formulaire de
                        contact</a>
                </h3>
            </div>
        </div>
        <div class="media-container-row">
            <div class="card  col-12 col-md-6 col-lg-4">
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">Session GROUPE
                        <br>
                        À la carte.
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">Formule à la carte.</p>
                    <p class="mbr-text mbr-fonts-style display-7" style="padding-bottom: 2rem;"
                    >Nous pouvons vous propser plusieurs prestations avec nos partenaires.</p>

                    <div class="align-center text-white display-7">
                        <a class="btn btn-sm btn-primary btn-book-flight display-7"
                           style="font-family: Fugaz One, sans-serif; color: #0d0d0d;"
                           href="#devis"
                           data-toggle="modal"
                        >DEMANDER UN DEVIS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--SECTION IMAGES-->
<section id="portfolio-pros" style="padding: 1.5rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">

                <img class="img-fluid" src="../assets/images/ce-dune.jpeg" alt="dunes">

            </div>

            <div class="col-md-3 col-sm-6 mb-4">

                <img class="img-fluid" src="../assets/images/cata.JPG" alt="catamaran">

            </div>

            <div class="col-md-3 col-sm-6 mb-4">

                <img class="img-fluid" src="../assets/images/12345.png" alt="xtremfly">

            </div>

            <div class="col-md-3 col-sm-6 mb-4">

                <img class="img-fluid" src="../assets/images/1234567.jpg" alt="paysage">

            </div>

            <div class="col-md-3 col-sm-6 mb-4">

                <img class="img-fluid" src="../assets/images/baie1.jpg" alt="baie">

            </div>

            <div class="col-md-3 col-sm-6 mb-4">

                <img class="img-fluid" src="../assets/images/Dune-du-Pilat.jpg" alt="dune du pilat">

            </div>
        </div>
    </div>
</section>

<!--SECTION FOOTER ET RS-->
<?php include "../php/partials/footer.php"?>

<!------------------------------------------->
<!-- BUTTON STICK ON BOTTOM ON MOBILE SIZE -->
<!------------------------------------------->
<?php include "../php/partials/stickyBtn.php"?>

<!------------------------------------------->
<!--                MODALS                 -->
<!------------------------------------------->
<!-- MODAL DEMANDE DE DEVIS -->
<div class="modal fade" id="devis" tabindex="-1" role="dialog" aria-labelledby="Demande de devis" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">DEMANDE DE DEVIS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../assets/js/contact_me_pro.js"
                          id="contactFormPro"
                          class="mbr-form was-validated"
                          method="POST"
                          data-form-title="XtremFly Pros"
                    >

                        <!--Nom + prenom-->
                        <div class="row row-sm-offset">
                            <div class="col-md-6 multi-horizontal" data-for="firstName">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"
                                           for="firstName">Prénom</label>
                                    <input type="text"
                                           class="form-control form alpha-only"
                                           name="firstName"
                                           data-form-field="firstName"
                                           required
                                           id="firstName"
                                           autocomplete='firstName'
                                    >
                                    <div class="invalid-feedback">S'il vous plait, entrez votre prénom.</div>
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="lastName">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"
                                           for="lastName">Nom</label>
                                    <input type="text"
                                           class="form-control form alpha-only"
                                           name="lastName"
                                           data-form-field="lastName"
                                           required
                                           id="lastName"
                                           autocomplete='lastName'
                                    >
                                    <div class="invalid-feedback">S'il vous plait, entrez votre nom.</div>
                                </div>
                            </div>
                        </div>

                        <!--tel + email-->
                        <div class="row row-sm-offset">
                            <div class="col-md-6 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"
                                           for="email">Email</label>
                                    <input type="email"
                                           class="form-control"
                                           name="email"
                                           data-form-field="Email"
                                           required
                                           id="email"
                                           autocomplete='email'
                                    >
                                    <div class="invalid-feedback">S'il vous plait, entrez votre email.</div>
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"
                                           for="phone">Téléphone</label>
                                    <input type="tel"
                                           class="form-control"
                                           name="phone"
                                           data-form-field="Phone"
                                           required
                                           id="phone"
                                           autocomplete='tel-national'
                                    >
                                    <div class="invalid-feedback">S'il vous plait, veuillez entrez votre numéro de
                                        téléphone.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--date souhaitee-->
                        <div class="row row-sm-offset">
                            <div class="col-md-12 multi-horizontal" data-for="datePicker">
                                <div class="form-group date">
                                    <label class="form-control-label mbr-fonts-style display-7"
                                           for="datePicker">Date souhaitée</label>
                                    <input type="text" class="form-control" id="datePicker" required/>
                                    <div class="invalid-feedback">S'il vous plait, veuillez entrer une date de
                                        réservation.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 multi-horizontal" data-for="hours">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"
                                           for="hours">Heure souhaitée</label>
                                    <select class="custom-select-sm" name="hours" id="hours" title="hours" required>
                                        <option value="0" selected="selected">Selectionnez une heure</option>
                                        <option value="9h">9H</option>
                                        <option value="10h">10H</option>
                                        <option value="11h">11H</option>
                                        <option value="12h">12H</option>
                                        <option value="13h">13H</option>
                                        <option value="14h">14H</option>
                                        <option value="15h">15H</option>
                                        <option value="16h">16H</option>
                                        <option value="17h">17H</option>
                                        <option value="18h">18H</option>
                                        <option value="19h">19H</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--nom de societe -->
                        <div class="row row-sm-offset">
                            <div class="col-md-12 multi-horizontal" data-for="societyName">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"
                                           for="societyName"
                                    >Société</label>
                                    <input type="text"
                                           class="form-control"
                                           name="societyName"
                                           data-form-field="societyName"
                                           required
                                           id="societyName"
                                           autocomplete='name'
                                    >
                                    <div class="invalid-feedback">S'il vous plait, veuillez entrez un nom pour votre
                                        société.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--nb de participants-->
                        <div class="row row-sm-offset">
                            <div class="col-md-6 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"
                                           for="participants"
                                    >Nombre de Participants</label>
                                    <input name="participants"
                                           type="number"
                                           max="100"
                                           class="form-control"
                                           id="participants"
                                           required
                                           autocomplete="integer"
                                    />
                                    <div class="invalid-feedback">S'il vous plait, veuillez entrez un nombre de
                                        participants. Maximum 100.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--message-->
                        <div class="col-md-12 multi-horizontal" data-for="message">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7"
                                       for="message"
                                >Message</label>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control"
                                          name="message"
                                          id="message"
                                          cols="30"
                                          rows="10"
                                          required
                                ></textarea>
                            </div>
                            <div class="invalid-feedback">S'il vous plait, veuillez rentrer un message.</div>
                        </div>

                        <!--bouton d'envoi-->
                        <div class="modal-footer input-group-btn">
                            <div id="success-mail-pros"></div>
                            <button type="submit" class="btn btn-secondary">ENVOYER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--MODAL Mentions Légales et Conditions generales de ventes-->
<?php include "../php/partials/privacy-legacy.php" ?>
<!------------------------------------------->
<!--             END   MODALS              -->
<!------------------------------------------->


<?php include "../php/partials/scripts.php" ?>
</body>
</html>
