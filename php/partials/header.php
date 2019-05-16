<?php
$isUK = strpos( $_SERVER['REQUEST_URI'], 'UK' );

$headerTitle = $isUK ? "Fly away Above the Bay of Arcachon" : "Envolez-Vous Au Dessus Du Bassin D'Arcachon";
?>

<section class="cid-qJWKGr3dEn mbr-fullscreen mbr-parallax-background" id="header">
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <!-- Title -->
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1"
                    style="color:#ffffff;">
					<?= $headerTitle ?>
                </h1>
            </div>
            <!-- Logo -->
            <img src="../../assets/images/logo-XtremFly.png"
                 alt="XtremFly"
                 title="logo XtremFly"
                 style="height: 10rem;">
        </div>
    </div>

    <!-- Arrow -->
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#parachute">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>
