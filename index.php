<?php
require("router.php");

$route = new Route();
$route->add('index.php', 'home', 'views');
$route->add('admin', 'admin', 'views');
$route->add('images_info', 'images_info','functions');
$route->add('showJson', 'showJson','functions');
$route->add('update', 'update','functions');

$route->submit();

?>