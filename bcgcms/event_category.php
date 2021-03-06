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
                                            <a href="whats_new.php">Event Category</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="event_gallery.php" class="btn btn-primary btn-round" style="color: white;margin-left: 712px !important;">Back</a>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#addRowModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;
                                Add</button>
                                <!-- Modal -->
                                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header no-bd">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                        Add New Category
                                                    </span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="add_event_category">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group form-inline">
                                                                <label for="inlineinput" class="col-md-3 col-form-label">Category Title*</label>
                                                                <div class="col-md-9 p-0">
                                                                    <input type="text" class="form-control input-full" name="category_title" id="Category_title">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group form-inline">
                                                                <label for="inlineinput" class="col-md-3 col-form-label">From date</label>
                                                                <div class="col-md-9 p-0">
                                                                    <input type="date" class="form-control input-full" name="from_date" id="From_date" cols="30" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group form-inline">
                                                                <label for="inlineinput" class="col-md-3 col-form-label">To date</label>
                                                                <div class="col-md-9 p-0">
                                                                    <input type="date" class="form-control input-full" name="to_date" id="To_date" cols="30" rows="3"></textarea>
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
                                <!-- End modal -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <table id="add-row">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Category</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $sql = "SELECT * FROM event_category ORDER BY cate_id";
                                        $exe = pg_query($db,$sql);
                                        $result = pg_fetch_all($exe);
                                        $i = 1;
                                        foreach($result as $value){ ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $value['category_title'];?></td>
                                                <td><?php echo $value['from_date'];?></td>
                                                <td><?php echo $value['to_date'];?></td>
                                                <td><?php echo date("d/m/Y h:i:s",strtotime($value['created_at']));?></td>
                                                <td>
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#editRowModal" title=""
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Achivement">
                                                        <i class="fa fa-edit get_what"
                                                            data-cate_id="<?php echo $value['cate_id'];?>"
                                                            data-cate_title="<?php echo $value['category_title'];?>"
                                                            data-cate_from="<?php echo $value['from_date'];?>"
                                                            data-cate_to="<?php echo $value['to_date'];?>"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php $i++;}
                                        ?>
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
<?php include('inc/footer.php');?>
