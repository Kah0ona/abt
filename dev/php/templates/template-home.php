<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<main class="Home u-gridContainer">
		<div class="Home-business u-gridRow">
			<h1 class="Home-title">Wie zijn wij</h1>
			<div class="Home-content">
				<p>ABT installatietechniek is een installatiebedrijf dat gespecialiseerd is in verwarming,
		warm water, luchtverwarming, en ventilatie (met nadruk op Service & Onderhoud).
				</p>
				<p>ABT installatietechniek is een jong en dynamisch bedrijf dat staat voor kwaliteit tegen een 
		concurrerende prijs. ABT werkt uitsluitend met gediplomeerde en ervaren technici.
				</p>
			</div>
			<div class="Home-side">
				<a href="/zakelijk" class="Button Button--inverted Button--huge">
					<span>Zakelijk</span>
					<svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-arrow-right"></use>
					  </svg>
				</a>
			</div>
		</div>
		<div class="Home-non-business u-gridRow">
			<h1>Wat doen wij</h1>
			<div class="Home-content">
				<p>
					ABT installatietechniek streeft ernaar om kwalitatief installatiewerk te verzorgen
		voor zowel de particuliere als de zakelijke markt. Hieraan ligt ten grondslag een servicegerichte werkwijze dat gepaard gaat met professioneel en persoonlijk advies.
				</p>
			</div>
			<div class="Home-side">
				<a href="/particulier" class="Button Button--inverted Button--huge">
					<span>Particulier</span>
					<svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-arrow-right"></use>
					  </svg>
				</a>
			</div>
		</div>
	</main>

<?php get_footer(); ?>

