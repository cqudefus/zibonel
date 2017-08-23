<!-- Footer -->
<footer id="footer" class="bg-secondary dark">
    <?php $globalContact = \berkaPhp\database\table\GlobalModel::getContacts() ?>
    <div class="container">
        <div class="row">

            <div class="col-md-3 text-center">
                <!-- Widget - Logo -->
                <div class="widget widget-logo">
                    <img class="logo logo-dark" src="/Views/Default/Assets/favicon_152x152.png"  alt="Okno">
                </div>

            </div>

            <div class="col-md-9">
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
                </div>
            </div>

        </div>
    </div>

</footer>
<!-- Footer / End -->