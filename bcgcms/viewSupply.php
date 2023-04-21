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
                                            <a href="whats_new.php">Supply of BCG Vaccine</a>
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
                                                Add Vaccine Supply
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_supply">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label class="col-md-5 col-form-label" for="qualifi">Year of Report<span style="color:#ff0000">*</span></label>
                                                            <div class="col-md-6 p-0">
                                                                <select class="form-control input-full" name="year_of_report" id="year_of_report">
                                                                    <option value="">Please select the year of report</option>
                                                                    <?php 
                                                                    $a = 2016;
                                                                    $b = 2017;
                                                                    for ($i=0; $i <= 10 ; $i++) {   
                                                                        $a = $a + 1;
                                                                        $b = $b + 1;
                                                                        ?>
                                                                        <option value="<?php echo $a.'-'.$b;?>"><?php echo $a .'-'.$b;?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>      
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">State Name<span style="color:#ff0000">*</span></label>
                                                            <div class="col-md-6 p-0">
                                                                <select class="form-control input-full" name="state_name" id="state_name">
                                                                    <option value="">Please select the state </option>
                                                                    <?php 
                                                                       $sql = "SELECT * FROM mst_state_list ORDER BY state_id";
                                                                       $res = pg_query($db,$sql);
                                                                       $state_list = pg_fetch_all($res);
                                                                       foreach ($state_list as $state) { ?>
                                                                           <option value="<?php echo $state['state_code'];?>"><?php echo $state['state_name'];?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Supply Details<span style="color:#ff0000">*</span></label>
                                                            <div class="col-md-6 p-0">
                                                                <input type="text" class="form-control input-full" id="supply_details" name="supply_details">
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
                                                        <th>Year of Supply</th>
                                                        <th>Report of Supply</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $sql = "SELECT * FROM supply_of_bcg"; 
                                                          $res = pg_query($db, $sql);
                                                          $result = pg_fetch_all($res);
                                                          $i=1;
                                                          if (is_array($result) || is_object($result)){
                                                          foreach ($result as $value) {
                                                    ?>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $i;?></td>
                                                        <td class="sorting_1"><?php echo $value['year_of_supply'];?></td>
                                                        <td class="sorting_1"><?php echo $value['supply_report'];?></td>
                                                        <td>
                                                            <div class="form-button-action"><button type="button" data-toggle="modal"
                                                                    data-target="#editRowModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement"
                                                                    data-rec_id="<?php echo $value['supply_id'];?>"
                                                                    data-rect_title="<?php echo $value['year_of_supply'];?>"
                                                                    data-advt_no="<?php echo $value['supply_report'];?>">
                                                                    <i class="fa fa-edit get_what"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php $i++; }} ?>
                                                </tbody>
                                            </table>
                                            <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header no-bd">
                                                            <h5 class="modal-title">
                                                                <span class="fw-mediumbold">
                                                                    Edit Recruitment
                                                                </span>
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="edit_recruitment">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Title</label>
                                                                            <div class="col-md-6 p-0">
                                                                                <input type="text" class="form-control input-full" name="rec_title" id="Rec_title">
                                                                                <input type="hidden" class="form-control input-full" name="rec_id" id="Rec_id">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Advt.No</label>
                                                                            <div class="col-md-6 p-0">
                                                                                <input type="text" class="form-control input-full" name="advt_no" id="Advt_no">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Date of Announcement</label>
                                                                            <div class="col-md-6 p-0">
                                                                                <input type="date" class="form-control input-full" name="date_of_announe" id="Date_of_announe">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Last Date to Apply</label>
                                                                            <div class="col-md-6 p-0">
                                                                            <input type="date" class="form-control input-full" name="last_date_apply" id="Last_date_apply">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Upload Advt.Notification</label>
                                                                            <div class="col-md-6 p-0">
                                                                                <input type="file" class="form-control input-full" name="rec_file" id="Rec_file" accept="application/pdf,application/vnd.ms-excel">
                                                                                <label id="upload_document" for="inlineinput"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Status</label>
                                                                            <div class="col-md-6 p-0">
                                                                                <select class="form-control input-full" name="rec_status" id="Rec_status">
                                                                                    <option value="draft">Draft</option>
                                                                                    <option value="published">Published</option>
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
<?php include('inc/footer.php'); }else{
       header("Location:index.php");
    }?>
<script type="application/javascript">
  $(document).ready(function(){

    $("#add_supply").validate({
        rules: {
            year_of_report: {
            required: true,
          },
          state_name: {
            required: true,
          },
        },
        messages: {
            year_of_report: {
                required: "Please choose the year of BCG Vaccine Supply",
            },
            state_name: {
                required: "Please choose the state",
            },
        },
        submitHandler: function (form, e) {
            e.preventDefault();
            var data = new FormData($("#add_supply")[0]);
            swal({
            title: "Are you sure?",
            text: "You wants to Add recruitment!",
            icon: "warning",
            buttons: ["Cancel!", "Yes"],
            dangerMode: true,
            }).then(function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                method: "POST",
                url: "addSupplyAjax.php",
                data: data,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response == 1) {
                    swal({
                        title: "Added!",
                        icon: "success",
                    }).then(function () {
                        location.reload();
                    });
                    } else {
                    swal({
                        title: "Something went wrong!",
                        icon: "error",
                    });
                    }
                },
                });
            } else {
                swal("Cancelled", "Done :)", "error");
            }
            });
        }
    });


    // Edit View
    $(document).on("click", ".get_what", function (e) {
        e.preventDefault();
        var rec_id = $(this).attr("data-rec_id");
        var rect_title = $(this).attr("data-rect_title");
        var advt_no = $(this).attr("data-advt_no");
        var date_of_announce = $(this).attr("data-date_of_announce");
        var last_date_to_apply = $(this).attr("data-last_date_to_apply");
        var upload_advt = $(this).attr("data-upload_advt");
        var rec_status = $(this).attr("data-rec_status");

        $("#Rec_id").val(rec_id);
        $("#Rec_title").val(rect_title);
        $("#Advt_no").val(advt_no);
        $("#Date_of_announe").val(date_of_announce);
        // console.log(date_of_announce);
        // console.log(date_of_closed);
        $("#Last_date_apply").val(last_date_to_apply);
        $("#upload_document").text(upload_advt);
        $("#Rec_status").val(rec_status);
    });

    $("#edit_recruitment").submit(function(e){
        e.preventDefault();
        var data = new FormData(this);
        swal({
        title: "Are you sure?",
        text: "You wants to Upadte recruitment!",
        icon: "warning",
        buttons: ["Cancel!", "Yes"],
        dangerMode: true,
        }).then(function (isConfirm) {
        if (isConfirm) {
            $.ajax({
            method: "POST",
            url: "addRecruitmentAjax.php",
            data: data,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response == 1) {
                swal({
                    title: "Added!",
                    icon: "success",
                }).then(function () {
                    location.reload();
                });
                } else {
                swal({
                    title: "Something went wrong!",
                    icon: "error",
                }).then(function () {
                    location.reload();
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