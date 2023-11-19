<?php
/*
Plugin Name: CI Mean median mode calculator
Plugin URI: https://www.calculator.io/mean-median-mode-calculator/
Description: Calculator for mean, median, and mode in statistics. Use this calculator to get the mean, median, mode, range, and the average for any data set.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_mean_median_mode_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Mean, Median, Mode Calculator by Calculator.iO";

function display_ci_mean_median_mode_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Mean, Median, Mode Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_mean_median_mode_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_mean_median_mode_calculator', 'display_ci_mean_median_mode_calculator' );