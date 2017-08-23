<form data-form method="POST" action="<?= berkaPhp\helpers\Html::action('/news/add/') ?>">
    <span class="label label-info" data-error-message> Please fill required fields</span>
    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label for="title" style='text-transform: capitalize;'>title</label></div>
        </div>
        <div class="panel-body">
            <input data-new-title data-required id="title" class="form-control" name="title"  style="width:98%;">
        </div>
    </div>

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label for="subtitle" style='text-transform: capitalize;'>subtitle</label></div>
        </div>
        <div class="panel-body">
            <textarea data-required id="subtitle" class="form-control" name="subtitle" style="width:98%;" rows="5"></textarea>
        </div>
    </div>

<!--    <div class="content-box-large content-admin-holder">-->
<!--        <div class="panel-heading">-->
<!--            <div class="panel-title"><label for="published_date" style='text-transform: capitalize;'>published date</label></div>-->
<!--        </div>-->
<!--        <div class="panel-body">-->
<!--            <input id="published_date" class="form-control" name="published_date" style="width:98%;">-->
<!--        </div>-->
<!--    </div>-->

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label for="link" style='text-transform: capitalize;'>link</label></div>
        </div>
        <div class="panel-body">
            <input data-new-link data-required id="link" class="form-control" name="link"  style="width:98%;">
        </div>
    </div>

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label for="contents" style='text-transform: capitalize;'>Contents</label></div>
        </div>
        <div class="panel-body">
            <textarea data-required id="contents" class="form-control" name="contents" rows="15"></textarea>
        </div>
    </div>

    <div class="content-box-large content-admin-holder">
        <div class="panel-heading">
            <div class="panel-title"><label for="contents" style='text-transform: capitalize;'>Contents</label></div>
        </div>
        <div class="panel-body">
        <!-- bootstrap-imageupload. -->
            <div class="imageupload panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Upload Image</h3>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default active">File</button>
                    </div>
                </div>
                <div class="file-tab panel-body">
                    <label class="btn btn-default btn-file">
                        <span>Browse</span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file">
                    </label>
                    <button type="button" class="btn btn-default">Remove</button>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>