/**
 * Follow Form Interactivity API store (stub; no ESP network).
 */
import { store, getContext } from '@wordpress/interactivity';

const { state } = store( 'greenLoomLandingFollow', {
	state: {
		get showForm() {
			return state.status !== 'success';
		},
		get showSuccess() {
			return state.status === 'success';
		},
		get isSubmitting() {
			return state.status === 'submitting';
		},
		get buttonLabel() {
			return state.isSubmitting
				? state.submittingLabel
				: state.submitLabel;
		},
	},
	actions: {
		setEmail( event ) {
			const context = getContext();
			context.email = event.target.value;
			state.emailError = '';
			state.formError = '';
		},
		setRole( event ) {
			const context = getContext();
			context.role = event.target.value;
		},
		setConsent( event ) {
			const context = getContext();
			context.consent = Boolean( event.target.checked );
			state.consentError = '';
			state.formError = '';
		},
		*submit( event ) {
			event.preventDefault();
			const context = getContext();

			state.status = 'validating';
			state.emailError = '';
			state.consentError = '';
			state.formError = '';

			const email = ( context.email || '' ).trim();
			const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test( email );

			if ( ! emailOk ) {
				state.emailError = state.emailRequiredMsg;
				state.status = 'error';
				return;
			}

			if ( ! context.consent ) {
				state.consentError = state.consentRequiredMsg;
				state.status = 'error';
				return;
			}

			state.status = 'submitting';

			// Stub delay. Swap for ESP / REST when Q-002 is decided.
			yield new Promise( ( resolve ) => {
				setTimeout( resolve, 450 );
			} );

			// Persist nothing yet. Simulate success path for local verification.
			// To exercise vendor-down: set window.__GL_FOLLOW_FORCE_ERROR = true in console.
			if (
				typeof window !== 'undefined' &&
				window.__GL_FOLLOW_FORCE_ERROR
			) {
				state.formError = state.vendorDownMsg;
				state.status = 'error';
				return;
			}

			state.status = 'success';
		},
	},
} );
