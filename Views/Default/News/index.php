<?php $news = $template_data['news'] ?>
<div class="container" style="background-color: #ff4c4c;">
<div class="row">
    <h1>Headlines</h1>
</div>
    <div class="row">
        <div class="col-md-5 col-lg-5">
            <!-- artigo em destaque -->
            <div class="featured-article">
                <a href="#">
                    <img src="http://placehold.it/482x350" alt="" class="thumb">
                </a>
                <div class="block-title">
                    <h2>Lorem ipsum dolor asit amet</h2>
                    <p class="by-author"><small>By Jhon Doe</small></p>
                </div>
            </div>
            <!-- /.featured-article -->
        </div>
        <div class="col-md-7 col-lg-7">
            <ul class="media-list main-list">
              <li class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://placehold.it/150x90" alt="...">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                  <p class="by-author">By Jhon Doe</p>
                </div>
              </li>
              <li class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://placehold.it/150x90" alt="...">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                  <p class="by-author">By Jhon Doe</p>
                </div>
              </li>
              <li class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://placehold.it/150x90" alt="...">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                  <p class="by-author">By Jhon Doe</p>
                </div>
              </li>
            </ul>
        </div>
    </div>
    </div>
    <br><br>
<?php foreach ($news as $data ): ?>
    <div class="masonry-item col-md-4 col-sm-6 col-xs-12">
        <div class="post post-boxed">
            <div class="post-image">
                <img src="/Views/Default/Assets/News/<?= $data['image']== '0' ? 'no_image.png' : $data['image']?>" width="300px" alt="">
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
<script>
    zibonel.initEqualizer();
</script>

