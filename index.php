<?php
/**
  * Project: pv_hours
  * Author:  Pim Vermeyden - All Rights Reserved
 **/
require_once("includes/php/required.php");
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" manifest="includes/manifest.cache">
  <head>
	<title><?php $page->p_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="includes/css/styles.css" />
	<script type="text/javascript" src="includes/js/scripts.js" async="false" defer="true"></script>
  </head>
  <body><div id="page">
    <div id="container">
		<header>Let's keep track of some hours ... :)</header>
		<div id="menu"><?php $page->p_menu(); ?></div>
		<div id="content"><?php $page->p_content(); ?></div>
		<footer>&copy; 2010 - All Rights Reserved</footer>
	</div>
  </div></body>
</html>
