  <footer class="footer">
        <section class="about-info">
            <section class="about-us-wrapper col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <section class="about-us">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis nostrud exerci tation ullamcorper
                        suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                    <button type="button" class="learn-more" onclick="location.href='#'">learn-more</button>
                </section>
                <section class="photo-stream">
                    <h3>Photo Stream</h3>
                    <ul>
                        <li>
                            <a href="#"><img src="<?php bloginfo("template_url"); ?>/img/footer-lmg1.png" height="70" width="130" alt="footer-image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo("template_url"); ?>/img/footer-lmg2.png" height="70" width="130" alt="footer-image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo("template_url"); ?>/img/footer-lmg3.png" height="70" width="130" alt="footer-image"></a>
                        </li>
                        <li><a href="#"><img src="<?php bloginfo("template_url"); ?>/img/footer-lmg4.png" height="70" width="130" alt="footer-image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo("template_url"); ?>/img/footer-lmg5.png" height="70" width="130" alt="footer-image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo("template_url"); ?>/img/footer-lmg6.png" height="70" width="130" alt="footer-image"></a>
                        </li>
                    </ul>
                </section>
            </section>
            <section class="latest-tweets col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h3>Latest tweets</h3>
                <a class="twitter-timeline"  href="https://twitter.com/kamen_v_lesu" data-widget-id="567012835675627521">Твиты от @kamen_v_lesu</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </section>
            <section class="contact-info col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h3>Contact info</h3>
                <ul>
                    <li>Address: 12569 Saint Patrick des Prés,85000 Paris, France </li>
                    <li>Phone: +38 045 845-45-78</li>
                    <li>E-mail: <span>freeforwebdesign@gmail.com</span></li>
                </ul>
            </section>
        </section>

        <section class="copyright">
            <address>©<?php echo date('Y'); ?> - FreeForWebDesign.com - All Rights Reserved</address>

            <?php wp_nav_menu( array(
            "theme_location" => "main_menu",
            'menu_class'     => 'footer-nav',
            "container"      => false,
          ) ); ?>

        </section>
</div>
</body>
</html>



   