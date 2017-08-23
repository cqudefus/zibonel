<?php $programs = $template_data['programs'] ?>

<?php foreach ($programs as $data  ): ?>
<div class="timetable col-md-2 col-sm-3 col-xs-6 text-center">
    <h6 class="head line-up-heading text-capitalize"><?= $data['bc_name'] ?></h6>
    <div class="item">
        <span class="text-muted"><?= $data['bcd_name'] ?> / <?= $data['bct_name'] ?></span>
        <h5 class="text-capitalize"><?= $data['user_fullname']?></h5>
    </div>
</div>
<?php endforeach ?>
<!--data-equalize-height="bc_name"-->
<script>
    zibonel.initEqualizer();
</script>

