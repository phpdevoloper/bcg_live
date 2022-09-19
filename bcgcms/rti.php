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
                                            <a href="#">RTI</a>
                                        </li>
                                    </ul>
                                </div>
                                <button
                                data-toggle="modal" 
                                data-target="#addNewRTI" title=""
                                data-original-title="Add New RTI"  
                                class="btn btn-primary btn-round ml-auto"><i class="fa fa-plus"></i>&nbsp;&nbsp;
                                Add New RTI</button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="addNewRTI" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Add New RTI</span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_rti" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="qualifi">Title
                                                            <span style="color:#ff0000">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" name="rti_title" id="rti_title">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-sm-4">
                                                        <label for="inputPassword" class="col-form-label">RTI Attachment</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">File</label>
                                                        <input class="form-check-input" type="checkbox" id="add_RTI_file_check" value="">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">URL</label>
                                                        <input class="form-check-input" type="checkbox" id="add_RTI_url_check" value="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control add_file_rti" name="add_rti_file" id="add_rti_file">
                                                        <input type="text" class="form-control add_url_rti" name="add_rti_url" id="add_rti_url">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="qualifi">Status
                                                            <span style="color:#ff0000">*</span>
                                                            </label>
                                                            <select class="form-control" name="rti_status" id="rti_status">
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
                            <!-- Modal -->
                        </div>
                        <div class="card-body">
                            <div>
                                <!-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#addRowModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add photos</button> -->
                            </div>
                            <div>
                                <div id="accordion">
                                    <?php $sql = "SELECT * FROM mst_rti order by rti_id ASC"; 
                                          $exe = pg_query($db,$sql);
                                          $row = pg_fetch_all($exe);
                                          $i = 1;
                                          foreach ($row as $value) {
                                    ?>
                                    <div class="card" style="border-color: green;">
                                        <div class="card-header" id="heading-<?php echo $i;?>">
                                        <h5 class="mb-0">
                                            <a class="exe" role="button" data-toggle="collapse" href="#collapse-<?php echo $i;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>">
                                            <?php echo $value['rti_name'];?>
                                            <i class="fa fa-edit getMSTRTI" 
                                            data-toggle="modal"
                                            data-target="#addMSTRTI"
                                            data-original-title="Edit RTI" 
                                            data-mst_rti_id="<?php echo $value['rti_id'];?>"
                                            data-mst_rti_name="<?php echo $value['rti_name'];?>"
                                            data-mst_rti_status="<?php echo $value['rti_status'];?>"
                                            ></i>
                                            </a>
                                        </h5>
                                        </div>
                                        <div id="collapse-<?php echo $i;?>" class="collapse" data-parent="#accordion" aria-labelledby="heading-<?php echo $i;?>">
                                            <div class="card-body">
                                                <button class="btn btn-primary btn-xs" 
                                                data-toggle="modal" data-target="#addSubRTI" title="" data-original-title="Add New RTI">Add Sub RTI</button>
                                                <div id="accordion-<?php echo $i;?>">
                                                    <?php $sql = "SELECT * FROM mst_sub_rti WHERE mst_rti_id = '".$value['rti_id']."' order by sub_rti_id asc "; 
                                                        $exe = pg_query($db,$sql);
                                                        $row = pg_fetch_all($exe);
                                                        $b = 1;
                                                        foreach ($row as $value) {
                                                            // var_dump($value);
                                                            ?>
                                                        <div class="card-header" id="heading-<?php echo $i;?>-<?php echo $b;?>">
                                                            <?php if ($value['mst_rti_id'] == '3') { ?>
                                                                <h5 class="exe">
                                                                <a href="#">
                                                                    <?php echo $value['sub_rti_name'];?>&nbsp;&nbsp;
                                                                    <i class="fa fa-edit getSub_RTI" 
                                                                        data-toggle="modal"
                                                                        data-target="#editSubRtiModal"
                                                                        data-original-title="Edit RTI"
                                                                        data-sub_id="<?php echo $value['sub_rti_id'];?>"
                                                                        data-sub_name="<?php echo $value['sub_rti_name'];?>" 
                                                                    ></i>
                                                            </a>
                                                            <?php } else{ ?>
                                                            <h5 class="mb-0">
                                                                <a class="collapsed exe" role="button" data-toggle="collapse" href="#collapse-<?php echo $i;?>-<?php echo $b;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>-<?php echo $b;?>">
                                                                    <?php echo $value['sub_rti_name'];?>
                                                                </a>
                                                            </h5>
                                                            <?php } ?>
                                                    </div>
                                                        <div id="collapse-<?php echo $i;?>-<?php echo $b;?>" class="collapse" data-parent="#accordion-<?php echo $b;?>" aria-labelledby="heading-<?php echo $i;?>-<?php echo $b;?>">
                                                            <div class="card-body">
                                                            <button class="btn btn-primary btn-xs">Add RTI</button>
                                                                <div id="accordion-<?php echo $i;?>-<?php echo $b;?>">
                                                                    <?php $sql = "SELECT * FROM mst_subs_rti WHERE mst_sub_id = '".$value['sub_rti_id']."' order by subs_rti_id asc"; 
                                                                    $exe = pg_query($db,$sql);
                                                                    $row = pg_fetch_all($exe);
                                                                    $c = 1;
                                                                    foreach ($row as $value) {
                                                                        // var_dump($value['subs_rti_id']);
                                                                    ?>
                                                                    <div class="card-header" id="heading-<?php echo $i;?>-<?php echo $b;?>-<?php echo $c;?>">
                                                                        <h5 class="exe">
                                                                        <a  href="#">
                                                                            <?php echo $value['subs_rti_name'];?>
                                                                            <i class="fa fa-edit getRTI" 
                                                                            data-toggle="modal"
                                                                            data-target="#editRtiModal"
                                                                            data-original-title="Edit RTI" 
                                                                            data-subs_id="<?php echo $value['subs_rti_id'];?>"
                                                                            data-subs_name="<?php echo $value['subs_rti_name'];?>"
                                                                            ></i>
                                                                        </a>
                                                                        </h5>
                                                                    </div>
                                                                    <?php $c++; } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php $b++; } ?>
                                                    </div>      
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i++; } ?>
                                    </div>
                                    <!-- Add Sub RTI Modal -->
                                    <div class="modal fade" id="addSubRTI" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header no-bd">
                                                    <h5 class="modal-title">
                                                        <span class="fw-mediumbold">
                                                        Add Sub RTI</span>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="add_sub_rti" method="post">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="qualifi">Title
                                                                    <span style="color:#ff0000">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" name="rti_title" id="rti_title">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="qualifi">Documents<span style="color:#ff0000">*</span></label>
                                                                <div class="row">
                                                                    <div class="col-md-6"></div>
                                                                    <div class="col-md-6"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2"></div>
                                                            <div class="col-sm-10">
                                                                <input type="file" class="form-control upload_event" name="event_file" id="event_file">
                                                                <input type="text" class="form-control event_url" name="event_url" id="event_url">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="qualifi">Status
                                                                    <span style="color:#ff0000">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="rti_status" id="rti_status">
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
                                    <!-- End Add Sub RTI Modal -->
                                <!--RTI Level 1  -->
                                <div class="modal fade" id="addMSTRTI" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header no-bd">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                        Edit RTI</span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="edit_mst_rti" method="post" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="qualifi">Title
                                                                <span style="color:#ff0000">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" name="rti_title" id="Edit_rti_title">
                                                                <input type="hidden" class="form-control" name="rti_id" id="Edit_Rti_id">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="qualifi">Status
                                                                <span style="color:#ff0000">*</span>
                                                                </label>
                                                                <select class="form-control" name="rti_status" id="Edit_rti_status">
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
                                                    <div class="form-group row ">
                                                        <div class="col-sm-4">
                                                            <label for="inputPassword" class="col-form-label">RTI Attachment</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="inputPassword" class="col-sm-4 col-form-label">File</label>
                                                            <input class="form-check-input" type="checkbox" id="RTI_file_check" value="">
                                                            <label for="inputPassword" class="col-sm-4 col-form-label">URL</label>
                                                            <input class="form-check-input" type="checkbox" id="RTI_url_check" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2"></div>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control RTI_upload" name="rti_file" id="RTI_file">
                                                            <input type="text" class="form-control RTI_url" name="rti_url" id="RTI_url">
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
                                <!-- Modal -->
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
<script type="application/javascript">
    $(document).ready(function(){
        $(".add_file_rti").attr("style", "display:none");
        $(".add_url_rti").attr("style", "display:none");

        $("#add_RTI_file_check").change(function () {
            if ($(this).is(":checked")) {
            // $("#url_check").attr("checked", false);
            $("#add_RTI_url_check").prop("checked", false);
            $(".add_url_rti").attr("style", "display:none");
            $(".add_file_rti").attr("style", "display:block");
            } else {
            $(".add_file_rti").attr("style", "display:none");
            }
        });
        $("#add_RTI_url_check").change(function () {
            if ($(this).is(":checked")) {
            $("#add_RTI_file_check").prop("checked", false);
            $(".add_file_rti").attr("style", "display:none");
            $(".add_url_rti").attr("style", "display:block");
            } else {
            $(".add_url_rti").attr("style", "display:none");
            }
      });
    });
</script>