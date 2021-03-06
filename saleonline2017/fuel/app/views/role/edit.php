<div class="content-customize02">
    <h3 class="page-header"><?php echo "Edit"; ?></h3>
    <?php echo Form::open(array('role' => 'form')); ?>
    <div class="container">

        <div class="row">
            <div class="col-lg-2">
                <?php echo Form::label("Name", 'Name', array('class' => 'control-label required')); ?>
            </div>
            <div class="col-lg-7 col-lg-offset-0">
                <?php echo Form::input('name', Input::get_field_value('name', $roles, 'name'), array('class' => 'form-control')); ?>
            </div>
        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-lg-2">
                <?php echo Form::label("filter", 'filter', array('class' => "control-label")); ?>
            </div>
            <div class="col-lg-7 col-lg-offset-0">
                <?php echo Form::input('filter', Input::get_field_value('filter', $roles, 'filter'), array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="row"  style="margin-top: 5px;">
            <div class="col-lg-2">
                <?php echo Form::label("user id", 'user id', array('class' => 'control-label')); ?>
            </div>
            <div class="col-lg-7 col-lg-offset-0">
                <?php echo Form::input('user_id', Input::get_field_value('user_id', $roles, 'user_id'), array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="row"  style="margin-top: 10px; margin-left: 20px;">
            <hr>
            <div class="form-group">
                <?php echo Form::button('submit', "Update", array('class' => 'btn btn-default')); ?>
                <?php echo Html::anchor('role/index', "back", array('class' => 'btn btn-warning')); ?>
            </div>

        </div>
        <?php echo Form::close() ?>
    </div>
</div>