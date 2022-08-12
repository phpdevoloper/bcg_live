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
                                            <a href="#">FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#addRowModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;
                                Add New</a>
                            </div>
                        </div>
                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header no-bd">
                                        <h5 class="modal-title">
                                            <span class="fw-mediumbold">
                                                Add New</span>
                                            <span class="fw-light">
                                                FAQ
                                            </span>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="add_faq">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="qualifi">Title
                                                        <span style="color:#ff0000">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="faq_title" id="faq_title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="qualifi">Description
                                                        <span style="color:#ff0000">*</span>
                                                        </label>
                                                        <textarea class="form-control" name="faq_description" id="faq_description" cols="30" rows="15"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="qualifi">Status
                                                        <span style="color:#ff0000">*</span>
                                                        </label>
                                                        <select class="form-control" name="faq_status" id="faq_status">
                                                            <option value="">Please select the status</option>
                                                            <?php $sql = "SELECT * from faq_mst_status ORDER BY faq_status_id ASC";
                                                                  $exe = pg_query($db,$sql);
                                                                  $result = pg_fetch_all($exe);
                                                                  foreach ($result as $f_status) {
                                                            ?>
                                                            <option value="<?php echo $f_status['faq_status_id']; ?>"><?php echo $f_status['faq_status_title']; ?></option>
                                                            <?php } ?>
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
                        <div class="card-body">
                            <table id="add-row"
                                class="display table table-striped table-hover dataTable" role="grid"
                                aria-describedby="add-row_info">
                                <thead>
                                    <tr role="row">
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $sql ="SELECT faq.*, faq_mst_status.faq_status_title FROM faq JOIN faq_mst_status 
                                ON faq.faq_id = faq_mst_status.faq_status_id";
                                $res = pg_query($db, $sql);
                                $result = pg_fetch_all($res);
                                // echo $sql;exit;
                                        foreach ($result as $value) { 
                                         ?>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1"><?php echo $value['faq_title'];?></td>
                                        <td class="sorting_1"><?php echo $value['faq_status_title'];?></td>
                                        <td>
                                            <div class="form-button-action">
                                                <button type="button" data-toggle="modal"
                                                    data-target="#EditFaq" title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    data-original-title="Edit Achivement">
                                                    <i class="fa fa-edit get_faq"
                                                        data-faq_id      = "<?php echo $value['faq_id'];?>"
                                                        data-faq_title   = "<?php echo $value['faq_title'];?>"
                                                        data-faq_desc    = "<?php echo $value['faq_desc'];?>"
                                                        data-faq_status  = "<?php echo $value['faq_status'];?>"
                                                    ></i>
                                                </button>
                                                <button type="button" class="btn btn-link btn-primary btn-lg"
                                                    data-original-title="Edit Achivement">
                                                    <i class="fa fa-trash faq_del" style="color:red;"
                                                        data-faq_id      = "<?php echo $value['faq_id'];?>"
                                                    ></i>
                                                </button>
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
     <!-- Modal -->
     <div class="modal fade" id="EditFaq" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                            Edit</span>
                        <span class="fw-light">
                            FAQ
                        </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit_faq">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="qualifi">Title
                                    <span style="color:#ff0000">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="faq_title" id="Faq_title">
                                    <input type="hidden" class="form-control" name="faq_id" id="Faq_id">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="qualifi">Description
                                    <span style="color:#ff0000">*</span>
                                    </label>
                                    <textarea class="form-control" name="faq_description" id="Faq_description" cols="30" rows="15"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="qualifi">Status
                                    <span style="color:#ff0000">*</span>
                                    </label>
                                    <select class="form-control" name="faq_status" id="Faq_status">
                                        <option value="">Please select the status</option>
                                        <?php $sql = "SELECT * from faq_mst_status ORDER BY faq_status_id ASC";
                                                $exe = pg_query($db,$sql);
                                                $result = pg_fetch_all($exe);
                                                foreach ($result as $f_status) {
                                        ?>
                                        <option value="<?php echo $f_status['faq_status_id']; ?>"><?php echo $f_status['faq_status_title']; ?></option>
                                        <?php } ?>
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
</div>
<?php include('inc/footer.php');?>
