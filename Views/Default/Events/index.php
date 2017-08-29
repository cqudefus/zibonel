<?php $events = $template_data['events'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>id</th>
				<th style='text-transform: capitalize;'>event name</th>
				<th style='text-transform: capitalize;'>event title</th>
				<th style='text-transform: capitalize;'>event description</th>
				<th style='text-transform: capitalize;'>event date</th>
				<th style='text-transform: capitalize;'>event location</th>
				<th style='text-transform: capitalize;'>event tickets</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($events as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["id"]?></td>
					<td data-limit-char="20"><?=$data["event_name"]?></td>
					<td data-limit-char="20"><?=$data["event_title"]?></td>
					<td data-limit-char="20"><?=$data["event_description"]?></td>
					<td data-limit-char="20"><?=$data["event_date"]?></td>
					<td data-limit-char="20"><?=$data["event_location"]?></td>
					<td data-limit-char="20"><?=$data["event_tickets"]?></td>

					<td>
						<a href="/events/edit/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/events/delete/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/events/view/<?= $data['id'] ?>">
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
