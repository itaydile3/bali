<?php 
class Route
{
    private $_uri = array();

    public function add($uri, $dest, $type) {
        $this->_uri[] = array('url'=>trim($uri, '/'),'dest'=>$dest,'type'=>$type);
    }

    public function submit(){
        $uriGetParam = isset($_GET['uri']) ? $_GET['uri'] : '/';
        foreach ($this->_uri as $key => $value) {
            $current_value = $value['url'];
            $current_type = $value['type'];
            if (preg_match("#^$current_value$#", $uriGetParam)) {
                if($current_type == 'views') {
                    require("common/header.php");
                }
                require("/$current_type/".$value['dest'].'.php');
            }   
        }
    }
}

?>