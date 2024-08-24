<?php
/*
Template Name: About Us
*/
?>

<?php get_header(); ?>

<!-- wp:paragraph -->
<div class = "border-top border-2">
    
    <script>
        AOS.init();
    </script>
    <div class="about about-page">
        <h2>ABOUT US</h2>
        <p>JLO Global began operations in the Philippines in 2018 and has grown to become an outsourcing option.
            Right now, JLO family grows larger with more than 50 corporate clients and more services offered.
        </p>
            
        <p>With strong employees and partnership, the company is growing bigger to become a complete outsourcing
            center. Its customer service, back-office operations, outbound, virtual assistants, information technology,
            consulting and other business service solutions ensure consistently positive customer interactions that are
            reliable and flexible.
        </p>
    </div>
    <div class="about-box" id="about-box1" style="background-color: aliceblue; animation: .2s ease-in 1s 1 forOpacity" data-aos="fade-up">
        <div id="carouselAboutBox" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100 about-box-item">
                        <div class="offset-gold"></div>
                        <h4>The Market</h4>
                        <p>
                            We aim to deliver a globally
                            competitive edge by leveraging
                            proven processes and best
                            practices in supporting various
                            types of business regardless of its
                            scale and tenure.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 about-box-item">
                        <div class="offset-gold"></div>
                        <h4>Our Integrity</h4>
                        <p>JLO delivers what you really want.
                            A dynamic team with excellent in
                            communication skills. We continue to
                            be successful because we strive for
                            your success.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 about-box-item">
                        <div class="offset-gold"></div>
                        <h4>Partnership</h4>
                        <p>We help our clients save a lot of
                            time in focusing more in their
                            business. Instead of trying to build
                            their own team for Customer
                            Support and Virtual Assistants.
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAboutBox" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" id="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselAboutBox" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" id="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="about-box" id="about-box2" style="background-color: aliceblue;" data-aos="fade-up">
        <div class="about-box-item">
            <h4>The Market</h4>
            <p>
                We aim to deliver a globally
                competitive edge by leveraging
                proven processes and best
                practices in supporting various
                types of business regardless of its
                scale and tenure.
            </p>
        </div>
        <div class="about-box-item">
            <h4>Our Integrity</h4>
            <p>JLO delivers what you really want.
                A dynamic team with excellent in
                communication skills. We continue to
                be successful because we strive for
                your success.
            </p>
        </div>
        <div class="about-box-item">
            <h4>Partnership</h4>
            <p>We help our clients save a lot of
                time in focusing more in their
                business. Instead of trying to build
                their own team for Customer
                Support and Virtual Assistants.
            </p>
        </div>
    </div>
    <div class="team-leaders p-4 text-center text-light" data-aos="fade-up" style = "background-color: var(--blue)">

        <h2 class = "fw-bold">OUR KEY PEOPLE</h2>

        <p>One of the secret to our company success is the experienced and intelligent leaders. Get to know them!</p>

        <div class="team-leader-card d-md-flex justify-content-center" style = "color: var(--blue)">
              
            <div class="card w-auto shadow m-2 p-4 mx-md-2 mx-auto" style="background-color:aliceblue; width: 350px !important;" data-aos="flip-left">
                <div class = "card-img-top rounded-circle m-auto d-flex justify-content-center align-items-center" style = "width: 250px; height: 250px; border: 2px solid var(--blue); overflow:hidden">
                    <img class="" style = "" src="<?= get_site_url() ?>/wp-content/uploads/2023/01/Jhona-L.-Olano.jpg" alt="Card image">
                </div>
                    
                <div class="card-body m-auto w-100">
                    <h4 class="card-title" >President & CEO</h4>
                    <p class="card-text text-uppercase">Ms. Jhona L. Lacson</p>
                    <a href="#" class="fw-bold">ceo@jlobusinessgroup.com</a>
                </div>
            </div>

            <div class="card w-auto shadow m-2 p-4 mx-md-2 mx-auto" style="background-color:aliceblue; width: 350px !important;" data-aos="flip-left">

                <div class = "card-img-top rounded-circle m-auto d-flex justify-content-center align-items-center" style = "width: 250px; height: 250px; border: 2px solid var(--blue); overflow:hidden">
                    <img class="" style = "" src="<?= get_site_url() ?>/wp-content/uploads/2023/01/Jay-Patrimonio-Garte.jpg" alt="Jay Patrimonio Garte">
                </div>
                <div class="card-body  m-auto w-100">
                    <h4 class="card-title">Vice-President/Chief
                    Administrative Officer</h4>
                    <p class="card-text text-uppercase">Mr. Jay Patrimonio Garte</p>
                    <a href="#" class="fw-bold">cao@jlobusinessgroup.com</a>
                </div>
            </div>

            <div class="card w-auto shadow m-2 p-4 mx-md-2 mx-auto" style="background-color:aliceblue; width: 350px !important;" data-aos="flip-left">

                <div class = "card-img-top rounded-circle m-auto d-flex justify-content-center align-items-center" style = "width: 250px; height: 250px; border: 2px solid var(--blue); overflow:hidden">
                    <img class="" style = "" src="<?= get_site_url() ?>/wp-content/uploads/2023/05/Arisnilo-Antiporta-v2.jpg" alt="Arisnilo Antiporta">
                </div>
                <div class="card-body  m-auto w-100">
                    <h4 class="card-title">Operations Manager</h4>
                    <p class="card-text text-uppercase">Mr. Arisnilo Antiporta</p>
                    <a href="#" class="fw-bold">admin@jlobusinessgroup.com</a>
                </div>
            </div>
            
            <div class="card w-auto shadow m-2 p-4 mx-md-2 mx-auto" style="background-color:aliceblue; width: 350px !important;" data-aos="flip-left">

                <div class = "card-img-top rounded-circle m-auto d-flex justify-content-center align-items-center" style = "width: 250px; height: 250px; border: 2px solid var(--blue); overflow:hidden">
                    <img class="" style = "" src="<?= get_site_url() ?>/wp-content/uploads/2023/01/Maria-Rutchyll-Taborada.jpg" alt="Maria Rutchyll Taborada">
                </div>
                <div class="card-body m-auto w-100">
                    <h4 class="card-title">CSR Team Lead</h4>
                    <p class="card-text text-uppercase">Ms. Maria Rutchyll Taborada</p>
                    <a href="#" class="fw-bold">mrutchyll@jlobusinessgroup.com</a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="our-employees about-page-our-employees" id="our-employees" data-aos="fade-up" style = "background-color: var(--gold);">
        <h2>OUR EMPLOYEES</h2>
        <div class="">

            <p class = "fs-5">
                JLO assigns a committed team for Management including experience Customer Services Representatives, Virtual Assitants, Software Developers, and Staff Accountants to your business.
                 We create a Back Office that automates key processes to increase operational demand and increase sales.
            </p>

            <div class = "py-2">

                <h5 class = "fw-bold text-center text-uppercase">Accounting And Finance Team</h5>
                

                <div class = "col-md-5 mx-auto">
                    <img src = "<?= get_site_url(); ?>/wp-content/uploads/2023/05/accounting-and-finance.png" class = "">
                </div>
            </div>

            <div class = "py-2">

                <h5 class = "fw-bold text-center text-uppercase">IT Support Team</h5>


                <div class = "col-md-5 mx-auto">
                    <img src = "<?= get_site_url(); ?>/wp-content/uploads/2023/05/it-support-team.png" class = "">
                </div>
                
            </div>

            <div class = "py-2">

                <h5 class = "fw-bold text-center text-uppercase">Customer Service Team</h5>


                <div class = "col-md-5 mx-auto">
                    <img src = "<?= get_site_url(); ?>/wp-content/uploads/2023/05/customer-service-team.png" class = "">
                </div>
                
            </div>
            
        </div>
    </div>
</div>
<!-- /wp:paragraph -->


<?php get_footer(); ?>
