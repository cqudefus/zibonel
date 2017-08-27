<!-- Footer -->
<footer id="footer" class="bg-secondary dark">
  <?php $globalContact = \berkaPhp\database\table\GlobalModel::getContacts() ?>
	<div class="container">
			<div class="row">

				<div class="col-md-3 text-center">
					<!-- Widget - Logo -->
					<div class="widget widget-logo">
						<img class="logo logo-dark" src="/Views/Default/Assets/favicon_152x152.png"  alt="Radio Zibonele FM">
					</div>
					<div class="widget widget-follow">
						<a href="#" class="icon icon-circle icon-facebook icon-xs"><i class="fa fa-facebook"></i></a>
						<a href="#" class="icon icon-circle icon-twitter icon-xs"><i class="fa fa-twitter"></i></a>
						<a href="#" class="icon icon-circle icon-google-plus icon-xs"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>

				<div class="col-md-9">
					<div class="feature boxed bg-primary rounded mb-60">
						<div class="row">
							<div class="col-sm-6">
								<h5 class="mb-0"><i class="ti-mobile i-before text-dark"></i>Call Us! +48 210 221 221</h5>
							</div>
							<div class="col-sm-6">
								<h5 class="mb-0"><i class="ti-email i-before text-dark"></i>Write to Us! hello@example.mail</h5>
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
                    <div class="twitter-feed" data-count="3"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget-follow">
                    <a href="<?= $globalContact['facebook']?>" target="_blank" class="icon icon-circle icon-facebook icon-xs"><i class="fa fa-facebook"></i></a>
                    <a href="<?= $globalContact['twitter']?>" target="_blank" class="icon icon-circle icon-twitter icon-xs"><i class="fa fa-twitter"></i></a>
                    <a href="<?= $globalContact['google']?>" target="_blank" class="icon icon-circle icon-google-plus icon-xs"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>

						<div class="col-md-4">
							<!-- Widget - Contact Form -->
							<div class="widget widget-contact-form">
								<h6 class="text-uppercase text-muted">Write to Us</h6>
								<form class="contact-form form-validate" id="contact-form-2">
									<input name="name" id="name" type="text" class="form-control input-sm" placeholder="Name">
									<input name="email" id="email" type="text" class="form-control input-sm" placeholder="E-mail address">
									<textarea name="message" id="message" cols="30" rows="4" class="form-control input-sm" placeholder="Message"></textarea>
									<button class="btn btn-filled btn-submit btn-sm btn-block"><span>Send it <i class="i-after ti-arrow-right"></i></span></button>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
			<hr class="sep-line">
			<div class="row pt-50 pb-50">
				<div class="col-sm-6 text-muted">
					Copyright Okno 2016©. All rights reserved.<br>
					Made with love by suelo.pl
				</div>
				<div class="col-sm-6 text-right">
					<ul class="nav nav-inline nav-sm mt-10">
						<li><a href="#">Sign Up</a></li>
						<li><a href="#">Other products</a></li>
						<li><a href="#">Hire me</a></li>
					</ul>
				</div>
			</div>
		</div>

</footer>
<!-- Footer / End -->
