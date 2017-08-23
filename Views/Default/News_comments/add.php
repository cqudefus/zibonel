<h2 style="margin-top: 0;text-transform: capitalize;">New news_comment</h2>
<form method="POST" action="/news_comments/add">
	<label style='text-transform: capitalize;'>com id</label><br>
	<input type='text' class='form-control' name='com_id' placeholder='com id'><br>
	<label style='text-transform: capitalize;'>com date</label><br>
	<input type='text' class='form-control' name='com_date' placeholder='com date'><br>
	<label style='text-transform: capitalize;'>com ref user</label><br>
	<input type='text' class='form-control' name='com_ref_user' placeholder='com ref user'><br>
	<label style='text-transform: capitalize;'>com ref news</label><br>
	<input type='text' class='form-control' name='com_ref_news' placeholder='com ref news'><br>
	<label style='text-transform: capitalize;'>comment</label><br>
	<input type='text' class='form-control' name='comment' placeholder='comment'><br>
	<label style='text-transform: capitalize;'>com status</label><br>
	<input type='text' class='form-control' name='com_status' placeholder='com status'><br>
	
	<button type="submit" class="btn btn-primary">Save</button>
</form>