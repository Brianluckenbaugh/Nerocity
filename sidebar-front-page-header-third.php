<?php
    if ( dynamic_sidebar( 'front-page-header-third' ) ){
        /* IF NOT EMPTY */
    }
    else{
        /* IF EMPTY */
        if( myThemes::get( 'default-content' ) ){
            echo '<div class="widget widget_text">';
            echo '<h3>Subaru for lyfe</h3>';
            echo '<div class="textwidget">Plaid sustainable ramps, microdosing la croix banh mi letterpress banjo. Swag portland put a bird on it iceland twee bitters. Ethical tofu keytar, pabst franzen pok pok blue bottle tumblr.</div>';
            echo '</div>';
        }
    }
?>
