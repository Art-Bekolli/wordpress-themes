<?php wp_footer(); ?>
<?php
if(function_exists('the_custom_logo')){
	$logo_id = get_theme_mod('custom_logo');
	$logo = wp_get_attachment_image_src($logo_id);
}
 ?>

<footer>
	

	<div>
		<a href="<?php echo get_home_url(); ?>"><img id="logo" src="<?php echo $logo[0] ?>"></a>
	</div>
	<div class="footer-container">
		<!-- footer socialet -->
 <div id="footer_socials">
 	<?php

  $instagram = get_field('instagram', 24);
  $facebook = get_field('facebook', 24);
  $youtube = get_field('youtube', 24);

      if(!empty($instagram)){
  	echo '<a href="' . $instagram .'"><i class="fa-brands fa-instagram"></i></a><br>';
    }
    if(!empty($facebook)){
  	echo '<a href="' . $facebook .'"><i class="fa-brands fa-facebook"></i></a><br>';
    }
    if(!empty($youtube)){
  	echo '<a href="' . $youtube .'"><i class="fa-brands fa-youtube"></i></a><br>';
    }

 	 ?>
 </div>

<!-- footer text -->
 <div>

<?php echo the_field('footer_description', 24); ?> 	

 </div>


   <!-- footer menu -->
	<div>
	<?php 
wp_nav_menu(
array(
'menu' => 'footer',
'container' => '',
'theme_location' => 'footer',
'items_wrap' => '<div id="menu2">%3$s</div>'
)
);

 ?>
</div>
</div>

</footer>
