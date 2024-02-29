<?php
add_action('wp_body_open', 'my_add_dark_mode_checker', 5);

function my_add_dark_mode_checker() { ?>
<script>
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
</script>
<?php }
