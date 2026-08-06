/**
 * Follow form stub (no ESP network until Q-002).
 * Force vendor-down: window.__GL_FOLLOW_FORCE_ERROR = true
 */

declare global {
	interface Window {
		__GL_FOLLOW_FORCE_ERROR?: boolean;
	}
}

const EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

const MESSAGES = {
	submit: 'Follow updates',
	submitting: 'Sending…',
	success: 'You are on the list. We will write when there is something real to say.',
	emailRequired: 'Enter a valid email address.',
	consentRequired: 'Consent is required to follow updates.',
	vendorDown:
		'We could not save your signup right now. Try again later, or email us if it keeps failing.',
} as const;

type Status = 'default' | 'validating' | 'submitting' | 'success' | 'error';

function initFollowForm(root: HTMLElement) {
	const form = root.querySelector<HTMLFormElement>('.gl-follow-form');
	const success = root.querySelector<HTMLElement>('.gl-success');
	const emailInput = root.querySelector<HTMLInputElement>('input[name="email"]');
	const roleSelect = root.querySelector<HTMLSelectElement>('select[name="role"]');
	const consentInput = root.querySelector<HTMLInputElement>('input[name="consent"]');
	const emailError = root.querySelector<HTMLElement>('[data-error="email"]');
	const consentError = root.querySelector<HTMLElement>('[data-error="consent"]');
	const formError = root.querySelector<HTMLElement>('[data-error="form"]');
	const submitBtn = root.querySelector<HTMLButtonElement>('button[type="submit"]');

	if (
		!form ||
		!success ||
		!emailInput ||
		!roleSelect ||
		!consentInput ||
		!emailError ||
		!consentError ||
		!formError ||
		!submitBtn
	) {
		return;
	}

	let status: Status = 'default';

	const setSubmitting = (isSubmitting: boolean) => {
		emailInput.disabled = isSubmitting;
		roleSelect.disabled = isSubmitting;
		consentInput.disabled = isSubmitting;
		submitBtn.disabled = isSubmitting;
		submitBtn.textContent = isSubmitting ? MESSAGES.submitting : MESSAGES.submit;
	};

	const clearErrors = () => {
		emailError.textContent = '';
		emailError.hidden = true;
		consentError.textContent = '';
		consentError.hidden = true;
		formError.textContent = '';
		formError.hidden = true;
		emailInput.removeAttribute('aria-invalid');
		consentInput.removeAttribute('aria-invalid');
	};

	const showError = (el: HTMLElement, message: string, input?: HTMLInputElement) => {
		el.textContent = message;
		el.hidden = false;
		if (input) {
			input.setAttribute('aria-invalid', 'true');
		}
	};

	emailInput.addEventListener('input', () => {
		emailError.hidden = true;
		emailError.textContent = '';
		formError.hidden = true;
		formError.textContent = '';
		emailInput.removeAttribute('aria-invalid');
	});

	consentInput.addEventListener('change', () => {
		consentError.hidden = true;
		consentError.textContent = '';
		formError.hidden = true;
		formError.textContent = '';
		consentInput.removeAttribute('aria-invalid');
	});

	form.addEventListener('submit', async (event) => {
		event.preventDefault();
		status = 'validating';
		clearErrors();

		const email = emailInput.value.trim();
		const emailOk = EMAIL_RE.test(email);

		if (!emailOk) {
			status = 'error';
			showError(emailError, MESSAGES.emailRequired, emailInput);
			return;
		}

		if (!consentInput.checked) {
			status = 'error';
			showError(consentError, MESSAGES.consentRequired, consentInput);
			return;
		}

		status = 'submitting';
		setSubmitting(true);

		await new Promise((resolve) => {
			setTimeout(resolve, 450);
		});

		if (window.__GL_FOLLOW_FORCE_ERROR) {
			status = 'error';
			setSubmitting(false);
			showError(formError, MESSAGES.vendorDown);
			return;
		}

		status = 'success';
		form.hidden = true;
		success.hidden = false;
		success.textContent = MESSAGES.success;
	});
}

document.querySelectorAll<HTMLElement>('[data-follow-form]').forEach(initFollowForm);
