	<?php get_header(); ?>
	

	<body onload="ShowMore();" style="background: rgba(0, 0, 0, 0.4) url(<?php the_field('front_page_image', 24); ?>); background-attachment: fixed;">
		
		<div class="front-container">
			<h1 class="center-text"><?php echo get_option('blogdescription'); ?></h1>
		</div>


       <!-- recent posts bohen display ktu -->
        <div class="front-posts">
          <h1 id="post-header">Our best selection of cocktails made with punch</h1>
          <h5 id="post-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>



        	<div class="recent-posts">

</div>
<button id="view-products">show more</button>
        </div>

	</body>




    <?php

    $color = get_field("menu_text_color", 24);
    echo "<style>.header_menu a{color:" . $color . "}  </style>";

     ?>
	<?php get_footer(); ?>