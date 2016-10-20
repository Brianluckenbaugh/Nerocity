<?php
    if ( dynamic_sidebar( 'front-page-header-second' ) ){
        /* IF NOT EMPTY */
    }
    else{
        /* IF EMPTY */
        if( myThemes::get( 'default-content' ) ){
            echo '<div class="widget widget_text">';
            echo '<h3>Outdoors or Bust</h3>';
            echo '<div class="textwidget">Fam literally activated charcoal yr. Selfies whatever lomo, raclette skateboard mumblecore raw denim beard austin vexillologist swag chicharrones. Hashtag messenger bag cold-pressed, yr synth drinking vinegar pug raclette.</div>';
            echo '</div>';
        }
    }
?>
