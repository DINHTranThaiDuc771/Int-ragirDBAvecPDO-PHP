<?php
	include ("fctAux.inc.php");
	include ("message.inc.php");
    require ("DB.inc.php");
	$table = DB::getInstance()->deleteMessages();
	header("Location:editMess.php")	;

?>