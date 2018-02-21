<?php

/**
* 
*/
class RepositoryCategorie extends Repository
{
	
	public static function getAll()
	{
		try{
			$bdd = Repository::getPDO();
			$t = $bdd->query("SELECT * FROM categorie");
			$res = $t->fetchAll(PDO::FETCH_ASSOC);
		} catch (Exception $e){
			die("Erreur : " . $e->getMessage());
		}	

		return $res;
	}
}

?>