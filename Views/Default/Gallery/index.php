<?php $gallery = $template_data['gallery'] ?>
<div class="container text-center">
	<h3>Zibonele FM</h3>
    <p class="lead mb-60">Our Recent activities </p>
    <div class="masonry row">
        
        <div>
            <!-- Image --><div class="row">
            <?php foreach ($gallery as $data  ): ?>
                
                     <div class="col-sm-3">
            <div class="image-box image-hover text-center">
                <div class="image">
                    <a href="/Views/Default/Assets/Gallery/<?=$data["image_file"]?>" data-lightbox="gallery" data-title="Image Title"><img src="/Views/Default/Assets/Gallery/<?=$data["image_file"]?>" alt=""></a>
                </div>
                <div class="title">
                    <a href="#">
                        <h5 class="mb-0"><?=$data["image_heading"]?></h5>
                        <span class="text-muted"><?=$data["image_description"]?></span>
                    </a>
                </div>
            </div>
        </div>
            <?php endforeach ?></div>
        </div>
    </div>
</div>

<script>
	$app.initList();
</script>
