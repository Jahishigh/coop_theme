<?php
/*
Template Name: Front
*/
get_header(); ?>

<div class="container_welcome row">
	<h2>Bienvenue sur le site de la Coop !</h2>
	<p>
		La COOP est un lieu singulier du fait de son histoire et de sa forte dimension symbolique pour les Strasbourgeois. Dessinant une demi‐lune au coeur du port, à proximité du Rhin et de l’Allemagne, il a accueilli jusqu’en 2015 le siège et les entrepôts de l’Union des Coopérateurs d’Alsace.
		Cette zone concentre de nombreuses ambitions pour la nouvelle «nouvelle ville» du projet des Deux‐Rives.
	</p>
	<a class="btn_medium" href="#">En savoir plus</a>
</div>

<div class="container_lesprojets row">
	<h2>Les projets</h2>
	<div class="flex-card-example">
		<div class="card text-center">
			<div class="card-content">
				<img class="logo_carte" src='wp-content/themes/coop_theme/assets/images/logo-central-vapeur.svg' alt="Logo Central Vapeur" />
				<p class="texte_carte">Soutenir le meilleur de l'illustration, de la bande dessinée et faire découvrir la richesse de la création dans ces domaines à Strasbourg, en Alsace, et au-delà.</p>
				<a class="btn_small button" href="#">Voir le projet</a>
			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>

<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
//]]></script>
