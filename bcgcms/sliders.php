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
                                            <a href="whats_new.php">Sliders</a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Add New
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                   Add Sliders</span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_slider">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-3 col-form-label">Slider Title</label>
                                                            <div class="col-md-9 p-0">
                                                                <input type="text" class="form-control input-full" name="slider_title" id="slider_title">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-3 col-form-label">Caption</label>
                                                            <div class="col-md-9 p-0">
                                                                <input type="text" class="form-control input-full" name="slider_caption" id="slider_caption">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-3 col-form-label">Slider Type</label>
                                                            <div class="col-md-9 p-0">
                                                                <select class="form-control input-full" name="slider_type" id="slider_type">
                                                                    <option value="B">Banner Slider</option>
                                                                    <option value="F">Footer Slider</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-3 col-form-label">Upload Document</label>
                                                            <div class="col-md-9 p-0">
                                                                <input type="file" class="form-control input-full" name="slider_upload" id="slider_upload" accept="image/*">
                                                            </div>
                                                        </div>
                                                        <img id="blah" src="images/no_img.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-3 col-form-label">Upload Document</label>
                                                            <div class="col-md-9 p-0">
                                                                <select class="form-control input-full" name="slider_status" id="slider_status">
                                                                    <?php $sql = "SELECT * from faq_mst_status ORDER BY faq_status_id ASC";
                                                                    $exe = pg_query($db,$sql);
                                                                    $result = pg_fetch_all($exe);
                                                                    foreach ($result as $f_status) {?>
                                                                    <option value="<?php echo $f_status['faq_status_id']; ?>"><?php echo $f_status['faq_status_title']; ?></option>
                                                                        <?php } ?>
                                                                </select>
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
                            <div class="table-responsive">
                                <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="add-row"
                                                class="display table table-striped table-hover dataTable" role="grid"
                                                aria-describedby="add-row_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>S.No</th>
                                                        <th>Title</th>
                                                        <th>File</th>
                                                        <th>Created Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $sql = "SELECT sliders.*,faq_mst_status.faq_status_title FROM sliders 
                                                    left JOIN faq_mst_status ON sliders.slider_status = faq_mst_status.faq_status_id ORDER BY sliders.slider_id ASC"; 
                                                          $res = pg_query($db, $sql);
                                                          $result = pg_fetch_all($res);
                                                          $i=1;
                                                          foreach ($result as $value) {
                                                    ?>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $i;?></td>
                                                        <td class="sorting_1"><?php echo $value['slider_title'];?></td>
                                                        <td class="sorting_1"><img class="ficon" src="uploads/Sliders/<?php echo $value['slider_img'];?>" alt=""></a></td>
                                                        <td class="sorting_1"><?php echo $value['faq_status_title'];?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editRowModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement">
                                                                    <i class="fa fa-edit get_what"
                                                                        data-whats_id="<?php echo $value['slider_id'];?>"
                                                                        data-whats_title="<?php echo $value['slider_title'];?>"
                                                                        data-whats_desc="<?php echo $value['slider_caption'];?>"
                                                                        data-what_file="<?php echo $value['slider_img'];?>"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header no-bd">
                                                                            <h5 class="modal-title">
                                                                                <span class="fw-mediumbold">
                                                                                    What's</span>
                                                                                <span class="fw-light">
                                                                                    New Edit
                                                                                </span>
                                                                            </h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form id="edit_whats_new">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="qualifi">Title</label>
                                                                                            <input type="text" class="form-control" name="whats_title" id="What_new_title">
                                                                                            <input type="hidden" class="form-control" name="whats_id" id="Whats_id">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="qualifi">Description</label>
                                                                                            <textarea class="form-control" name="description" id="Whats_desc" cols="30" rows="3"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="qualifi">Upload Document</label>&nbsp;<label for="" style="color:red !important;">(*PDF only allowed)</label>
                                                                                            <input type="file" class="form-control" name="what_file" id="   " accept="application/pdf,application/vnd.ms-excel">
                                                                                            <label id="file_lable" style="color:green !important;"></label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-group">
                                                                                            <label id="What_file_view"></label>
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
                                                        </td>
                                                    </tr>
                                                    <?php $i++; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php');
}else{
  header("Location:index.php");
}?>
<style>
    #blah{
        float: right;
        width: 75%;
        height: 153px;
    }
</style>
<script>
    slider_upload.onchange = evt => {
  const [file] = slider_upload.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>