<?php
/*
Template Name: Front
*/
get_header(); ?>

<div class="container container_welcome row text-center">
	<h1>Bienvenue sur le site de la <span class="yellow_letters">Coop</span> !</h1>
	<p>
		<strong>La COOP est un lieu singulier du fait de son histoire et de sa forte dimension symbolique pour les Strasbourgeois.</strong> Dessinant une demi‐lune au coeur du port, à proximité du Rhin et de l’Allemagne, il a accueilli jusqu’en 2015 le siège et les entrepôts de <strong>l’Union des Coopérateurs d’Alsace.</strong>
		Cette zone concentre de nombreuses ambitions pour la nouvelle «nouvelle ville» du projet des Deux‐Rives.
	</p>
	<a class="large button" href="<? the_permalink(_PAGE_COOP) ?>">En savoir plus</a>
</div>

<div class="container container_yellow text-center">
	<div class="row">
		<h2>Les projets</h2>
		<div class="flex-card-example">
			<div class="card text-center">
				<div class="card-content card-vapeur">
					<div class="container_logocarte"><img class="logo_carte" src='wp-content/themes/coop_theme/assets/images/logo-central-vapeur.svg' alt="Logo Central Vapeur"/></img></div>
					<p class="text_card">Soutenir le meilleur de l'illustration, de la bande dessinée et faire découvrir la richesse de la création dans ces domaines à Strasbourg, en Alsace, et au-delà.</p>
					<a class="btn_small button" href="#">Voir le projet</a>
				</div>
			</div>
			<div class="card text-center">
				<div class="card-content card-avlab">
					<div class="container_logocarte"><img class="logo_carte" src='wp-content/themes/coop_theme/assets/images/logo-avlab.svg' alt="Logo AvLab" /></div>
					<p class="text_card">«Do it yourself» ou comment fabriquer à peu près n’importe quoi par soi-même ! L’ère du numérique transforme les manières de vivre, de penser et de créer. </p>
					<a class="btn_small button" href="#">Voir le projet</a>
				</div>
			</div>
			<div class="card text-center">
				<div class="card-content card-nojo">
					<div class="container_logocarte"><img class="logo_carte" src='wp-content/themes/coop_theme/assets/images/logo-nojoo.svg' alt="Logo Nojooo" /></div>
					<p class="text_card"> Atelier de création et de formation dans le domaine du multimédia  et s’adressant à des personnes aussi bien francophones qu’anglophones.</p>
					<a class="btn_small button" href="#">Voir le projet</a>
				</div>
			</div>
		</div>
		<a class="large button" href="#">Voir tous les projets</a>
	</div>
</div>

<div class="container container_green">
	<div class="row">
		<h2 class="text-center">Le blog</h2>
		<div class="flex-card-example">
			<div class="card">
				<div class="card-content-blog">
					<h4>L'expo à ne pas manquer !</h4>
					<p>L'Ososphère n'était pas que musique ! Les anciens bâtiments de la Coop ont été aménagé pour une magnifique exposition d'art ce week end</p>
					<a href="#">Lire la suite ></a>
				</div>
			</div>
			<div class="card">
				<div class="card-content-blog">
					<h4>L'expo à ne pas manquer !</h4>
					<p>L'Ososphère n'était pas que musique ! Les anciens bâtiments de la Coop ont été aménagé pour une magnifique exposition d'art ce week end</p>
					<a href="#">Lire la suite ></a>
				</div>
			</div>
			<div class="card">
				<div class="card-content-blog">
					<h4>L'expo à ne pas manquer !</h4>
					<p>L'Ososphère n'était pas que musique ! Les anciens bâtiments de la Coop ont été aménagé pour une magnifique exposition d'art ce week end</p>
					<a href="#">Lire la suite ></a>
				</div>
			</div>
		</div>
		<a class="button_yellow large button" href="#">Voir tous les articles</a>
	</div>
</div>

<div class="container container_nousretrouver row text-center">
	<h2>Nous retrouver</h2>
	<div id="map">Google Map</div>
</div>

<?php get_footer(); ?>

<script>
      function initMap() {
        var positionCoop = {lat: 48.573154, lng: 7.789527};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: positionCoop
        });
        var marker = new google.maps.Marker({
					icon: "wp-content/themes/coop_theme/assets/images/mark.svg",
          position: positionCoop,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmeU0DCDpvpHPacceuk-P7nCII_9GyMmY&callback=initMap">
    </script>

<script id="__bs_script__">//<![CDATA[
	document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
	//]]></script>
