<?php

//Check if the environment is localhost or AWS - Start

$pathToWPLoad = $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';

if (file_exists($pathToWPLoad)) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

} else {

    
    require_once('../../../../../wp-load.php');
}

//Check if the environment is localhost or AWS - End

?>

<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){

            
        $subject = $_POST["subject"];
        $content = $_POST["content"];
        $email_address = $_POST["email"];
        $name = $_POST["name"];

        if(insert_inquiry($subject, $content, $email_address, $name)){

            $message = "We received your message. Expect a response from us soon!";
            $tone = "success";
        
            $_SESSION['result'] = get_html_template_result($message, $tone);
        
        }

        else{

            $message = "Something went wrong. Please try again.";
            $tone = "danger";
        
            $_SESSION['result'] = get_html_template_result($message, $tone);


        }

    }

    else{

        $message = "Invalid request.";
        $tone = "danger";
    
        $_SESSION['result'] = get_html_template_result($message, $tone);

    }

    foreach(get_header_nav_list_array() as $url){}

    wp_redirect(get_header_nav_list_array()[3]['url']);

?>