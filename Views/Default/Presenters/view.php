<?php $presenter = $template_data['presenter'][0]; ?>

    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="product col-md-9">

                <div class="row mb-50">
                    <div class="col-sm-6">
                        <img style="border-radius: 5px;" src="/Views/Default/Assets/Presenters/<?= $presenter['user_picture'] ?>"  alt="<?= $presenter['nickname'] ?>">
                    </div>
                    <div class="col-sm-6">
                        <h2 class="text-spacing text-uppercase font-secondary mb-0"><?= $presenter['nickname'] ?></h2>
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
                                    <dt>Born In </dt>
                                    <dd><?= $presenter['born_in'] ?></dd>
                                    <dt>Be On Radio Since</dt>
                                    <dd><?= $presenter['be_on_radio_since'] ?></dd>
                                </dl>
                            </div>
                        </div>
                        <p><?=\berkaPhp\helpers\Str::limitChar($presenter['who_am_i'], 150, '') ?></p>
                        <hr class="sep-line sep-2 mb-30 mt-30">

                    <!--    <div class="widget widget-follow">
                            <!--<h6 class="text-uppercase">Follow Us</h6>--
                            <a href="#" class="icon icon-circle icon-facebook icon-xs"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="icon icon-circle icon-twitter icon-xs"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="icon icon-circle icon-instagram icon-xs"><i class="fa fa-instagram"></i></a>
                        </div>-->
                    </div>
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs mb-30" role="tablist">
                    <li class="active"><a href="#description" role="tab" data-toggle="tab">Full Person Background</a></li>
                    <li><a href="#additional-info" role="tab" data-toggle="tab">Education/Career Background</a></li>
                    <li><a href="#reviews" role="tab" data-toggle="tab">Additional Info</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade in" id="description">
                        <p class="lead"><?= $presenter['full_person_background'] ?></p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="additional-info">
                        <p class="lead"><?= $presenter['education_career_background'] ?></p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="reviews">
                        <?= $presenter['additional_info'] ?>
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
