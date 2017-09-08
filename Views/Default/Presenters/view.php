<?php $presenter = $template_data['presenter'][0]; ?>

    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="product col-md-9">

                <div class="row mb-50">
                    <div class="col-sm-6">
                        <img src="/Views/Default/Assets/<?= $presenter['user_picture'] ?>" alt="<?= $presenter['user_name'] ?>">
                    </div>
                    <div class="col-sm-6">
                        <h2 class="text-spacing text-uppercase font-secondary mb-0"><?= $presenter['user_name'] ?></h2>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="description-2">
                                    <dt>Full Name</dt>
                                    <dd><?= $presenter['user_name'] ?> <?= $presenter['user_lastname'] ?></dd>
                                    <dt>Born Date</dt>
                                    <dd><?= $presenter['user_dob'] ?></dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="description-2">
                                    <dt>Favour Colors</dt>
                                    <dd>Feature to come</dd>
                                    <dt>I dont know</dt>
                                    <dd>Feature to come</dd>
                                </dl>
                            </div>
                        </div>
                        <p><?=\berkaPhp\helpers\Str::limitChar($presenter['user_description'], 100, '') ?></p>
                        <hr class="sep-line sep-2 mb-30 mt-30">
                    </div>
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs mb-30" role="tablist">
                    <li class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
                    <li><a href="#additional-info" role="tab" data-toggle="tab">Additional Informations</a></li>
                    <li><a href="#reviews" role="tab" data-toggle="tab">Reviews</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade in" id="description">
                        <p class="lead"><?= $presenter['user_description'] ?></p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="additional-info">
                        <p class="lead"><?= $presenter['user_additional_info'] ?></p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="reviews">
                        <?= $presenter['user_reviews'] ?>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="sidebar col-md-3 presenter">

                <!-- Widget - Search -->
                <div class="widget widget-search">
                    <h6 class="text-uppercase text-muted">Search</h6>
                    <form id="search-widget-form" class="validate-form">
                        <div class="form-group inner-button">
                            <input type="text" class="form-control input-2 input-sm" required>
                            <button type="submit"><i class="ti-search"></i></button>
                        </div>
                    </form>
                </div>

                <!-- Widget - Newsletter -->
                <div class="widget widget-newsletter">
                    <h6 class="text-uppercase">Subscribe Us</h6>
                    <form action="http://suelo.us12.list-manage1.com/subscribe/post-json" id="sign-up-form-2" class="sign-up-form validate-form" method="POST">
                        <input type="hidden" name="u" value="ed47dbfe167d906f2bc46a01b">
                        <input type="hidden" name="id" value="24ac8a22ad">
                        <input type="email"  name="MERGE0" size="25" value="" class="form-control input-2 input-sm" placeholder="Your e-mail..." required>
                        <button type="submit" class="btn btn-filled btn-sm btn-submit btn-block"><span>Sign Up</span></button>
                    </form>
                </div>
                <!-- Widget - Twitter -->
                <div class="widget widget-twitter">
                    <h6 class="text-uppercase text-muted">Latest Tweets</h6>
                    <?= \berkaPhp\helpers\Element::load('TwitterFeeds') ?>
                </div>

            </div>

        </div>
    </div>
