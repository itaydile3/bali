<?php
require("router.php");

$route = new Route();


// if (isset($_GET['d2Vu3jA7LePg4bDQ'])) {
$route->add('index.php', 'home', 'views');
$route->add('admin', 'admin', 'views');
$route->add('faq-admin', 'faq-admin', 'views');
// }
$route->add('images_info', 'images_info','functions');
$route->add('showJson', 'showJson','functions');
$route->add('update', 'update','functions');
$route->add('updateFaq', 'updateFaq','functions');
$route->add('terms', 'terms', 'views');

$route->submit();

?>