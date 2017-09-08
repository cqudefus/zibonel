<?php $data = $template_data['event'][0]; ?>

<div class="content col-md-9">
    <!-- Post -->
    <input type="hidden" data-news-link="<?=$data["id"]?>"/>
    <div class="post single">
        <ul class="post-meta">
					<li><span>Date: </span><?=$data["event_date"]?></li>
					<li><span>Event Name: </span><a href="#" class="text-capitalize"><?=$data["event_name"]?></a></li>
					<li><span>Location: </span><a href="#" class="text-capitalize"><?=$data["event_location"]?></a></li>
					<li><span>Tickets: </span><a href="#" class="text-capitalize"><?=$data["event_tickets"]?></a></li>
        </ul>
        <div class="post-content">
            <h1><?=$data["event_title"]?></h1>
            <blockquote>
                <p><?=$data["event_title"]?></p>
            </blockquote>
            <?=$data["event_description"]?>
        </div>
        <div class="post-comments post-module" data-news-id="<?=$data['id']?>">

        </div>
        <?php if(\berkaPhp\helpers\Auth::isUserLogged()) :?>
            <?= \berkaPhp\helpers\Element::load('AddComment', "",$data['id']) ?>
        <?php endif ?>
    </div>
</div>
<!-- <div class="sidebar col-md-3">
     \berkaPhp\helpers\Element::load('RecentPosts', 'Default', $recent_posts) ?>
</div>-->
<script>
    zibonel.initLoadComment();
    zibonel.initNewView();
</script>
