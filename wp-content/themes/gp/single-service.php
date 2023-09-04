<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Gemini Plumbing | Strictly Plumbing & Maintenance</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Darker Grotesque">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>./assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>./css/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>./assets/fontawesome/css/all.css">
        <style>
            .title{ 
                color: <?php echo get_theme_mod('heading_colour', 'salmon') ?> !important;
            }
        </style>
        <?php wp_head()?>
    </head>

    <div class="container">
        <?php 
            if ( have_posts() ) {
                while ( 
                    have_posts() ) {
                    the_post(); 
                    get_template_part('partials/content','single-service');
                } 
            } 
        ?>
    </div>

<?php get_footer()?>