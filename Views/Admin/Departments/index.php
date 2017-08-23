<?php $departments = $template_data['departments'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>dep id</th>
				<th style='text-transform: capitalize;'>dep name</th>
				<th style='text-transform: capitalize;'>dep description</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($departments as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["dep_id"]?></td>
					<td data-limit-char="20"><?=$data["dep_name"]?></td>
					<td data-limit-char="20"><?=$data["dep_description"]?></td>
					
					<td>
						<a href="/departments/edit/<?= $data['dep_id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/departments/delete/<?= $data['dep_id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/departments/view/<?= $data['dep_id'] ?>">
							<button type="button" class="btn btn-default">View</button>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<script>
	$app.initList(); 
</script>

