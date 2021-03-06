<!DOCTYPE html >
<html lang="en">
<!--HEAD-->
<?php include "../php/partials/head.php"?>

<body id="page-top">
<!--SECTION NAVIGATION-->
<?php include "../php/partials/nav.php" ?>

<!--SECTION HEADER-->
<?php include "../php/partials/header.php" ?>

<!--SECTION PARACHUTE ASCENSIONNEL-->
<?php include "../php/partials/parachute.php" ?>

<!--SECTION LES DEPARTS-->
<?php include "../php/partials/map.php" ?>

<!--SECTION LES TARIFS-->
<?php include "../php/partials/tarifs.php" ?>

<!--TODO: SECTION PARTNERS-->

<!--SECTION NOUS CONTACTER-->
<section class="mbr-section contactForm cid-qJWMa4qhrc" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"
                    style="padding-top: 2rem;"
                >CONTACT US</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    We answer to all your questions on
                    <br>
                    <a style="font-size: 1.3rem;" href="tel:0033673824102" title="0033673824102" name="phone">0033 6 73 82 41 02</a>
                    <br>
                    or on our contact form:
                </h3>

                <form class="mbr-form"
                      id="contactFormUK"
                      method="POST"
                      action="../assets-mai19/js/contact_me_uk.js"
                      accept-charset="UTF-8"
                >

                    <div class="row row-sm-offset">

                        <div class="col-md-4 multi-horizontal" data-for="name">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name">Name</label>
                                <input type="text"
                                       class="form-control form alpha-only"
                                       placeholder="Your name *"
                                       id="name"
                                       name="name"
                                       required
                                >
                            </div>
                        </div>

                        <div class="col-md-4 multi-horizontal" data-for="email">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="email">Email</label>
                                <input type="email"
                                       class="form-control"
                                       placeholder="Your Email *"
                                       id="email"
                                       name="email"
                                       required
                                >
                            </div>
                        </div>

                        <div class="col-md-4 multi-horizontal" data-for="phone">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7"
                                       for="phone">Phone</label>
                                <input type="tel"
                                       class="form-control"
                                       placeholder="Your phone number *"
                                       id="phone"
                                       name="phone"
                                       required
                                >
                            </div>
                        </div>

                    </div>

                    <div class="form-group" data-for="message">
                        <label class="form-control-label mbr-fonts-style display-7" for="message">Message</label>
                        <textarea class="form-control"
                                  id="message"
                                  name="message"
                                  placeholder="Your message *"
                                  rows="7"
                                  required
                        ></textarea>
                    </div>

                    <div class="clearfix"></div>

                    <div class="input-group-btn">
                        <div id="success-mail-uk"></div>
                        <button type="submit" class="btn btn-primary btn-form display-4">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--SECTION FOOTER ET RS-->
<?php include "../php/partials/footer.php" ?>

<!------------------------------------------->
<!-- BUTTON STICK ON BOTTOM ON MOBILE SIZE -->
<!------------------------------------------->
<?php include "../php/partials/stickyBtn.php" ?>

<!------------------------------------------->
<!--                MODALS                 -->
<!------------------------------------------->
<!-- MODAL HORAIRES -->
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog"
     aria-labelledby="Schedules, Opening days, Accesses and Prices." aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Schedules, Opening days, Accesses and
                        Prices.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">For the season 2018, we welcome you every day from
                        <br>
                        <span class="text-center">beginning of May to the end of September<br> from 9 h to 21 h.</span>
                        <br>
                        Save time in commander your flight on our
                        <a href="https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF"
                           onclick="var w=window.open('https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF', 'Billetterie_weezevent', 'width=650, height=600, top=100, left=100, toolbar=no, resizable=yes, scrollbars=yes, status=no'); w.focus(); return false;"
                        >online shop</a> and book your flight on
                        <br>
                        <a style="font-size: 1.3rem;" href="tel:0033673824102" title="0033673824102" name="telephone">0033
                            6 73 82 41 02</a>.
                        <br>
                        We offer you <a href="#starts" data-window="external" data-dismiss="modal">5 different places
                            of depart</a> on the pond to make you the easier life: 2 on the side of Cap-Ferret and
                        3 on the side of Arcachon.
                        <br>
                        From no 45€ / person, we practise the most competitive price of the Pond.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL VUE EXCEPTIONNELLE -->
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="An exceptional view in 50m of height."
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
                    <h5 class="modal-title" id="exampleModalLongTitle2">An exceptional view in 50m of height.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        The upward parachute offers you a breathtaking plunging view on the pond
                        of Arcachon and its wealth.
                        <br>
                        (Re-)Discover
                        <br>
                        The Forest of Landes,
                        <br>
                        The Nature reserve of the Bench of Arguin,
                        <br>
                        Pyla Dune,
                        <br>
                        the island of Birds...
                        <br>
                        We offer you a panorama for unforgettable holidays.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL SOLO DUO TRIO -->
<div class="modal fade solo" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="Alone or in group"
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
                    <h5 class="modal-title" id="exampleModalLongTitle3">Alone or in group</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        The experience during flight is always more pleasant to share.
                        <br>
                        That you are accompanied or not, we make flights solo, duet or in trio.
                        You can accompany your children, from 6 years *, and live a moment full of emotion in family.
                        <br>
                        We receive also
                        <a href="" title="Groupes et CE" name="pros">groups and societies</a>,
                        <a href="" title="CE" name="anniversaires">birthdays</a> et
                        <a href="" title="EVJF/G" name="evjf/g">bachelor parties...</a>!
                    </p>
                    <hr>
                    <p>*The minors must be necessarily accompanied with a grown-up person of more than 18 years.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL SECURITE -->
<div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="Safely" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle4">SAFELY</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        You are supervised by an upward instructor BPJEPS PARASAILING.
                        We invest in the quality equipment every season.
                        <br>
                        You sit in complete safety, no necessary manipulation, your hands are free.
                        In case of too strong wind, we prefer to cancel and to move your exit so that your
                        experience by our side unforgettable rest.
                    </p>
                    <img src="../assets-mai19/images/voile.png" alt="parasailing">
                    <h5>OUR BOAT OF PARASAILING</h5>
                    <p>
                        We use various models according to the weight of the people and the strength of the wind.
                        Sails are made in some nylon of high quality, resistant in the UV and in the sea air.
                        Handy and strong, these veils allow a take-off and a soft landing and guaranteeing a big
                        comfort of flight, about is the passenger number.
                    </p>
                    <p>SENSATIONS, SAFELY !</p>
                    <hr>
                    <img src="../assets-mai19/images/boat.png" alt="boat">
                    <h5>VEIL OF PARASAILING</h5>

                    <p> To raise you in the air 50 meters away from top above the Bay of Arcachon, we use a boat any
                        last generation: Mercan of 34 feet and an engine Volvo of 430 CV.
                        Piloted by a State-certified instructor.
                        His platform situated in the back allows a take-off and easy landing.
                    </p>
                    <p>WE WAIT FOR YOU ON BOARD!</p>
                    <hr>
                    <img src="../assets-mai19/images/harnais.png" alt="HERNESS OF PARASAILING">
                    <h5>HERNESS OF PARASAILING</h5>
                    <p>The harness in which you will steal, is a model experienced for its comfort and its solidity.
                        It is coupled with a bar conceived for 1,2 or 3 people.
                        This system of bar allows to balance the weight of the people for a big comfort of flight.
                    </p>
                    <hr>
                    <img src="../assets-mai19/images/gilet.png" alt="safety vest">
                    <h5>A VEST APPROVED FOR YOUR SAFETY</h5>
                    <p>With <span style="font-size: 1.3rem;color: #0EFAFA">XTREMFLY</span>, security is important!
                        You will be equipped with a certified life jacket CE ISO which suits to all.
                        It you guaranteed an optimal protection for your flight in parasailing.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL BON A SAVOIR -->
<div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="Good to know" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle5">Good to know</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        No need to know how to swim!
                        <br>
                        In town suit or in shirt, live the take-off and the landing on the platform of
                        Boat.
                        Unless asking to us for it, you will not be wet.
                        <br>
                        In case of very sunny day, do not forget the sunscreen.
                        <br> 
                        The flight is smoothly made, from 6 years* and without age limit, the children *,
                        Elderly or the people with reduced mobility can come to try the experience.
                    </p>
                    <hr>
                    <p>*The children under 12 years must be necessarily accompanied with a grown-up person of more than
                        18 years.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
