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
                                                            <label for="qualifi">Upload Document
                                                            <span style="color:#ff0000">*</span>
                                                            </label>&nbsp;<label for="" style="color:red !important;">(PDF only allowed)</label>
                                                            <input type="file" class="form-control" name="report_file" id="Report_file" accept="application/pdf,application/vnd.ms-excel">
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
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $sql = "SELECT * FROM documents_bcg where doc_cate = 'ANNUAL' order by doc_id"; 
                                                          $res = pg_query($db, $sql);
                                                          $result = pg_fetch_all($res);
                                                          foreach ($result as $value) {
                                                    ?>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $value['doc_id'];?></td>
                                                        <td class="sorting_1"><?php echo $value['doc_title'];?></td>
                                                        <td class="sorting_1"><a href="uploads/Documents/<?php echo $value['doc_attachment'];?>" target="_blank"><img class="ficon" src="assets/img/pdf.png" alt="">view</a></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editRowModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement">
                                                                    <i class="fa fa-edit get_report"
                                                                    data-report_id      = "<?php echo $value['doc_id'];?>"
                                                                    data-report_title   = "<?php echo $value['doc_title'];?>"
                                                                    data-report_desc   = "<?php echo $value['doc_description'];?>"
                                                                    data-file_attach  = "<?php echo $value['doc_attachment'];?>"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
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
<?php include('inc/footer.php'); }else{
    header("Location:index.php");
    }?>