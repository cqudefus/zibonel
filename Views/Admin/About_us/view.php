<?php $data = $template_data['about_u'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing about_u</h2>
<form >
	<label style='text-transform: capitalize;'>title</label><br>
	<input type="text" readonly class="form-control" name="title" value="<?=$data["title"]?>"><br>
	<label style='text-transform: capitalize;'>vision</label><br>
	<input type="text" readonly class="form-control" name="vision" value="<?=$data["vision"]?>"><br>
	<label style='text-transform: capitalize;'>mission</label><br>
	<input type="text" readonly class="form-control" name="mission" value="<?=$data["mission"]?>"><br>
	<label style='text-transform: capitalize;'>banner</label><br>
	<input type="text" readonly class="form-control" name="banner" value="<?=$data["banner"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<a href="/about_us" class="btn btn-primary">Go Back</a>
</form>