</section>
<div class="footer-bg">
    <footer class="row">
        <?php do_action('foundationPress_before_footer'); ?>
        <?php dynamic_sidebar("footer-widgets"); ?>
        <?php do_action('foundationPress_after_footer'); ?>

        <div class="large-6 columns">
            <p class="footer-title">
                Contactez-nous !
            </p>
            <div class="information">
                <i class='fi-mail'>
                    <a class="rolling" href="mailto:contact@aplicaen.fr"> contact@aplicaen.fr</a>
                </i>
            </div>
            <div class="information">
                <i class="fi-marker"> 6 Boulevard maréchal Juin 14000 Caen</i>
            </div>
        </div>

        <div class="large-6 columns">
            <p class="footer-title">Restons connectés</p>
            <div class="information">
                <i class="fi-social-facebook">
                    <a class="rolling" href="https://www.facebook.com/Aplicaen"> Facebook</a>
                </i>
            </div>
            <div class="information">
                <i class="fi-social-linkedin">
                    <a class="rolling" href="https://www.linkedin.com/company/3843333">LinkedIn</a>
                </i>
            </div>
        </div>

        <div id="mentions" class="large-12 columns text-center">
            <span id="plaquette">
                <a class="rolling" href="/wp-content/uploads/2014/09/plaquette_aplicaen.pdf">Notre plaquette</a>
            </span>
            |
            <a class="rolling" href="/?page_id=63">Déposer un appel d'offre</a>
            |
            <a class="rolling" href="#">Mentions légales</a>
        </div>
        <div id="copyright" class="large-12 columns text-center">
            © APLICAEN, élèves-entrepreneurs 2014 - Tous droits réservés
        </div>
    </footer>
</div>
<a class="exit-off-canvas"></a>

    <?php do_action('foundationPress_layout_end'); ?>
    </div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
