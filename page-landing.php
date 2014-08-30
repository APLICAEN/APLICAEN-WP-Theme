<?php
/*
Template Name: Landing Page
*/
get_header(); ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="large-12 columns">
            <!-- 
            <ul class="example-orbit" data-orbit>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/photo_groupe2.jpg" />
                    <div class="orbit-caption">
                      Caption One.
                    </div>
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/photo_groupe.JPG" />
                    <div class="orbit-caption">
                      Caption Two.
                    </div>
                </li>
            </ul>
            -->
            <img id="landing_image" src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/photo_groupe2.jpg" />
        </div>
    </div>
    <hr/>

    <div class="row text-center">
        <div class="large-4 columns">
            <img src="http://placehold.it/400x300&text=[img]"/>
            <h4>La Junior</h4>
            <p>Découvrez APLICAEN et le mouvement Junior Entreprise !</p>
        </div>
        <div class="large-4 columns">
            <img src="http://placehold.it/400x300&text=[img]"/>
            <h4>Nos domaines d'activités</h4>
            <p>APLICAEN couvre les domaines ... blahblahblah [link !]</p>
        </div>
        <div class="large-4 columns">
            <img src="http://placehold.it/400x300&text=[img]"/>
            <h4>Deposez un appel d'offre</h4>
            <p>Si vous êtes interessé par notre offre n'hésitez pas à faire une demande de devis ! Sans engagement !</p>
        </div>
    </div>

<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
