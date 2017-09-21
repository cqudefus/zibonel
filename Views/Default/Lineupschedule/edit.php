<?php $data = $template_data['lineupschedul'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing lineupschedul</h2>
<form method="POST" action="/lineupschedule/edit/<?=$data['id']?>">
	<label style='text-transform: capitalize;'>program name</label><br>
	<input type="text" class="form-control" name="program_name" value="<?=$data["program_name"]?>"><br>
	<label style='text-transform: capitalize;'>program day schedule</label><br>
	<input type="text" class="form-control" name="program_day_schedule" value="<?=$data["program_day_schedule"]?>"><br>
	<label style='text-transform: capitalize;'>program time</label><br>
	<input type="text" class="form-control" name="program_time" value="<?=$data["program_time"]?>"><br>
	<label style='text-transform: capitalize;'>program host</label><br>
	<input type="text" class="form-control" name="program_host" value="<?=$data["program_host"]?>"><br>
	<label style='text-transform: capitalize;'>program desc</label><br>
	<input type="text" class="form-control" name="program_desc" value="<?=$data["program_desc"]?>"><br>
	<label style='text-transform: capitalize;'>program image</label><br>
	<input type="text" class="form-control" name="program_image" value="<?=$data["program_image"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>