<?php $data = $template_data['galler'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing gallery</h2>
<form >
	<label style='text-transform: capitalize;'>image description</label><br>
	<input type="text" readonly class="form-control" name="image_description" value="<?=$data["image_description"]?>"><br>
	<label style='text-transform: capitalize;'>image file</label><br>
	<input type="text" readonly class="form-control" name="image_file" value="<?=$data["image_file"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<a href="/gallery" class="btn btn-primary">Go Back</a>
</form>