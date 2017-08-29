<?php $data = $template_data['event'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing event</h2>
<form method="POST" action="/events/edit/<?=$data['id']?>">
	<label style='text-transform: capitalize;'>event name</label><br>
	<input type="text" class="form-control" name="event_name" value="<?=$data["event_name"]?>"><br>
	<label style='text-transform: capitalize;'>event title</label><br>
	<input type="text" class="form-control" name="event_title" value="<?=$data["event_title"]?>"><br>
	<label style='text-transform: capitalize;'>event description</label><br>
	<input type="text" class="form-control" name="event_description" value="<?=$data["event_description"]?>"><br>
	<label style='text-transform: capitalize;'>event date</label><br>
	<input type="text" class="form-control" name="event_date" value="<?=$data["event_date"]?>"><br>
	<label style='text-transform: capitalize;'>event location</label><br>
	<input type="text" class="form-control" name="event_location" value="<?=$data["event_location"]?>"><br>
	<label style='text-transform: capitalize;'>event tickets</label><br>
	<input type="text" class="form-control" name="event_tickets" value="<?=$data["event_tickets"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>