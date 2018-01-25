
<!DOCTYPE html>
<html>
<head>
<title> <?php wp_title(); ?></title>
<?php wp_head(); ?>
</head>
<body>
<?php echo get_custom_logo();?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<?php wp_nav_menu( array('menu' => 'Primary Menu' )); ?>