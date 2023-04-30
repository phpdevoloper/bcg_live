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
                                            <a href="#">BCGVL Contacts</a>
                                        </li>
                                    </ul>
                                </div>
                                <a  class="btn btn-primary btn-round ml-auto"
                                    data-toggle="modal"
                                    data-target="#addContact" title=""
                                    class="btn btn-link btn-primary btn-lg"
                                    data-original-title="Edit Achivement" 
                                    ><i class="fa fa-plus"></i>&nbsp;&nbsp;
                                    Add Contact
                                </a>
                            </div>
                            <div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Add</span>
                                                <span class="fw-light">
                                                    Contact
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="bcgvl_contacts">
                                                <div class="alert alert-danger display-error" style="display:none;">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="qualifi">Email<span style="color:#ff0000">*</span></label>
                                                            <input type="text" class="form-control" name="user_email" id="user_email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="qualifi">phone<span style="color:#ff0000">*</span></label>
                                                            <input type="tel" class="form-control" name="user_phone" id="user_phone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="qualifi">Address<span style="color:#ff0000">*</span></label>
                                                            <textarea class="form-control" name="office_addres" id="office_addres" cols="30" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="qualifi">Map embedded<span style="color:#ff0000">*</span></label>
                                                            <textarea class="form-control" name="map_emb" id="map_emb" cols="30" rows="3"></textarea>
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
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sql = "SELECT * FROM bcgvl_contacts"; 
                                        $res = pg_query($db, $sql);
                                        $result = pg_fetch_all($res);
                                        $i=1;
                                        foreach ($result as $value) {
                                    ?>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1"><?php echo $i;?></td>
                                        <td class="sorting_1"><?php echo $value['con_email'];?></td>
                                        <td class="sorting_1"><?php echo $value['con_phone'];?></td>
                                        <td class="sorting_1"><?php echo $value['con_address'];?></td>
                                        <td>
                                            <button type="button" data-toggle="modal"
                                                data-target="#editRTIContact" title=""
                                                class="btn-primary"
                                                data-original-title="Edit Achivement">
                                                <i class="fa fa-edit get_bcgvl_contact"
                                                    data-contact_id ="<?php echo $value['contact_id'];?>"
                                                    data-contact_email ="<?php echo $value['con_email'];?>"
                                                    data-contact_phone ="<?php echo $value['con_phone'];?>"
                                                    data-con_address ="<?php echo $value['con_address'];?>"
                                                    data-map_embeded ="<?php echo $value['map_embed'];?>"
                                                ></i>
                                            </button>
                                            <button type="button" data-toggle="modal"
                                                class="btn-danger">
                                                <i class="fa fa-trash del_bcgvl_contact"
                                                    data-contact_id ="<?php echo $value['contact_id'];?>"
                                                ></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php $i++; } ?>
                                </tbody>
                                <div class="modal fade" id="editRTIContact" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header no-bd">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                        Edit Bcgvl Contacts</span>
                                                    
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="edit_bcgvl_contact">
                                                <div class="alert alert-danger display-error" style="display:none;">
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="qualifi">Email</label>
                                                                <input type="text" class="form-control" name="user_email" id="User_email">
                                                                <input type="hidden" class="form-control" name="user_id" id="User_id">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="qualifi">Phone</label>
                                                                <input type="tel" class="form-control" name="user_phone" id="User_phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="qualifi">Address</label>
                                                                <textarea class="form-control" name="office_addres" id="Office_addres" cols="30" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="qualifi">Map embedded</label>
                                                                <textarea class="form-control" name="map_emb" id="Map_emb" cols="30" rows="3"></textarea>
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
<?php include('inc/footer.php'); 
}else{
    header("Location:index.php");
}?>
