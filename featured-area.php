<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

$responsive_options = responsive_get_options();
//test for first install no database
$db = get_option( 'responsive_theme_options' );
//test if all options are empty so we can display default text if they are
$empty     = ( empty( $responsive_options['home_headline'] ) && empty( $responsive_options['home_subheadline'] ) && empty( $responsive_options['home_content_area'] ) ) ? false : true;
$emtpy_cta = ( empty( $responsive_options['cta_text'] ) ) ? false : true;

?>
<div id="featured" class="grid col-940">

	<div id="featured-content" class="grid col-940">

		<div id="titres" class="grid col-620">
		<h1 class="featured-title">
		
			<?php
			if( isset( $responsive_options['home_headline'] ) && $db && $empty )
				echo $responsive_options['home_headline'];
			else {
				_e( 'Hello, World!', 'responsive' );
			}
			?>
		</h1>

		<h2 class="featured-subtitle">
			<?php
			if( isset( $responsive_options['home_subheadline'] ) && $db && $empty )
				echo $responsive_options['home_subheadline'];
			else
				_e( 'Your H2 subheadline here', 'responsive' );
			?>
		</h2>
		</div><!-- end of .col-460 -->
		<div id="logo">
			<img src="http://www.portfolio.francois-demichelis.fr/wp-content/images/Fotolia_59485097_XS.png">
		</div>
		<div id="presentation" class="grid col-940">
		<?php
		if ( isset( $responsive_options['home_content_area'] ) && $db && $empty ) {
			echo do_shortcode( wpautop( $responsive_options['home_content_area'] ) );
		} else {
			echo '<p>' . __( 'Your title, subtitle and this very content is editable from Theme Option. Call to Action button and its destination link as well. Image on your right can be an image or even YouTube video if you like.', 'responsive' ) . '</p>';
		} ?>
		</div>
		<div id="contenu">
		<div id="boutique">
			<img src="http://www.portfolio.francois-demichelis.fr/wp-content/images/Fotolia_62015372_XS.png">
		</div>
			<div id="souhait_site">
				<ul>
					<dt>Vous souhaitez:</dt>
					<br>
					<li>Un site vitrine pour promouvoir votre activité</li>
					<li>Un site marchand</li>
					<li>La refonte d'un site existant</li>
					<li>Un logo où une charte graphique</li>
				</ul>
			</div>
		</div>
		<hr>
		<div>
			<P>Je vous propose de vous accompagner dans la mise en place de votre projet, ma mission est de vous conseiller afin de vous apporter la solution la plus performante et la plus adaptée à vos besoins.</p>

<p>Débutant mon activitée, je propose également des tarifs très avantageux, ce qui vous permettra d'obtenir une prestation de qualité professionnelle à moindre coût.

Une idée de projet et vous désirez un devis, besoin de conseils ?</p>
<p> je vous invite à me contacter et je m'engage à vous répondre dans les plus brefs délais.</P>
		</div>

		<?php if( $responsive_options['cta_button'] == 0 ): ?>

			<div class="call-to-action">

				<a href="<?php echo $responsive_options['cta_url']; ?>" class="blue button">
					<?php
					if( isset( $responsive_options['cta_text'] ) && $db && $emtpy_cta )
						echo $responsive_options['cta_text'];
					else
						_e( 'Call to Action', 'responsive' );
					?>
				</a>

			</div><!-- end of .call-to-action -->

		<?php endif; ?>

	</div><!-- end of .col-460 -->



</div><!-- end of #featured -->