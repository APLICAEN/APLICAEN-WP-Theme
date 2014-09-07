<?php
/*
Template Name: Domaines de compétences Page
*/
get_header(); ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>

<div id="dc-top-bar" data-magellan-expedition="fixed">
    <div class="sub-nav">
        <div class="row">
            <div class="small-4 large-4 columns dcinfo text-center" data-magellan-arrival="A1">
                <a href="#A1">
                    <img class="comp-logo" src="<?php echo get_stylesheet_directory_uri() ; ?>/css/svgs/informatique.svg"/>
                    <p>Informatique</p>
                </a>
            </div>
            <div class="small-4 large-4 columns dcepa text-center" data-magellan-arrival="A2">
                <a href="#A2">
                    <img class="comp-logo" src="<?php echo get_stylesheet_directory_uri() ; ?>/css/svgs/elec.svg"/>
                    <p>Electronique et Physique Appliquée</p>
                </a>
            </div>
            <div class="small-4 large-4 columns dcmc text-center" data-magellan-arrival="A3">
                <a href="#A3">
                    <img class="comp-logo" src="<?php echo get_stylesheet_directory_uri() ; ?>/css/svgs/chimie.svg"/>
                    <p>Matériaux et Chimie</p>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="dcinfo comp_desc">
        <a name="A1"></a>
        <h3 data-magellan-destination="A1">Informatique</h3>
        <?php the_field("competences_informatique"); ?>
    </div>

    <div class="dcepa comp_desc">
        <a name="A2"></a>
        <h3 data-magellan-destination="A2">Electronique et Physique Appliquée</h3>
        <?php the_field("competences_epa"); ?>
    </div>

    <div class="dcmc comp_desc">
        <a name="A3"></a>
        <h3 data-magellan-destination="A3">Matériaux et Chimie</h3>
        <?php the_field("competences_mc"); ?>
    </div>
</div>

<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
