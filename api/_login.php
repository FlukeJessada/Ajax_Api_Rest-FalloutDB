<?php 
	header('Access-Control-Allow-Origin: *');
	include('connect.php');
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	$SQL = $db->prepare("select * from member where user = '$user' and pass = '$pass'"); 
	$SQL->execute(); 
	$index = 0;
	$data = array();
	while($result = $SQL->fetch()){
		if($user == $result["user"] && $pass == $result["pass"]){
			$data[$index]['user'] = $result["user"];
			$data[$index]['pass'] = $result["pass"];
		}
		$index++;
	}
	$db = null;
	echo json_encode($data);
 ?>