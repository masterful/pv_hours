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
		$this->urlMatch	= array($itemURL);
	}
	
	//print the menu item
	public function p() {
		//check if the current url matches
		if ($this->isActive()) {
			echo "<li class=\"active\"><a class=\"active\" href=\"" . $this->url . "\" title=\"" . $this->title . "\">" . $this->name . "</a></li>\n";
		}else{
			echo "<li><a href=\"" . $this->url . "\" title=\"" . $this->title . "\">" . $this->name . "</a></li>\n";
		}
		return $this;
	}
	
	//set the title
	public function s_title( $newTitle ) {
		$this->title = $newTitle;
		return $this;
	}
	
	//check if the current url matches
	public function isActive() {
		foreach($this->urlMatch as $match) {
			if ($_SERVER["REQUEST_URI"] == $match)	return true;
			if ($_SERVER["QUERY_STRING"] == $match)	return true;
		}
		return false;
	}
	
	//add a url check
	public function addMatch( $newMatch ) {
		$this->urlMatch[]	= $newMatch;
		return $this;
	}
	
	//get item name
	public function g_name() {
		return $this->name;
	}
	
  //private members
	private $url	= "";
	private $title	= "";
	private $name	= "";
	private $urlMatch	= array();
}
?>
