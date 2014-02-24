<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="alternate" type="application/rss+xml" title="nickcoding.com" href="<?php bloginfo('rss2_url'); ?>"/>

<!-- Bootstrap first, then we override -->
<!--
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/bootstrap-min.css"/>
-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!-- SyntaxHighlighter Support -->
<link rel="stylesheet" href="/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/styles/shCore.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/styles/shThemeDefault.css" type="text/css" media="screen" />
<script type="text/javascript" src="/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shCore.js"></script>

<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript">SyntaxHighlighter.all();</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
<div id="header" role="banner">
    <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> <?php bloginfo('description'); ?>
    <hr>
</div>
