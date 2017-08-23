<?php $data = $template_data['news_comment'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing news_comment</h2>
<form method="POST" action="/news_comments/edit/<?=$data['com_id']?>">
	<label style='text-transform: capitalize;'>com date</label><br>
	<input type="text" class="form-control" name="com_date" value="<?=$data["com_date"]?>"><br>
	<label style='text-transform: capitalize;'>com ref user</label><br>
	<input type="text" class="form-control" name="com_ref_user" value="<?=$data["com_ref_user"]?>"><br>
	<label style='text-transform: capitalize;'>com ref news</label><br>
	<input type="text" class="form-control" name="com_ref_news" value="<?=$data["com_ref_news"]?>"><br>
	<label style='text-transform: capitalize;'>comment</label><br>
	<input type="text" class="form-control" name="comment" value="<?=$data["comment"]?>"><br>
	<label style='text-transform: capitalize;'>com status</label><br>
	<input type="text" class="form-control" name="com_status" value="<?=$data["com_status"]?>"><br>
	
	<input type="hidden" name="com_id" value="<?=$data['com_id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>