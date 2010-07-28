<?php

add_action( 'after_setup_theme', 'skule_setup' );

function skule_setup(){
define( 'HEADER_IMAGE', '%s/../skule/images/headers/skule.jpg' );
}

add_action ('twentyten_credits', 'change_credits');

function change_credits(){
  echo '<a href="http://engsoc.skule.ca/" class="credit">Proudly supported by the UofT Engineering Society</a>';
}
?>
