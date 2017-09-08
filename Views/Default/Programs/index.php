<?php $programs = $template_data['programs'] ?>

<div class="col-sm-12 col-md-12 col-lg-12">
    <?php foreach ($programs as $data  ): ?>
        <div class="col-xs-12 col-md-6 program_wrapper">
            <!-- First product box start here-->
            <div class="prod-info-main prod-wrap clearfix">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 ">
                        <div class="product-image">
                            <img src="/Views/Default/Assets/podcasts.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                    <span class="bold"><?= $data['bc_name'] ?></span>
                                </a>
                            </h5>
                            <p class="price-container">
                                <span class="label label-success program_user presenter-icon-wrapper">
                                    <i class="glyphicon glyphicon-headphones presenter-icon"></i>
                                </span>
                                <span class="presenter-name bold"><?= $data['user_fullname'] ?></span>
                            </p>
                            <span class="tag1"></span>
                        </div>
                        <div class="description">
                            <p><?= \berkaPhp\helpers\Str::limitChar($data['bc_description'], 200, '...') ?> </p>
                        </div>
                        <div class="product-info smart-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-danger time"><?= $data['bcd_name'] ?> / <?= $data['bct_name'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end product -->
        </div>
    <?php endforeach ?>
</div>