import './bootstrap';

const navigationButton = document.querySelector('[data-mobile-nav-button]');
const navigation = document.querySelector('[data-mobile-nav]');

if (navigationButton && navigation) {
	navigationButton.addEventListener('click', () => {
		const isOpen = navigation.getAttribute('data-open') === 'true';

		navigation.setAttribute('data-open', String(!isOpen));
		navigationButton.setAttribute('aria-expanded', String(!isOpen));
		navigationButton.setAttribute('aria-label', isOpen ? 'Ouvrir le menu' : 'Fermer le menu');
		navigationButton.textContent = isOpen ? '☰' : '×';
	});

	navigation.querySelectorAll('a').forEach((link) => {
		link.addEventListener('click', () => {
			navigation.setAttribute('data-open', 'false');
			navigationButton.setAttribute('aria-expanded', 'false');
			navigationButton.setAttribute('aria-label', 'Ouvrir le menu');
			navigationButton.textContent = '☰';
		});
	});
}

const revealElements = document.querySelectorAll('[data-reveal]');

if ('IntersectionObserver' in window && revealElements.length > 0) {
	const revealObserver = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (!entry.isIntersecting) {
				return;
			}

			entry.target.classList.add('is-visible');
			observer.unobserve(entry.target);
		});
	}, { threshold: 0.12 });

	revealElements.forEach((element) => {
		revealObserver.observe(element);
	});
} else {
	revealElements.forEach((element) => element.classList.add('is-visible'));
}
