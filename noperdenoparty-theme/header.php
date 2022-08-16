<?php wp_head(); ?>
<?php if(function_exists('the_custom_logo')){
	$logo_id = get_theme_mod('custom_logo');
	$logo = wp_get_attachment_image_src($logo_id);
} 

?>
<div class="header_menu">
<a href="<?php echo get_home_url(); ?>"><img id="logo" src="<?php echo $logo[0] ?>"></a>

<?php 
wp_nav_menu(
array(
'menu' => 'primary',
'container' => '',
'theme_location' => 'primary',
'items_wrap' => '<div id="menu1">%3$s</div>'
)
);

 ?>

 <div id="header_socials">
 	<?php

  $instagram = get_field('instagram', 24);
  $facebook = get_field('facebook', 24);
  $youtube = get_field('youtube', 24);

      if(!empty($instagram)){
  	echo '<a href="' . $instagram .'"><i class="fa-brands fa-instagram"></i></a>';
    }
    if(!empty($facebook)){
  	echo '<a href="' . $facebook .'"><i class="fa-brands fa-facebook"></i></a>';
    }
    if(!empty($youtube)){
  	echo '<a href="' . $youtube .'"><i class="fa-brands fa-youtube"></i></a>';
    }

 	 ?>
 </div>
</div>

<?php echo "<style>

.header_menu{
	background-color: " . get_field( 'menu_background_color', 24 ) . "
}

</style>"; ?>