<?php $news_comments = $template_data['news_comments'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>com id</th>
				<th style='text-transform: capitalize;'>com date</th>
				<th style='text-transform: capitalize;'>com ref user</th>
				<th style='text-transform: capitalize;'>com ref news</th>
				<th style='text-transform: capitalize;'>comment</th>
				<th style='text-transform: capitalize;'>com status</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($news_comments as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["com_id"]?></td>
					<td data-limit-char="20"><?=$data["com_date"]?></td>
					<td data-limit-char="20"><?=$data["com_ref_user"]?></td>
					<td data-limit-char="20"><?=$data["com_ref_news"]?></td>
					<td data-limit-char="20"><?=$data["comment"]?></td>
					<td data-limit-char="20"><?=$data["com_status"]?></td>
					
					<td>
						<a href="/news_comments/edit/<?= $data['com_id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/news_comments/delete/<?= $data['com_id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/news_comments/view/<?= $data['com_id'] ?>">
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

