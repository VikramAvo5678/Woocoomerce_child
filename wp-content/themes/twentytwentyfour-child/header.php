<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<?php echo absint( get_custom_header()->width ); ?> height=<?php echo absint( get_custom_header()->height ); ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>>
		</a>
	</div>
    <title>Document</title>

    <?php wp_head();?>
</head>
<body  <?php body_class(); ?>>


<?php wp_nav_menu( ); ?>