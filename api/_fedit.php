<?php
	header('Access-Control-Allow-Origin: *');
	include('connect.php');
	$id = $_REQUEST['id'];
    $SQL=$db->prepare("select * from weapon where id = '$id'"); $SQL->execute(); $result = $SQL->fetch();
?>
<div class="panel panel-default">
	<div class="panel-heading"><h3><b>Edit Data</b></h3></div>
	<div class="panel-body">
        <form name='form1' action="api/_update.php" method='POST' enctype='multipart/form-data'>
            <div class='col-sm-3'><label for='id'>ID : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='id' value='<?=$result["id"]?>' placeholder='ID' readonly></div>
            <div class='col-sm-3'><label for='name'>Name : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='name' value='<?=$result["name"]?>' placeholder='Name'></div>	
			<div class='col-sm-3'><label for='role'>Role : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='role' value='<?=$result["role"]?>' placeholder='Role'></div>
			<div class='col-sm-3'><label for='dps'>Damage per Second : </label></div><div class='col-sm-9'><input type='text' class='form-control' value='<?=$result["dps"]?>' name='dps' placeholder='Damage per Second'></div>
			<div class='col-sm-3'><label for='rof'>Rate of Fire : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='rof' value='<?=$result["rof"]?>' placeholder='Rate of Fire'></div>
			<div class='col-sm-3'><label for='ammo'>Ammo : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='ammo' value='<?=$result["ammo"]?>' placeholder='Ammo'></div>
			<div class='col-sm-3'><label for='baseid'>Base ID : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='baseid' value='<?=$result["baseid"]?>' placeholder='Base ID'></div>
            <div class='col-sm-3'><label for='pic'>Image : </label></div><div class='col-sm-9'><input id='file' type='file' class='form-control' name='pic' placeholder='Image'></div>
            <div class='row'>
			   <div class='col-6 col-md-offset-6'><input name="btnSubmit" type="submit" class="btn btn-success" value="บันทึก">
			   <input name="btnCancel" type="button" class="btn btn btn-danger " onClick="location.href=window.location.href" value="ยกเลิก"></div>
            </div>
        </form>
    </div>
</div>