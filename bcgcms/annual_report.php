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
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Add</span>
                                                <span class="fw-light">
                                                    New Report
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">??</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_whats">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Title</label>
                                                            <input type="text" class="form-control" name="whats_title" id="Whats_title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Description</label>
                                                            <textarea class="form-control" name="description" id="Description" cols="30" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Upload Document</label>&nbsp;<label for="" style="color:red !important;">(*PDF only allowed)</label>
                                                            <input type="file" class="form-control" name="what_file" id="What_file" accept="application/pdf,application/vnd.ms-excel">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
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
                                                    <?php $sql = "SELECT * FROM documents_bcg"; 
                                                          $res = pg_query($db, $sql);
                                                          $result = pg_fetch_all($res);
                                                          foreach ($result as $value) {
                                                    ?>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $value['doc_id'];?></td>
                                                        <td class="sorting_1"><?php echo $value['doc_title'];?></td>
                                                        <td class="sorting_1"><a href="uploads/document/<?php echo $value['doc_attachment'];?>" target="_blank"><img class="ficon" src="assets/img/pdf.png" alt="">view</a></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editRowModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement">
                                                                    <i class="fa fa-edit get_what"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
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
                                                                                <span aria-hidden="true">??</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form id="edit_whats_new">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="qualifi">Title</label>
                                                                                            <input type="text" class="form-control" name="whats_title" id="What_new_title">
                                                                                            <input type="hidden" class="form-control" name="whats_id" id="Whats_id">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="qualifi">Description</label>
                                                                                            <textarea class="form-control" name="description" id="Whats_desc" cols="30" rows="3"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="qualifi">Upload Document</label>&nbsp;<label for="" style="color:red !important;">(*PDF only allowed)</label>
                                                                                            <input type="file" class="form-control" name="what_file" id="   " accept="application/pdf,application/vnd.ms-excel">
                                                                                            <label id="file_lable" style="color:green !important;"></label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
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
                                                    <?php } ?>
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
<?php include('inc/footer.php');?>