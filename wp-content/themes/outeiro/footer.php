        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-nav-footer">
                        <nav>
                            <?php 
                                wp_nav_menu(
                                    array('theme_location' => 'header-menu')
                                );
                            ?>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-end">
                        <div class="title-footer-infos">
                            <img src="<?php bloginfo('template_directory'); ?>/images/icons/home.png" />
                            <h5>Outeiro</h5>
                        </div>
                        <p>
                            Estrada de Caraíva, Km 18, s/n <br/> 
                            Condomínio Outeiro das Brisas <br/> 
                            Porto Seguro - BA
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-email">
                        <div class="title-footer-infos">
                            <img src="<?php bloginfo('template_directory'); ?>/images/icons/email.png" />
                            <h5>Email</h5>
                        </div>
                        <a href="mailto: <?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?></a>
                    </div>
                    <div class="col-md-4 col-lg-4 col-tel">
                        <div class="title-footer-infos">
                            <img src="<?php bloginfo('template_directory'); ?>/images/icons/tel.png" />
                            <h5>Telefones</h5>
                        </div>
                        <ul>
                            <li>+55 11 3845-1618</li>
                            <li>+55 73 99973-3220</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-social">
                        <span>SIGA NOSSAS REDES SOCIAIS</span>
                        <a href="https://www.facebook.com/outeirodasbrisas/" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/images/icons/facebook-logo.png" />
                            </a>
                        <span>Copyright Outeiro <?php echo date("Y"); ?></span>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/instafetch.js/1.5.0/instafetch.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/function.js"></script>

        <script>

            if ( document.querySelector( 'body.page-template-template-home' ) ) {

                instafetch.init({
                    accessToken: '19942318684.1677ed0.a19262c77da84d959fd517c168bb2061',
                    target: 'instafetch',
                    numOfPics: 20,
                    caption: false
                });

                setTimeout(function(e){
                    
                    $('#instafetch').slick({
                        dots: false,
                        infinite: true,
                        slidesToShow: 6,
                        arrows: false
                    })
                }, 1000);
            }

            $('#photoGallery .container-home > div').slick({
                dots: false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                arrows: false
            });

            document.querySelector('body').onload = function() {
                if (window.innerWidth <= 678) {

                    document.querySelector('#buttonMenuMobile').addEventListener('click', function(e){
                        document.querySelector('body').classList.toggle('menu-mobile-open')
                        document.querySelector('header nav').classList.toggle('open')
                    })

                    document.querySelectorAll('header nav #menu-menu > li').forEach(function(element){
                        if (element.querySelector('.sub-menu')) {
                            element.addEventListener('click', function(e){
                                element.classList.toggle('open')
                                element.querySelector('.sub-menu').classList.toggle('open')
                            })
                        }
                    })

                    document.querySelector('#menuMobileCloseButton').addEventListener('click', function(e){
                        document.querySelector('body').classList.toggle('menu-mobile-open')
                        document.querySelector('header nav').classList.toggle('open')
                    })

                    document.querySelector('#menuMobileOverlay').addEventListener('click', function(e){
                        document.querySelector('body').classList.toggle('menu-mobile-open')
                        document.querySelector('header nav').classList.toggle('open')
                    })
                }
            }
        </script>
    </body>
</html>