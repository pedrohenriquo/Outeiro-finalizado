<?php 
    /*
        Template Name: Pousadas
    */
?>

<?php get_header(); ?>
<div class="container">
            <div class="imageEscolhaTerreno">
                <?php
                    $id_do_post = 226; // este é o ID do post
                    $o_id = get_post($id_do_post);
                ?>

                <?php echo $o_id->post_content ;?>
            </div>
            <div class="texto-pousada">
            <?php
                    $id_do_post = 229; // este é o ID do post
                    $o_id = get_post($id_do_post);
                ?>

                <?php echo $o_id->post_content ;?>
            </div>
</div>

<?php get_footer(); ?>