<?php 
    /*
        Template Name: Nos Arredores
    */
?>

<?php get_header(); ?>
<section id="arredores" class="arredoresc">
        <div class="container-home">
            <?php
                $id_do_post = 261; // este é o ID do post
                $o_id = get_post($id_do_post);
            ?>

            <div><?php echo $o_id->post_content ;?></div>
            
        </div>
        
        <div class="container">
        <?php
                $id_do_post = 263; // este é o ID do post
                $o_id = get_post($id_do_post);
            ?>

            <div><?php echo $o_id->post_content ;?></div>
        </div>

</section>
<?php get_footer(); ?>

<script type="text/javascript">
    $('.arredoresc > .container-home > div').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
</script>