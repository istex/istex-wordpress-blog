<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('sidebar'); ?>>

<div id="masthead">

	<?php 
	do_action( 'cyclone_blog_top_header' );
	?>
            <div class="head-container">
                <a class="logo" href="<?php echo esc_url( home_url('/') ); ?>">

                	<?php 
                	if ( has_custom_logo() ) { ?>
                    	<img src="<?php echo esc_url( cyclone_blog_get_custom_logo_link() ); ?>" alt="Logo">
                    	<?php 
                    } 
                    	echo '<div><h1>' . esc_html( get_bloginfo( 'name' ) ) . '</h1>';
                    	echo '<p>' . esc_html( get_bloginfo( 'description' ) ) . '</p></div>';
                    ?>

                </a>


            </div>

</div><!-- header section end -->
