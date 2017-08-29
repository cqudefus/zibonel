<h2 style="margin-top: 0;text-transform: capitalize;">New event</h2>
<form method="POST" action="/events/add">
	<label style='text-transform: capitalize;'>id</label><br>
	<input type='text' class='form-control' name='id' placeholder='id'><br>
	<label style='text-transform: capitalize;'>event name</label><br>
	<input type='text' class='form-control' name='event_name' placeholder='event name'><br>
	<label style='text-transform: capitalize;'>event title</label><br>
	<input type='text' class='form-control' name='event_title' placeholder='event title'><br>
	<label style='text-transform: capitalize;'>event description</label><br>
	<input type='text' class='form-control' name='event_description' placeholder='event description'><br>
	<label style='text-transform: capitalize;'>event date</label><br>
	<input type='text' class='form-control' name='event_date' placeholder='event date'><br>
	<label style='text-transform: capitalize;'>event location</label><br>
	<input type='text' class='form-control' name='event_location' placeholder='event location'><br>
	<label style='text-transform: capitalize;'>event tickets</label><br>
	<input type='text' class='form-control' name='event_tickets' placeholder='event tickets'><br>
	
	<button type="submit" class="btn btn-primary">Save</button>
</form>