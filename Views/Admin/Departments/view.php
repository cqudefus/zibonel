<?php $data = $template_data['department'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing department</h2>
<form >
	<label style='text-transform: capitalize;'>dep name</label><br>
	<input type="text" readonly class="form-control" name="dep_name" value="<?=$data["dep_name"]?>"><br>
	<label style='text-transform: capitalize;'>dep description</label><br>
	<input type="text" readonly class="form-control" name="dep_description" value="<?=$data["dep_description"]?>"><br>
	
	<input type="hidden" name="dep_id" value="<?=$data['dep_id']?>">
	<a href="/departments" class="btn btn-primary">Go Back</a>
</form>