<!--footer-->
<footer class="footer">
    <div class="container">
        <div class="block_row block_flex footer__top">
            <div class="footer__item item1">
                <div class="footer_logo">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div class="footer__item item2">
                <h3 class="footer__title">Main menu</h3>
                <div class="footer__content">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'bottom',
                        'container'       => 'nav',
                        'container_class' => 'footer__nav',
                        'menu_class'      => 'footer__menu',
                        'depth'           => 0
                    ) ); ?>
                </div>
            </div>
            <div class="footer__item item3">
                <h3 class="footer__title">Call us:</h3>
                <div class="footer__content"><a class="footer__phone" href="tel:<?php echo get_option('theme_contacttext')?>"><?php echo get_option('site_telephone')?></a></div>
            </div>
            <div class="footer__item item4">
                <h3 class="footer__title">Subscribe to our news</h3>
                <p class="footer__subtitle">Subscribe to our news and promotions!</p>
                <form class="footer__form">
                    <input type="email" name="subscribe" /><button class="btn footer__btn" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="block_row copyright">
            <p>Copyright &copy; GoVegan, IIc. All rightsreserved 2019</p>
            <p>Education Project by <span>Paspartoo</span></p>
        </div>
    </div>
</footer>
<div class="mobile_menu">
    <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <?php wp_nav_menu( array(
        'theme_location' => 'mobile',
        'container'       => 'nav',
        'container_class' => 'mob__block_nav',
        'menu_class'      => 'mobile_menu__menu',
        'depth'           => 2
    ) ); ?>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>