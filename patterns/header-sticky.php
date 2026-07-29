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
<!-- wp:group {"tagName":"div","align":"full","className":"gl-sticky-bar","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull gl-sticky-bar has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"className":"gl-brand-mark","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group gl-brand-mark">
		<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/green-loom-logo.svg' ) ); ?>" alt="" width="32" height="32" style="width:32px;height:32px"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"heading","fontSize":"large"} -->
		<p class="has-heading-font-family has-large-font-size" style="font-style:normal;font-weight:600"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Green Loom', 'green-loom-landing' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><a href="#follow"><?php esc_html_e( 'Follow updates', 'green-loom-landing' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
