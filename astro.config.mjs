// @ts-check
import { defineConfig } from 'astro/config';

// Custom domain: https://www.greenloom.com
export default defineConfig({
	output: 'static',
	site: 'https://www.greenloom.com',
	base: '/',
});
