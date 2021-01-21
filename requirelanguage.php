<?php
 
	if (empty($_SESSION["language"])) {
 
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 1);
		$_SESSION["language"]=$lang;
		if ($lang!="en"){
			$_SESSION["language"]="es"; 
		}
	}
	
	if (isset($_SESSION["language"])) {
		$lang=$_SESSION["language"]; 
	}
	
	switch ($lang){

		case "es":
			//echo "PAGE ES";
			include("language/es.php");
			break;

		case "en":
			//echo "PAGE EN";
			include("language/en.php");
			break; 

		default:
			//echo "PAGE EN - Setting Default";
			include("language/es.php");//include EN in all other cases of different lang detection
			break;
}