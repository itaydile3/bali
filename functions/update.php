<?php 
require('get_json.php');

class Update {
	
	public $newFile = ''; 

	public function GetValues($prop){
		$this->newFile = json_decode($prop);
	}
	public function setValues($decoded){
		$sections_values = $_POST;
		foreach ($sections_values as $key => $value) {
			$section = explode('_',$key)[0];
			$item = explode('_',$key)[1];
			$decoded->$section->$item = $value;
		}
		$this->writeFile($decoded);
	}
	public function writeFile($file){
		$encodedTxt = json_encode($file, JSON_UNESCAPED_UNICODE);
		$dest = fopen("texts.json","w");
		echo fwrite($dest, $encodedTxt);
		fclose($dest);
	}
}

// print_r($_POST);
$json = new Json();
$prop = $json->getJson();
// print_r($prop);
$update = new Update();
$update->GetValues($prop);
$update->setValues($update->newFile);




?>