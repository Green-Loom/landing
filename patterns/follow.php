<?php
/**
 * Title: Follow section
 * Slug: green-loom-landing/follow
 * Categories: green-loom-landing
 * Keywords: follow, signup, email
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"gl-tile gl-tile--light","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"52rem"}} -->
<section class="wp-block-group alignfull gl-tile gl-tile--light has-base-background-color has-background" id="follow" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"className":"gl-tile__inner","layout":{"type":"constrained"}} -->
	<div class="wp-block-group gl-tile__inner">
		<!-- wp:heading {"textAlign":"center","fontFamily":"heading"} -->
		<h2 class="wp-block-heading has-text-align-center has-heading-font-family"><?php esc_html_e( 'See Green Loom take shape.', 'green-loom-landing' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"gl-tile__sub"} -->
		<p class="has-text-align-center gl-tile__sub"><?php esc_html_e( 'Get occasional updates on what is shipping and where you can help shape it.', 'green-loom-landing' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:green-loom-landing/follow-form /-->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
