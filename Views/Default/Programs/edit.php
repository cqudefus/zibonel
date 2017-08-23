<?php $data = $template_data['program'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing program</h2>
<form method="POST" action="/programs/edit/<?=$data['pr_id']?>">
	<label style='text-transform: capitalize;'>pr ref broadcast</label><br>
	<input type="text" class="form-control" name="pr_ref_broadcast" value="<?=$data["pr_ref_broadcast"]?>"><br>
	<label style='text-transform: capitalize;'>pr ref day</label><br>
	<input type="text" class="form-control" name="pr_ref_day" value="<?=$data["pr_ref_day"]?>"><br>
	<label style='text-transform: capitalize;'>pr ref time</label><br>
	<input type="text" class="form-control" name="pr_ref_time" value="<?=$data["pr_ref_time"]?>"><br>
	<label style='text-transform: capitalize;'>pr description</label><br>
	<input type="text" class="form-control" name="pr_description" value="<?=$data["pr_description"]?>"><br>
	
	<input type="hidden" name="pr_id" value="<?=$data['pr_id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>