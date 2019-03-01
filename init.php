<?php

/* INIT Basic Configuration Settings */

// connect to database
$server = 'localhost';
$user = 'osimba_114352';
$pass = 'yC04XT9tyNV8';
$db = 'osimba_kcc';
$Database = new mysqli($server, $user, $pass, $db);

// error reporting
mysqli_report(MYSQLI_REPORT_ERROR); //allows me to see any errors/mistakes I make in mysqli
ini_set('display_errors', 1); //I see any errors/warnings php can show me

// set up constants
define('SITE_PATH', 'https://portfolio.proqweb.com/02/');
define('IMAGE_PATH', 'https://portfolio.proqweb.com/02/images/products/');
//define('SHOP_TAX', '0.0875'); NOT CURRENTLY NECESSARY

// include objects
include('models/m_template.php');
include('models/m_categories.php');
include('models/m_products.php');
include('models/m_cart.php');

// creates objects
$Template = new Template();
$Categories = new Categories();
$Products = new Products();
$Cart = new Cart();

session_start();

// global
$Template->set_data('cart_total_items', $Cart->get_total_items());
$Template->set_data('cart_total_cost', $Cart->get_total_cost());

