<?php $gallery = $template_data['gallery'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>id</th>
				<th style='text-transform: capitalize;'>image description</th>
				<th style='text-transform: capitalize;'>image file</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($gallery as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["id"]?></td>
					<td data-limit-char="20"><?=$data["image_description"]?></td>
					<td data-limit-char="20"><?=$data["image_file"]?></td>

					<td>
						<a href="/gallery/edit/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/gallery/delete/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/gallery/view/<?= $data['id'] ?>">
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
