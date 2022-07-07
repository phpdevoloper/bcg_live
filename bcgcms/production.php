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
                                            <a href="#" class="sub_bread">Products</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="objectives_of_bcgvl.php">Production Process</a>
                                        </li>
                                    </ul>
                                </div>
                                <?php  $sql    ="SELECT * from production";
                                       $res    = pg_query($db, $sql);
                                       $result = pg_fetch_assoc($res);
                                ?>                            
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#addChartModal">
                                    <i class="fa fa-pen"
                                    ></i>
                                    Edit
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="addChartModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header no-bd">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                        Production</span>
                                                    <span class="fw-light">
                                                        Chart
                                                    </span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="add_prochart">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="qualifi">Upload Chart</label>&nbsp;<label for="" style="color:green !important;">(JPG,PNG,GIF only allowed*)</label>
                                                                <input type="hidden" class="form-control" name="pro_id" id="pro_id" accept="image/png, image/gif, image/jpeg"/>
                                                                <input type="file" class="form-control" name="pro_file" id="pro_file" accept="image/png, image/gif, image/jpeg"/>
                                                                <label id="What_file_view" style="color:green !important;"><?php echo $result['production_pic']; ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="or_chart">
                             <img class="org_img" src="<?php echo $result['production_pic']; ?>" alt="">
                             <!-- <img src="uploads/oganisation/chart1.png" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php');?>