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
                                            <a href="whats_new.php">Active Tenders</a>
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
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Active Tenders
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_tenders">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Title</label>
                                                            <div class="col-md-7 p-0">
                                                                <input type="text" class="form-control input-full" name="tender_title" id="tender_title">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Advertise No</label>
                                                            <div class="col-md-7 p-0">
                                                                <input type="text" class="form-control input-full" name="advt_no" id="advt_no">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Date of Publish</label>
                                                            <div class="col-md-7 p-0">
                                                                <input type="date" class="form-control input-full" name="data_announce" id="data_announce">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Closed Date</label>
                                                            <div class="col-md-7 p-0">
                                                                <input type="date" class="form-control input-full" name="closed_date" id="closed_date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Tender Notice</label>
                                                            <div class="col-md-7 p-0">
                                                                <input type="file" class="form-control input-full" name="tender_upload" id="tender_upload" accept="application/pdf,application/vnd.ms-excel">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-inline">
                                                            <label for="inlineinput" class="col-md-5 col-form-label">Tender Status</label>
                                                            <div class="col-md-7 p-0">
                                                                <select class="form-control input-full" name="tender_status" id="tender_status">
                                                                    <option value="Active">Active</option>
                                                                    <option value="Closed" selected>Closed</option>
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
                                <a href="archived_tenders.php" class="btn btn-secondary float-right mb-3"><i class="fa fa-archive"></i>&nbsp;Closed Tenders</a>
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
                                                        <th>Date Of Announcement</th>
                                                        <th>Closed Date</th>
                                                        <th>Tender Notice</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                    <?php 
                                                    function formatSizeUnits($bytes)
                                                    {
                                                        if ($bytes >= 1073741824) {
                                                            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                                        } elseif ($bytes >= 1048576) {
                                                            $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                                        } elseif ($bytes >= 1024) {
                                                            $bytes = number_format($bytes / 1024, 2) . ' KB';
                                                        } elseif ($bytes > 1) {
                                                            $bytes = $bytes . ' bytes';
                                                        } elseif ($bytes == 1) {
                                                            $bytes = $bytes . ' byte';
                                                        } else {
                                                            $bytes = '0 bytes';
                                                        }

                                                        return $bytes;
                                                    }



                                                    $sql = "SELECT * FROM tenders"; 
                                                    $res = pg_query($db, $sql);
                                                    $result = pg_fetch_all($res);
                                                    $i=1;
                                                    foreach ($result as $value) {
                                                    if ($value['date_of_closed'] >= $date = date('Y-m-d')) { ?>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $i;?></td>
                                                        <td class="sorting_1"><?php echo $value['tender_title'];?></td>
                                                        <td class="sorting_1"><?php echo $t = date("d-m-Y", strtotime($value['date_of_announce']));?></td>
                                                        <td class="sorting_1"><?php echo $t = date("d-m-Y", strtotime($value['date_of_closed']));?></td>
                                                        <td class="sorting_1"><a href="uploads/tenders/<?php echo $value['tenders_notice'];?>" target="_blank"><img class="ficon" src="assets/img/pdf.png" alt="">view
                                                         (<?php echo $file_size = formatSizeUnits($value['file_size']);?>)</a></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editRowModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement">
                                                                    <i class="fa fa-edit get_what"
                                                                        data-tender_id="<?php echo $value['tender_id'];?>"
                                                                        data-tender_title="<?php echo $value['tender_title'];?>"
                                                                        data-advertise_no="<?php echo $value['advertise_no'];?>"
                                                                        data-date_of_announce="<?php echo $value['date_of_announce'];?>"
                                                                        data-date_of_closed="<?php echo $value['date_of_closed'];?>"
                                                                        data-tenders_notice="<?php echo $value['tenders_notice'];?>"
                                                                        data-tender_status="<?php echo $value['tender_status'];?>"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php  }
                                                    $i++; }  

                                                    ?>
                                                </tbody>
                                                <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
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
                                                                                <div class="col-md-7 p-0">
                                                                                    <input type="text" class="form-control input-full" name="tender_title" id="Tender_title">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group form-inline">
                                                                                <label for="inlineinput" class="col-md-5 col-form-label">Advt.No</label>
                                                                                <div class="col-md-7 p-0">
                                                                                    <input type="text" class="form-control input-full" name="advt_no" id="Advt_no">
                                                                                    <input type="hidden" class="form-control input-full" name="tender_id" id="tender_id">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group form-inline">
                                                                                <label for="inlineinput" class="col-md-5 col-form-label">Date of Announcement</label>
                                                                                <div class="col-md-7 p-0">
                                                                                    <input type="date" class="form-control input-full" name="data_announce" id="Data_announce">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group form-inline">
                                                                                <label for="inlineinput" class="col-md-5 col-form-label">Closed Date</label>
                                                                                <div class="col-md-7 p-0">
                                                                                    <input type="date" class="form-control input-full" name="closed_date" id="Cosed_Date">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group form-inline">
                                                                                <label for="inlineinput" class="col-md-5 col-form-label">Upload Advt.Notification</label>
                                                                                <div class="col-md-7 p-0">
                                                                                    <input type="file" class="form-control input-full" name="what_file" id="What_file" accept="application/pdf,application/vnd.ms-excel">
                                                                                    <label for="inlineinput" class="col-form-label" id="upload_document"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group form-inline">
                                                                                <label for="inlineinput" class="col-md-5 col-form-label">Tender Status</label>
                                                                                <div class="col-md-7 p-0">
                                                                                    <select class="form-control input-full" name="tender_status" id="Tender_status">
                                                                                        <option value="Active">Active</option>
                                                                                        <option value="Closed" selected>Closed</option>
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
<?php include('inc/footer.php'); }else{
     header("Location:index.php");
}?>
<script type="application/javascript">
$(document).ready(function () {
    $("#add_tenders").validate({
        rules: {
            tender_title: {
            required: true,
          },
          advt_no: {
            required: true,
          },
          // data_announce: {
          //   required: true,
          // },
          closed_date: {
            required: true,
          },
          tender_upload: {
            required: true,
          },
        },
        messages: {},
        submitHandler: function (form, e) {
          e.preventDefault();
          var data = new FormData($("#add_tenders")[0]);
    
          swal({
          title: "Are you sure?",
          text: "You want to Add Tenders!",
          icon: "warning",
          buttons: ["Cancel!", "Yes"],
          dangerMode: true,
        }).then(function (isConfirm) {
          if (isConfirm) {
            $.ajax({
              method: "POST",
              url: "addTendersAjax.php",
              data: data,
              contentType: false,
              processData: false,
              success: function (response) {
                if (response == 1) {
                  swal({
                    title: "Temder Added!",
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
    $("#tender_id").val(tender_id);
    $("#Tender_title").val(tender_title);
    $("#Advt_no").val(advertise_no);
    $("#Data_announce").val(date_of_announce);
    console.log(date_of_announce);
    console.log(date_of_closed);
    $("#Cosed_Date").val(date_of_closed);
    $("#upload_document").text(tenders_notice);
    $("#Tender_status").val(tender_status);
    });


    $("#edit_recruitment").validate({
        rules: {
            tender_title: {
            required: true,
          },
          advt_no: {
            required: true,
          },
          // data_announce: {
          //   required: true,
          // },
          closed_date: {
            required: true,
          },
          // tender_upload: {
          //   required: true,
          // },
        },
        messages: {},
        submitHandler: function (form, e) {
          e.preventDefault();
          var data = new FormData($("#edit_recruitment")[0]);
    
          swal({
          title: "Are you sure?",
          text: "You want to Update Tenders!",
          icon: "warning",
          buttons: ["Cancel!", "Yes"],
          dangerMode: true,
        }).then(function (isConfirm) {
          if (isConfirm) {
            $.ajax({
              method: "POST",
              url: "addTendersAjax.php",
              data: data,
              contentType: false,
              processData: false,
              success: function (response) {
                if (response == 1) {
                  swal({
                    title: "Temder Updated!",
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
     }
    });

});
</script>