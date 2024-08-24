<?php /* Template Name: Home */?>

<?php get_header(); ?>

<script>AOS.init();</script>


<div id="sliderfirstpart" class="carousel slide banner" data-bs-ride="carousel" style="width: 100%; padding: 0; margin: 0;">

    <div class="carousel-inner" style="width: 100%; padding: 0; margin: 0;">
        <div class="carousel-item active" style="width: 100%;">
            <div class="d-block w-100 banner-caption" >
                <div class="background-banner-caption"></div>
                <h1>Building Your Business <br>Is Our Priority</h1>
                <p>Your Most Trusted Outsourcing Company in the Philippines!</p>
                <a href="contact-us"><button class="btn-contact">CONTACT US</button></a>        
            </div>
        </div>
        <div id = "slide2" class="carousel-item" style="background:url('./wp-content/uploads/2023/01/office-background-scaled.jpg'); background-position: top; background-size: cover;">
            <div class="d-block w-100 banner-caption" >

                <div id = "slide2-inner-flex" style="display: flex;">
                    <div id = "slide2-text" style="width: 50%; height: 400px; overflow-y: show; padding: 1%">
                        <h1 style="font-size: 50px; color:var(--blue); text-shadow: 5px 5px 5px grey">Placing People First In All That We Do</h1>
                        <a href="contact-us"><button class="btn-contact">Learn More</button></a>
                    </div>

                    <div id = "slide2-img" style="width: 50%; display: flex; justify-content: center; align-items:flex-end">
                        <img 
                            src="./wp-content/uploads/2023/01/Jay-Home-v2-min.png" 
                            style="width:500px; border: 2px solid var(--gold);"
                        >
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#sliderfirstpart" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sliderfirstpart" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
     
        
<div  class="about p-0 m-0 pt-4">
        
        <h2>ABOUT US</h2>
        <p>JLO Global began operations in the Philippines in 2018 and has grown to become an outsourcing option.
            Right now, JLO family grows larger with more than 50 corporate clients and more services offered.</p>
            
            <p>With strong employees and partnership, the company is growing bigger to become a complete outsourcing
            center. Its customer service, back-office operations, outbound, virtual assistants, information technology,
            consulting and other business service solutions ensure consistently positive customer interactions that are
            reliable and flexible.</p>
    </div>
     <div  class="about-box" id="about-box1">
        <div id="carouselAboutBox" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="2000">
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
                    
                    <div class="d-block w-100 about-box-item" data-interval="2000">
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
                    <div class="d-block w-100 about-box-item" data-interval="2000">
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
    <div class="about-box" id="about-box2" >
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
<div style="width:100%; background-color: var(--blue); padding: 3%"><a href="about-us" style="text-decoration: none; color: white"><button class="btn-contact" style="margin:auto; display:block; background-color: white; color: var(--blue)" data-aos="zoom-in">Learn More</button></a></div>
        <div  class="company-services">
        <h2>COMPANY SERVICES</h2>
        <div id="carouselServices" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                <div class="carousel-item active" data-interval="2000">
                    <div class="d-block w-100 company-service-item">
                        <h4>BUSINESS PROCESS OUTSOURCING (BPO)</h4>
                        <p>
                            Our end-to-end solutions are designed to allow
                            our clients the option of using any combination
                            of our services, or the complete package to
                            cater to their individual needs.
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-interval="2000">
                    <div class="d-block w-100 company-service-item">
                        <h4>BACK OFFICE SERVICES (BOS)</h4>
                        <p>
                            JLO delivers what you really want.
                            A dynamic team with excellent in
                            communication skills. We continue to
                            be successful because we strive for
                            your success.
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-interval="2000">
                    <div class="d-block w-100 company-service-item">
                        <h4>CUSTOMER SERVICE</h4>
                        <p>
                            Inbound and Outbound - we can supply
                            customer care solutions customized to
                            the companies’ needs. We’re a seasoned
                            centre with the experience you need. With more than seven (7) years
                            operating with both directly to
                            customers and businesses.
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-interval="2000">
                    <div class="d-block w-100 company-service-item">
                        <h4>CHAT AND EMAIL SUPPORT</h4>
                        <p>
                            We can supply clients the most
                            effective options to improve
                            their business processes. We
                            provide the finest options at the
                            most affordable costs.
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-interval="2000">
                    <div class="d-block w-100 company-service-item">
                        <h4>DATA ENTRY</h4>
                        <p>
                            Our representatives are given
                            extremely strict metrics to follow
                            and are gone through a thorough
                            hiring and training process.
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselServices" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" id="carousel-control-prev-icon-service"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselServices" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" id="carousel-control-next-icon-service"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="company-services-row-1">
            <div class="company-service-item" data-aos="zoom-in">
                <h4><i class="fa fas fa-money-check"></i> BUSINESS PROCESS OUTSOURCING (BPO)</h4>
                <p>
                    Our end-to-end solutions are designed to allow
                    our clients the option of using any combination
                    of our services, or the complete package to
                    cater to their individual needs.
                </p>
            </div>
    
            <div class="company-service-item" data-aos="zoom-in">
                <h4>BACK OFFICE SERVICES (BOS)</h4>
                <p>
                    JLO delivers what you really want.
                    A dynamic team with excellent in
                    communication skills. We continue to
                    be successful because we strive for
                    your success.
                </p>
            </div>
    
            <div class="company-service-item" data-aos="zoom-in">
                <h4>CUSTOMER SERVICE</h4>
                <p>
                    Inbound and Outbound - we can supply
                    customer care solutions customized to
                    the companies’ needs. We’re a seasoned
                    centre with the experience you need. With more than seven (7) years
                    operating with both directly to
                    customers and businesses.
                </p>
            </div>
        </div>
        <div class="company-services-row-2">
            <div class="company-service-item" data-aos="zoom-in">
                <h4>CHAT AND EMAIL SUPPORT</h4>
                <p>
                    We can supply clients the most
                    effective options to improve
                    their business processes. We
                    provide the finest options at the
                    most affordable costs.
                </p>
            </div>
            <div class="company-service-item" data-aos="zoom-in">
                <h4>DATA ENTRY</h4>
                <p>
                    Our representatives are given
                    extremely strict metrics to follow
                    and are gone through a thorough
                    hiring and training process.</p>
            </div>
    
        </div>
        <div style="width:100%; padding: 3%"><a href="our-services" style="text-decoration: none; color: white"><button class="btn-contact" style="margin:auto; display:block; background-color: var(--blue);" data-aos="zoom-in">Learn More</button></a></div>
    </div>
    <div class="gold-section" style="position: relative; padding: 5%; width: 100%;">
        <img src="wp-content/uploads/2022/12/circles.png" style="height: 65px; width: 190px; position: absolute; top: 0; left: 0;"  data-aos-anchor-placement="top-bottom">
        <p data-aos="fade-left">
            Our business process outsourcing services, which focus heavily on business outcomes, are pivotal in achieving significant risk and cost reductions, while also improving business transparency and efficiency.
        </p>
        <p data-aos="fade-right">
            We recognize and affirm the unique
            nature of our clients and strive to translate
            the business philosophy of our clients into
            the culture of the teams. Through rigorous
            and systematic training and calibration
            with clients, we ensure that our
            outsourcing services work.    
        </p>
        <img src="wp-content/uploads/2022/12/circles.png" style="height: 65px; width: 190px; position: absolute; right: 0; bottom: 0;" data-aos="fade-down">
    </div>
    <div class="our-employees"  style="background-color: var(--blue)">
        <h2>OUR EMPLOYEES</h2>
        <div class="our-employees-div">
            <div class="img-div">
                <img src="wp-content/uploads/2022/12/employees-at-work.jpg">
            </div>
            
            <div class="caption" >
                
                <p>
                    JLO assigns a committed team for
                    Management including experience
                    Customer Services Representatives,
                    Virtual Assitants, Software
                    Developers, and Staff Accountants
                    to your business. We create a Back
                    Office that automates key
                    processes to increase operational
                    demand and increase sales.
                </p>
            </div>
            
        </div>
    </div>
    <div class="our-office" >
        <h2>OUR CEBU OFFICE</h2>
        <div class="our-office-div">
            <div class="our-office-img">
                <img src="wp-content/uploads/2022/12/office-6.jpg">
            </div>
            <div class="caption" >
                <p>Our main office is located at the
                    Queen City of the South, Cebu,
                    Philippines.</p>
            
                    <p>With strong English
                    communication skills and a
                    multitude of talented labor pool,
                    the Philippines is well known as
                    one of the top outsourcing
                    destination.</p>
            
                    <p>With offices in Cebu we have
                    access to a large pool of
                    employees with a wide range of
                    skill sets.</p>
            </div>
            
        </div>
<div style="width:100%; padding: 3%">
<a href="about-us" style="text-decoration: none; color: white">
<button class="btn-contact" style="margin:auto; display:block; background-color: white; color: var(--blue)" data-aos="zoom-in">Learn More</button>
</a>
</div></div>


<?php get_footer(); ?>
