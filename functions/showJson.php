<?php
	require('get_json.php');
	$json = new Json();
	// print_r($_POST);
	// exit;
	switch ($_POST['type']) {
		case 'faq':
			echo $json->getFaqJson();
			break;
		case 'home':
			echo $json->getJson();
			break;
		
		default:
			# code...
			break;
	}

?>