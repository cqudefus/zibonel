<h2 style="margin-top: 0;text-transform: capitalize;">New program</h2>
<form method="POST" action="/programs/add">
	<label style='text-transform: capitalize;'>pr id</label><br>
	<input type='text' class='form-control' name='pr_id' placeholder='pr id'><br>
	<label style='text-transform: capitalize;'>pr ref broadcast</label><br>
	<input type='text' class='form-control' name='pr_ref_broadcast' placeholder='pr ref broadcast'><br>
	<label style='text-transform: capitalize;'>pr ref day</label><br>
	<input type='text' class='form-control' name='pr_ref_day' placeholder='pr ref day'><br>
	<label style='text-transform: capitalize;'>pr ref time</label><br>
	<input type='text' class='form-control' name='pr_ref_time' placeholder='pr ref time'><br>
	<label style='text-transform: capitalize;'>pr description</label><br>
	<input type='text' class='form-control' name='pr_description' placeholder='pr description'><br>
	
	<button type="submit" class="btn btn-primary">Save</button>
</form>