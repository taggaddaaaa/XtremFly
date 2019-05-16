<?php
$isUK = strpos( $_SERVER['REQUEST_URI'], 'UK' );

$parachute   = $isUK ? "PARASAILING" : "PARACHUTE<br>ASCENSIONNEL";
$departs     = $isUK ? "STARTS" : "DÉPARTS";
$tarifs      = $isUK ? "PRICES" : "TARIFS";
$partenaires = $isUK ? "PARTNERS" : "PARTENAIRES";
$reserver    = $isUK ? "BOOK A FLIGHT" : "RESERVER UN VOL";
?>

<section class="menu cid-qJWKHrsea5" id="navigation">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <!--Hamburger-->
        <button class="navbar-toggler navbar-toggler-right"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
        <!--logo-->
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#page-top">
                         <img id="logoPrincipal" src="../../assets/images/logo-XtremFly.png" alt="XtremFly"
                              title="logo XtremFly" style="height: 6rem;">
                    </a>
                </span>
            </div>
        </div>
        <!--onglets-->
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <!--section parachute ascensionnel-->
                <li class="nav-item">
                    <a class="nav-link link display-4" href="#parachute"><?= $parachute ?></a>
                </li>
                <!--section departs-->
                <li class="nav-item">
                    <a class="nav-link link display-4" href="#starts"><?= $departs ?></a>
                </li>
                <!--dropdown groupes-->
                <?php if (!$isUK) :?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       id="navbarDropdown"
                       role="button"
                       data-toggle="dropdown"
                       aria-haspopup="false"
                       aria-expanded="false"
                    >GROUPES</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../../vues/pros.php">Groupes / CE</a>
                        <a class="dropdown-item" href="../../vues/evj.php">EVJF / EVJG</a>
                        <a class="dropdown-item" href="../../vues/anniversaire.php">Anniversaire</a>
                    </div>
                </li> <?php endif;?>
                <!--section tarifs-->
                <li class="nav-item">
                    <a class="nav-link link display-4" href="#price"><?= $tarifs ?></a>
                </li>
                <!--dropdown partenaires-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       id="dropdownPartners"
                       role="button"
                       data-toggle="dropdown"
                       aria-haspopup="false"
                       aria-expanded="false"
                    ><?= $partenaires ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownPartners">
                        <a class="dropdown-item" href="https://www.catabas.fr/" target="_blank">CATABAS</a>
                        <a class="dropdown-item" href="https://www.ter.sncf.com/nouvelle-aquitaine/horaires/recherche"
                           target="_blank">SNCF</a>
                        <a class="dropdown-item" href="https://www.pinassemandarine.fr/" target="_blank">PINASSE
                            MANDARINE</a>
                        <a class="dropdown-item"
                           href="https://annuaire.laposte.fr/restaurant/pins-et-plage-39115730200038/" target="_blank">PINS
                            ET PLAGE</a>
                    </div>
                </li>
                <!--section contact-->
                <li class="nav-item">
                    <a class="nav-link link display-4" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>
        <div class="navbar-buttons mbr-section-btn mbr-section-btn-nav">
            <a class="btn btn-sm btn-primary btn-book-flight display-4"
               style="font-family: Fugaz One, sans-serif; color: #0d0d0d; font-size: 20px;"
               href="https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF"
               onclick="var w=window.open('https://www.weezevent.com/widget_billeterie.php?id_evenement=310469&lg_billetterie=1&code=66219&width_auto=1&color_primary=00AEEF', 'Billetterie_weezevent', 'width=650, height=600, top=100, left=100, toolbar=no, resizable=yes, scrollbars=yes, status=no'); w.focus(); return false;"
            ><?= $reserver ?></a>
            <?php if ($isUK) : ?>
                <a class="btn btn-sm btn-white btn-lang-en display-4" href="../index.php">
                    <img src="../../assets/images/fr.png" alt="french site">
                </a>
            <?php else: ?>
                <a class="btn btn-sm btn-white btn-lang-en display-4" href="vues/index-UK.php">
                    <img src="../../assets/images/uk.png" alt="english site">
                </a>
            <?php endif;?>
        </div>
    </nav>
</section>
