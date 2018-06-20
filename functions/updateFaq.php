<?php 
require('get_json.php');

class Update {
	
	public $newFile = ''; 

	public function GetValues($prop){
		$this->newFile = json_decode($prop);
	}
	public function setValues($decoded){
		$new_values = $_POST;
		$this->writeFile($new_values);
	}
	public function writeFile($file){
		$encodedTxt = json_encode($file, JSON_UNESCAPED_UNICODE);
		$dest = fopen("faq.json","w");
		echo fwrite($dest, $encodedTxt);
		fclose($dest);
	}
}

$json = new Json();
$prop = $json->getFaqJson();

$update = new Update();
$update->GetValues($prop);
$update->setValues($update->newFile);

?>