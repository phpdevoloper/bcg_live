<?php 
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
                                            <a href="whats_new.php"><?php echo $_GET['category_title']; ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="video_gallery.php" class="btn btn-primary btn-round ml-auto">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                data-target="#addRowMosdfdsfdal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Video</button>
                            <!-- Modal -->
                            <div class="modal fade" id="addRowMosdfdsfdal" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <form id="add_video_galley">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-3 col-form-label">Category Title*</label>
                                                            <div class="col-md-9 p-0">
                                                                <select class="form-control input-full" name="even_cat" id="even_cat">
                                                                    <option value="">Select the Category</option>
                                                                    <?php 
                                                                        $sql = "SELECT * FROM video_category WHERE gall_cate_id = '3' ORDER BY cate_id";
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
                                                            <label for="inlineinput" class="col-md-3 col-form-label">Upload URL</label>
                                                            <div class="col-md-9 p-0">
                                                                <input type="text" class="form-control input-full" name="video_url" id="video_url">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-3 col-form-label">Caption</label>
                                                            <div class="col-md-9 p-0">
                                                                <input type="text" class="form-control input-full" name="photo_caption" id="photo_caption">
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
                                    $sql    = "select * from video_gallery where category ='".$_GET['cate_id']."'";
                                    // echo $sql;exit;
                                    $exe    = pg_query($db,$sql);
                                    $result = pg_fetch_all($exe);
                                    foreach($result as $value){ ?>
                                    <div class="col-4">
                                        <a href="#">
                                            <div class="box">
                                                <div class="boxInner">
                                                    <div class="btn">
                                                        <a href="#" class="vid_gallery_edit" data-toggle="modal" 
                                                            data-target="#editvidModal"
                                                            data-gallery_id = "<?php echo $value['photo_id'];?>"
                                                            data-cate = "<?php echo $value['category'];?>"
                                                            data-photofile = "<?php echo $value['photo_file'];?>"
                                                            data-photo_caption = "<?php echo $value['photo_caption'];?>"
                                                        ><i class="fa fa-edit" 
                                                        ></i></a>
                                                    </div>
                                                    <div class="btn">
                                                        <a href="#" class="gallery_del"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                    <iframe width="315" height="315" src="<?php echo $value['photo_file'];?>" 
                                                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                    </iframe>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <?php echo $value['photo_caption'];?>
                                            </div>
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="editvidModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header no-bd">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">
                                            Edit Video
                                        </span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="edit_video_gallery">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-inline">
                                                    <label for="inlineinput" class="col-md-3 col-form-label">Category Title*</label>
                                                    <div class="col-md-9 p-0">
                                                        <select class="form-control input-full" name="even_cat" id="Even_cat">
                                                            <option value="">Select the Category</option>
                                                            <?php 
                                                                $sql = "SELECT * FROM video_category WHERE gall_cate_id = '3' ORDER BY cate_id";
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
                                                        <input type="text" class="form-control input-full" name="event_photo" id="Event_photo">
                                                        <!-- <label for="inlineinput" class="col-form-label photo_file" style="color:green !important;">Allowed types(JPG,PNG,GIF)</label> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-inline">
                                                    <label for="inlineinput" class="col-md-3 col-form-label">Caption</label>
                                                    <div class="col-md-9 p-0">
                                                        <input type="text" class="form-control input-full" name="event_caption" id="Event_cap">
                                                        <input type="hidden" class="form-control input-full" name="event_cate_id" id="Event_id">
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
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php');?>
