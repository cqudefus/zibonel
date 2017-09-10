<div class="page-content">
    <div class="container">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?= berkaPhp\helpers\Html::action('/pages') ?>"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                    <li><a href="<?= berkaPhp\helpers\Html::action('/about_us') ?>"><i class="glyphicon glyphicon-info-sign"></i>About us</a></li>
                    <li><a href="<?= berkaPhp\helpers\Html::action('/news') ?>"><i class="glyphicon glyphicon-globe"></i>News</a></li>
                    <li><a href="<?= berkaPhp\helpers\Html::action('/contacts') ?>"><i class="glyphicon glyphicon-phone-alt"></i>Contact</a></li>
                    <li><a href="<?= berkaPhp\helpers\Html::action('/users') ?>"><i class="glyphicon glyphicon-user"></i>Users</a></li>

                    <?php if(berkaPhp\helpers\Auth::getActiveUser(false,'user_ref_role') == 1) :?>
                        <li class="submenu">
                            <a href="#">
                                <i class="glyphicon glyphicon-cog"></i>Options
                                <span class="caret pull-right"></span>
                            </a>
                            <!-- Sub menu -->
                            <ul>
                                <li><a href="<?= berkaPhp\helpers\Html::action('/generators/file') ?>"><i class="glyphicon glyphicon-user"></i> Gen files</a></li>
                                <li><a href="<?= berkaPhp\helpers\Html::action('/post') ?>"><i class="glyphicon glyphicon-flag"></i> Blog post</a></li>
                                <li><a href="<?= berkaPhp\helpers\Html::action('/pages') ?>"><i class="glyphicon glyphicon-pencil"></i>Pages</a></li>
                            </ul>
                        </li
                    <?php endif ?>
                </ul>
            </div>
            <?php if(berkaPhp\helpers\Auth::getActiveUser(false,'user_ref_role') == 1) :?>
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?= berkaPhp\helpers\Html::action('/pages') ?>"><i class="glyphicon glyphicon-pencil"></i>Staffs</a></li>
                    <li><a href="<?= berkaPhp\helpers\Html::action('/about_us') ?>"><i class="glyphicon glyphicon-info-sign"></i>Programs</a></li>
                    <li><a href="<?= berkaPhp\helpers\Html::action('/news') ?>"><i class="glyphicon glyphicon-globe"></i>News</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-play-circle"></i>line-up</a></li>
                    <li><a href="<?= berkaPhp\helpers\Html::action('/contacts') ?>"><i class="glyphicon glyphicon-phone-alt"></i>Contact</a></li>
                    <li><a href="<?= berkaPhp\helpers\Html::action('/users') ?>"><i class="glyphicon glyphicon-user"></i>Users</a></li>
                </ul>
            </div>
            <?php endif ?>
        </div>
