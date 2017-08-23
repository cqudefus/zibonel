<?php $data = $template_data['contacts'][0] ?>

<form method="POST" action="<?= berkaPhp\helpers\Html::action('/contacts/index') ?>">

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title">
                <label class="text-muted" style='text-transform: capitalize;'>Our Contacts</label>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="cellphone" style='text-transform: capitalize;'>cellphone</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="cellphone" class="form-control" name="cellphone" value="<?=$data["cellphone"]?>" style="width:98%;">
                    </div>
                </div>
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="tell" style='text-transform: capitalize;'>tell</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="tell" class="form-control" name="cellphone" value="<?=$data["tell"]?>" style="width:98%;">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="email" style='text-transform: capitalize;'>email</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="email" class="form-control" name="email" value="<?=$data["email"]?>" style="width:98%;">
                    </div>
                </div>
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="street_name" style='text-transform: capitalize;'>street name</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="street_name" class="form-control" name="street_name" value="<?=$data["street_name"]?>" style="width:98%;">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="suburb_name" style='text-transform: capitalize;'>suburb</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="suburb_name" class="form-control" name="suburb_name" value="<?=$data["suburb_name"]?>" style="width:98%;">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="street_name" style='text-transform: capitalize;'>street number</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="street_name" class="form-control" name="street_name" value="<?=$data["street_number"]?>" style="width:98%;">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="suburb_name" style='text-transform: capitalize;'>suburb</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="suburb_name" class="form-control" name="suburb_name" value="<?=$data["suburb_name"]?>" style="width:98%;">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="facebook" style='text-transform: capitalize;'>facebook link</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="facebook" class="form-control" name="facebook" value="<?=$data["facebook"]?>" style="width:98%;">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="twitter" style='text-transform: capitalize;'>twitter link</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="twitter" class="form-control" name="twitter" value="<?=$data["twitter"]?>" style="width:98%;">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="youtube" style='text-transform: capitalize;'>youtube link</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="youtube" class="form-control" name="youtube" value="<?=$data["youtube"]?>" style="width:98%;">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="content-box-large content-admin-holder">
                    <div class="panel-heading">
                        <div class="panel-title"><label class="text-muted" for="google" style='text-transform: capitalize;'>google link</label></div>
                    </div>
                    <div class="panel-body">
                        <input id="google" class="form-control" name="google" value="<?=$data["google"]?>" style="width:98%;">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="hidden" name="id" value="<?=$data['id']?>">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</form>
<script>
	$app.initList(); 
</script>

