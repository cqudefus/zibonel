<h2 style="margin-top: 0;text-transform: capitalize;">New department</h2>
<form method="POST" action="/departments/add">
	<label style='text-transform: capitalize;'>dep id</label><br>
	<input type='text' class='form-control' name='dep_id' placeholder='dep id'><br>
	<label style='text-transform: capitalize;'>dep name</label><br>
	<input type='text' class='form-control' name='dep_name' placeholder='dep name'><br>
	<label style='text-transform: capitalize;'>dep description</label><br>
	<input type='text' class='form-control' name='dep_description' placeholder='dep description'><br>
	
	<button type="submit" class="btn btn-primary">Save</button>
</form>