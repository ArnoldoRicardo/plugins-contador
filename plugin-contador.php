<?php
/**
 * Plugin Name: Contador
 * Description:    shortcode de contador diario con nuemeros diferentes.
 * Version:          1.0
 * Author:           Arnoldo Ricardo
 * Author URI:    arnoldoricardo.com
*/

function contador(){
    $a = date("Y") - 1000;
    $b = date("z");
    return $a + $b;

}
add_shortcode('codigo', 'contador'); 