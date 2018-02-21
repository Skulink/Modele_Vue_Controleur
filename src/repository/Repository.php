<?php

/**
* 
*/
class Repository
{
	
	public static function getPDO(){

		try{
			$pdo = new PDO("mysql:host=localhost;dbname=blog;", "root", "");
		} catch(Exception $e){
			die("Erreur : " . $e->getMessage());
		}
		return $pdo;
	}
}

?>