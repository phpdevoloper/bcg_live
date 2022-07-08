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
                                            <a href="whats_new.php">Recruitment</a>
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
                                                          foreach ($result as $value) {
                                                    ?>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $i;?></td>
                                                        <td class="sorting_1"><?php //echo //$value['whats_title'];?></td>
                                                        <td class="sorting_1"><a href="uploads/whatsNew/<?php //echo $value['whats_file'];?>" target="_blank"><img class="ficon" src="assets/img/pdf.png" alt="">view</a></td>
                                                        <td class="sorting_1"><?php //echo $value['created_date'];?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editRowModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement">
                                                                    <i class="fa fa-edit get_what"
                                                                        data-whats_id="<?php //echo $value['whats_id'];?>"
                                                                        data-whats_title="<?php// echo $value['whats_title'];?>"
                                                                        data-whats_desc="<?php// echo $value['whats_desc'];?>"
                                                                        data-what_file="<?php //echo $value['whats_file'];?>"
                                                                    ></i>
                                                                </button>
                                                            </div>
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
<?php include('inc/footer.php');?>