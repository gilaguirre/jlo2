<?php

add_filter('show_admin_bar', '__return_false');

function get_header_nav_list_array(){
		
	return array(

		array(
			'id' => 1,
			'name' => 'Home',
			'url' => get_site_url()
		),

		array(
			'id' => 2,
			'name' => 'about us',
			'url' => get_site_url() . '/about-us/'
		),

		array(
			'id' => 3,
			'name' => 'our services',
			'url' => get_site_url() . '/our-services/'
		),

		array(
			'id' => 4,
			'name' => 'contact us',
			'url' => get_site_url() . '/contact/'
		),
	);
}

function get_nav_list_item_html($nav_item_text, $redirect_url){

	return '
	
		<li class="nav-item">
			<a 
				class="nav-link active text-light text-capitalize" 
				aria-current="page" href="#"
				style = "' . $redirect_url . '"
			>' . $nav_item_text . '</a>
		</li>			


	';
}


function run_php_in_background($form_id, $url, $js_success_commands, $js_fail_commands){

    //alt url url: "' . get_stylesheet_directory_uri() . $path. '", // Path to your PHP script

    echo '
        <script>
            $(document).ready(function() {

                // Handle form submission
                $("#' . $form_id . '").submit(function(event){

                    event.preventDefault(); // Prevent page reload
                    
                    // Send AJAX request
                    $.ajax({
                            url: "' . $url . '", // Path to your PHP script
                        type: "POST", // or "GET" depending on your needs
                        data: $(this).serialize(), // Serialize form data
                        success: function(response) {
                            ' . $js_success_commands . '
                        },
                        error: function(xhr, status, error) {
                            // Handle errors
                            ' . $js_fail_commands . '
                        }
                    });
                });
            });
        </script>

    ';

    echo '
    
    <style>

        #media-frame-title h1{
            text-align:center !important
            color:red !important
        }
    </style>

    ';

}

function start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'start_session', 1);

function redirect_unregistered_urls() {
    if (is_404()) { // Check if the current request is a 404 error
        wp_redirect(home_url()); // Redirect to the home page
        exit; // Ensure no further code is executed
    }
}

include("functions_services.php");
include("functions_database.php");
include("functions_html_templates.php");