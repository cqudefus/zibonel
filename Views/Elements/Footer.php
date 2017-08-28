<!-- Footer -->
<footer id="footer" class="bg-secondary dark">
  <?php $globalContact = \berkaPhp\database\table\GlobalModel::getContacts() ?>
	<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<!-- Widget - Logo -->
					<div class="widget widget-logo">
						<img class="logo-dark" src="/Views/Default/Assets/footer_logo.png"  alt="Radio Zibonele FM">
					</div>
            <div class="widget widget-follow">
                <a href="<?= $globalContact['facebook']?>" target="_blank" class="icon icon-circle icon-facebook icon-xs"><i class="fa fa-facebook"></i></a>
                <a href="<?= $globalContact['twitter']?>" target="_blank" class="icon icon-circle icon-twitter icon-xs"><i class="fa fa-twitter"></i></a>
                <a href="<?= $globalContact['google']?>" target="_blank" class="icon icon-circle icon-instagram icon-xs"><i class="fa fa-instagram"></i></a>
            </div>
				</div>
				<div class="col-md-9">
					<div class="feature boxed bg-primary rounded mb-60">
						<div class="row">
							<div class="col-sm-6">
								<h5 class="mb-0"><i class="ti-mobile i-before text-dark"></i>Call Us!&nbsp;<?= $globalContact['tell']?></h5>
							</div>
							<div class="col-sm-6">
								<h5 class="mb-0"><i class="ti-email i-before text-dark"></i>Write to Us!&nbsp;<?= $globalContact['email']?></h5>
							</div>
						</div>
					</div>
					<div class="row">
            <div class="col-md-4">
                <!-- Widget - Contact -->
                <div class="widget widget-contact">
                    <h6 class="text-uppercase text-muted">Contact Us</h6>
                    <address>
                        <strong>Address:</strong><br>
                        <?= $globalContact['street_name']?>,
                        <?= $globalContact['street_number']?>,<br>
                        <?= $globalContact['suburb_name']?>
                        Cape Town<br><br>
                        <strong>Phone:</strong><br>
                        <?= $globalContact['tell']?><br><br>
                        <strong>E-mail:</strong><br>
                        <?= $globalContact['email']?><br>
                    </address>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Widget - Twitter -->
                <div class="widget widget-twitter">
                    <h6 class="text-uppercase text-muted">Latest Tweets</h6>
                    <a class="twitter-timeline" href="https://twitter.com/ZiboneleFM98" data-height="265" data-chrome="nofooter" theme="dark">Tweets by ZiboneleFM98</a>
                    <a href="https://twitter.com/ZiboneleFM98" class="twitter-follow-button" data-show-count="false">Follow @ZiboneleFM98</a>
                </div>
            </div>
						<div class="col-md-4">
							<!-- Widget - Contact Form -->
							<div class="widget widget-contact-form">
								<h6 class="text-uppercase text-muted">Check our Instagram</h6>
								<!-- Widget - Instagram -->
                <iframe src="//lightwidget.com/widgets/0d2114447e725be2b74b9b2f5f4cb603.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
                <a href="https://www.instagram.com/zibonelefm/?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>
              </div>
						</div>
					</div>
				</div>
			</div>
			<hr class="sep-line">
			<div class="row pt-50 pb-50">
				<div class="col-sm-6 text-muted">
					Copyright 2017 ©. All rights reserved.<br>
					 Made with love by <a href="www.cqudefus.com"> Cqudefus</a>
				</div>
				<div class="col-sm-6 text-right">
					<ul class="nav nav-inline nav-sm mt-10">
						<!--<li><a href="#">Sign Up</a></li>
						<li><a href="#">Other products</a></li>-->
						<li><a href="#">Ad Space</a></li>
					</ul>
				</div>
			</div>
		</div>
</footer>
<!-- Footer / End -->
