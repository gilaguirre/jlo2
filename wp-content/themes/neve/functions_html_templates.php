<?php

function get_html_template_result($message, $tone){
    return '

        <div class="alert alert-' . $tone . ' alert-dismissible fade show" role="alert">
            <div class = "message">' . $message . '</div>
            <button type="button" class="d-none btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class = "close-button btn mt-2"><span class = "badge text-' . $tone . '">[close]</span></div>
        </div>   
        
        <script>
            $(function(){
                $(".close-button").click(function(){
                    $(".btn-close").trigger("click");
                })
            })
        </script>
    ';
}
?>