<?php
/**
  * The page class holds methods and information about the actual page being displayed.
 **/
class menu {
	//constructor
	public function menu() { }
	
	//print the menu
	public function p() {
		echo "<ul class=\"menu\">\n";
		echo "<li class=\"padder-left\">&nbsp;</li>\n";
		foreach($this->items as $item) {
			$item->p();
		}
		echo "<li class=\"padder-right\">&nbsp;</li>\n";
		echo "</ul>\n";
	}
	
	//append item to the end of the menu
	public function appendItem( $itemName, $itemURL = "", $itemTitle = "" ) {
		$cnt = array_push($this->items, new menuItem( $itemName, $itemURL ));
		if ("" !== $itemTitle) {
			$this->items[$cnt-1]->s_title( $itemTitle );
		}
	}
	
  //private members
	private $items = array();
}
?>
