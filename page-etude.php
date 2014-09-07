<?php
/*
Template Name: Suivi d'étude Page
*/
get_header(); ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="row">
        <!-- 
        <div class="hide-for-large-up">
            TODO: SMARTPHONE
        </div> 
        -->
        <!-- <div id="suivi-etude" class="show-for-large-up"> -->
        <div id="suivi-etude">
            <div class="row stage">
                <div class="stage-line">
                    <div class="small-3 large-3 columns text-center stage-dot">
                        <div class="stage-circle center">
                            <p class="stage-number">1</p>
                        </div>
                    </div>
                    <div class="small-9 large-9 columns">
                        <div class="stage-text">
                            <h4>Dépôt de l’appel d’offre</h4>
                            <p>Vous pouvez soumettre votre demande <a href="http://aplicaen.fr/wordpress/?page_id=63">directement sur notre site internet</a>, 
                            en nous envoyant un <a href="mailto:contact@aplicaen.fr">email</a> ou par courrier.</p>
                        </div>
                    </div>
                </div>

                <div class="stage-line">
                    <div class="small-3 large-3 columns text-center stage-dot">
                        <div class="stage-circle center">
                            <p class="stage-number">2</p>
                        </div>
                    </div>
                    <div class="small-9 large-9 columns">
                        <div class="stage-text">
                            <h4>Attribution d’un chargé de mission</h4>
                            <p>Dès la réception de votre appel d’offre, nous désignerons un chef de projet. Il sera votre interlocuteur privilégié durant toute la durée de l’étude.</p>
                        </div>
                    </div>
                </div>

                <div class="stage-line">
                    <div class="small-3 large-3 columns text-center stage-dot">
                        <div class="stage-circle center">
                            <p class="stage-number">3</p>
                        </div>
                    </div>
                    <div class="small-9 large-9 columns">
                        <div class="stage-text">
                            <h4>Contact</h4>
                            <p>Le chef de projet vous répondra rapidement pour confirmer que l’étude est dans nos domaines de compétences.</p>
                        </div>
                    </div>
                </div>

                <div class="stage-line">
                    <div class="small-3 large-3 columns text-center stage-dot">
                        <div class="stage-circle center">
                            <p class="stage-number">4</p>
                        </div>
                    </div>
                    <div class="small-9 large-9 columns">
                        <div class="stage-text">
                            <h4>Analyse</h4>
                            <p>Le chef de projet vous accompagnera dans la rédaction d’un cahier des charges et établira  un planning et un budget. Une proposition commerciale vous sera alors faite.</p>
                        </div>
                    </div>
                </div>

                <div class="stage-line">
                    <div class="small-3 large-3 columns text-center stage-dot">
                        <div class="stage-circle center">
                            <p class="stage-number">5</p>
                        </div>
                    </div>
                    <div class="small-9 large-9 columns">
                        <div class="stage-text">
                            <h4>Recrutement des intervenants</h4>
                            <p>Le chef de projet recrutera, parmi les 700 élèves de l’ENSICAEN, des intervenants et constituera alors l’équipe qui répondra à vos besoins.</p>
                        </div>
                    </div>
                </div>

                <div class="stage-line">
                    <div class="small-3 large-3 columns text-center stage-dot">
                        <div class="stage-circle center">
                            <p class="stage-number">6</p>
                        </div>
                    </div>
                    <div class="small-9 large-9 columns">
                        <div class="stage-text">
                            <h4>Suivi</h4>
                            <p>Dès le début de l’étude, nous vous assurons un suivi régulier.
                            <br/>En effet, le chef de projet prendra contact avec vous au moins une fois par semaine par mail et/ou réunion afin de vous informer de l’avancement du projet.</p>
                        </div>
                    </div>
                </div>

                <div class="stage-line">
                    <div class="small-3 large-3 columns text-center stage-dot">
                        <div class="stage-circle center">
                            <p class="stage-number">7</p>
                        </div>
                    </div>
                    <div class="small-9 large-9 columns">
                        <div class="stage-text">
                            <h4>Clôture de l’étude</h4>
                            <p>Nous vous présentons nos conclusions et vous remettons les livrables.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
