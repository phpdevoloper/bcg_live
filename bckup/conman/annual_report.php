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
                                            <a href="whats_new.php">Annual Report</a>
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
                                                    Add</span>
                                                <span class="fw-light">
                                                    Annual Report
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_annual_report">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="qualifi">Title
                                                            <span style="color:#ff0000">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" name="report_title" id="Report_title">
                                                            <input type="hidden" class="form-control" name="report_cate" id="Report_cate" value="ANNUAL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="qualifi">Description
                                                            <span style="color:#ff0000">*</span>
                                                            </label>
                                                            <textarea class="form-control" name="r_description" id="R_Description" cols="30" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="qualifi">Year of Report
                                                            <span style="color:#ff0000">*</span>
                                                            </label>
                                                            <select class="form-control" name="year_of_report" id="year_of_report">
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
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="qualifi">Upload Document
                                                            <span style="color:#ff0000">*</span>
                                                            </label>&nbsp;<label for="" style="color:red !important;">(PDF only allowed)</label>
                                                            <input type="file" class="form-control" name="report_file" id="Report_file" accept="application/pdf">
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
                                <a href="archived_reports.php" class="btn btn-secondary float-right mb-3"><i class="fa fa-archive"></i>&nbsp;Archived</a>
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
                                                        <th>Year</th>
                                                        <th>Document</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $sql = "SELECT * FROM documents_bcg where doc_cate = 'ANNUAL' and report_status = 'L' order by doc_id"; 
                                                          $res = pg_query($db, $sql);
                                                          $result = pg_fetch_all($res);
                                                          $i = 1;
                                                          foreach ($result as $value) {
                                                    ?>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $i;?></td>
                                                        <td class="sorting_1"><?php echo $value['doc_title'];?></td>
                                                        <td class="sorting_1"><?php echo $value['year_of_report'];?></td>
                                                        <td class="sorting_1"><a href="uploads/Documents/<?php echo $value['doc_attachment'];?>" target="_blank"><img class="ficon" src="assets/img/pdf.png" alt="">view
                                                        (<?php echo $file_size = round($value['file_size'] / 1024, 2).'KB';?>)</a></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editRowModal" title=""
                                                                    class="btn-primary get_report"
                                                                    data-original-title="Edit Achivement"
                                                                    data-report_id      = "<?php echo $value['doc_id'];?>"
                                                                    data-report_title   = "<?php echo $value['doc_title'];?>"
                                                                    data-year_of_report   = "<?php echo $value['year_of_report'];?>"
                                                                    data-report_desc   = "<?php echo $value['doc_description'];?>"
                                                                    data-file_attach  = "<?php echo $value['doc_attachment'];?>">
                                                                    <i class="fa fa-edit"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                            <!-- <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    class="btn-danger delete_rep"
                                                                    data-report_id      = "<?php echo $value['doc_id'];?>"
                                                                    data-action         = "deleteAnnualReport">
                                                                    <i class="fa fa-trash"
                                                                    ></i>
                                                                </button>
                                                            </div> -->
                                                        </td>
                                                    </tr>
                                                    <?php $i++; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header no-bd">
                                                        <h5 class="modal-title">
                                                            <span class="fw-mediumbold">
                                                                Edit</span>
                                                            <span class="fw-light">
                                                                Annual Report
                                                            </span>
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="edit_annual_report">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="qualifi">Title
                                                                        <span style="color:#ff0000">*</span>
                                                                        </label>
                                                                        <input type="text" class="form-control" name="report_title" id="Report_titl">
                                                                        <input type="hidden" class="form-control" name="report_id" id="Report_id" value="ANNUAL">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="qualifi">Description
                                                                        <span style="color:#ff0000">*</span>
                                                                        </label>
                                                                        <textarea class="form-control" name="r_description" id="R_Desc" cols="30" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="qualifi">Year of Report
                                                                        <span style="color:#ff0000">*</span>
                                                                        </label>
                                                                        <select class="form-control" name="year_of_report" id="Year_of_report">
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
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="qualifi">Upload Document
                                                                        <span style="color:#ff0000">*</span>
                                                                        </label>&nbsp;<label for="" style="color:red !important;">(PDF only allowed)</label>
                                                                        <input type="file" class="form-control" name="report_file" id="Report_file" accept="application/pdf,application/vnd.ms-excel">
                                                                        <label id="Report_attach" style="color:green !important"></lable>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer" style="justify-content: center !important;">
                                                                <button type="submit" id="addRowButton"
                                                                    class="btn btn-primary">Submit</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Close</button>
                                                                    <a href="javascript:void(0);" 
                                                                                    class="annual_delete" style="color:red;">Delete ?</a>
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
<?php include('inc/footer.php'); ?>
<script type="application/javascript">
    $(document).ready(function(){
        $("#add_annual_report").validate({
            rules: {
            report_title: {
                required: true,
            },
            r_description: {
                required: true,
            },
            report_file: {
                required: true,
            },
            },
            submitHandler: function (form, e) {
                e.preventDefault();
          var data = new FormData($("#add_annual_report")[0]);
            swal({
                title: "Are you sure?",
                text: "You wants to add new Report!",
                icon: "warning",
                buttons: ["No, cancel it!", "Yes, I am sure!"],
                dangerMode: true,
            }).then(function (isConfirm) {
                if (isConfirm) {
                $.ajax({
                    method: "POST",
                    url: "AnnualreportAjax.php",
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                    if (response == 1) {
                        swal({
                        title: "Added!",
                        text: "New Report added and uploaded successfully!",
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
            },
        });

        //Edit Annual Report Ajax
        $("#edit_annual_report").submit(function (e) {
            e.preventDefault();
            var data = new FormData(this);
            swal({
            title: "Are you sure?",
            text: "You wants to Update!",
            icon: "warning",
            buttons: ["No, cancel it!", "Yes, I am sure!"],
            dangerMode: true,
            }).then(function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                method: "POST",
                url: "AnnualreportAjax.php",
                data: data,
                contentType: false,
                processData: false,
                success: function (response) {
                    var res = $.parseJSON(response);
                    console.log(res);
                    if (
                        typeof res.extension != "undefined" &&
                        res.extension !== null
                    ) {
                        swal({
                            title: "Warning!",
                            text: res.extension,
                            icon: "warning",
                        });
                    }
                    //  else if (res.size != "") {
                    // swal({
                    //     title: "Warning!",
                    //     text: res.size,
                    //     icon: "warning",
                    // });
                    // }
                     else if (response == 1) {
                    swal({
                        title: "Updated!",
                        text: "Report updated successfully!",
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
        // Edit Annual Report
        $(".get_report").on("click", function () {
            var report_id = $(this).attr("data-report_id");
            var report_title = $(this).attr("data-report_title");
            var year_of_report = $(this).attr("data-year_of_report");
            var report_desc = $(this).attr("data-report_desc");
            var report_attach = $(this).attr("data-file_attach");

            $("#Report_id").val(report_id);
            $(".annual_delete").attr("data-annual_id",report_id);
            $("#Report_titl").val(report_title);
            $("#Year_of_report").val(year_of_report);
            $("#R_Desc").text(report_desc);
            $("#Report_attach").text(report_attach);
        });

        $(".annual_delete").on('click', function(){
        var annual_id = $(this).attr("data-annual_id");
        var action = "AnnualDelete";
        swal({
          title: "Are you sure?",
          text: "You want to delete this annual report!",
          icon: "warning",
          buttons: ["Cancel!", "Yes"],
          dangerMode: true,
        }).then(function (isConfirm) {
          if (isConfirm) {
            $.ajax({
              method: "POST",
              url: "AnnualreportAjax.php",
              dataType:'json',
              data: {
                    a_id : annual_id,
                    action   : action
              },
              // contentType: false,
              // processData: false,
              success: function (response) {
                if (response == 1) {
                  swal({
                    title: "Annual Report deleted successfully!",
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
<?php }else{
    header("Location:index.php");
    } ?>