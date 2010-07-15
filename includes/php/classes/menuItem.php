<?php
/**
  * The page class holds methods and information about an individual menu item.
 **/
class menuItem {
	//constructor
	public function menuItem( $itemName, $itemURL = "#" ) {
		$this->url		= $itemURL;
		$this->title	= "Go to the " . $itemName . " page.";
		$this->name		= $itemName;
	}
	
	//print the menu item
	public function p() {
		//check if the current url matches
		if ($_SERVER["REQUEST_URI"] == $this->url ||
			$_SERVER["QUERY_STRING"] == $this->url) {
			echo "<li class=\"active\"><a class=\"active\" href=\"" . $this->url . "\" title=\"" . $this->title . "\">" . $this->name . "</a></li>\n";
		}else{
			echo "<li><a href=\"" . $this->url . "\" title=\"" . $this->title . "\">" . $this->name . "</a></li>\n";
		}
	}
	
	//set the title
	public function s_title( $newTitle ) {
		$this->title = $newTitle;
	}
	
  //private members
	private $url	= "";
	private $title	= "";
	private $name	= "";
}
?>
