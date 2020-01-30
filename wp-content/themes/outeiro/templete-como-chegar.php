<?php 
    /*
        Template Name: Como Chegar
    */
?>

<?php get_header(); ?>


<div class="container">
            <div class="imagem-como-chegar">
                <?php
                    $id_do_post = 239; // este é o ID do post
                    $o_id = get_post($id_do_post);
                ?>

                <?php echo $o_id->post_content ;?>
            </div>
            <div class="texto-como-chegar">
            <?php
                    $id_do_post = 242; // este é o ID do post
                    $o_id = get_post($id_do_post);
                ?>

                <?php echo $o_id->post_content ;?>
            </div>
</div>
<?php get_footer(); ?>