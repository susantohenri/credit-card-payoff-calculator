<?php
/*
Plugin Name: Credit Card Payoff Calculator
Version: 1.0.0
License: GPL2
*/

function credit_card_payoff_calculator()
{
    ob_start();
    wp_enqueue_style('life-calculator-style', plugins_url('credit-card-payoff-calculator.css', __FILE__), [], '1.0.0');

    include(plugin_dir_path(__FILE__) . 'credit-card-payoff-calculator.tpl.php');
    echo do_shortcode('[calx]');

    return ob_get_clean();
}
add_shortcode('credit-card-payoff-calculator', 'credit_card_payoff_calculator');
