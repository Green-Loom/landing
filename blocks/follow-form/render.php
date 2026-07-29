<?php
/**
 * Follow Form block server render (Interactivity API).
 *
 * @package Green_Loom_Landing
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block default content.
 * @var WP_Block $block      Block instance.
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$store = 'greenLoomLandingFollow';

wp_interactivity_state(
	$store,
	array(
		'email'            => '',
		'role'             => '',
		'consent'          => false,
		'sourceSection'    => 'follow',
		'status'           => 'default', // default | validating | submitting | success | error
		'emailError'       => '',
		'consentError'     => '',
		'formError'        => '',
		'isSubmitting'     => false,
		'showForm'         => true,
		'showSuccess'      => false,
		'submitLabel'      => __( 'Follow updates', 'green-loom-landing' ),
		'submittingLabel'  => __( 'Sending…', 'green-loom-landing' ),
		'successMessage'   => __( 'You are on the list. We will write when there is something real to say.', 'green-loom-landing' ),
		'emailRequiredMsg' => __( 'Enter a valid email address.', 'green-loom-landing' ),
		'consentRequiredMsg' => __( 'Consent is required to follow updates.', 'green-loom-landing' ),
		'vendorDownMsg'    => __( 'We could not save your signup right now. Try again later, or email us if it keeps failing.', 'green-loom-landing' ),
	)
);

$context = array(
	'email'   => '',
	'role'    => '',
	'consent' => false,
);

$privacy_url = home_url( '/privacy/' );
$wrapper     = get_block_wrapper_attributes(
	array(
		'class' => 'gl-follow-form-wrap',
	)
);
?>
<div
	<?php echo $wrapper; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	data-wp-interactive="<?php echo esc_attr( $store ); ?>"
	<?php echo wp_interactivity_data_wp_context( $context ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
>
	<form
		class="gl-follow-form"
		novalidate
		data-wp-on--submit="actions.submit"
		data-wp-bind--hidden="!state.showForm"
		aria-label="<?php echo esc_attr__( 'Follow Green Loom updates', 'green-loom-landing' ); ?>"
	>
		<input type="hidden" name="source_section" value="follow" />

		<label>
			<span><?php esc_html_e( 'Email', 'green-loom-landing' ); ?></span>
			<input
				type="email"
				name="email"
				autocomplete="email"
				required
				placeholder="<?php echo esc_attr__( 'you@shop.com', 'green-loom-landing' ); ?>"
				data-wp-on--input="actions.setEmail"
				data-wp-bind--value="context.email"
				data-wp-bind--disabled="state.isSubmitting"
				data-wp-bind--aria-invalid="state.emailError"
			/>
			<span
				class="gl-field-error"
				role="alert"
				data-wp-bind--hidden="!state.emailError"
				data-wp-text="state.emailError"
			></span>
		</label>

		<label>
			<span><?php esc_html_e( 'What describes you? (optional)', 'green-loom-landing' ); ?></span>
			<select
				name="role"
				data-wp-on--change="actions.setRole"
				data-wp-bind--value="context.role"
				data-wp-bind--disabled="state.isSubmitting"
			>
				<option value=""><?php esc_html_e( 'Select one', 'green-loom-landing' ); ?></option>
				<option value="operator"><?php esc_html_e( 'Operator', 'green-loom-landing' ); ?></option>
				<option value="builder-agency"><?php esc_html_e( 'Builder / agency', 'green-loom-landing' ); ?></option>
				<option value="other"><?php esc_html_e( 'Other', 'green-loom-landing' ); ?></option>
			</select>
		</label>

		<label class="gl-consent">
			<input
				type="checkbox"
				name="consent"
				required
				data-wp-on--change="actions.setConsent"
				data-wp-bind--checked="context.consent"
				data-wp-bind--disabled="state.isSubmitting"
				data-wp-bind--aria-invalid="state.consentError"
			/>
			<span>
				<?php esc_html_e( 'Email me Green Loom updates. I can unsubscribe anytime.', 'green-loom-landing' ); ?>
				<a href="<?php echo esc_url( $privacy_url ); ?>"><?php esc_html_e( 'Privacy', 'green-loom-landing' ); ?></a>
			</span>
		</label>
		<span
			class="gl-field-error"
			role="alert"
			data-wp-bind--hidden="!state.consentError"
			data-wp-text="state.consentError"
		></span>

		<p
			class="gl-form-error"
			role="alert"
			data-wp-bind--hidden="!state.formError"
			data-wp-text="state.formError"
		></p>

		<button
			type="submit"
			data-wp-bind--disabled="state.isSubmitting"
			data-wp-text="state.buttonLabel"
		>
			<?php esc_html_e( 'Follow updates', 'green-loom-landing' ); ?>
		</button>
	</form>

	<div
		class="gl-success"
		role="status"
		data-wp-bind--hidden="!state.showSuccess"
		data-wp-text="state.successMessage"
	>
		<?php esc_html_e( 'You are on the list. We will write when there is something real to say.', 'green-loom-landing' ); ?>
	</div>
</div>
