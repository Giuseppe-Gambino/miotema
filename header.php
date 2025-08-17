<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<header>
    <h1><?php bloginfo('name'); ?></h1>
    <?php get_template_part('parts/nav'); ?>
</header>
