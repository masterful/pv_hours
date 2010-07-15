<?php
/**
  * The page class holds methods and information about a menu.
 **/
class page {
	//constructor
	public function page() {
		//populate the main menu
		$this->mainMenu = new menu();
		$this->mainMenu->appendItem( "Home", $settings->rootURL );
		$this->mainMenu->appendItem( "Calendar", $settings->rootURL . "calendar" );
		$this->mainMenu->appendItem( "Details", $settings->rootURL . "details" );
		$this->mainMenu->appendItem( "Login", $settings->rootURL . "login" );
	}

	//print page title
	public function p_title() { echo $this->title; }

	//get page title
	public function g_title() { return $this->title; }

	//set page title
	public function s_title( $newTitle ) { $this->title = $newTitle; }
	
	//print menu
	public function p_menu() { $this->mainMenu->p(); }
	
  //private members
	private $title		= "Welcome to PVHours";
	private $mainMenu;
}
$page = new page();
?>
