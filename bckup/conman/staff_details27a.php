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
                                            <a href="whats_new.php">Staff Details</a>
                                        </li>
                                    </ul>
                                </div>
                                    <button class="btn btn-primary btn-round ml-auto btd" data-toggle="modal"
                                        data-target="#addStaffModal">
                                        <i class="fa fa-plus"></i>
                                        Add staff Designation
                                    </button>
                                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                        data-target="#addStaffModal">
                                        <i class="fa fa-plus"></i>
                                        Add New Staff
                                    </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- designation modal -->
                            <div class="modal fade" id="addStaffModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Add Staff</span>
                                                <span class="fw-light">
                                                    Details
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_staff">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Staff Name</label>
                                                            <input type="text" class="form-control" name="staff_name" id="staff_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Staff Designation</label>
                                                            <select name="deg_code" id="deg_code" class="form-control">
                                                                <option value="">Please select your designation</option>
                                                                <?php $sql = "SELECT * FROM bcgvl_staff_designation ORDER BY deg_id";
                                                                    $res = pg_query($db, $sql);
                                                                    $result = pg_fetch_all($res);
                                                                    foreach ($result as $value) { 
                                                                        ?>
                                                                        <option value="<?php echo $value['deg_code'];?>"><?php echo $value['deg_name'];?></option>
                                                                    <?php }
                                                                    ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Staff Group</label>
                                                            <select name="group_cate" id="group_cate" class="form-control">
                                                                <option value="">Please select your group</option>
                                                                <?php $sql = "SELECT * FROM bcgvl_staff_groups ORDER BY cate_id";
                                                                    $res = pg_query($db, $sql);
                                                                    $result = pg_fetch_all($res);
                                                                    foreach ($result as $value) { 
                                                                        ?>
                                                                        <option value="<?php echo $value['cate_code'];?>"><?php echo $value['cate_name'];?></option>
                                                                    <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Status</label>
                                                            <select name="staff_status" id="staff_status" class="form-control">
                                                                <option value="INS">In-service</option>
                                                                <option value="RET">Retaired</option>
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
                            <div class="modal fade" id="addStaffModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                 Add Staff</span>
                                                <span class="fw-light">
                                                    Details
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_staff">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Staff Name</label>
                                                            <input type="text" class="form-control" name="staff_name" id="staff_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Staff Designation</label>
                                                            <select name="deg_code" id="deg_code" class="form-control">
                                                                <option value="">Please select your designation</option>
                                                                <?php $sql = "SELECT * FROM bcgvl_staff_designation ORDER BY deg_id";
                                                                  $res = pg_query($db, $sql);
                                                                  $result = pg_fetch_all($res);
                                                                  foreach ($result as $value) { 
                                                                     ?>
                                                                      <option value="<?php echo $value['deg_code'];?>"><?php echo $value['deg_name'];?></option>
                                                                  <?php }
                                                                  ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Staff Group</label>
                                                            <select name="group_cate" id="group_cate" class="form-control">
                                                                <option value="">Please select your group</option>
                                                                <?php $sql = "SELECT * FROM bcgvl_staff_groups ORDER BY cate_id";
                                                                  $res = pg_query($db, $sql);
                                                                  $result = pg_fetch_all($res);
                                                                  foreach ($result as $value) { 
                                                                     ?>
                                                                      <option value="<?php echo $value['cate_code'];?>"><?php echo $value['cate_name'];?></option>
                                                                  <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Status</label>
                                                            <select name="staff_status" id="staff_status" class="form-control">
                                                                <option value="INS">In-service</option>
                                                                <option value="RET">Retaired</option>
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
                                                        <th>Staff Name</th>
                                                        <th>Designation</th>
                                                        <th>Group</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $sql = "SELECT DISTINCT bs.*,bsd.deg_name,bsg.cate_name
FROM bcgvl_staff_details bs JOIN bcgvl_staff_designation bsd ON bs.deg_code = bsd.deg_code 
left outer JOIN bcgvl_staff_groups bsg ON bs.cate_code = bsg.cate_code ORDER BY bs.staff_id ASC"; 
                                                          $res = pg_query($db, $sql);
                                                          $result = pg_fetch_all($res);
                                                          foreach ($result as $value) {
                                                    ?>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $value['staff_id'];?></td>
                                                        <td class="sorting_1"><?php echo $value['staff_name'];?></td>
                                                        <td class="sorting_1"><?php echo $value['deg_name'];?></td>
                                                        <td class="sorting_1"><?php echo $value['cate_name'];?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editStaffModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement">
                                                                    <i class="fa fa-edit get_staff"
                                                                        data-staff_id="<?php echo $value['staff_id'];?>"
                                                                        data-staff_name="<?php echo $value['staff_name'];?>"
                                                                        data-deg_name="<?php echo $value['deg_code'];?>"
                                                                        data-cate_name="<?php echo $value['cate_code'];?>"
                                                                        data-status="<?php echo $value['status'];?>"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <div class="modal fade" id="editStaffModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
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
                                                                <form id="editStaffDet">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="qualifi">Staff Name</label>
                                                                                <input type="text" class="form-control" name="staff_name" id="Staff_name">
                                                                                <input type="hidden" class="form-control" name="staff_id" id="Staff_id">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="qualifi">Designation</label>
                                                                                <select name="deg_code" id="Deg_code" class="form-control">
                                                                                <option value="">Please select your designation</option>
                                                                                <?php $sql = "SELECT * FROM bcgvl_staff_designation ORDER BY deg_id";
                                                                                $res = pg_query($db, $sql);
                                                                                $result = pg_fetch_all($res);
                                                                                foreach ($result as $value) { 
                                                                                    ?>
                                                                                    <option value="<?php echo $value['deg_code'];?>"><?php echo $value['deg_name'];?></option>
                                                                                <?php }
                                                                                ?>
                                                                            </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="qualifi">Staff Group</label>
                                                                                <select name="group_cate" id="Group_cate" class="form-control">
                                                                                    <option value="">Please select your group</option>
                                                                                    <?php $sql = "SELECT * FROM bcgvl_staff_groups ORDER BY cate_id";
                                                                                    $res = pg_query($db, $sql);
                                                                                    $result = pg_fetch_all($res);
                                                                                    foreach ($result as $value) { ?>
                                                                                    <option value="<?php echo $value['cate_code'];?>"><?php echo $value['cate_name'];?></option>
                                                                                    <?php }?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="qualifi">Status</label>
                                                                                <select name="staff_status" id="Staff_status" class="form-control">
                                                                                    <option value="INS">In-service</option>
                                                                                    <option value="RET">Retaired</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label id="What_file_view"></label>
                                                                            </div>
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
    }
?>