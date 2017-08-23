
<?php $data = $template_data['about_us'][0]; ?>

<form method="POST" action="<?= berkaPhp\helpers\Html::action('/about_us/index') ?>">

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label class="text-muted" for="title" style='text-transform: capitalize;'>title</label></div>
        </div>
        <div class="panel-body">
            <input id="title" class="form-control" name="title" value="<?=$data["title"]?>" style="width:98%;">
        </div>
    </div>

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label class="text-muted" for="vision" style='text-transform: capitalize;'>vision</label></div>
        </div>
        <div class="panel-body">
            <textarea id="vision" class="form-control" name="vision" rows="6" style="width:98%;"><?=$data["vision"]?></textarea>
        </div>
    </div>

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label class="text-muted" for="mission" style='text-transform: capitalize;'>mission</label></div>
        </div>
        <div class="panel-body">
            <textarea id="mission" class="form-control" name="mission" rows="6" style="width:98%;"><?=$data["mission"]?></textarea>
        </div>
    </div>

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label class="text-muted" for="description" style='text-transform: capitalize;'>Description</label></div>
        </div>
        <div class="panel-body">
            <textarea id="description" class="form-control" name="description" rows="10" style="width:98%;height:200px;"><?=$data["description"]?></textarea>
        </div>
    </div>

    <label style='text-transform: capitalize;'>banner</label><br>
    <input type="text" class="form-control" name="banner" value="<?=$data["banner"]?>"><br>
    <input type="hidden" name="id" value="<?=$data['id']?>">
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<script>
	$app.initList(); 
</script>


