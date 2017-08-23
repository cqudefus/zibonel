<?php $data = $template_data['new'][0]; ?>

<div class="content col-md-9">
    <!-- Post -->
    <input type="hidden" data-news-link="<?=$data["link"]?>"/>
    <div class="post single">
        <ul class="post-meta">
            <li><span>Added:</span><?=$data["published_date"]?></li>
            <li><span>Author:</span><a href="#" class="text-capitalize"><?=$data["user_name"]?></a></li>
            <li><span>Tags:</span><a href="#" class="text-capitalize"><?=$data["cat_name"]?></a></li>
        </ul>
        <div class="post-content">
            <h1><?=$data["title"]?></h1>
            <blockquote>
                <p><?=$data["subtitle"]?></p>
            </blockquote>
            <?=$data["contents"]?>
        </div>
        <div class="post-comments post-module" data-news-id="<?=$data['id']?>">

        </div>
        <?php if(\berkaPhp\helpers\Auth::isUserLogged()) :?>
            <?= \berkaPhp\helpers\Element::load('AddComment', "",$data['id']) ?>
        <?php endif ?>
    </div>
</div>
<div class="sidebar col-md-3">
    <?= \berkaPhp\helpers\Element::load('RecentPosts', 'Default', $recent_posts) ?>
</div>
<script>
    zibonel.initLoadComment();
    zibonel.initNewView();
</script>