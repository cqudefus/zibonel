<?php $users = $template_data['users'] ?>
<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title"><label class="text-muted" for="bootstrap-editor" style='text-transform: capitalize;'>Users</label></div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-inverse">
                    <tr class="table-header">
                        <th style='text-transform: capitalize;'>#</th>
                        <th style='text-transform: capitalize;'>name</th>
                        <th style='text-transform: capitalize;'>lastname</th>
                        <th style='text-transform: capitalize;'>fullname</th>
                        <th style='text-transform: capitalize;'>cellphone</th>
                        <th style='text-transform: capitalize;'>email</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user  ): ?>
                        <?php if ($user['user_ref_role'] == '1'): ?>
                            <?php if (berkaPhp\helpers\Auth::getActiveUser(false,'user_ref_role') == 1): ?>
                                <tr>
                                    <td data-limit-char="20"><?=$user["user_id"]?></td>
                                    <td data-limit-char="20"><?=$user["user_name"]?></td>
                                    <td data-limit-char="20"><?=$user["user_lastname"]?></td>
                                    <td data-limit-char="20"><?=$user["user_fullname"]?></td>
                                    <td data-limit-char="20"><?=$user["user_cellphone"]?></td>
                                    <td data-limit-char="20"><?=$user["user_email"]?></td>
                                    <td>
                                        <a href="<?= berkaPhp\helpers\Html::action('/users/edit/'.$user['user_id'] ) ?>">
                                            <span class="label label-primary">Edit</span>
                                        </a>
                                        <a href="<?= berkaPhp\helpers\Html::action('/users/delete/'.$user['user_id'] ) ?>">
                                            <span class="label label-danger">Delete</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endif ?>
                        <?php else: ?>
                            <tr>
                                <td data-limit-char="20"><?=$user["user_id"]?></td>
                                <td data-limit-char="20"><?=$user["user_name"]?></td>
                                <td data-limit-char="20"><?=$user["user_lastname"]?></td>
                                <td data-limit-char="20"><?=$user["user_fullname"]?></td>
                                <td data-limit-char="20"><?=$user["user_cellphone"]?></td>
                                <td data-limit-char="20"><?=$user["user_email"]?></td>
                                <td>
                                    <a href="<?= berkaPhp\helpers\Html::action('/users/edit/'.$user['user_id'] ) ?>">
                                        <span class="label label-primary">Edit</span>
                                    </a>
                                    <a href="<?= berkaPhp\helpers\Html::action('/users/delete/'.$user['user_id'] ) ?>">
                                        <span class="label label-danger">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        <?php endif ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
	$app.initList(); 
</script>

