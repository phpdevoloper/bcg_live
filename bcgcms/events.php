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
                                            <a href="whats_new.php" class="sub_bread">Events</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="whats_new.php">Event Details</a>
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
                        <div class="card-body">
                            <!-- Modal -->
                            <div class="modal fade" id="addStaffModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                 Add New</span>
                                                <span class="fw-light">
                                                    Event
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_new_event">
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Event Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="event_title" id="event_title">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="event_desc" id="event_desc" cols="20" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Start Date</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" name="date_from" id="date_from">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">End Date</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" name="date_to" id="date_to">
                                                    </div>
                                                </div>
                                                <div class="form-group row ">
                                                    <div class="col-sm-4">
                                                        <label for="inputPassword" class="col-form-label">Event Attachment</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">File</label>
                                                        <input class="form-check-input" type="checkbox" id="file_check" value="">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">URL</label>
                                                        <input class="form-check-input" type="checkbox" id="url_check" value="">
                                                    </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2"></div>
                                                        <div class="col-sm-10">
                                                        <input type="file" class="form-control upload_event" name="event_file" id="event_file">
                                                        <input type="text" class="form-control event_url" name="event_url" id="event_url">
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
                                                        <th>Event Title</th>
                                                        <th>Event Description</th>
                                                        <th>Date From</th>
                                                        <th>Date To</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $sql = "SELECT * FROM events"; 
                                                          $res = pg_query($db, $sql);
                                                          $result = pg_fetch_all($res);
                                                          foreach ($result as $value) {
                                                    ?>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $value['event_id'];?></td>
                                                        <td class="sorting_1"><?php echo $value['event_title'];?></td>
                                                        <td class="sorting_1"><?php echo $value['event_desc'];?></td>
                                                        <td class="sorting_1"><?php echo $value['date_from'];?></td>
                                                        <td class="sorting_1"><?php echo $value['date_to'];?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editStaffModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement">
                                                                    <i class="fa fa-edit get_staff"
                                                                        data-staff_id="<?php echo $value['event_id'];?>"
                                                                        data-staff_name="<?php echo $value['event_title'];?>"
                                                                        data-deg_name="<?php echo $value['event_desc'];?>"
                                                                        data-cate_name="<?php echo $value['date_from'];?>"
                                                                        data-status="<?php echo $value['date_to'];?>"
                                                                    ></i>
                                                                </button>
                                                            </div>
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
                                                                            <form id="edit_whats_new">
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