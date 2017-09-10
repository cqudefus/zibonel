
<!-- Content -->
<div id="content">

	<!-- Section -->
	<section id="home" class="h-lg cover dark bg-black">

		<div class="carousel inner-controls" data-single-item="true" data-navigation="true" data-pagination="true" data-autoplay="15000">
			<!-- Slide -->
			<div class="slide h-lg">
				<div class="bg-image"><img src="/Views/Default/Assets/Home/homeslider1.jpg" alt=""></div>
				<div class="container v-center home-text">
					<div class="row">
						<div class="col-lg-6 col-md-8 animated" data-animation="fadeInLeft">
							<h1 class="font-secondary banner-text">We will take care about your finances.</h1>
							<h5 class="mb-40 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h5>
							<div class="row">
								<div class="col-sm-6">
									<a href="#" class="btn btn-filled btn-primary btn-block">For Business<i class="i-after ti-arrow-right"></i></a>
								</div>
								<div class="col-sm-6">
									<a href="#" class="btn btn-link btn-block">About Us<i class="i-after ti-comment"></i></a>
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
							<h1 class="font-secondary banner-text">Make your future financially safe.</h1>
							<h5 class="mb-40 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h5>
							<div class="row">
								<div class="col-sm-6">
									<a href="#" class="btn btn-filled btn-primary btn-block">For People<i class="i-after ti-arrow-right"></i></a>
								</div>
								<div class="col-sm-6">
									<a href="#" class="btn btn-link btn-block">Contact Us<i class="i-after ti-email"></i></a>
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
							<h1 class="font-secondary banner-text">Make your future financially safe.</h1>
							<h5 class="mb-40 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h5>
							<div class="row">
								<div class="col-sm-6">
									<a href="#" class="btn btn-filled btn-primary btn-block">For People<i class="i-after ti-arrow-right"></i></a>
								</div>
								<div class="col-sm-6">
									<a href="#" class="btn btn-link btn-block">Contact Us<i class="i-after ti-email"></i></a>
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
							<h1 class="font-secondary banner-text">Make your future financially safe.</h1>
							<h5 class="mb-40 text-muted"></h5>
							<div class="row">
								<div class="col-sm-6">
									<a href="#" class="btn btn-filled btn-primary btn-block">For People<i class="i-after ti-arrow-right"></i></a>
								</div>
								<div class="col-sm-6">
									<a href="#" class="btn btn-link btn-block">Contact Us<i class="i-after ti-email"></i></a>
								</div>
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
	<h3>Default</h3>
	<p class="lead mb-60">Default gallery with title under the image.</p>
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

