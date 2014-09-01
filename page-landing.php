<?php
/*
Template Name: Landing Page
*/
get_header(); ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="large-12 columns">
            <ul class="example-orbit" data-orbit>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/photo_groupe.JPG" />
                    <div class="orbit-caption">
                      Une équipe avec beaucoup trop de #swag.
                    </div>
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/photo_groupe2.jpg" />
                    <div class="orbit-caption">
                      Caption Two.
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <hr/>

    <div class="row text-center">
        <div class="large-4 columns">
            <img class="landing-logo" src="<?php echo get_stylesheet_directory_uri() ; ?>/css/svgs/"/>
            <?php the_field("section_gauche"); ?>
        </div>
        <div class="large-4 columns">
            <img class="landing-logo" src="<?php echo get_stylesheet_directory_uri() ; ?>/css/svgs/ap-engrenages.svg"/>
            <?php the_field("section_milieu"); ?>
        </div>
        <div class="large-4 columns">
            <img class="landing-logo" src="<?php echo get_stylesheet_directory_uri() ; ?>/css/svgs/ap-handshake.svg"/>
            <?php the_field("section_droite"); ?>
        </div>
    </div>

<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
