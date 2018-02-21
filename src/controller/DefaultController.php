<?php

class DefaultController {
	 
	/*
	*GET HOME PAGE
	*/

	public static function index(){
		$cats = RepositoryCategorie::getAll();
		return [
			"tp" => "../templates/base.php",
			"body" => "home.php",
			"cats" => $cats 
		];
	}

	public static function about(){
		return[
			"tp" => "../templates/base.php",
			"body" => "about.php"
		];
	}
}

