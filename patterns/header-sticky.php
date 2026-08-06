<?php
/**
 * Title: Sticky header
 * Slug: green-loom-landing/header-sticky
 * Categories: green-loom-landing
 * Block Types: core/template-part/header
 * Inserter: no
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"div","align":"full","className":"gl-sticky-bar","style":{"spacing":{"padding":{"top":"0.65rem","bottom":"0.65rem","left":"1.375rem","right":"1.375rem"}},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"hero","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull gl-sticky-bar has-hero-background-color has-background" style="padding-top:0.65rem;padding-right:1.375rem;padding-bottom:0.65rem;padding-left:1.375rem">
	<!-- wp:group {"className":"gl-brand-mark","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group gl-brand-mark">
		<!-- wp:image {"width":"18px","height":"18px","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/green-loom-logo.svg' ) ); ?>" alt="" width="18" height="18" style="width:18px;height:18px"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="font-style:normal;font-weight:600"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Green Loom', 'green-loom-landing' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><a href="#follow"><?php esc_html_e( 'Follow updates', 'green-loom-landing' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
