<div class="widget widget-twitter">
    <h6 class="text-uppercase text-muted">Latest Tweets</h6>
    <div class="twitter-feed" data-count="2">
        <?= \berkaPhp\helpers\Element::load('RecentPosts', 'Default', $recent_posts) ?>
    </div>
</div>