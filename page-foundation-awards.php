<?php

/*
    Template Name: Foundation Awards Page
*/ 

get_header('nonav');

?>

<section class="awards-back-button">
    <div class="container">
        <a href="/#awards" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
</section>

<section class="awards-page-title">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <h5>Duckling Stages 1 - 4</h5>
    </div>
</section>

<section id="awards-outcomes">
    <div class="container">
        
        <div class="row mt-3">
            <div class="col-md-6">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/awards/duckling-one.jpg">
            </div>
            <div class="col-md-6">
                <h2>Duckling One</h2>
                <div>
                    <p>By completing this Award you will be able to:</p>
                    <ol>
                        <li>Make a supervised safe entry with adult support if required.</li>
                        <li>Float on back with adult support behind the head without floatation equipment.</li>
                        <li>Blow bubbles at the water surface.</li>
                        <li>Wet the head without submersion.</li>
                        <li>Kick 5 metres on back with adult support.</li>
                        <li>Travel without adult support for 2 metres to a floating object.</li>
                        <li>Enter the pool, rotate and return to the side with adult support.</li>
                        <li>Exit the water safely with minimal adult support.</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-6">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/awards/duckling-two.jpg">
            </div>
            <div class="col-md-6">
                <h2>Duckling Two</h2>
                <div>
                    <p>By completing this Award you will be able to:</p>
                    <ol>
                        <li>Make a sitting entry with adult support if required.</li>
                        <li>Rotate 180 degrees either using a log roll or an upright position, using floatation equipment and without adult support.</li>
                        <li>Submerge the face with confidence and without force under adult supervision.</li>
                        <li>Blow an object for a distance of 2 metres.</li>
                        <li>Travel 3 metres using arms and/or legs without adult support.</li>
                        <li>Move 5 metres along the rail or wall without adult support.</li>
                        <li>Enter the pool, rotate and return to the side with minimal adult support.</li>
                        <li>Exit the water safely with minimal adult support.</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-6">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/awards/duckling-three.jpg">
            </div>
            <div class="col-md-6">
                <h2>Duckling Three</h2>
                <div>
                    <p>By completing this Award you will be able to:</p>
                    <ol>
                        <li>Make a supervised jump to an adult with or without support.</li>
                        <li>Float on the front or back without adult support.</li>
                        <li>Push off on the front or back in a streamlined shape from a supporting adult.</li>
                        <li>Blow bubbles with the mouth and nose underwater.</li>
                        <li>Travel 5 metres on the front to the side of the pool without adult support.</li>
                        <li>Kick 5 metres on the front holding a float (the adult may hold the other end of the float).</li>
                        <li>Enter the pool, rotate and return to the side without adult support.</li>
                        <li>Climb out of the water with adult support if required.</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-6">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/awards/duckling-four.jpg">
            </div>
            <div class="col-md-6">
                <h2>Duckling Four</h2>
                <div>
                    <p>By completing this Award you will be able to:</p>
                    <ol>
                        <li>Jump into the water unaided, but supervised.</li>
                        <li>Perform a mushroom or star float.</li>
                        <li>Rotate 360 degrees either using a log roll or an upright position.</li>
                        <li>Push and glide achieving a streamlined position on the front or back.</li>
                        <li>Submerge completely.</li>
                        <li>Travel 10 metres on the front or back, without adult support.</li>
                        <li>Jump into the water, turn around, swim back to the point of entry and hold on to the side or rail.</li>
                        <li>Climb out of the water with adult support if required.</li>
                    </ol>
                </div>
            </div>
        </div>
        
    </div>
</section>

<?php get_footer(); ?>