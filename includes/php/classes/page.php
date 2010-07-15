<?php
/**
  * The page class holds methods and information about the actual page being displayed.
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
