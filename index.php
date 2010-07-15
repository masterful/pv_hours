<?php
/**
  * Project: pv_hours
  * Author:  Pim Vermeyden - All Rights Reserved
 **/
class page {
	//constructor
	public function page() { }

	//print page title
	public function p_title() { echo $this->title; }

	//get page title
	public function g_title() { return $this->title; }

	//set page title
	public function s_title( $newTitle ) { $this->title = $newTitle; }
	
  //private members
	private $title = "Welcome to PVHours";
}
$page = new page();
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" manifest="includes/manifest.cache">
  <head>
	<title><?php $page->p_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="includes/css/styles.css" />
	<script type="text/javascript" src="includes/js/scripts.js" async="false" defer="true"></script>
  </head>
  <body>
  </body>
</html>
