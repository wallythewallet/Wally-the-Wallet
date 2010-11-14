<?php

class AssetType{
	
	private $index;
	private $id;
	private $name;
	
	public function __construct($index){
		$this->index = $index;
		$this->getId();
		$this->getName();
	}
	
	public function getId(){
		if(!isset($this->id))
			$this->id = OT_API_GetAssetType_ID($this->index);
		
		return $this->id;
	}
	
	public function	getName(){		
		if(!isset($this->name))
			$this->name = OT_API_GetAssetType_Name($this->getId());
		
		return $this->name;
	}
	
	public function printAll(){
		echo "Asset Type #$this->index<br>\n";
		echo "ID: $this->id<br>\n";
		echo "Name: $this->name<br>\n";
	}
	
}


?>