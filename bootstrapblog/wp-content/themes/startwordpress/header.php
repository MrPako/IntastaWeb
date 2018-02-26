<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">

	<?php wp_head();?>
</head>

<body>

  <div class="blog-masthead">
  	<div class="container">
  		<nav class="blog-nav">
  			<?php wp_list_pages( '&title_li=' ); ?>
  		</nav>
  	</div>
  </div>

	<div class="container">

		<div class="blog-header">
			<h1 class="blog-title"> <a href="<?php echo get_bloginfo( 'wpurl' );?>"> <?php echo get_bloginfo( 'name' ); ?></a> </h1>
			<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
		</div>
