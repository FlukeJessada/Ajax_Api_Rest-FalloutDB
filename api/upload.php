<?
	header('Access-Control-Allow-Origin: *');
	include('connect.php');
	$name = $_POST['name'];
	$role = $_POST['role'];
	$dps = $_POST['dps'];
	$rof = $_POST['rof'];
	$ammo = $_POST['ammo'];
	$baseid = $_POST['baseid'];
	$path		=	"../images/gundb/";
	$file_name		= $_FILES["pic"]['name'];
	$file_tmp_name	= $_FILES["pic"]['tmp_name'];
	$SQL=$db->prepare("select max(id) from weapon"); $SQL->execute(); $result = $SQL->fetch(); $id = $result["max(id)"]+1;
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
		$SQL = $db->prepare("INSERT INTO `weapon` (`id`,`name`,`role`,`dps`,`rof`,`ammo`, `baseid`, `pic`)
				VALUES ('{$id}','{$name}','{$role}','{$dps}', '{$rof}' , '{$ammo}', '{$baseid}', '{$name}')");
		$SQL->execute();
		if($SQL){ 
			echo "<script>alert('Data Added.');window.location.href='../'</script>";
		}else{
			echo "<script>alert('Error! Can't add data.);window.location.href='../'</script>";
		}
	}
	/*$SQL = $db->prepare("INSERT INTO `herbtb` (`id`,`name_t`,`name_e`,`name_s`,`name_o`,`origin`, `detail` , `prop`, `pic`)
				VALUES ('{$id}','{$name}','{$name_e}','{$name_s}', '{$name_o}' , '{$origin}', '{$detail}', '{$prop}', '{$pic}')");
	$SQL->execute();
	header('Location: ../index.php'); */
?>