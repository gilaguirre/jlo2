<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<script>AOS.init();</script>

<div class="contact-us-page border-bottom border-1" style="background-color: var(--blue);">

    <h1>Contact us today, and get a reply within 24 hours!</h1>

    <div class="container mt-3 contact-us-page-form" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">

    
    <form action="<?php echo get_stylesheet_directory_uri(). '/custom_pages/submit_forms/contact_us.php'; ?>" method = "post">

        <div class="container">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
                <label for="name" style="color: var(--blue);">Complete Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="john@gmail.com">
                <label for="email" style="color: var(--blue);">Email address</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="I can't login">
                <label for="subject" style="color: var(--blue);">Subject</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" id="content" name="content" style="height: 10rem;" placeholder="I can't login"></textarea>
                <label for="subject" style="color: var(--blue);">Message</label>
            </div>

            <div class="shadow">
                <input type="submit" value = "Send Message" class = "btn form-control text-light fw-bold py-2" style = "background-color: #bda819">
            </div>

        </div>

    </form>

</div>


<?php get_footer(); ?>
