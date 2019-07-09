<?php
$isUK = strpos( $_SERVER['REQUEST_URI'], 'UK' );

//Titre et accroche
$tarifsTitle    = $isUK ? "PRICES" : "LES TARIFS";
$tarifsSubtitle = $isUK
	? "Offer yourselves a stroll in parasailing thanks to our online shop and<br>book your flight on<br><a href=\"tel:+33673824102\" title=\"+33673824102\" style=\"font-size: 2rem;\">+33 6 73 82 41 02</a>"
	: "Offrez-vous une balade en parachute ascensionnel grâce à notre boutique en ligne et<br>réservez votre vol au<br><a href=\"tel:0673824102\" title=\"0673824102\" style=\"font-size: 2rem;\">06 73 82 41 02</a>";

// Section 'taches'
$childTitle    = $isUK ? "Session Child<br> - 12 years*" : "Session Enfant<br> - de 12ans*";
$childSubtitle = $isUK
	? "Must be accompanied by an adult.<br><br>Valid for a flight in parasailing for 1 inclusive child from 6 to 11 years old.<br/><br/>Flight duration:<br>10 to 15 minutes<br><br>"
	: "Accompagnement obligatoire d'un adulte.<br><br>Valable pour un vol en parachute ascensionnel pour 1 enfant de 6 à&nbsp;11 ans inclus.<br><br>Durée du vol:<br>10 à 15 minutes<br><br>";

$adultTitle    = $isUK ? "Session Adult<br>12 years* and more" : "Session Adulte<br>12 ans* et +";
$adultSubtitle = $isUK
	? "Valid for a flight in parasailing for 1 inclusive adult from up to 12 years old.<br/><br/>Flight duration:<br>10 to 15 minutes<br><br>"
	: "Valable pour un vol en parachute ascensionnel pour 1 adulte de plus de 12 ans*.<br><br>Durée du vol:<br>10 à 15 minutes<br><br>";
$adultOption   = $isUK ? "+ 20 € flight in solo option**" : "+ 20 € l'option vol en Solo**";

$loversTitle    = $isUK ? "SUNSET LOVER<br>more than 18 years old***" : "SUNSET LOVER<br>+ de 18ans***";
$loversSubtitle = $isUK
	? "Flight for two people at sunset<br/>With cocktail for two offered<br/><br/>Flight duration:<br>10 to 15 minutes<br><br>"
	: "Vol pour deux personnes au coucher du soleil<br/>Avec un cocktail pour deux personnes offert<br/><br/>Durée du vol:<br>10 à 15 minutes<br><br>";

//Paragraphe et moyens de paiements
$pay = $isUK
	? "It is also possible to come directly on the spot.<br>
We accept CB, species and holiday vouchers ANCV but not bank checks.<br>
It is advised to phone us before moving you to know the next departure of the boat:<br>
<a style=\"font-size: 1.3rem;\" href=\"tel:0033673824102\" title=\"0033673824102\">+33 6 73 82 41 02</a>
.
<br>"
	: "Il est également possible de venir directement sur place.<br>
Nous acceptons les CB, les espèces et les chèques-vacances ANCV mais pas les chèques bancaires.<br>
Il est conseillé de nous téléphoner avant de vous déplacer afin de connaitre le prochain départ du bateau:<br>
<a style=\"font-size: 1.3rem;\" href=\"tel:0673824102\" title=\"0673824102\">06 73 82 41 02</a>
.
<br>";

//asterisques
$asterisk = $isUK
	? "*The children under 12 years must be necessarily accompanied by a grown-up person of more than 18 years.<br>
**Would like refer to our <a href=\"#modal-legacy\" data-toggle=\"modal\">general terms of sale</a>.<br>
***Price valid for people over 18 years. Alcohol abuse is dangerous for health. To consume with moderation."
	: "*Les enfants de moins de 12 ans doivent être accompagnés obligatoirement d'une personne adulte de plus de 18 ans.<br>
**Veuillez-vous référer à nos <a href=\"#modal-legacy\" data-toggle=\"modal\">conditions générales de ventes</a>.<br>
***Tarif valable pour des personnes de + de 18 ans. L'abus d'alcool est dangereux pour la santé. À consommer avec modération.";
?>

<section class="features8 cid-qJWLCqu0ol" id="price" style="padding-top: 3.5em;">
    <div class="container">
        <!--Titre et accroche-->
        <div class="media-container-row">
            <div class="title col-12 col-md-11">
                <h2 class="align-center pb-3 mbr-fonts-style display-2 text-white"><?= $tarifsTitle ?></h2>
                <h5 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style"><?= $tarifsSubtitle ?></h5>
            </div>
        </div>
        <!-- Section 'taches'-->
        <div class="media-container-row" style="margin-top: 1em;">
            <!--Tarif enfant-->
            <div class="card  col-12 col-md-6 col-lg-4">
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7"><?= $childTitle ?></h4>
                    <p class="mbr-text mbr-fonts-style display-7"><?= $childSubtitle ?></p>
                    <div class="mbr-section-btn text-center">
                        <a href="https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF"
                           class="display-4 text-turquoise"
                           onclick="var w=window.open('https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF', 'Billetterie_weezevent', 'width=650, height=600, top=100, left=100, toolbar=no, resizable=yes, scrollbars=yes, status=no'); w.focus(); return false;"
                        >45 €*</a>
                    </div>
                </div>
            </div>
            <!--Tarif adulte-->
            <div class="card  col-12 col-md-6 col-lg-4">
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7"><?= $adultTitle ?></h4>
                    <p class="mbr-text mbr-fonts-style display-7"><?= $adultSubtitle ?></p>
                    <div class="mbr-section-btn text-center">
                        <a href="https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF"
                           class="display-4 text-turquoise"
                           onclick="var w=window.open('https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF', 'Billetterie_weezevent', 'width=650, height=600, top=100, left=100, toolbar=no, resizable=yes, scrollbars=yes, status=no'); w.focus(); return false;"
                        >55 €</a>
                    </div>
                    <p><?= $adultOption ?></p>
                </div>
            </div>
            <!--Tarif amoureux-->
            <div class="card  col-12 col-md-6 col-lg-4">
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7"><?= $loversTitle ?></h4>
                    <p class="mbr-text mbr-fonts-style display-7"><?= $loversSubtitle ?></p>
                    <div class="mbr-section-btn text-center">
                        <a href="https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF"
                           class="display-4 text-turquoise"
                           onclick="var w=window.open('https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF', 'Billetterie_weezevent', 'width=650, height=600, top=100, left=100, toolbar=no, resizable=yes, scrollbars=yes, status=no'); w.focus(); return false;"
                        >150 €***</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Paragraphe et moyens de paiements-->
        <div class="media-container-row">
            <div class="title col-12 col-md-10">
                <p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><?= $pay ?></p>
                <img class="align-center" style="width: 90%;" src="../../assets-mai19/images/moyen-de-paiement.png"
                     alt="moyens de paiement acceptés">
            </div>
        </div>
        <!--Section 'asterisques'-->
        <div class="media-container-row">
            <div class="col-12 col-md-12 align-center mbr-section-subtitle mbr-light mbr-fonts-style display-5"><?= $asterisk ?></div>
        </div>
    </div>
</section>
