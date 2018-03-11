<div class="panel panel-default">
	<div class="panel-heading"><h3><b>Add Data</b></h3></div>
	<div class="panel-body">
		<form name='form1' action="api/upload.php" method='post' enctype='multipart/form-data'>
			<div class='col-sm-3'><label for='name'>Name : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='name' placeholder='Name'></div>	
			<div class='col-sm-3'><label for='role'>Role : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='role' placeholder='Role'></div>
			<div class='col-sm-3'><label for='dps'>Damage per Second : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='dps' placeholder='Damage per Second'></div>
			<div class='col-sm-3'><label for='rof'>Rate of Fire : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='rof' placeholder='Rate of Fire'></div>
			<div class='col-sm-3'><label for='ammo'>Ammo : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='ammo' placeholder='Ammo'></div>
			<div class='col-sm-3'><label for='baseid'>Base ID : </label></div><div class='col-sm-9'><input type='text' class='form-control' name='baseid' placeholder='Base ID'></div>
			<div class='col-sm-3'><label for='pic'>Image : </label></div><div class='col-sm-9'><input id='file' type='file' class='form-control' name='pic' placeholder='Image'></div>
			<div class='row'>
			   <div class='col-6 col-md-offset-6'><input name="btnSubmit" type="submit" class="btn btn-success" value="Add">
			   <input name="btnCancel" type="button" class="btn btn btn-danger " onClick="location.href='http://127.0.0.1/fallout/'" value="Cancel"></div>
			</div>
		</form>
	</div>
</div>