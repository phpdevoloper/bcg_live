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
                                            <a href="whats_new.php" class="sub_bread">Who's Who</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="former_directors.php">Former Directors of BCGVL</a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#addStaffModal">
                                    <i class="fa fa-plus"></i>
                                    Add New 
                                </button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="addStaffModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header no-bd">
                                        <h5 class="modal-title">
                                            <span class="fw-mediumbold">
                                             Add New</span>
                                            <span class="fw-light">
                                             Director
                                            </span>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="addformer">
                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-sm-4 col-form-label">Director Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="former_dir" id="former_dir">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-sm-4 col-form-label">From</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="service_from" id="service_from">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-sm-4 col-form-label">To</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="service_to" id="service_to">
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
                        <div class="card-body">
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
                                                        <th>Name</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $sql = "SELECT * FROM former_directors"; 
                                                        $res = pg_query($db, $sql);
                                                        $result = pg_fetch_all($res);
                                                        foreach ($result as $dir) {
                                                    ?>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $dir['director_id'];?></td>
                                                        <td class="sorting_1"><?php echo $dir['director_name'];?></td>
                                                        <td class="sorting_1"><?php echo $dir['year_from'];?></td>
                                                        <td class="sorting_1"><?php echo $dir['year_to'];?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editformerModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement">
                                                                    <i class="fa fa-edit get_former"
                                                                        data-dir_id="<?php echo $dir['director_id'];?>"
                                                                        data-dir_name="<?php echo $dir['director_name'];?>"
                                                                        data-service_from ="<?php echo $dir['year_from'];?>"
                                                                        data-service_to ="<?php echo $dir['year_to'];?>"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                    <div class="modal fade" id="editformerModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header no-bd">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                            Staff</span>
                                                                        <span class="fw-light">
                                                                            Detail Edit
                                                                        </span>
                                                                    </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="editformer">
                                                                        <div class="form-group row">
                                                                            <label for="qualifi" class="col-sm-4 col-form-label">Director Name</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" name="former_dir" id="Former_dir">
                                                                                <input type="hidden" class="form-control" name="director_id" id="Director_id">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputPassword" class="col-sm-4 col-form-label">From</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" name="service_from" id="Service_fro">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputPassword" class="col-sm-4 col-form-label">To</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" name="service_to" id="Service_to">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer" style="justify-content: center !important;">
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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