<?php $events = $template_data['events'] ?>
			<?php foreach ($events as $data  ): ?>
					<div class="masonry-item col-md-4 col-sm-6 col-xs-12">
			        <div class="post post-boxed">
			            <div class="post-image">
			                <img src="/Views/Default/Assets/News/<?= $data['image']== '0' ? 'no_image.png' : $data['image']?>" width="300px" alt="">
			            </div>
			            <ul class="post-meta">
			                <li><span>Date: </span><?=$data["event_date"]?></li>
			                <li><span>Event Name: </span><a href="#" class="text-capitalize"><?=$data["event_name"]?></a></li>
			                <li><span>Location: </span><a href="#" class="text-capitalize"><?=$data["event_location"]?></a></li>
											<li><span>Tickets: </span><a href="#" class="text-capitalize"><?=$data["event_tickets"]?></a></li>
			            </ul>
			            <div class="post-content">
			                <h2 data-equalize-height="news"><?=$data["event_title"]?></h2>
			                <p><?=berkaPhp\helpers\Str::limitChar($data["event_description"], 120, '...')?></p>
			                <a href="/events/view/<?= $data['id'] ?>" class="btn btn-filled btn-sm btn-primary">View more</a>
			            </div>
			        </div>
			    </div>
			<?php endforeach ?>

<script>
	$app.initList();
</script>
