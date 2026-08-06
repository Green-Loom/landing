<?php
/**
 * Title: Hero
 * Slug: green-loom-landing/hero
 * Categories: green-loom-landing, featured
 * Keywords: hero, mission, brand
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"gl-tile gl-tile--hero","backgroundColor":"hero","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"52rem"}} -->
<section class="wp-block-group alignfull gl-tile gl-tile--hero has-base-color has-hero-background-color has-text-color has-background" id="hero" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"className":"gl-tile__inner","layout":{"type":"constrained"}} -->
	<div class="wp-block-group gl-tile__inner">
		<!-- wp:heading {"textAlign":"center","level":1,"textColor":"base","fontFamily":"heading"} -->
		<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-heading-font-family"><?php esc_html_e( 'Bring your whole cannabis operation into rhythm.', 'green-loom-landing' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"gl-tile__sub"} -->
		<p class="has-text-align-center gl-tile__sub"><?php esc_html_e( 'Green Loom brings storefronts, operations, rules, and tools together so your team can move as one.', 'green-loom-landing' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","className":"gl-links"} -->
		<p class="has-text-align-center gl-links"><a class="gl-link" href="#follow"><?php esc_html_e( 'Follow updates', 'green-loom-landing' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
