<?php $data = $template_data['new'][0]; ?>

<form method="POST" action="<?= berkaPhp\helpers\Html::action('/news/edit/'.$data['id']) ?>">

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label for="title" style='text-transform: capitalize;'>title</label></div>
        </div>
        <div class="panel-body">
            <input id="title" class="form-control" name="title" value="<?=$data["title"]?>" style="width:98%;">
        </div>
    </div>

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label for="subtitle" style='text-transform: capitalize;'>subtitle</label></div>
        </div>
        <div class="panel-body">
            <textarea id="subtitle" class="form-control" name="subtitle" style="width:98%;" rows="5"><?=$data["subtitle"]?></textarea>
        </div>
    </div>

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label for="published_date" style='text-transform: capitalize;'>published date</label></div>
        </div>
        <div class="panel-body">
            <input id="published_date" class="form-control" name="published_date" value="<?=$data["published_date"]?>" style="width:98%;">
        </div>
    </div>

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label for="link" style='text-transform: capitalize;'>link</label></div>
        </div>
        <div class="panel-body">
            <input id="link" class="form-control" name="link" value="<?=$data["link"]?>" style="width:98%;">
        </div>
    </div>

    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title"><label for="contents" style='text-transform: capitalize;'>Contents</label></div>
        </div>
        <div class="panel-body">
          <textarea id="contents" class="form-control" name="contents" rows="25"><?=$data["contents"]?></textarea>
        </div>
    </div>

    <input type="hidden" name="id" value="<?=$data['id']?>">
    <button type="submit" class="btn btn-primary">Save</button>
</form>