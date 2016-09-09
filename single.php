<?php get_header(); global $post;?>
<?php /*** Comentarios en FB ***/ ?>
<?php /*?><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=341462306056550";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><?php */?>
<?php /***************************/ ?>
<div class="container">
  	<section id="main" class="col-xs-12 col-sm-7 col-md-8">
  	  	<article id="single" class="post-detail">
        	<?php get_breadcrumb(); ?>
      		<?php if ( have_posts() ) 
				while ( have_posts() ) : the_post(); ?>
					<?php if ( is_front_page() ) { ?>
                    <h2><?php the_title(); ?></h2>
                    <?php } else { ?>
                    <h1><?php the_title(); ?></h1>
                    <?php } ?>
                    <?php 
					$id = get_the_ID();
					$uri = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'large' );
					 ?>
                    <div class="col-xs-12 blur-parent" style="">
                        <div class="box-dark parallax" data-stellar-background-ratio="0.5" style=""></div>
                        <div class="shadow-bg">
                            <div class="wrapper">
                                <!-- Post Media -->
                                <div class="post-media type-photo">                                    
                                    <img src="<?php echo $uri[0] ?>" alt="Post Title" class="img-full">
                                </div>
                                <!-- Post Media End -->
                            </div>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
					<div><?php the_content(); ?></div>
					
					
				<?php //comments_template(); ?>
            <?php endwhile; 
			wp_reset_postdata();?>
		<?php /*?><div class="addthis_sharing_toolbox" style="border-top: 1px solid #E9EAED; padding-top:5px;"></div>

        <div class="fb-comments" data-href="http://gali.gmksoluciones.com/<?php $_SERVER['REQUEST_URI'] ?>" data-width="100%" data-numposts="5"></div><?php */?>
		</article> <!-- Fin de single -->
        <div style="margin-bottom:5rem"></div>
    <?php
	$prev_post = get_previous_post(true);
	if (!empty( $prev_post )): ?>
		<a class="pull-left" href="<?php echo get_permalink( $prev_post->ID ); ?>" style="color:black"><i class="fa fa-arrow-circle-o-left" style="font-size:15px; color:#00A3FF"></i>  Anterior</a>
	<?php else: ?> 
		<span class="pull-left" href="#" style="color:gray;"><i class="fa fa-arrow-circle-o-left" style="font-size:15px; color:#90CEDD"></i> Anterior</span>
	<?php endif; ?>
	
	 <?php
	$next_post = get_next_post(true);
	if (!empty( $next_post )): ?>
		<a class="pull-right" href="<?php echo get_permalink( $next_post->ID ); ?>" style="color:black">Siguiente <i class="fa fa-arrow-circle-o-right" style="font-size:15px; color:#00A3FF"></i></a>
	<?php else: ?> 
		<span class="pull-right" href="#" style="color:gray;">Siguiente <i class="fa fa-arrow-circle-o-right" style="font-size:15px; color:#90CEDD"></i>	</span>
	<?php endif; ?>
    
	<div class="clearfix"></div>
    
	<?php
        related_post($id);
    ?>

  </section> <!-- Fin de main -->
  <?php  get_sidebar()?>
  </div>
  
<style>
.box-dark.parallax{
	background-image: url('<?php echo $uri[0] ?>');
}
</style>
<div style="margin-bottom:5rem"></div>
<?php get_footer(); ?>

