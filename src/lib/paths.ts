/** Join paths under Astro `base` (GitHub Pages project site). */
export function withBase(path = ''): string {
	const base = import.meta.env.BASE_URL.endsWith('/')
		? import.meta.env.BASE_URL
		: `${import.meta.env.BASE_URL}/`;
	const normalized = path.replace(/^\/+/, '');
	if (!normalized) {
		return base;
	}
	return `${base}${normalized}`;
}

export function withHash(hash: string): string {
	const clean = hash.replace(/^#/, '');
	const base = withBase();
	return `${base}#${clean}`;
}
