<?php $data = $template_data['user'][0]; ?>

<div class="col-md-8">
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title text-muted bold">User information</div>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" METHOD="post" ACTION="<?= berkaPhp\helpers\Html::action('/users/edit/'.$data['user_id']) ?>">
                <div class="form-group">
                    <label for="user_name" class="col-sm-3 control-label  text-muted">First name</label>
                    <div class="col-sm-9">
                        <input id="user_name" class="form-control" name="user_name" value="<?=$data["user_name"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_lastname" class="col-sm-3 control-label text-muted">Last name</label>
                    <div class="col-sm-9">
                        <input id="user_lastname" class="form-control" name="user_lastname" value="<?=$data["user_lastname"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_fullname" class="col-sm-3 control-label text-muted">Full name</label>
                    <div class="col-sm-9">
                        <input id="user_fullname" class="form-control" name="user_fullname" value="<?=$data["user_fullname"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_cellphone" class="col-sm-3 control-label text-muted">Cell Phone</label>
                    <div class="col-sm-9">
                        <input id="user_cellphone" class="form-control" name="user_cellphone" value="<?=$data["user_cellphone"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_ref_role" class="col-sm-3 control-label text-muted">Role</label>
                    <div class="col-sm-9">
                        <input id="user_ref_role" class="form-control" name="user_ref_role" value="<?=$data["user_ref_role"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_email" class="col-sm-3 control-label text-muted">Email address</label>
                    <div class="col-sm-9">
                        <input id="user_email" class="form-control" name="user_email" value="<?=$data["user_email"]?>">
                    </div>
                </div>
                <?php if(\berkaPhp\helpers\Auth::getActiveUser(false, 'user_id') == $data['user_id']):?>
                <div class="form-group">
                    <label for="user_password" class="col-sm-3 control-label text-muted">Password</label>
                    <div class="col-sm-9">
                        <input id="user_password" class="form-control" name="user_password" value="<?=$data["user_password"]?>">
                    </div>
                </div>
                <?php endif ?>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <input type="hidden" name="user_id" value="<?=$data['user_id']?>">
                        <button type="submit" class="btn btn-primary">Update Info</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title text-muted bold">Broadcasts</div>
        </div>
        <div class="panel-body">
        </div>
    </div>
</div>