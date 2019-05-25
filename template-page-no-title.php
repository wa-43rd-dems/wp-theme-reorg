<?php
/*
 * Template Name: Home Page
 * description: A specialized page template for home pages.
 */

set_query_var('post_title_slug', 'home');
set_query_var('main_classes', 'home');

$template = locate_template('page.php');
if (!$template) {
    $template = dirname(__FILE__) . 'page.php';
}
load_template($template);
?>
