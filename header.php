<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <link href='https://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Artifika' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cutive Mono' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
    <div class="container">
        <header class="site-header">
            <h1 class="text-center"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <h5 class="text-center"><?php bloginfo('description'); ?></h5>
            <nav class="site-nav text-center">
            <?php wp_nav_menu(array('theme_location' => 'header-menu'));?>﻿
            </nav>
        </header>
        <div class="articles">

        