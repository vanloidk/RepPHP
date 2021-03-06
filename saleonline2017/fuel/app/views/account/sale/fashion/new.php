<div class="content-customize02">

    <div class="form-group">
        <form action="" method="POST" enctype="multipart/form-data" id="formUpload">
            <div class="row row_padding">
                <div class="col-md-2">
                    <label>Name: </label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="nameP" class="form-control"/>
                </div>
            </div>

            <div class="row row_padding">
                <div class="col-md-2">
                    <label>Serial Number: </label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="serial_number" class="form-control"/>
                </div>
            </div>
            <div class="row row_padding">
                <div class="col-md-2">
                    <label>Category: </label>
                </div>
                <div class="col-md-3">

                    <?php echo Form::select('group', 'all', array("AA", "BB"), array('class' => 'form-control', 'id' => 'category_selected')); ?>

                </div>
            </div>
            <div class="row row_padding">
                <div class="col-md-2">
                    <label>Price: </label>
                </div>
                <div class="col-md-2">
                    <input type="text" name="price" class="form-control"/>
                </div>
            </div>

            <div class="row row_padding">
                <div class="col-md-2">
                    <label>Quantity: </label>
                </div>
                <div class="col-md-2">
                    <input type="text" name="quantity" class="form-control"/>
                </div>
            </div>

            <div class="row row_padding">
                <div class="col-md-2">
                    <label>Status: </label>
                </div>
                <div class="col-md-1">
                    <input type="checkbox" name="status" style="width: 20px; height: 20px;"/>
                </div>
            </div>

            <div class="row row_padding">
                <div class="col-md-2">
                    <label>Image: </label>
                </div>
                <div class="col-md-2">
                    <img id="image_dtl" style="width: 200px; height: 150px;" src= "">
                </div>
                <!-- upload picture !-->
                <div class="col-md-offset-5 ">
                    <input type="file" name="file" class="btn" style="background-color: #269abc;">
                    <input type = "submit"  value = "Upload" name = "submit" class ="btn">

                </div>
            </div>
            <!-- editor !-->
            <div class="row row_padding">
                <div class="col-md-1">
                    <label>details: </label>
                </div>
                <div class="col-md-11" >
                    <textarea name="detail"> </textarea>
                </div>
            </div>

            <div class = "row col-md-offset-10" style = "padding-top: 20px;">
                <input class = "btn btn-primary" type="submit" name = "Save" value="submit"/>
            </div>
        </form>
    </div>
</div>

<script>
</script>
