<?php
	$db_type="2";
    if ($db_type=="1")
    {	$db = new PDO("sqlite:../db/gamedb.sqlite") or die("Not Connect"); }
    if ($db_type=="2")
	{   $db = new PDO("mysql:host=localhost;dbname=gamedb", "root", "12345678")
	      or die("Not Connect"); 
	}
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
?>