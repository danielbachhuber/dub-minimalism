<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (is_home()) { ?>
		<title>Daniel Bachhuber</title>
	<?php } else if (is_page()) { ?>
		<title><?php the_title(); ?> - Daniel Bachhuber</title>
	<? } else if (is_single()) { ?>
		<title><?php the_title(); ?></title>
	<? } else if (is_tag()) { ?> 
		<title>Tagged '<?php single_tag_title(); ?>' - Daniel Bachhuber</title>
	<?php } else { ?>
		<title>Daniel Bachhuber</title>
	<?php }?>

	<?php wp_head(); ?>

</head>
<body>

<div id="topHat">
  <div class="wrap">
    <ul>
      <li class="first">Daniel Bachhuber</li>
      <li><a class="active" href="<?php bloginfo('url'); ?>">weblog</a></li>
      <li><a href="<?php bloginfo('url'); ?>/reading/">links</a></li>
      <li><a href="http://status.danielbachhuber.com/">status</a></li>
      <li><a href="#">images</a></li>
    </ul>
  </div>
</div>
