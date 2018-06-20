<?php 
	class Json{
		public $jsonContents; 

		public function getJson(){
			$this->jsonContents = file_get_contents('texts.json');
			return $this->jsonContents;
		}

		public function getFaqJson(){
			$this->jsonContents = file_get_contents('faq.json');
			return $this->jsonContents;
		}

	}

?>