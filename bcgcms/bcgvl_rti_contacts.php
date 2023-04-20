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
                                                            <label for="qualifi">Contact Title<span style="color:#ff0000">*</span></label>
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
                                                            <label for="qualifi">Name<span style="color:#ff0000">*</span></label>
                                                            <input type="text" class="form-control" name="con_name" id="con_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">phone<span style="color:#ff0000">*</span></label>
                                                            <input type="text" class="form-control" name="user_phone" id="user_phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Designation<span style="color:#ff0000">*</span></label>
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
                                                            <label for="qualifi">Email<span style="color:#ff0000">*</span></label>
                                                            <input type="text" class="form-control" name="user_email" id="user_email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Address<span style="color:#ff0000">*</span></label>
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
                                    <?php $sql = "SELECT * FROM rti_contacts order by contact_id"; 
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
                                                <button data-toggle="modal"
                                                    data-target="#editRTIContact" title=""
                                                    class="btn-primary"
                                                    data-original-title="Edit Achivement">
                                                    <i class="fa fa-edit get_rti_contacts"
                                                        data-contact_id        ="<?php echo $value['contact_id'];?>"
                                                        data-contact_title     ="<?php echo $value['contact_title'];?>"
                                                        data-contact_name      ="<?php echo $value['user_name'];?>"
                                                        data-designation       ="<?php echo $value['designation'];?>"
                                                        data-contact_address   ="<?php echo $value['contact_address'];?>"
                                                        data-user_phone        ="<?php echo $value['user_phone'];?>"
                                                        data-office_phone      ="<?php echo $value['office_phone'];?>"
                                                        data-organization_email   ="<?php echo $value['organization_email'];?>"
                                                        data-user_email        ="<?php echo $value['user_email'];?>"
                                                    ></i>
                                                </button>
                                            </div>
                                            <div class="form-button-action">
                                                <button class="btn-danger"
                                                    data-original-title="Edit Achivement">
                                                    <i class="fa fa-trash del_contacts"
                                                        data-contact_id        ="<?php echo $value['contact_id'];?>"
                                                    ></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; } ?>
                                </tbody>
                                <div class="modal fade" id="editRTIContact" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
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
                                                <form id="edit_rti_contacts" method="post" enctype="multipart/form-data">
                                                    <div class="alert alert-danger display-error" style="display:none;">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="qualifi">Contact Title<span style="color:#ff0000">*</span></label>
                                                                <input type="text" class="form-control" name="con_title" id="Con_title">
                                                                <input type="hidden" class="form-control" name="con_id" id="Con_id">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="qualifi">Organization Email</label>
                                                                <input type="text" class="form-control" name="org_email" id="Org_email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="qualifi">Name<span style="color:#ff0000">*</span></label>
                                                                <input type="text" class="form-control" name="con_name" id="Con_name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="qualifi">phone<span style="color:#ff0000">*</span></label>
                                                                <input type="text" class="form-control" name="user_phone" id="User_phone">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="qualifi">Designation<span style="color:#ff0000">*</span></label>
                                                                <input type="text" class="form-control" name="designation" id="Designation">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="qualifi">office phone</label>
                                                                <input type="text" class="form-control" name="office_phone" id="Office_phone">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="qualifi">Email<span style="color:#ff0000">*</span></label>
                                                                <input type="text" class="form-control" name="user_email" id="User_email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="qualifi">Address<span style="color:#ff0000">*</span></label>
                                                                <textarea class="form-control" name="office_addres" id="Office_addres" cols="30" rows="3"></textarea>
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
} ?>
<script>
$(document).ready(function () {
    $(document).on("click", ".get_rti_contacts", function (e) {
        var contact_id = $(this).attr("data-contact_id");
        var contact_title = $(this).attr("data-contact_title");
        var contact_name = $(this).attr("data-contact_name");
        var designation = $(this).attr("data-designation");
        var contact_address = $(this).attr("data-contact_address");
        var user_phone = $(this).attr("data-user_phone");
        var office_phone = $(this).attr("data-office_phone");
        var organization_email = $(this).attr("data-organization_email");
        var user_email = $(this).attr("data-user_email");

        console.log(office_phone);
        // console.log(comp_ip);

        $("#Con_id").val(contact_id);
        $("#Con_title").val(contact_title);
        $("#Con_name").val(contact_name);
        $("#Designation").val(designation);
        $("#Office_addres").text(contact_address);
        $("#User_phone").val(user_phone);
        $("#Office_phone").val(office_phone);
        $("#Org_email").val(organization_email);
        $("#User_email").val(user_email);
    });

});
</script>