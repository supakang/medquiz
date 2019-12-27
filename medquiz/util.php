<?php

	function section_selected($selected_section) { 
		if (isset($_GET['section']) && $_GET['section'] == $selected_section) {
			echo 'class="section-link selected"';
		} else {
			echo 'class="section-link"';
		}
    }

    function subsection_selected($selected_section) {
		if (isset($_GET['subsection']) && $_GET['subsection'] == $selected_section) {
			echo 'class="section-link selected"';
		} else {
			echo 'class="section-link"';
		}
    }

?>