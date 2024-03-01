const myLightMode = {
	init() {
		this.changeListener();
		this.tabindexListener();
	},

	/**
	 * Change listener for light mode toggle
	 */
	changeListener() {
		const $lightToggles = document.querySelectorAll('.light-toggle input[type="checkbox"]');
		if ($lightToggles.length <= 0) { return; }

		$lightToggles.forEach(($t) => {
			$t.addEventListener('change', (e) => {
				this.toggle(e.currentTarget.checked);
			});
		});
	},

	/**
	 * Keyboard listener for light mode toggle
	 */
	tabindexListener() {
		const $lightSwitches = document.querySelectorAll('.light-toggle__switch');

		$lightSwitches.forEach(($s) => {
			$s.addEventListener('keyup', (e) => {
				if (e.key === 'Enter' || e.keyCode === 13) {
					const $checkbox = e.currentTarget.closest('.light-toggle').querySelector('input[type="checkbox"]');
					$checkbox.checked = !$checkbox.checked;
					this.toggle($checkbox.checked);
				}
			});
		});
	},

	/**
	 * Toggle the body class and cache the variable
	 */
	toggle(isChecked) {
		document.querySelector('body').classList.toggle('is-light', isChecked);
		localStorage.setItem('lightMode', isChecked);
	},
};

document.addEventListener('DOMContentLoaded', () => {
	myLightMode.init();
});

(function() {
  const lightMode = localStorage.lightMode === 'true';
  if (lightMode) {
    document.querySelector('body').classList.add('is-light');

    // activate the toggle
    document.addEventListener('DOMContentLoaded', () => {
      const $toggles = document.querySelectorAll('.light-toggle input[type="checkbox"]');
      $toggles.forEach(($t) => {
        $t.checked = true;
      });
    });
  }
})();
