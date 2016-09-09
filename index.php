<?php get_header(); ?>
<div class="container">
    <section id="main" class="col-xs-12 col-sm-7 col-md-8" >
    <?php /*?><?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <small>Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?>  </small>
    <div class="thumbnail">
      <?php
          if ( has_post_thumbnail() ) { 
                the_post_thumbnail();
          }
      ?>
    </div>
      <?php the_excerpt(); ?>
    
    <?php endwhile; else: ?>
    <p><?php _e('No hay entradas.'); ?></p>
    <?php endif; ?><?php */?>        
        <?php if(have_posts()):?>
            <div class="grid">
            <?php while(have_posts()){ 
                the_post();?>
                    <div class="grid-item">
                        <div class="image">
                            <?php 
                                $featured_image = "";
                                if(has_post_thumbnail()){
                                    $img_psot_medium = wp_get_attachment_image_src( get_post_thumbnail_id($query1->ID), 'medium' );
                                    $featured_image = $img_psot_medium[0];
                                }else{
                                    $featured_image = $GLOBALS["default_image"];
                                } 
                            ?>
                            <a href="<?php the_permalink();?>">
                                <img width="100%" height="auto" src="<?php echo $featured_image;?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="core">
                            </a>
                        </div>
                        <div class="post_info">
                            <div class="post_title">
                                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                <p><?php the_excerpt(); ?>
                                <p><i class="fa fa-commenting"></i> <?php comments_number( 'Sin respuestas', 'una respuesta', '% respuestas' ); ?></p>
                            </div>
                            <div class="post_author">
                                <p><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?> <?php the_author_posts_link();/*the_author();*/ ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>            
            <div class="clearfix"></div>
			<?php 
                global $wp_query;
                //var_dump($wp_query->max_num_pages);
				if($wp_query->max_num_pages > 1 && $wp_query->query_vars["paged"] < $wp_query->max_num_pages){
					?><div id="cargar" style="text-align:center;width:100%;">
                    	<a href="javascript:void(0)" class="more btn btn-default" style="text-align:center;width:100%;">Cargar más entradas</a>
                        <div id="load-ajax">
                        	<div id="bowlG">
                                <div id="bowl_ringG">
                                    <div class="ball_holderG">
                                        <div class="ballG">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   	</div><?php
				}
            ?>
        <?php else: ?>
            <p><?php _e('No hay entradas.'); ?></p>
        <?php endif;?>
        
    </section> <!-- Fin de main -->    
    <?php  get_sidebar()?>
</div>

<?php include_once("loader.php");?>

<?php get_footer(); ?>
<script type="text/javascript">
	paged = 1;
</script>