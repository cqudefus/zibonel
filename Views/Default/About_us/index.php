<?php $about_us = $template_data['about_us'] ?>
<?php foreach ($about_us as $data  ): ?>
    <div class="content col-md-6">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-40" role="tablist">
            <li class="active"><a href="#about_tab" role="tab" data-toggle="tab">About Us</a></li>
            <li><a href="#mission_tab" role="tab" data-toggle="tab">Our mission</a></li>
            <li><a href="#vision_tab" role="tab" data-toggle="tab">Our vision</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fade in" id="about_tab">
                <!--                <h1>We are always looking for new investment horizons...</h1>-->
                <p class="lead mb-50"><?=$data["description"]?></p>
                <span data-target="local-scroll"><a href="#services" class="btn btn-default">Read more <i class="i-after ti-arrow-right"></i></a></span>
                <!--                <span data-target="local-scroll"><a href="#services" class="btn btn-default">Read more <i class="i-after ti-arrow-right"></i></a></span>-->
            </div>
            <div role="tabpanel" class="tab-pane fade" id="mission_tab">
                <!--                <h1>Our target is to own the Internet!</h1>-->
                <p class="lead mb-50"> <?=$data["mission"]?> </p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="vision_tab">
                <!--                <h1>We want to increase our income to 6 million dollars in 2016.</h1>-->
                <p class="lead mb-50"><?=$data["vision"]?></p>
            </div>
        </div>
    </div>
<?php endforeach ?>
<script>
//	$app.initList();
</script>






