(function() {
	const darkMode = localStorage.darkMode === 'true';
	if (darkMode) {
		document.querySelector('body').classList.add('is-dark');

		// activate the toggle
		document.addEventListener('DOMContentLoaded', () => {
			const $toggles = document.querySelectorAll('.dark-toggle input[type="checkbox"]');
			$toggles.forEach(($t) => {
				$t.checked = true;
			});
		});
	}
})();
