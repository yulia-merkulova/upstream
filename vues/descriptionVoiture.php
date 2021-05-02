<?php

	$langue = $donnees["langue"];
	$voiture = $donnees["voiture"];

?>
<body >
	<div data-js-controleur="Voiture"  data-js-controleur-action="descriptionVoiture&id=<?=$voiture["id"] ?>">  

	<div class="description" data-js-component="DescriptionVoiture">
		<section class="sectionDecriptionEntete">
			<div class="swiper-container">
				<div class="swiper-wrapper">
<?php
	foreach ($donnees["images"]  as $unImage) {
		$tableauLienImage = explode("/",$unImage["lien"]);
		$altImage = $tableauLienImage[Count($tableauLienImage)-1];
?>  
            		<div class="swiper-slide"><img src="<?=$unImage["lien"] ?>" alt="<?= $altImage ?>" class="swiper-image"></div>
<?php
	}
?>               
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>

				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>

			<div class="descriptionVoiture"> 
				<div class="ajouter-panier specificationVoiture" data-js-ajouter-panier>
				<button class="btn-ajouter-panier" data-js-btn><?= $langue['ajouterAuPanier']?></button>
				</div>

				<div class="specification specificationVoiture" data-js-voiture="<?=$voiture["id"] ?>">
					<h2><?= $langue['specificatioDesc'] ?> <?=$voiture["nomMarque"] ?> <?=$voiture["nomModele"] ?> <?=$voiture["annee"] ?></h2>
					<ul class="ulListeDescription">
						<li class="ilListeDescription"><span><?= $langue["modele"] ?>: </span> <span><?=$voiture["nomModele"] ?></span></li>
						<li class="ilListeDescription"><span><?= $langue["habitacle"] ?>: </span><span class="valeur"><?= $donnees["typeCarrosserie"][$voiture["idTypeCarrosserie"]]?></span></li>
						<li class="ilListeDescription"><span><?= $langue["couleur"] ?>: </span><span class="valeur"><?= $donnees["couleur"][$voiture["idTypeCarrosserie"]]?></span></li>
						<li class="ilListeDescription"><span><?= $langue["kilometrage"] ?>: </span><span class="valeur"><?= $voiture["kilometrage"]?></span> km</li>
						<li class="ilListeDescription"><span><?= $langue["transmission"] ?>: </span><span class="valeur"><?= $donnees["transmission"][$voiture["idTransmission"]]?></span></li>
						<li class="ilListeDescription"><span><?= $langue["carburant"] ?>:</span><span class="valeur"><?= $donnees["typeCarburant"][$voiture["idTypeCarburant"]]?></span></li>
						<li class="ilListeDescription"><span><?= $langue["prix"] ?>: </span><span class="valeur"><?=$voiture["prixVente"] ?>$</span></li>
					</ul>			
				</div>
			</div>
		</section>
		<section class="sectionDecriptionPrincipale">
			<h2><?= $langue['descriptionDesc'] ?> <?=$voiture["nomMarque"] ?> <?=$voiture["nomModele"] ?> <?=$voiture["annee"] ?></h2>
			<p><?= $donnees["description"] ?></p>
		</section>
	</div>
