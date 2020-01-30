<?php 
    /*
        Template Name: Galeria
    */
?>

<?php get_header(); ?>
<section id="galeria" class="galeriac">
        <div class="container-home">
            <?php
                $id_do_post = 32; // este é o ID do post
                $o_id = get_post($id_do_post);
            ?>

            <div><?php echo $o_id->post_content ;?></div>
            
        </div>
</section>
<?php get_footer(); ?>

<script type="text/javascript">
    $('.galeriac > .container-home > div').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
</script>