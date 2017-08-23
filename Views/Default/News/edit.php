<?php $data = $template_data['new'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing new</h2>
<form method="POST" action="/news/edit/<?=$data['id']?>">
	<label style='text-transform: capitalize;'>title</label><br>
	<input type="text" class="form-control" name="title" value="<?=$data["title"]?>"><br>
	<label style='text-transform: capitalize;'>subtitle</label><br>
	<input type="text" class="form-control" name="subtitle" value="<?=$data["subtitle"]?>"><br>
	<label style='text-transform: capitalize;'>published date</label><br>
	<input type="text" class="form-control" name="published_date" value="<?=$data["published_date"]?>"><br>
	<label style='text-transform: capitalize;'>link</label><br>
	<input type="text" class="form-control" name="link" value="<?=$data["link"]?>"><br>
	<label style='text-transform: capitalize;'>contents</label><br>
	<input type="text" class="form-control" name="contents" value="<?=$data["contents"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>