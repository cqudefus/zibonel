<div class="content">
    <!-- Sorting -->
    <div class="sorting-bar clearfix">
        <form action="#" class="form-inline pull-left">
            <div class="select-wrapper">
                <select name="sort" id="sort" class="form-control input-2 input-sm">
                    <option value="sort">Sort by</option>
                    <option value="a-z">Name A-Z</option>
                    <option value="z-a">Name Z-A</option>
                </select>
<!--                <button type="submit" class="btn ">-->
<!--                    <span>Search <i class="i-after ti-arrow-right"></i></span>-->
<!--                </button>-->
            </div>
        </form>
        <span class="pull-right mt-10 text-muted">
            Displaying 8 of 12 items
        </span>
    </div>
    <hr class="sep-line sep-2 mt-30 mb-30">
    <!-- Items -->
    <div class="masonry row">
        <?php foreach ($presenters as $data  ): ?>
        <div class="masonry-item col-md-3 col-sm-6 col-xs-12">
            <!-- Product -->
            <div class="product-box text-center">
                <a href="/presenters/view/<?= $data['pr_id'] ?>">
                    <img style="border-radius:10px;" src="/Views/Default/Assets/<?= $data['user_picture'] ?>" alt="<?= $data['user_name'] ?>">
                </a>
                <br/>
                <br/>
                <h5><a href="#"><?= $data['user_name'] ?></a></h5>
                <span class="price"><?= $data['user_lastname'] ?></span>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>


