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
                                                <div class="row">
                                                    <label class="col-sm-6">Event Attachment</label>
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-3">File</label>
                                                        <input type="checkbox" class="col-sm-3" id="file_check" name="upload_c[]" value="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-6"></label>
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-3">Url</label>
                                                        <input type="checkbox" class="col-sm-3" id="url_check" name="upload_c[]" value="">
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
                                                        <th>Event Title</th>
                                                        <!-- <th>Event Description</th> -->
                                                        <th>Date From</th>
                                                        <th>Date To</th>
                                                        <th>File/Url</th>
                                                        <th>Upload Type</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $sql = "SELECT * FROM events order by event_id"; 
                                                          $res = pg_query($db, $sql);
                                                          $result = pg_fetch_all($res);
                                                          foreach ($result as $value) {
                                                    ?>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $value['event_id'];?></td>
                                                        <td class="sorting_1"><?php echo $value['event_title'];?></td>
                                                        <!-- <td class="sorting_1"><?php //echo $value['event_desc'];?></td> -->
                                                        <td class="sorting_1"><?php echo $value['date_from'];?></td>
                                                        <td class="sorting_1"><?php echo $value['date_to'];?></td>
                                                        <td class="sorting_1"><?php echo $value['event_file'];?></td>
                                                        <td class="sorting_1"><?php echo $value['uploads_type'];?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editStaffModal" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Event">
                                                                    <i class="fa fa-edit get_event"
                                                                        data-event_id="<?php echo $value['event_id'];?>"
                                                                        data-event_name="<?php echo $value['event_title'];?>"
                                                                        data-event_des="<?php echo $value['event_desc'];?>"
                                                                        data-date_from="<?php echo $value['date_from'];?>"
                                                                        data-date_to="<?php echo $value['date_to'];?>"
                                                                        data-event_file="<?php echo $value['event_file'];?>"
                                                                        data-event_file_type="<?php echo $value['uploads_type'];?>"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal fade" id="editStaffModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header no-bd">
                                                                            <h5 class="modal-title">
                                                                                <span class="fw-mediumbold">
                                                                                Edit</span>
                                                                                <span class="fw-light">
                                                                                    Event
                                                                                </span>
                                                                            </h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form id="edit_event">
                                                                                <div class="form-group row">
                                                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Event Title</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" name="event_title" id="Event_title">
                                                                                        <input type="hidden" class="form-control" name="event_id" id="Event_id">
                                                                                        <input type="hidden" class="form-control" name="event_type" id="Event_type">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                                                                                    <div class="col-sm-10">
                                                                                        <textarea class="form-control" name="event_desc" id="Event_desc" cols="20" rows="3"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Start Date</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="date" class="form-control" name="date_from" id="Date_from">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputPassword" class="col-sm-2 col-form-label">End Date</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="date" class="form-control" name="date_to" id="Date_to">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <label class="col-sm-6">Event Attachment</label>
                                                                                    <div class="col-sm-6">
                                                                                        <label class="col-sm-3">File</label>
                                                                                        <input type="checkbox" class="col-sm-3" id="File_chec" name="upload_c[]" value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <label class="col-sm-6"></label>
                                                                                    <div class="col-sm-6">
                                                                                        <label class="col-sm-3">Url</label>
                                                                                        <input type="checkbox" class="col-sm-3" id="Url_chec" name="upload_c[]" value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-2"></div>
                                                                                    <div class="col-sm-10">
                                                                                    <input type="file" class="form-control upload_event" name="event_file" id="Event_file">
                                                                                    <label for="" id="file_data" style="visibility: hidden;"></label>
                                                                                    <input type="text" class="form-control event_url" name="event_url" id="Event_url">
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