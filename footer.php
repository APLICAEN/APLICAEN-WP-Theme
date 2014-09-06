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
                <i class="fi-mail"> contact@aplicaen.fr</i>
            </div>
            <div class="information">
                <i class="fi-marker"> 6 Boulevard maréchal Juin 14000 Caen</i>
            </div>
        </div>

        <div class="large-6 columns">
            <p class="footer-title">Restons connectés</p>
            <div class="information">
                <a href="https://www.facebook.com/Aplicaen">
                    <i class="fi-social-facebook"> Facebook</i>
                </a>
            </div>
            <div class="information">
                <a href="https://www.linkedin.com/company/3843333">
                    <i class="fi-social-linkedin"> LinkedIn</i>
                </a>
            </div>
        </div>

        <div id="mentions" class="large-12 columns text-center">
            <span id="plaquette">
                <a href="#">Notre plaquette</a>
            </span>
            |
            <a href="#">Deposer un appel d'offre</a>
            |
            <a href="#">Mentions légales</a> 
        </div>
        <div id="copyright" class="large-12 columns text-center">
            © Junior APLICAEN 2014 - Tous droits réservés
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
