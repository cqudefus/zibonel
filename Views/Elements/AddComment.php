<hr class="sep-line mt-60 mb-60">
<div class="post-add-comment post-module">
    <div class="title">
        <h6 class="text-uppercase">Write a comment</h6>
    </div>
    <div class="content">
        <div id="add-comment" class="">
            <input type="hidden" id="com_ref_user" value="<?= berkaPhp\helpers\Auth::getActiveUser(false,'user_id') ?>">
            <input type="hidden" id="com_ref_news" value="<?= $passed_data ?>">
            <div class="form-group">
                <textarea id="user-comment" cols="30" rows="4" class="form-control" placeholder="Comment" ></textarea>
            </div>
            <button id="btn-comment" class="btn btn-filled btn-primary">Send a comment</button>
        </div>
    </div>
</div>
<script>
    zibonel.initAddComment();
</script>