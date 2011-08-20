<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html> 
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="<?php bloginfo('stylesheet_directory');?>/iphone.css"/>

<!-- SyntaxHighlighter Support -->
<link rel="stylesheet" href="/blog/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/styles/shCore.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/blog/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/styles/shThemeDefault.css" type="text/css" media="screen" />
<script type="text/javascript" src="/blog/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shCore.js"></script> 

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
