<?php
/*
Template Name: Page d'Accueil
*/
?>

<?php get_header(); ?>

	</div>
    
    <div class="container">
            
   <?php echo do_shortcode("[epsshortcode id=434]"); ?><!-- /.carousel -->

</div>
		<div class="container"> 

				<nav class="navbar-inverse" id="navigation">
						<div class="collapse navbar-collapse">
                    	
                    		<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
                    	

						<?php //if(of_get_option('search_bar', '1')) {?>
						<!--<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							<div class="form-group">
								<input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','wpbootstrap'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</div>
						</form>-->
						<?php //} ?>
					</div>
                    
                   <!--<div class="breadcrumb">-->
						<?php //if(function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
                    <!--</div>-->
				</nav>
                
                			<div class="navbar-inverse breadcrumb1">
            	<?php if(function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
			</div>
		</div>

		
          
            <div class="container">

			<div id="content" class="clearfix">
			
				<div id="main" class="col-sm-12 clearfix" role="main">
                
                
                <?php if ( function_exists( 'ot_get_option' ) ) {
				  $texte_page = ot_get_option( 'texte_page' );
				  $le_titre = ot_get_option( 'le_titre' );
				}
				
				?>
                
                <div class="page-header">
				<h1><?php echo $le_titre; ?></h1>
				</div>
                <div class="row">
					<div class="col-md-8">
						<?php echo $texte_page; ?>
                	</div>
					<div class="col-md-4">
                    <img src="<?php echo $image_1; ?>" alt="jbgffaba" class="img-thumbnail size-medium wp-image-125" />
                    <br><br>
                    <img src="<?php echo $image_2; ?>" alt="jbgffaba" class="img-thumbnail size-medium wp-image-125"/>
                    </div>
				</div>

				<br/>
                
                
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4">
                    	<div class="thumbnail thumb-1  ">
	                        <img src="<?php echo $image_box1; ?>" alt="jbgffaba" class="img-thumbnail size-medium wp-image-125" />
	                        <h2 class="titre-thumbnail"><?php echo $titre_box1; ?></h2>
	                        <?php echo $texte_box1; ?>
	                        <div id="boutonplus">
	                        <a class="btn btn-default" href="?page_id=<?php echo $bouton_box1; ?>"><img src="http://localhost/GitHub/IbmcRIDI/wordpress/wp-content/themes/wordpress-bootstrap-master/images/bouton+.png" alt="bouton+"></a>
	                    	</div>
	                    </div>
                	</div>

                	<div class="col-md-4">
                		<div class="thumbnail thumb-2">
	                        <img src="<?php echo $image_box2; ?>" alt="jbgffaba" class="img-thumbnail size-medium wp-image-125" />
	                        <h2 class="titre-thumbnail"><?php echo $titre_box2; ?></h2>
	                        <?php echo $texte_box2; ?>
	                        <div id="boutonplus">
	                        <a class="btn btn-default" href="?page_id=<?php echo $bouton_box2; ?>"><img src="http://localhost/GitHub/IbmcRIDI/wordpress/wp-content/themes/wordpress-bootstrap-master/images/bouton+.png" alt="bouton+"></a>
	                    	</div>
	                    </div>
                	</div>

                	<div class="col-md-4">
                		<div class="thumbnail thumb-3">
	                        <img src="<?php echo $image_box3; ?>" alt="jbgffaba" class="img-thumbnail size-medium wp-image-125" />
	                        <h2 class="titre-thumbnail"><?php echo $titre_box3; ?></h2>
	                        <?php echo $texte_box3; ?>
	                        <div id="boutonplus">
	                        <a class="btn btn-default" href="?page_id=<?php echo $bouton_box3; ?>"><img src="http://localhost/GitHub/IbmcRIDI/wordpress/wp-content/themes/wordpress-bootstrap-master/images/bouton+.png" alt="bouton+"></a>
	                   		</div>
	                    </div>
                	</div>
                </div>
              

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<header>


   						<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
							?>

							<!--<div class="jumbotron" style="background-image: url('<?php// echo $featured_src[0]; ?>'); background-repeat: no-repeat; background-position: 0 0;">
				
								<div class="page-header">
									<h1><?php //bloginfo('title'); ?><small><?php //echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h1>
                                    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
								</div>				
								
							</div>-->
                          			 						
						</header>
						
						<section class="row post_content">
					
							<div class="col-sm-12">
						
								<?php the_content(); ?>
                           
							</div>
							
							<?php //get_sidebar('sidebar2'); // sidebar 2 ?> 
													
						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
          


<?php get_footer(); ?>