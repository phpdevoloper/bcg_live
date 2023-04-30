<?php 
    session_start();
    if(isset($_SESSION['user'])){
	include('inc/dbconnection.php');
	include('inc/header.php');
	 $base_url = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="page-header">
                                    <ul class="breadcrumbs">
                                        <li class="nav-item">
                                            <a href="whats_new.php">Photo Gallery</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="photo_category.php" class="btn btn-primary btn-round ml-auto"><i class="fa fa-plus"></i>&nbsp;&nbsp;
                                Category</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Add New Category
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_photo_gallery">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-3 col-form-label">Category Title*</label>
                                                            <div class="col-md-9 p-0">
                                                                <select class="form-control input-full" name="even_cat" id="even_cat">
                                                                    <option value="">Select the Category</option>
                                                                    <?php 
                                                                        $sql = "SELECT * FROM event_category ORDER BY cate_id";
                                                                        $exe = pg_query($db,$sql);
                                                                        $result = pg_fetch_all($exe);
                                                                        foreach($result as $value){ ?>
                                                                    <option value="<?php echo $value['cate_id'];?>"><?php echo $value['category_title'];?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-3 col-form-label">Upload Photo</label>
                                                            <div class="col-md-9 p-0">
                                                                <input type="file" class="form-control input-full" name="event_photo" id="event_photo" accept="image/png, image/gif, image/jpeg">
                                                                <label for="inlineinput" class="col-form-label" style="color:green !important;">Allowed types(JPG,PNG,GIF)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="justify-content: center !important;">
                                                    <button type="submit" id="addRowButton"
                                                        class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End modal -->
                            <div>
                                <div class="row photo_gallery">
                                    <?php 
                                    $sql = "select * from photo_category  where cate_status='L' order by created_at desc";
                                    $exe = pg_query($db,$sql);
                                    $result = pg_fetch_all($exe);
                                    foreach($result as $values){ 
                                       ?>
                                    <div class="col-4">
                                        <a class="get_cate" data-cate_id="<?php echo $values['cate_id'];?>">
                                            <div class="box">
                                                <div class="boxInner">
                                                    <!-- <div class="btn">
                                                        <a href="#" class="gallery_cate_delete" data-gallery_id = "<?php //echo $values['cate_id'];?>"><i class="fa fa-trash" ></i>
                                                        </a>
                                                    </div> -->
                                                    <?php
                                                         $sql = "select * from photo_gallery where category='".$values['cate_id']."' order by photo_id";
                                                         $exe = pg_query($db,$sql);
                                                         $result = pg_fetch_all($exe);
                                                         foreach($result as $value){ 
                                                            echo $value["category_title"];
                                                        ?>
                                                            <img src="uploads/gallery/photo/<?php echo $value['photo_file'];?>"/>
                                                        <!-- <img src="images/no_img.png"/> -->
                                                         <?php  } ?>
                                                    <div class="titleBox"><?php echo $values['category_title'];?></div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <?php echo $values['category_title'];?>
                                            </div>
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php'); }else{
    header("Location:index.php");
}?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".get_cate").on('click',function(e){
            e.preventDefault();
            var cate_id = $(this).attr("data-cate_id");
            // console.log(cate_id);
            $.ajax({
                type: "POST",
                url: "galleryAjax.php",
                data : {  cate_id :  cate_id},
                success: function(response){
                    window.location.href = "photo_gallery_view.php"
                }
            });
        });
        
        
        $(".gallery_cate_delete").on('click', function(){
        var c_id = $(this).attr("data-gallery_id");
        var action = "CateDelete";
        swal({
          title: "Are you sure?",
          text: "You want to delete this category!",
          icon: "warning",
          buttons: ["Cancel!", "Yes"],
          dangerMode: true,
        }).then(function (isConfirm) {
          if (isConfirm) {
            $.ajax({
              method: "POST",
              url: "galleryAjax.php",
              dataType:'json',
              data: {
                    c_id : c_id,
                    action   : action
              },
              // contentType: false,
              // processData: false,
              success: function (response) {
                if (response == 1) {
                  swal({
                    title: "category deleted successfully!",
                    icon: "success",
                  }).then(function () {
                     location.reload();
                  });
                } else {
                  swal({
                    title: "Something went wrong!",
                    icon: "error",
                  }).then(function () {
                    // location.reload();
                  });
                }
              },
            });
          } else {
            swal("Cancelled", "Done :)", "error");
          }
        });
    });
    });
</script>
