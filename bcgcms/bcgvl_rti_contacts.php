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
                                            <a href="#">BCGVL RTI Contacts</a>
                                        </li>
                                    </ul>
                                </div>
                                <a  class="btn btn-primary btn-round ml-auto"
                                    data-toggle="modal"
                                    data-target="#addRTIContact" title=""
                                    class="btn btn-link btn-primary btn-lg"
                                    data-original-title="Edit Achivement" 
                                    ><i class="fa fa-plus"></i>&nbsp;&nbsp;
                                Add Contact</a>
                            </div>
                            <div class="modal fade" id="addRTIContact" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Add RTI</span>
                                                <span class="fw-light">
                                                    Contact
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="bcgvl_rti_contacts" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Contact Title</label>
                                                            <input type="text" class="form-control" name="con_title" id="con_title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Organization Email</label>
                                                            <input type="text" class="form-control" name="org_email" id="org_email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Name</label>
                                                            <input type="text" class="form-control" name="con_name" id="con_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">phone</label>
                                                            <input type="text" class="form-control" name="user_phone" id="user_phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Designation</label>
                                                            <input type="text" class="form-control" name="designation" id="designation">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">office phone</label>
                                                            <input type="text" class="form-control" name="office_phone" id="office_phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Email</label>
                                                            <input type="text" class="form-control" name="user_email" id="user_email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Address</label>
                                                            <textarea class="form-control" name="office_addres" id="office_addres" cols="30" rows="3"></textarea>
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
                        <div class="card-body">
                            <table id="add-row"
                                class="display table table-striped table-hover dataTable" role="grid"
                                aria-describedby="add-row_info">
                                <thead>
                                    <tr role="row">
                                        <th>S.No</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sql = "SELECT * FROM rti_contacts"; 
                                            $res = pg_query($db, $sql);
                                            $result = pg_fetch_all($res);
                                            $i=1;
                                            foreach ($result as $value) {
                                    ?>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1"><?php echo $i;?></td>
                                        <td class="sorting_1"><?php echo $value['contact_title'];?></td>
                                        <td class="sorting_1"><?php echo $value['user_name'];?></td>
                                        <td class="sorting_1"><?php echo $value['designation'];?></td>
                                        <td>
                                            <div class="form-button-action">
                                                <button type="button" data-toggle="modal"
                                                    data-target="#editRTIContact" title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    data-original-title="Edit Achivement">
                                                    <i class="fa fa-edit"
                                                        data-contact_id ="<?php echo $value['contact_id'];?>"
                                                        data-contact_title ="<?php echo $value['contact_title'];?>"
                                                        data-contact_name ="<?php echo $value['user_name'];?>"
                                                        data-designation ="<?php echo $value['designation'];?>"
                                                    ></i>
                                                </button>
                                            </div>
                                            <div class="modal fade" id="editRTIContact" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header no-bd">
                                                            <h5 class="modal-title">
                                                                <span class="fw-mediumbold">
                                                                    Edit RTI</span>
                                                                <span class="fw-light">
                                                                    Contact
                                                                </span>
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="edit_whats_new">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="qualifi">Title</label>
                                                                            <input type="text" class="form-control" name="whats_title" id="What_new_title">
                                                                            <input type="hidden" class="form-control" name="whats_id" id="Whats_id">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="qualifi">Description</label>
                                                                            <textarea class="form-control" name="description" id="Whats_desc" cols="30" rows="3"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="qualifi">Upload Document</label>&nbsp;<label for="" style="color:red !important;">(*PDF only allowed)</label>
                                                                            <input type="file" class="form-control" name="what_file" id="   " accept="application/pdf,application/vnd.ms-excel">
                                                                            <label id="file_lable" style="color:green !important;"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
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
<?php include('inc/footer.php');}else{
    header("Location:index.php");
} ?>
