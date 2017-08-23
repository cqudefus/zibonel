<div class="">
    <?php if(!isset($show_breadcrumb)) :?>
        <div class="container content_wrapper">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <ul id="bc1" class="breadcrumb">
                    <li><a href="/"><i class="glyphicon glyphicon-home"></i> Home</a>
                <span class="divider">
                    <span class="accesshide ">
                    </span>
                </span>
                    </li>
                    <li>
                        <span tabindex="0"><?= $page_title ?></span>
                <span class="divider">
                    <span class="accesshide ">
                        <span class="arrow_text"></span>
                </span>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="page-content-title">
                    <h4 class="color-green-theme"><?= $page_title ?></h4>
                </div>
            </div>
    <?php endif ?>
            {content}
    <?php if(!isset($show_breadcrumb)): ?>
        </div>
    <?php endif ?>
</div>






