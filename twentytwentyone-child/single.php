<?php 
get_header();
?>

<div class="container">
  <div class="row d-flex flex-wrap justify-content-between">
        <?php
        /* bloco com titulo, resumo e data */
        while ( have_posts() ) :
            the_post(); ?>
            <div class="col-12 col-md-10 mb-3">
                <h1 class="nome-post mb-3"><?php the_title(); ?></h1>
                <p>Resumo do post: <?php echo strip_tags(substr_replace(get_the_content(), "...", 150)); ?></p>
            </div>
            <div class="col-12 mb-md-5 mb-3 mx-2 py-2 px-4 box-data-compartilhar">
                <div class="row">
                    <div class="col-12 col-md-6">                                
                        <p class="data-hora text-center text-md-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16"><path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/><path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/></svg>
                            <b><?php the_time('d') ?>/<?php the_time('m') ?>/<?php the_time('Y') ?> <?php the_time( 'g:i' ) ?></b>
                        </p>
                    </div>
                    <div class="col-12 col-md-6">  
                    </div>
                </div>
            </div>
        <?php
        endwhile; 
        ?> 

        <!-- bloco com principais infos, conteudo e imagem -->
        <div class="col-12 col-md-8 mb-3">
            <?php 
            while ( have_posts() ) :
                the_post(); ?>
                <div class="row">
                    <div class="col-12 box-imagem mb-3">
                        <?php
                            //imagens de tamanhos diferentes em mobile e desktop para melhorar a performance
                            if ( wp_is_mobile() ) { 
                                the_post_thumbnail( 'medium' );
                            }
                            else{                                
                                the_post_thumbnail( 'large' );
                            }
                            ?>
                    </div>
                    <div class="col-12 box-content">
                        <?php the_content(); ?>
                    </div> 
                </div> 
            <?php
            endwhile; 
            ?>
        </div>

        
        <!-- inicio coluna publicidade -->
        <div class="col-12 col-md-3"> 
            <div class="row">
                <div class="col-12 col-publicidade">
                    <p class="text-center">PUBLICIDADE</p>
                </div>
            </div>
        </div>
    </div> 
  </div>
</div>

<?php
get_footer();
