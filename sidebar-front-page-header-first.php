<?php
    if ( dynamic_sidebar( 'front-page-header-first' ) ){
        /* IF NOT EMPTY */

    }
    else{
        /* IF EMPTY */
        if( myThemes::get( 'default-content' ) ){
            echo '<div class="widget widget_text">';
            echo '<h3>We insist on having fun</h3>';
            echo '<div class="textwidget">Neutra +1 pitchfork williamsburg. Chambray offal aesthetic mumblecore la croix gentrify selvage. Echo park mumblecore meh messenger bag, synth post-ironic meggings vape hexagon cliche pabst typewriter kogi tbh. Tote bag flannel kogi, unicorn readymade la croix authentic.</div>';
            echo '</div>';
        }
    }
?>
