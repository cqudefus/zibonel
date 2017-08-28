<?php $about_us = $template_data['about_us'] ?>
<?php foreach ($about_us as $data  ): ?>
<!--<section>-->
    <!--<section id="about" class="section-double fullheight bg-primary dark right">-->
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
                <!--<span data-target="local-scroll"><a href="#services" class="btn btn-default">Read more <i class="i-after ti-arrow-right"></i></a></span>
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
    <div class="image col-md-6">
        <div class="bg-image zooming"><img src="Assets\examples-pictures.jps" alt=""></div>
    </div>
<!--</section>-->
<?php endforeach ?>

<section id="clients">
    <div class="container text-center">
        <h6 class="text-uppercase text-spacing mb-60">Our Sponsors</h6>
        <div class="carousel" data-single-item="true" data-transition="fade" data-autoplay="3000">
            <a href="#"><img class="gray-to-color mb-50" src="assets/img/logotypes/sass.png" alt=""></a>
            <a href="#"><img class="gray-to-color mb-50" src="assets/img/logotypes/envato.png" alt=""></a>
            <a href="#"><img class="gray-to-color mb-50" src="assets/img/logotypes/suelo.png" alt=""></a>
            <a href="#"><img class="gray-to-color mb-50" src="assets/img/logotypes/html.png" alt=""></a>
        </div>
    </div>
</section>

<script>
//	$app.initList();
</script>






