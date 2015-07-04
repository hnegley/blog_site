<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php wp_head(); ?>
	<!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
	<div class="container">
	
	<header class="row">
			<div class="twelve columns">
                <img src="images/name_plate_3.jpg" width="960" height="303" alt=""/>
    		</div>
        
    	</header>
    	<div class="row">
    		<div class="twelve columns">
    			<?php wp_nav_menu(array (
    				'sort_column' => 'menu_order',
    				'container_class' => 'blank-menu-header'

    				)); ?>

<!--END OF HEADER AREA-->