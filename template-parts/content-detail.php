<div class="detail-content single_page">

	<?php 

	if( !is_attachment() ){ ?>

		<div class="meta">
			<i class="fa fa-calendar"></i> 
				<?php echo get_the_date(); ?> 
			<span class="ml-5 mr-5">|</span> 
			<i class="fa fa-user"></i> 
			<a href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>"> 
				<?php echo esc_html( cyclone_blog_get_display_name( $post ) ); ?>		
			</a> 
			<span class="ml-5 mr-5"> | </span> 
			<i class="fa fa-folder"></i> 
			<?php cyclone_blog_post_categories($post); ?> 
		</div>

		<?php 

	} ?>

	<h1 class="blog-title"><?php the_title(); ?></h1>
	<hr/>
	<?php

	do_action( 'cyclone_blog_before_single_content' , $post );
	
	the_content();
	echo "<hr/>";
	do_action( 'cyclone_blog_after_single_content' , $post );

	if( has_tag() ){
		echo '<div class="tag-cloud-wrapper clearfix mb-40">
			<div class="tag-cloud-heading">' . esc_html__( 'Tags :' , 'cyclone-blog' ) . ' </div>
			<div class="tagcloud tags clearfix mt-5">';
			echo the_tags('','','');
			echo '</div>
		</div>';
	} ?>

	<?php 
	if( !is_attachment() ){  ?>

		<?php 

	} ?>
	
</div>