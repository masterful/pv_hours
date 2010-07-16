<?php
/**
  * The page class holds methods and information about the actual page being displayed.
 **/
class menu {
	//constructor
	public function menu() { }
	
	//print the menu
	public function p() {
		echo "<div class=\"menu\"><ul class=\"menu\">\n";
		foreach($this->items as $item) {
			$item->p();
		}
		echo "</ul></div>\n";
		return $this;
	}
	
	//append item to the end of the menu
	public function appendItem( $itemName, $itemURL = "", $itemTitle = "" ) {
		$cnt = array_push($this->items, new menuItem( $itemName, $itemURL ));
		if ("" !== $itemTitle) {
			$this->items[$cnt-1]->s_title( $itemTitle );
		}
		return $this->items[$cnt-1];
	}
	
	//get item by index
	//can search by string or number, returns first item on failure
	public function g_item( $itemNum ) {
		if ("string" == gettype($itemNum)) {
			foreach($this->items as $item) {
				if($item->g_name() == $itemNum) return $item;
			}
			return $this->items[0];
		}else{
			return $this->items[$itemNum%count($this->items)];
		}
	}
	
  //private members
	private $items = array();
}
?>
