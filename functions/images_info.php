<?php
	class Images
	{
		public $image_collection = array();
		public $image_path;
		public $images_info = array();

		public function __construct(){
			$this->image_path =  "images/";
		}

		public function CollectImages($path)
		{
			$this->image_collection[] = $path;
		}

		public function GetImageInfo($image){
			$imageNameExp = explode('/', $image);
			$imageName = explode('.', end($imageNameExp))[0];
			$this->images_info[$imageName] = getImageSize($image);
		}
	}

	$images = new Images();

	$images->CollectImages($images->image_path.'section1-back.jpg');
	$images->CollectImages($images->image_path.'section2-back.jpg');
	$images->CollectImages($images->image_path.'section3-back.jpg');
	$images->CollectImages($images->image_path.'section4-back.jpg');

	foreach ($images->image_collection as $key => $value) {
		$images->GetImageInfo($value);
	}

	print_r(json_encode($images->images_info));

?>