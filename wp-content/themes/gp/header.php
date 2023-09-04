<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Gemini Plumbing | Strictly Plumbing & Maintenance</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Darker Grotesque">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>./css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>./css/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>./assets/fontawesome/css/all.css">
        <style>
            .title{ 
                color: <?php echo get_theme_mod('heading_colour', 'salmon') ?> !important;
            }
        </style>
        <?php wp_head()?>
    </head>

    <header>
    
        <div class="img-layer">
            <div class="header-group">
                <div class="heading1">Hi! Welcome to</div>
                <div class="heading2">Gemini Plumbing</div>
                <div class="heading3">Call the best, flush the rest</div>
                <div class="heading4"><i class="fa fa-phone"></i><?php echo get_theme_mod('phone')?></div>
                <ul class="nav">
                    <!-- <li><a href="#" data-to=".home">Home</a></li> -->
                    <li><a href="#" data-to=".services">Services</a></li>
                    <li><a href="#" data-to=".pricing">Pricing</a></li>
                    <li><a href="#" data-to=".testimonials">Testimonials</a></li>
                    <li><a href="#" data-to=".gallery">Gallery</a></li>
                    <li><a href="#" data-to=".contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="logo">
            <?php
                $default_logo = get_template_directory_uri() . './assets/img/logo.png'; 
            ?>
            <img src="<?php echo get_theme_mod('logo', $default_logo)?>" width="250px" height="180px" alt="Circle">
        </div>
    </header>

    <body>