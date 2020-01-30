<?php 
    /*
        Template Name: Escolha seu Terreno
    */
?>

<?php get_header(); ?>
        <div class="container">
            <div class="imageEscolhaTerreno">
                <?php
                    $id_do_post = 151; // este é o ID do post
                    $o_id = get_post($id_do_post);
                ?>

                <?php echo $o_id->post_content ;?>
            </div>
            <div class="titulo-escolha-seu-terreno">
            <?php
                    $id_do_post = 153; // este é o ID do post
                    $o_id = get_post($id_do_post);
                ?>

                <?php echo $o_id->post_content ;?>
            </div>
            <div class="texto-escolha-seu-terreno">
            <?php
                    $id_do_post = 156; // este é o ID do post
                    $o_id = get_post($id_do_post);
                ?>

                <?php echo $o_id->post_content ;?>
            </div>
            

        </div>
<?php get_footer(); ?>