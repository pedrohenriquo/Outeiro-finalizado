<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

        <title><?php bloginfo('name'); ?></title>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-logo col-md-6 col-lg-6">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="col-button-mobile hidden-md hidden-lg">
                        <div id="buttonMenuMobile">
                            <img src="<?php bloginfo('template_directory'); ?>/images/icons/menuMobile.png" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-contact-header">
                        <div class="contact-infos">
                            <div>
                                <span>Info: <b>+55 11 3845-1618 / +55 73 99973-3220</b></span>
                            </div>
                            <div id="selectCountry">
                                <div class="selected"><img src="<?php bloginfo('template_directory'); ?>/images/icons/icone_band_portugues.png" />português</div>
                                <ul>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icons/icone_band_portugues.png" />português</a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icons/icone_band_ingles.png" />inglês</a></li>
                                </ul>
                            </div>
                            <div class="facebook-logo-header">
                                <a href="https://www.facebook.com/outeirodasbrisas/" target="_blank">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/icons/icon_face.png" />
                                </a>
                            </div>
                        </div>
                        <nav>
                            <?php 
                                wp_nav_menu(
                                    array('theme_location' => 'header-menu')
                                );
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>