<?php
/*
Template Name: Suivi d'étude Page
*/
get_header(); ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="show-for-small-only">
            SMARTPHONE
        </div>
        <div id="suivi-etude">
        </div>
        <div class="row stage">
            <div class="large-3 columns text-center stage-dot">
                <div class="stage-circle center">
                    <p class="stage-number">1</p>
                </div>
            </div>
            <div class="large-9 columns stage-dot">
                <div class="stage-text">
                    <h4>Demande</h4>
                    <p>Vous nous soumettes votre demande par e-mail ou par téléphone.</p>
                </div>
            </div>

            <div class="large-3 columns text-center stage-dot">
                <div class="stage-circle center">
                    <p class="stage-number">2</p>
                </div>
            </div>
            <div class="large-9 columns stage-dot">
                <div class="stage-text">
                    <h4>Contact</h4>
                    <p>Nous vous répondons sous 48 heures pour confirmer que le project est dans nos domaines de compétences.</p>
                </div>
            </div>

            <div class="large-3 columns text-center stage-dot">
                <div class="stage-circle center">
                    <p class="stage-number">3</p>
                </div>
            </div>
            <div class="large-9 columns stage-dot">
                <div class="stage-text">
                    <h4>Analyse</h4>
                    <p>Elaboration du cahier des charges, du planning et du buget.</p>
                </div>
            </div>

            <div class="large-3 columns text-center stage-dot">
                <div class="stage-circle center">
                    <p class="stage-number">4</p>
                </div>
            </div>
            <div class="large-9 columns stage-dot">
                <div class="stage-text">
                    <h4>Recrutement</h4>
                    <p>Sélection des intervenants et d'un chargé de mission qui sera votre interlocuteur privilégié durant la misson.</p>
                </div>
            </div>

            <div class="large-3 columns text-center stage-dot">
                <div class="stage-circle center">
                    <p class="stage-number">5</p>
                </div>
            </div>
            <div class="large-9 columns stage-dot">
                <div class="stage-text">
                    <h4>Suivi</h4>
                    <p>Contact hebdomadaire avec le client.</p>
                </div>
            </div>

            <div class="large-3 columns text-center stage-dot">
                <div class="stage-circle center">
                    <p class="stage-number">6</p>
                </div>
            </div>
            <div class="large-9 columns stage-dot">
                <div class="stage-text">
                    <h4>Résultat</h4>
                    <p>Remise du rapport et facturation.</p>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
