<?php
/**
  * The page class holds methods and information about a menu.
 **/
class page {
	//constructor
	public function page() {
		//temporary settings variable until I can figure out how global the settings can be
		$settings = new settings();
		//populate the main menu
		$this->mainMenu = new menu();
		$this->mainMenu->appendItem( "Home", $settings->rootURL . "home" )->addMatch( $settings->rootURL );
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
	
	//print content
	public function p_content() {
		//temporary settings variable until I can figure out how global the settings can be
		$settings = new settings();
		$item = $this->mainMenu->g_item( $_SERVER['REQUEST_URI'] );
		if(false === $item) {
			include("pages/404");
		}else{
				include("pages/" . $item->g_name());
//figure out why file_exists doesn't work
			return;
			if (file_exists($settings->rootURL . "includes/php/pages/" . $item->g_name())) {
				include("pages/" . $item->g_name());
			}else{
				include("pages/404");
			}
		}
	}
	
  //private members
	private $title		= "Welcome to PVHours";
	private $mainMenu;
}
$page = new page();
?>
