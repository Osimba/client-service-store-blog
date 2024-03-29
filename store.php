<?php

include('init.php');
$Template->set_data('page_class', 'main');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // get products from specific category

    $category = $Categories->get_categories($_GET['id']);

    // check if valid
    if ( ! empty($category)) {
        // valid and we can proceed

        // get category nav
        $category_nav = $Categories->create_category_nav($category['name']);
        $Template->set_data('page_nav', $category_nav);

        // get all products from that category
        $cat_products = $Products->create_product_table(4, $_GET['id']);

        if ( ! empty($cat_products)) {
            // have products to display
            $Template->set_data('products', $cat_products);
        }
        else {
            // no products in category
            $Template->set_data('products', '<li>No products exist in this category!</li>');
        }
        $Template->load('views/v_public_store.php', $category['name']);

    }
    else {
        // if category isn't valid
        $Template->redirect(SITE_PATH);
    }
}
else {
    // get all products from all categories

    // get category nav
    $category_nav = $Categories->create_category_nav('home');
    $Template->set_data('page_nav', $category_nav);

    // get products
    $products = $Products->create_product_table();
    $Template->set_data('products', $products);


    $Template->load('views/v_public_store.php', 'Welcome!');
}