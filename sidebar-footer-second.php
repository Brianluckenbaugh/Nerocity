<?php
    if ( dynamic_sidebar( 'footer-second' ) ){
        /* IF NOT EMPTY */
    }
    else{
        /* IF EMPTY */
        if( myThemes::get( 'default-content' ) ){
            echo '<div class="widget widget_text">';
            echo '<h5>Address</h5>';
            echo '<div class="textwidget">';
            echo 'Nunyadamnbiz</br>';
            echo 'Manassas, Va 20109</br>';
            echo 'United States</br>';
            echo 'Earth</div>';
            echo '</div>';
        }
    }
?>
