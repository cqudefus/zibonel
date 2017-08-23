<?php $news = $template_data['news'] ?>

<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">
            <label class="text-muted pull-left">News Published</label>
            <a href="<?= \berkaPhp\helpers\Html::action('/news/add')?>" class="pull-right admin-btn">
                <label class="text-muted label label-success  admin-btn">New Post</label>
            </a>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-inverse">
                    <tr class="table-header">
                        <th style='text-transform: capitalize;'>#</th>
                        <th style='text-transform: capitalize;'>title</th>
                        <th style='text-transform: capitalize;'>subtitle</th>
                        <th style='text-transform: capitalize;'>published date</th>
                        <th style='text-transform: capitalize;'>link</th>
                        <th style='text-transform: capitalize;'>contents</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($news as $data  ): ?>
                        <tr class="<?= $data['hide'] == 0 ? 'Active' : 'hidden-content' ?>">
                            <td class="p-name">
                                <a><?=$data["id"]?></a>
                            </td>
                            <td class="p-name">
                                <a><?=berkaPhp\helpers\Str::limitChar($data["title"], 30, '...')?></a>
                                <br>
                                <small>Created <?= $data["published_date"] ?></small>
                            </td>
                            <td class="p-progress">
                                <?=berkaPhp\helpers\Str::limitChar($data["subtitle"], 25, '...')?>
                            </td>
                            <td class="p-team">
                                <?=berkaPhp\helpers\Str::limitChar($data["subtitle"], 25, '...')?>
                            </td>
                            <td>
                                150v
                            </td>
                            <td>
                                <span class="label label-<?= $data['hide'] == 0 ? 'primary' : 'danger' ?>">
                                    <?= $data['hide'] == 0 ? 'Active' : 'Hidden' ?>
                                </span>
                            </td>
                            <td>
                                <a href="/news/view/<?=$data['link']?>" target="_blank"><span class="label label-primary">View</span></a>
                                <a href="/admin/news/edit/<?=$data['id']?>"><span class="label label-primary">Edit</span></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
	$app.initList(); 
</script>

