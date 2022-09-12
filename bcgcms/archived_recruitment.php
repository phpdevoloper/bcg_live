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
                                            <a href="whats_new.php">Recruitment(Archived)</a>
                                        </li>
                                    </ul>
                                </div>
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
                                                    Recruitment
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_recruitment">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Title</label>
                                                            <div class="col-md-6 p-0">
                                                                <input type="text" class="form-control input-full" name="rect_title" id="rect_title">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Advt.No</label>
                                                            <div class="col-md-6 p-0">
                                                                <input type="text" class="form-control input-full" name="advt_no" id="advt_no">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Date of Announcement</label>
                                                            <div class="col-md-6 p-0">
                                                                <input type="date" class="form-control input-full" name="data_announce" id="data_announce">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Last Date to Apply</label>
                                                            <div class="col-md-6 p-0">
                                                            <input type="date" class="form-control input-full" name="last_date_to" id="last_date_to">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Upload Advt.Notification</label>
                                                            <div class="col-md-6 p-0">
                                                                <input type="file" class="form-control input-full" name="advt_notifi" id="advt_notifi" accept="application/pdf">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Status</label>
                                                            <div class="col-md-6 p-0">
                                                                <select class="form-control input-full" name="rec_status" id="rec_status">
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
                                                        <th>Advt.No</th>
                                                        <th>Date Of Announcement</th>
                                                        <th>Recruitment Notification</th>
                                                        <th>Last Date to Apply</th>
                                                        <th>Created Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $sql = "SELECT * FROM recruitment"; 
                                                          $res = pg_query($db, $sql);
                                                          $result = pg_fetch_all($res);
                                                          $i=1;
                                                          if (is_array($result) || is_object($result)){
                                                          foreach ($result as $value) {
                                                          if ($value['last_date_to_apply'] <= $date = date('Y-m-d')) {
                                                    ?>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $i;?></td>
                                                        <td class="sorting_1"><?php echo $value['rect_title'];?></td>
                                                        <td class="sorting_1"><?php echo $value['advt_no'];?></td>
                                                        <td class="sorting_1"><?php echo $value['date_of_announce'];?></td>
                                                        <td class="sorting_1"><a href="uploads/recruitment/<?php echo $value['upload_advt'];?>" target="_blank"><img class="ficon" src="assets/img/pdf.png" alt="">view(<?php echo $file_size = round($value['file_size'] / 1024, 2).'KB';?>)</a></td>
                                                        <td class="sorting_1"><?php echo $t = date("d-m-Y", strtotime($value['last_date_to_apply']));?></td>
                                                        <td class="sorting_1"><?php echo $value['created_at'];?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editRowModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement">
                                                                    <i class="fa fa-edit get_what"
                                                                        data-whats_id="<?php echo $value['rect_title'];?>"
                                                                        data-whats_title="<?php echo $value['advt_no'];?>"
                                                                        data-whats_desc="<?php echo $value['date_of_announce'];?>"
                                                                        data-what_file="<?php echo $value['upload_advt'];?>"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php $i++; }}} ?>
                                                </tbody>
                                            </table>
                                            <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header no-bd">
                                                            <h5 class="modal-title">
                                                                <span class="fw-mediumbold">
                                                                    Recruitment
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
                                                                                <input type="text" class="form-control input-full" name="whats_title" id="Whats_title">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Advt.No</label>
                                                                            <div class="col-md-6 p-0">
                                                                                <input type="text" class="form-control input-full" name="whats_title" id="Whats_title">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Date of Announcement</label>
                                                                            <div class="col-md-6 p-0">
                                                                                <input type="date" class="form-control input-full" name="whats_title" id="Whats_title">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Last Date to Apply</label>
                                                                            <div class="col-md-6 p-0">
                                                                            <input type="date" class="form-control input-full" name="whats_title" id="Whats_title">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Upload Advt.Notification</label>
                                                                            <div class="col-md-6 p-0">
                                                                                <input type="file" class="form-control input-full" name="what_file" id="What_file" accept="application/pdf,application/vnd.ms-excel">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-inline">
                                                                            <label for="inlineinput" class="col-md-5 col-form-label">Status</label>
                                                                            <div class="col-md-6 p-0">
                                                                                <select class="form-control input-full" name="rec_status" id="rec_status">
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
    //   $("#add_recruitment").submit(function (e) {
    //     e.preventDefault();
    //     var data = new FormData(this);

    $("#add_recruitment").validate({
        rules: {
            rect_title: {
            required: true,
          },
          advt_no: {
            required: true,
          },
          data_announce: {
            required: true,
          },
          last_date_to: {
            required: true,
          },
          advt_notifi: {
            required: true,
          },
        },
        messages: {},
        submitHandler: function (form, e) {
            e.preventDefault();
            var data = new FormData($("#add_recruitment")[0]);
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
        }
    });


    // Edit View
    $(document).on("click", ".get_what", function (e) {
        e.preventDefault();
        var tender_id = $(this).attr("data-tender_id");
        var tender_title = $(this).attr("data-tender_title");
        var advertise_no = $(this).attr("data-advertise_no");
        var date_of_announce = $(this).attr("data-date_of_announce");
        var date_of_closed = $(this).attr("data-date_of_closed");
        var tenders_notice = $(this).attr("data-tenders_notice");
        var tender_status = $(this).attr("data-tender_status");
        $("#Whats_id").val(tender_id);
        $("#Tender_title").val(tender_title);
        $("#Advt_no").val(advertise_no);
        $("#Data_announce").val(date_of_announce);
        console.log(date_of_announce);
        console.log(date_of_closed);
        $("#Cosed_Date").val(date_of_closed);
        $("#upload_document").text(tenders_notice);
        $("#Tender_status").val(tender_status);
    });

  });
</script>