<?php $about_us = $template_data['about_us'] ?>
<?php foreach ($about_us as $data  ): ?>

    <div class="content col-md-6">
        <ul class="nav nav-tabs mb-40" role="tablist">
            <li class="active"><a href="#about_tab" role="tab" data-toggle="tab">About Us</a></li>
            <li><a href="#mission_tab" role="tab" data-toggle="tab">Our mission</a></li>
            <li><a href="#vision_tab" role="tab" data-toggle="tab">Our vision</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fade in" id="about_tab">
                <p class="lead mb-50"><?=$data["description"]?></p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="mission_tab">
                <p class="lead mb-50"> <?=$data["mission"]?> </p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="vision_tab">
                <p class="lead mb-50"><?=$data["vision"]?></p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div><img src="/Views/Default/Assets/img/photos/RadioZiboneleLogo.png" alt="" style="border-radius: 5px;"></div>
    </div>

<?php endforeach ?>

<script>
  $app.initList();
</script>
