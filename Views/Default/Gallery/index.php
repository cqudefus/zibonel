<?php $gallery = $template_data['gallery'] ?>
<div>
<div class="container text-center">
	<h3>Default</h3>
	<p class="lead mb-60">Default gallery with title under the image.</p>

	<div class="masonry row">
		<?php foreach ($gallery as $data  ): ?>
		<div class="masonry-item webdesign col-md-4 col-sm-6 col-xs-12">
			<!-- Image -->
			<div class="image-box image-hover text-center">
				<div class="image">
					<a href="/Views/Default/Assets/Gallery/<?=$data["image_file"]?>" data-lightbox="<?=$data["image_heading"]?>" data-title="<?=$data["image_heading"]?>">
						<img src="/Views/Default/Assets/Gallery/<?=$data["image_file"]?>" alt="">
					</a>
				</div>
				<div class="title">

						<h5 class="mb-0"><?=$data["image_heading"]?></h5>
						<span class="text-muted"><?=$data["image_description"]?></span>
					</a>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>
</div>
<script>
	$app.initList();
</script>
