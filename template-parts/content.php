<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cyclone_Blog
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('col-sm-12 col-xs-12 blog-listing'); ?>>

    <div class="blog-post blog-large blog-grid">

        <article>

        	<?php 

        	$sidebar_settings = get_theme_mod( 'sidebar_settings' , 1 );

        	
        	if( has_post_thumbnail() ){ ?>

	            <header class="entry-header">
	                <div class="entry-thumbnail">
	                    <?php 
	                    the_post_thumbnail( 
	                    	200, 
	                    	array( 
	                    		'class' => 'img-responsive', 
	                    		'alt' => esc_attr( get_the_title() ) 
	                    	) 
	                    ); ?>
	                   
	                </div>
	         
	            </header>

	           	<?php 	           	
	        } ?>

            <div class="entry-content">
            	<div class="entry-date">
            		<?php echo get_the_date(); ?>
            	</div>
                <h4 class="entry-title">
                	<a href="<?php the_permalink(); ?>">
                		<?php the_title(); ?>			
                	</a>
                </h4>
                <hr/>
                <?php the_excerpt(); 

                $read_more = get_theme_mod( 'read_more_text' ); 
                $read_more = ( $read_more ? $read_more : 'Lire la suite' ); ?>                

                <!-- button -->
                <div class="red-btn">
                	<a class="btn btn-primary btn-lg" href="<?php the_permalink(); ?>">
                		<?php echo esc_html( $read_more ); ?>
                	</a>
                </div>
                
            </div>

        </article>
    </div>
</div>