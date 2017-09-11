
<!-- Content -->
<div id="content">

	<!-- Section -->
	<section id="home" class="h-lg cover dark bg-black">

		<div class="carousel inner-controls" data-single-item="true" data-navigation="true" data-pagination="true" data-autoplay="4000">
			<!-- Slide -->
			<div class="slide h-lg">
				<div class="bg-image"><img src="/Views/Default/Assets/Home/homeslider1.jpg" alt=""></div>
				<div class="container v-center home-text">
					<div class="row">
						<div class="col-lg-6 col-md-8 animated" data-animation="fadeInLeft">
							<h1 class="font-secondary banner-text">Silapho Ukhoyo</h1>
							<h5 class="mb-40 text">Number One Community Radio Station</h5>
							<div class="row">
								<div class="col-sm-6">
									<a href="/about_us" class="btn btn-filled btn-primary btn-block">About Zibonele<i class="i-after ti-arrow-right"></i></a>
								</div>
								<div class="col-sm-6">
									<a href="/contacts" class="btn btn-link btn-block">Contact Us<i class="i-after ti-comment"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Slide -->
			<div class="slide h-lg">
				<div class="bg-image"><img src="/Views/Default/Assets/Home/homeslider2.jpg" alt=""></div>
				<div class="container v-center home-text">
					<div class="row">
						<div class="col-lg-6 col-md-8">
							<h1 class="font-secondary banner-text">News Around the Globe </h1>
							<h5 class="mb-40 text">Number One Community Radio Station</h5>
							<div class="row">
								<div class="col-sm-6">
									<a href="/news" class="btn btn-filled btn-primary btn-block">News<i class="i-after ti-arrow-right"></i></a>
								</div>
								<div class="col-sm-6">
									<!--<a href="#" class="btn btn-link btn-block">Contact Us<i class="i-after ti-email"></i></a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Slide -->
			<div class="slide h-lg">
				<div class="bg-image"><img src="/Views/Default/Assets/Home/homeslider3.jpg" alt=""></div>
				<div class="container v-center home-text">
					<div class="row">
						<div class="col-lg-6 col-md-8">
							<h1 class="font-secondary banner-text">Health and Esithembeni Nosapho</h1>
							<h5 class="mb-40 text">Mon - Thurs 09:00-12:00</h5>
							<div class="row">
								<div class="col-sm-6">
								<!--	<a href="/Presenters" class="btn btn-filled btn-primary btn-block">Presenters<i class="i-after ti-arrow-right"></i></a>-->
								</div>
								<div class="col-sm-6">
                                    <!--<a href="#" class="btn btn-link btn-block">Contact Us<i class="i-after ti-email"></i></a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Slide -->
			<div class="slide h-lg">
				<div class="bg-image"><img src="/Views/Default/Assets/Home/homeslider4.jpg" alt=""></div>
				<div class="container v-center home-text">
					<div class="row">
						<div class="col-lg-6 col-md-8">
							<h1 class="font-secondary banner-text">Hlala Nathi</h1>
							<h5 class="mb-40 text-muted"></h5>
							<div class="row">
								<div class="col-sm-6">
                                    <a href="/Presenters" class="btn btn-filled btn-primary btn-block">Presenters<i class="i-after ti-arrow-right"></i></a>
                                </div>
								<div class="col-sm-6">
                                    <!--<a href="#" class="btn btn-link btn-block">Contact Us<i class="i-after ti-email"></i></a>-->a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	</section>	
</div>

<section class="container">
	
<div class="col-md-12 col-sm-12 col-xs-12 text-center">
	<h3>Latest News</h3>
	<p class="lead mb-60">Latest News Around South Africa</p>
</div>

<?php foreach ($news as $data ): ?>
    <div class="masonry-item col-md-4 col-sm-6 col-xs-12">
        <div class="post post-boxed">
            <div class="post-image">
                <img style="border-radius:50%;" src="/Views/Default/Assets/News/<?= $data['image']== '0' ? 'no_image.png' : $data['image']?>" width="300px" alt="">
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

</section>
<!-- Content / End -->

<!-- Footer -->
<script>
	$app.initList(); 
</script>

