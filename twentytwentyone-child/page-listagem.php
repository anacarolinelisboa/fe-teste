<?php
/*
Template Name: Página Listagem
*/
get_header();
?>
<div class="topo-listagem"></div>
<div class="container mt-0">
   <div class="row d-flex flex-wrap justify-content-between">   
        <!-- topo com titulo -->
        <div class="col-12 mb-4 mb-md-5 box-titulo-page">
            <h1 class="p-4 text-center text-md-left">RECEITAS</h1>
        </div>

        <!-- inicio coluna cards -->
        <div class="col-12 col-md-8">
            <!-- inicio  - loop de cards -->
            <?php
            $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 10 ) );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-12 card-style mb-3"> 
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <a href="<?php the_permalink(); ?>" class="link-img" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail( 'medium' ); ?>
                            </a>
                        </div>
                        <div class="col-12 col-md-7 align-items-center d-flex flex-wrap">
                            <div class="row">                                
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                    <h2 class="nome-post col-12 mt-2" id="post-<?php the_ID(); ?>"><?php the_title(); ?>
                                    </h2>
                                </a>
                                <p class="col-12 data-hora mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16"><path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/><path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/></svg>
                                    <b><?php the_time('d') ?>/<?php the_time('m') ?>/<?php the_time('Y') ?> <?php the_time( 'g:i' ) ?></b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
            <!-- fim - loop de cards -->
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

<?php 
get_footer();
?>