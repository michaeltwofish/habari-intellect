<!DOCTYPE html>

<html>

<head>
	<title><?php if ($request->display_entry && isset($post)) { echo "{$post->title} | "; } ?> <?php Options::out('title'); ?></title>
	
	<?php
		if ($request->display_entry && isset($post))
		{
	?>
			<link rel="canonical" href="<?php echo $post->permalink; ?>" />
	<?php
		}
	?>
	
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>">
	<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out('atompub_servicedocument'); ?>">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out('rsd'); ?>">
	
	<link rel="icon" type="images/gif" href="<?php Site::out_url('theme'); ?>/images/favicon.gif" />
	
	<!--[if gte IE 7]><!-->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url('theme'); ?>/style.css" />
	<!--<![endif]-->
	
	<script src="<?php Site::out_url('theme'); ?>/_js/form-labels.js" type="text/javascript"></script>
	<script src="<?php Site::out_url('theme'); ?>/_js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="<?php Site::out_url('theme'); ?>/_js/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>
	
	<?php Plugins::act('intellect_custom_meta_includes'); ?>
	<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url('theme'); ?>/_css/ie8.css" />
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url('theme'); ?>/_css/ie7.css" />
	<?php Plugins::act('intellect_custom_meta_includes_ieonly'); ?>
	<![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url('theme'); ?>/_css/ie6.0.3.css" />
	<![endif]-->
	<!--[if IE]>
	<script type="text/javascript" src="<?php Site::out_url('theme'); ?>/_js/html5.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" media="print" href="<?php Site::out_url('theme'); ?>/print.css" />
	
	<?php Plugins::act('intellect_conditionals'); ?>
	
	<?php $theme->header(); ?>
</head>

<body id="<?php Plugins::act('intellect_body_id'); ?>">

<div id="site" class="wide-20">