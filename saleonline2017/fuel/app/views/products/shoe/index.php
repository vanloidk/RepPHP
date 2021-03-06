<div class="content-customize">
    <div class="row clearfix">
        <div class="col-md-12 ">
            <div class="row">
                <?php foreach ($tproduct as $key => $value): if ($value->category_id == 2): ?>
                        <div class="col-md-3 padding-product">
                            <div class="thumbnail">
                                <div>
                                    <img style="width: 220px; height: 140px;" src= <?php echo Uri::base() ?>assets/imgshoe/<?php echo $value->img ?>>
                                </div>
                                <div class="caption">
                                    <p style="text-align: left;">
                                        <?php echo $value->name; ?>
                                    </p>
                                    <p style="color: red;">
                                        <?php echo "Giá: " . $value->price; ?>
                                    </p>
                                    <?php if ($value->status == 1): ?>
                                        <p style="color: red; float: left;">
                                            <?php echo "Sale Off : " . $value->saleoff . '%'; ?>
                                        </p>

                                    <?php endif; ?>
                                    <p style="padding-left: 70%;">
                                        <a class="btn btn-primary" href="<?php echo Uri::base() ?>product/detail/<?php echo str_replace(" ", "-", $value->name) . "-" . $key . ".html"; ?>">Chi tiết</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
        </div>
        <div class="pagination" style="float: right;">
            <?php echo html_entity_decode($pagination) ?>
        </div>
    </div>

</div>
