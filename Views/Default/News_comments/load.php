<?php $comments = $template_data['comments']; ?>

<?php if(sizeof($comments) > 0) :?>
    <hr class="sep-line mt-60 mb-60">
    <div class="title">
        <h6 class="text-uppercase text-muted"><?= sizeof($comments)?> Comments <span class="badge bg-danger">3</span></h6>
    </div>
    <div class="content">
        <ul class="comments">
            <?php foreach ($comments as $comment  ): ?>
            <li>
                <div class="avatar"><img src="assets/img/avatars/avatar01.jpg" alt=""></div>
                <div class="content no-padding">
                    <span class="details text-capitalize">
                        <?=$comment["user_name"]?> <?=$comment["user_lastname"]?> on <?=$comment["com_date"]?>
                    </span>
                    <p><?=$comment["comment"]?></p>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>
