<?php $data = $template_data['galler'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing galler</h2>
<form method="POST" action="/gallery/edit/<?=$data['id']?>">
	<label style='text-transform: capitalize;'>image description</label><br>
	<input type="text" class="form-control" name="image_description" value="<?=$data["image_description"]?>"><br>
	<label style='text-transform: capitalize;'>image file</label><br>
	<input type="text" class="form-control" name="image_file" value="<?=$data["image_file"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>