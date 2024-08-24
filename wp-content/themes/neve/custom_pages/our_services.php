<?php
/*
Template Name: Our Services
*/
?>

<?php get_header(); ?>


<!-- wp:html -->
<script>
        AOS.init();
</script>
    <div class="company-services services-page" style = "border-color: transparent">
        <h2>COMPANY SERVICES</h2>
        <p>At JLO, we add value to our clients' business through the services that we offer. Take a look at the comprehensive outsourcing services that we have.</p>
        <div id="carouselServices" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php 

                    foreach(get_services() as $service){

                        echo '

                        <div class="carousel-item mobile-item" id = "mobile-' . sanitize_title($service->title). '" data-interval="2000">
                            <div class="d-block w-100 company-service-item" data-aos="zoom-in">
                                <h4> ' . $service->title . '</h4>
                                <p>
                                ' . $service->text . '
                                </p>
                            </div>
                        </div>

                        ';
                    }

                    echo '
                    
                        <script>

                            $(".mobile-item:first").addClass("active"); 

                            var heights = $(".mobile-item").map(function() {
                                return $(this).height();
                            }).get();
                            
                            var highestHeight = Math.max.apply(null, heights);

                            $(".mobile-item").css("height", highestHeight)

                        </script>

                    ';

                ?>

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
        <div class="">

        <?php 

            $number_of_services = count(get_services());
            $number_of_rows = ceil(count(get_services())/3);

            /*for($count = 1; $count < $number_of_rows+1; $count++){

                echo '
                
                    <div class="company-services-row-' . $count . '">
                ';

                foreach(get_services() as $service){

                    echo '

                        <div class="company-service-item" data-aos="zoom-in">
                            <h4>' . $service->title . '</h4>
                            <p>
                                ' . $service->text . '
                            </p>
                        </div>

                    ';
                }

                echo '</div>';


                
            }*/

            for($counter = 0; $counter < $number_of_services; $counter += 3){

                echo '
                
                    <div class="company-services-row company-services-row-' . $counter+1 . '">
                ';

                for($j = $counter; $j < $counter + 3 && $j < $number_of_services; $j++){

                    echo '

                        <div class="company-service-item" data-aos="zoom-in">
                            <h4>' . get_services()[$j]->title . '</h4>
                            <p>
                                ' . get_services()[$j]->text . '
                            </p>
                        </div>

                    ';

                }

                echo '</div>';

            }

            echo '
                    
                        <script>

                            var heights = $(".company-service-item").map(function() {
                                return $(this).height();
                            }).get();
                            
                            var highestHeight = Math.max.apply(null, heights);

                            $(".company-service-item").css("height", highestHeight)

                        </script>

                    ';



            ?>
    
        </div>
        
        
    </div>
<!-- /wp:html -->

<?php get_footer(); ?>
