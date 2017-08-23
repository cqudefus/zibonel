
<?php $programs = $template_data['programs']; ?>
<?php foreach ($programs as $program ): ?>
    <div class="col-sm-12 col-md-2 col-lg-2 text-center">
        <img src="/Views/Default/Assets/Program/<?= !empty($program['bc_icon']) ? $program['bc_icon'] : 'no_image.png' ?>" alt="" class="live-img "/>
        <div class="text-wrapper">
                <span class="live-text block <?= $program !== $programs[0] ? 'color-green-theme' : ' ' ?>">
                    <?php if($program === $programs[0]): ?>
                        <span class="live">Live now</span>
                    <?php elseif($program === $programs[1]): ?>
                        <span class="live-next">Next</span>
                    <?php endif ?>
                    <span>
                        <?=$program['bc_name']?>
                    </span>
                    <span class="to">
                        <?=$program['bct_name']?>
                    </span>
                </span>
        </div>
        <div class="live-description">
            <?= \berkaPhp\helpers\Str::limitChar($program['bc_description'], 70, ' ...')?>
        </div>
    </div>
<?php endforeach ?>