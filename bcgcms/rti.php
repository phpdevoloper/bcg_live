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
                                            <a href="#">RTI</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <a href="event_category.php" class="btn btn-primary btn-round ml-auto"><i class="fa fa-plus"></i>&nbsp;&nbsp;
                                Category</a> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <!-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#addRowModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add photos</button> -->
                            </div>
                            <div>
                                <div id="accordion">
                                    <?php $sql = "SELECT * FROM mst_rti"; 
                                          $exe = pg_query($db,$sql);
                                          $row = pg_fetch_all($exe);
                                          $i = 1;
                                          foreach ($row as $value) {
                                    ?>
                                    <div class="card" style="border-color: green;">
                                        <div class="card-header" id="heading-<?php echo $i;?>">
                                        <h5 class="mb-0">
                                            <a role="button" data-toggle="collapse" href="#collapse-<?php echo $i;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>">
                                            <?php echo $value['rti_name'];?>
                                            </a>
                                        </h5>
                                        </div>
                                        <div id="collapse-<?php echo $i;?>" class="collapse" data-parent="#accordion" aria-labelledby="heading-<?php echo $i;?>">
                                            <div class="card-body">
                                                <div id="accordion-<?php echo $i;?>">
                                                    <?php $sql = "SELECT * FROM mst_sub_rti WHERE mst_rti_id = '".$value['rti_id']."'"; 
                                                        $exe = pg_query($db,$sql);
                                                        $row = pg_fetch_all($exe);
                                                        $b = 1;
                                                        foreach ($row as $value) {
                                                    ?>
                                                        <div class="card-header" id="heading-<?php echo $i;?>-<?php echo $b;?>">
                                                        <h5 class="mb-0">
                                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-<?php echo $i;?>-<?php echo $b;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>-<?php echo $b;?>">
                                                            <?php echo $value['sub_rti_name'];?>
                                                            </a>
                                                        </h5>
                                                        </div>
                                                        <div id="collapse-<?php echo $i;?>-<?php echo $b;?>" class="collapse" data-parent="#accordion-<?php echo $b;?>" aria-labelledby="heading-<?php echo $i;?>-<?php echo $b;?>">
                                                            <div class="card-body">
                                                                <div id="accordion-<?php echo $i;?>-<?php echo $b;?>">
                                                                    <?php $sql = "SELECT * FROM mst_subs_rti WHERE mst_sub_id = '".$value['sub_rti_id']."'"; 
                                                                    $exe = pg_query($db,$sql);
                                                                    $row = pg_fetch_all($exe);
                                                                    $c = 1;
                                                                    foreach ($row as $value) {
                                                                    ?>
                                                                    <div class="card-header" id="heading-<?php echo $i;?>-<?php echo $b;?>-<?php echo $c;?>">
                                                                        <h5 class="mb-0">
                                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-1-<?php echo $c;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>-<?php echo $b;?>-<?php echo $c;?>">
                                                                            <?php echo $value['subs_rti_name'];?>
                                                                        </a>
                                                                        </h5>
                                                                    </div>
                                                                    <?php $c++; } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php $b++; } ?>
                                                </div>      
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++; } ?>
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
