<?php 
    /*
        Template Name: Home
    */
?>

<?php get_header(); ?>

<div id="menuMobileOverlay"></div>
<div id="menuMobileCloseButton">
    <svg id="i-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" color="#5a9f80">
        <path d="M2 30 L30 2 M30 30 L2 2" />
    </svg>
</div>

<div id="page">
    <section id="bannerPrincipal" class="container">
        <?php
            $id_do_post = 6; // este é o ID do post
            $o_id = get_post($id_do_post);
        ?>

        <?php echo $o_id->post_content ;?>
    </section>

    <section id="middleTextHome">
        <div class="container-home">
            <?php
                $id_do_post = 9; // este é o ID do post
                $o_id = get_post($id_do_post);
            ?>

            <h3><?php echo $o_id->post_title ;?></h3>
            <p><?php echo $o_id->post_content ;?></p>
        </div>
    </section>

    <section id="photoGallery">
        <div class="container-home">
            <?php
                $id_do_post = 16; // este é o ID do post
                $o_id = get_post($id_do_post);
            ?>

            <h3><?php echo $o_id->post_title ;?></h3>
            <div><?php echo $o_id->post_content ;?></div>
        </div>
    </section>

    <section id="instaSection">
        <h3><img src="<?php bloginfo('template_directory'); ?>/images/logo-instagram.png" alt="Instagram Logo" /></h3>
        <p>Acompanhe o clima da Bahia o ano todo em @pousadadoouteiro</p>
        <div id="instafetch"></div>
    </section>
</div>

<?php get_footer(); ?>