<?php
$isUK = strpos($_SERVER['REQUEST_URI'],  'UK' );

$callToAction = $isUK
	? "FIND US ON THE SOCIAL NETWORKS!"
	: "RETROUVEZ-NOUS SUR LES RESEAUX SOCIAUX !";
$legacy = $isUK ? "Legal Notice " : "Mentions légales ";
$cgv = $isUK ? "Terms and conditions" : "Conditions générales de ventes";
?>

<section class="cid-qJWMuQiy1n" id="social-networks">
	<div class="container">
		<div class="media-container-row">
			<div style="color: #327495;" class="col-md-8 align-center">
				<div class="social-list pl-0 mb-0" style="padding: 1.5rem;">
					<p class="pb-3 mbr-fonts-style display-7" style="font-weight: 500;">
                        <?= $callToAction ?>
                    </p>

					<a style="padding:1rem;"
					   href="https://www.instagram.com/xtremflyarcachon/"
					   target="_blank"
					   name="instagram"
					><img style="width: 10%;" src="../../assets-mai19/images/insta.png" alt="instagram icon"></a>

					<a style="padding:1rem;"
					   href="https://www.facebook.com/XtremFly"
					   target="_blank"
					   name="facebook"
					><img style="width: 10%;" src="../../assets-mai19/images/facebook.png" alt="facebook icon"></a>

					<a style="padding:1rem;" href="https://waze.com/ul?ll=44.664845,-1.168768" target="_blank"
					   name="waze"
					><img style="width: 10%;" src="../../assets-mai19/images/waze.png" alt="waze icon"></a>
				</div>

				<h6 class="pb-3 mbr-fonts-style" style="font-size: 1rem; font-weight: 300; color: #327495;">
					<a href="#modal-privacy" data-toggle="modal" style="color: #327495;"><?= $legacy ?></a>
					-
					<a href="#modal-legacy" style="color: #327495;" data-toggle="modal"><?= $cgv ?></a>
				</h6>
			</div>
		</div>
	</div>
</section>
