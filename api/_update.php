<?php
	header('Access-Control-Allow-Origin: *');
	include('connect.php');
	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$role = $_REQUEST['role'];
	$dps = $_REQUEST['dps'];
	$rof = $_REQUEST['rof'];
	$ammo = $_REQUEST['ammo'];
	$baseid = $_REQUEST['baseid'];
	$path		=	"../images/gundb/";
	$file_name		= $_FILES["pic"]['name'];
	$file_tmp_name	= $_FILES["pic"]['tmp_name'];
	function rename_type_old($file_name,$new_name){
		$info = pathinfo( $file_name , PATHINFO_EXTENSION );
		if($info){
			$type = ".".$info;
			return $new_name.$type;
		}else{
			return $file_name;
		}
	}
	if($file_name != ""){
		$pic 	  = rename_type_old($file_name,$name);
		$transfer = copy($file_tmp_name,$path.$pic);
		$SQL = $db->prepare("UPDATE `weapon` SET `name` = '$name',`role` = '$role',`dps` = '$dps',`rof` = '$rof',`ammo` = '$ammo',`baseid` = '$baseid',`pic` = '$name' where id = '$id'");
		$SQL->execute();
		if($SQL){ 
			echo "<script>alert('Data Edited');window.location.href='../'</script>";
		}else{
			echo "<script>alert('Error: Can't Edit');window.location.href='../'</script>";
		}
	}else{
		$SQL = $db->prepare("UPDATE `herbtb` SET `name` = '$name',`role` = '$role',`dps` = '$dps',`rof` = '$rof',`ammo` = '$ammo',`baseid` = '$baseid' where id = '$id'");
		$SQL->execute();
		if($SQL){ 
			echo "<script>alert('Data Edited');window.location.href='../'</script>";
		}else{
			echo "<script>alert('Error: Can't Edit');window.location.href='../'</script>";
		}
	}
	$db = null;
?>