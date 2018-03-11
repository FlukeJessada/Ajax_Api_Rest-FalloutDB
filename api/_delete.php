<?php 
	header('Access-Control-Allow-Origin: *');
	include('connect.php');
	$id = $_REQUEST['id'];
	$SQL = $db->prepare("DELETE FROM weapon WHERE id = $id"); 

	
	$SQL->execute(); 
	$index = 0;
	$data = array();
	while($result = $SQL->fetch()){
		$data[$index]['img_id'] = $result["img_id"];
		$data[$index]['views'] = $result["views"];
		$data[$index]['path_small'] = $result["path_small"];
		$data[$index]['imgsize'] = $result["imgsize"];
		$data[$index]['path_normal'] = $result["path_normal"];
		$index++;
	}
	$db = null;
	echo json_encode($data);
 ?>