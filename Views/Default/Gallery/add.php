<h2 style="margin-top: 0;text-transform: capitalize;">New galler</h2>
<form method="POST" action="/gallery/add">
	<label style='text-transform: capitalize;'>id</label><br>
	<input type='text' class='form-control' name='id' placeholder='id'><br>
	<label style='text-transform: capitalize;'>image description</label><br>
	<input type='text' class='form-control' name='image_description' placeholder='image description'><br>
	<label style='text-transform: capitalize;'>image file</label><br>
	<input type='text' class='form-control' name='image_file' placeholder='image file'><br>
	
	<button type="submit" class="btn btn-primary">Save</button>
</form>