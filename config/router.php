<?php

if (isset($_GET['url'])) {
	$url = $_GET['url'];
}else{
	$url = "";
}

switch($url){
	case "home":
		extract(DefaultController::index());
		include($tp);
		break;

	case "about":
		extract(DefaultController::about()); 
		include($tp);
		break;

	default:
		echo "404 page not found";
		break;
}

?>