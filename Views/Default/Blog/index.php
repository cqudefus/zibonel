<?php $news = $template_data['blogs'] ?>

<?php if(sizeof($news) > 0) :?>
    <?php foreach ($news as $data ): ?>
        <div class="masonry-item col-md-4 col-sm-6 col-xs-12">
            <div class="post post-boxed">
                <div class="post-image">
                    <img src="/Views/Default/Assets/News/<?=$data['image']?>" width="300px" alt="">
                </div>
                <ul class="post-meta">
                    <li><span>Added:</span><?=$data["published_date"]?></li>
                    <li><span>Author:</span><a href="#" class="text-capitalize"><?=$data["user_name"]?></a></li>
                    <li><span>Tags:</span><a href="#" class="text-capitalize"><?=$data["cat_name"]?></a></li>
                </ul>
                <div class="post-content">
                    <h2 data-equalize-height="news"><?=$data["title"]?></h2>
                    <p><?=berkaPhp\helpers\Str::limitChar($data["subtitle"], 120, '...')?></p>
                    <a href="/news/view/<?= $data['link'] ?>" class="btn btn-filled btn-sm btn-primary">Read more</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php else :?>
    <div class="container">
        <div class="col">
            <h6>No post found</h6>
        </div>
    </div>
<?php endif ?>
<script>
    zibonel.initEqualizer();
</script>
