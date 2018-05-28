<?php 
	class Json{
		public $jsonContents; 

		public function getJson(){
			$this->jsonContents = file_get_contents('texts.json');
			return $this->jsonContents;
		}

	}

?>