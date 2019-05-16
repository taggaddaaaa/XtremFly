<?php
$isUK = strpos( $_SERVER['REQUEST_URI'], 'UK' );

$mapTitle = $isUK ? "5 STARTS" : "LES 5 DÉPARTS";
$mapSubtitle = $isUK
	? "To facilitate your boarding, we propose you 5 different departures around the Pond Of Arcachon."
	: "Pour faciliter votre embarquement, nous vous proposons 5 départs différents autour du Bassin d'Arcachon.";
?>

<section class="mbr-section content4 cid-qJWR28Ug53" id="starts" style="background-color: #F2F2F2; padding-top: 3.5em">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-11">
                <h2 class="align-center pb-3 mbr-fonts-style display-2" style="color: #1D2124"><?= $mapTitle ?></h2>
                <h4 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style"><?= $mapSubtitle ?></h4>
            </div>
        </div>
    </div>
</section>

<!--SECTION MAP-->
<section class="map1 cid-qJWMpDIGNE">
    <div id="map1-7" class="google-map"></div>
</section>
