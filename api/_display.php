<?php 
	header('Access-Control-Allow-ammo: *');
	include('connect.php');
	$search = $_REQUEST['search'];
	if($search == ""){
		$SQL = $db->prepare("select * from weapon"); 
	}else{
		$SQL = $db->prepare("select * from weapon where name like '%$search%' OR role like '%$search%' OR ammo like '%$search%'"); 
	}	
	
	$SQL->execute(); 
	$index = 0;
	$data = array();
	while($result = $SQL->fetch()){
		$data[$index]['id'] = $result["id"];
		$data[$index]['name'] = $result["name"];
		$data[$index]['role'] = $result["role"];
		$data[$index]['dps'] = $result["dps"];
		$data[$index]['rof'] = $result["rof"];
		$data[$index]['ammo'] = $result["ammo"];
		$data[$index]['baseid'] = $result["baseid"];
		$data[$index]['pic'] = $result["pic"];
		$index++;
	}
	$db = null;
	echo json_encode($data);
 ?>