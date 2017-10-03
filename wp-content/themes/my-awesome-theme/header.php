<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<header id="site-header">
    <img src="<?= get_template_directory_uri() ?>/img/header.jpg" class="background">
    <h1><?php bloginfo('title') ?></h1>
</header>

<div id='site-content'>