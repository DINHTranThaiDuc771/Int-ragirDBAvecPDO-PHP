<?php
	include ("fctAux.inc.php");
	require_once ("message.inc.php");
    require ("DB.inc.php");


	entete();
	contenu();
	pied();

	function contenu()
	{
		$db = DB::getInstance();
		$table = $db->getMessages();
		for($i =0; $i<count($table);$i++)
		{
			echo $table[$i]->__toString();		
		}
	}
	

?>