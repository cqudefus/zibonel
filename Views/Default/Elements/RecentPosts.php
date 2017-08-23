<div class="widget widget-recent-posts">
    <h6 class="text-uppercase text-muted">Most Viewed Posts</h6>
    <ul class="list-posts">
        <?php foreach ($passed_data as $post ): ?>
        <li>
            <a href="/news/view/<?= $post['link'] ?>"><?=berkaPhp\helpers\Str::limitChar($post["title"], 150)?></a>
            <span class="date"><?=$post["published_date"]?></span>
        </li>
        <?php endforeach ?>
    </ul>
</div>
