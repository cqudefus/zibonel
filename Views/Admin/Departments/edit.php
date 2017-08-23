<?php $data = $template_data['department'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing department</h2>
<form method="POST" action="/departments/edit/<?=$data['dep_id']?>">
	<label style='text-transform: capitalize;'>dep name</label><br>
	<input type="text" class="form-control" name="dep_name" value="<?=$data["dep_name"]?>"><br>
	<label style='text-transform: capitalize;'>dep description</label><br>
	<input type="text" class="form-control" name="dep_description" value="<?=$data["dep_description"]?>"><br>
	
	<input type="hidden" name="dep_id" value="<?=$data['dep_id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>