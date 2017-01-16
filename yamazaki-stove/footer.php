 <?php
/**
Template name: footer
 **/ 
?>
        <!-- Feedback Form -->
        <div class="g-bg-color--gray-opacity95">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Contact Us</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">お問い合わせ</h2>
                </div>
                <form>
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* お名前">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email">
                            </div>
                            <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* 電話番号">
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="* 本文"></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">送信</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Feedback Form -->

        <!-- Google Map -->
        <section class="s-google-map">
            <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
        </section>
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark-opacity">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white" href="#">Home</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">当店について</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">取扱メーカー</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">薪ストーブの魅力</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white" href="">Twitter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">Facebook</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">Instagram</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">YouTube</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white" href="">最新記事</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">個人情報の取扱について</a></li>
                                <li><a class="g-font-size-15--xs g-color--white" href="">お問い合わせ</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">yamazaki</h3>
                            <p class="g-color--white">〒020-****<br/>岩手県盛岡市中野＠ー＠ー＠</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html">
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

        <script src="https://maps.google.com/maps/api/js?sensor=false" charset="UTF-8"></script>
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
        <!--========== END JAVASCRIPTS ==========-->


    </body>
    <!-- End Body -->
</html>