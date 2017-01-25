 <?php
/**
Template name: footer
 **/ 
?>
    
     <section class="contact_form_ys">
        <!-- Feedback Form -->
        <div class="g-bg-color--primary col-xs-12">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white g-letter-spacing--2 g-margin-b-25--xs wow fadeInUp" data-wow-delay=".2s">Contact Us</p>
                    <h2 class="g-color--white g-font-size-32--xs g-font-size-36--md wow fadeInUp" data-wow-delay=".3s">お問い合わせ</h2>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="85" title="contact form 2017"]'); ?>
                
            </div>
        </div>
    </section>
        <!-- End Feedback Form -->

        <!-- Google Map -->
        <section class="s-google-map">
        <div class="g-text-center--xs g-bg-color--sky-light col-xs-12 g-padding-y-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs wow fadeInUp" data-wow-delay=".2s">Access</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md wow fadeInUp" data-wow-delay=".3s">アクセス</h2>
        </div>
            <div id="js__google-container" class="s-google-container g-height-400--xs col-xs-12"></div>
        </section>
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark-opacity">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest col-xs-12 g-bg-color--dark-opacity">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white" href="/">Home</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="/stoves/">取扱ストーブ</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="/gallery/">施工例</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="/other/">その他</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white" href="">Twitter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">Facebook</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">Instagram</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">Google+</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white" href="//">最新記事</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="/contact/#">個人情報の取扱について</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="/contact/">お問い合わせ</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">yamazaki</h3>
                            <p class="g-color--white">〒020-0816<br/>岩手県盛岡市中野1-4-26</p>
                            <p class="g-color--white">TEL 019-681-7061<br>
                            FAX 019-681-7062</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs col-xs-12 g-bg-color--dark-opacity">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="/">
                            <img class="g-height-auto--xs" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="yamazaki Logo" width="160px">
                        </a>
                    </div>
                    <div class="col-xs-6 g-text-right--xs">
                        <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"></p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->

        </footer>
        <!--========== END FOOTER ==========-->
                <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>
        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/jquery.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/waypoint.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/counterup.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

        <script src="https://maps.google.com/maps/api/js?key=AIzaSyALgwa3Z9Upt5kT__xPIOpY3TzmKX5pokw" charset="UTF-8"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/global.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/components/swiper.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/components/counter.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/components/portfolio-3-col.min.js"></script>

        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/components/google-map.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/components/wow.min.js"></script>
        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/main.js"></script>

        <script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/vendor/vidbg.min.js"></script>

        <!--========== END JAVASCRIPTS ==========-->

