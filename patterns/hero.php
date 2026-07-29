<?php
/**
 * Title: Hero
 * Slug: green-loom-landing/hero
 * Categories: green-loom-landing, featured
 * Keywords: hero, mission, brand
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"gl-hero-plane","backgroundColor":"hero","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<section class="wp-block-group alignfull gl-hero-plane has-base-color has-hero-background-color has-text-color has-background" id="hero" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"className":"gl-brand-mark","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group gl-brand-mark" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/green-loom-logo.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Green Loom logo', 'green-loom-landing' ); ?>" width="48" height="48" style="width:48px;height:48px"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"-0.02em"}},"textColor":"primary-soft","fontFamily":"heading","fontSize":"x-large"} -->
		<p class="has-primary-soft-color has-text-color has-heading-font-family has-x-large-font-size" style="font-style:normal;font-weight:600;letter-spacing:-0.02em"><?php esc_html_e( 'Green Loom', 'green-loom-landing' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:heading {"level":1,"textColor":"base","fontSize":"xx-large","fontFamily":"heading"} -->
	<h1 class="wp-block-heading has-base-color has-text-color has-heading-font-family has-xx-large-font-size"><?php esc_html_e( 'Your customers see a clean menu. Your team sees the seams.', 'green-loom-landing' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"mist","fontSize":"large"} -->
	<p class="has-mist-color has-text-color has-large-font-size"><?php esc_html_e( 'On a busy night, the front of the house looks finished. Behind it, menus, orders, rules, and handoffs still get taped together.', 'green-loom-landing' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:button {"backgroundColor":"primary","textColor":"base","className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="#follow"><?php esc_html_e( 'Follow updates', 'green-loom-landing' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
