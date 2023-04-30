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
                            <div class="edit_btn">
                                <a href="activities_of_bcg.php" class="btn btn-primary">Edit</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <!-- <h4 class="card-title">Basic Details</h4> -->
                                <div class="page-header">
                                    <ul class="breadcrumbs">
                                        <li class="nav-item">
                                            <a href="#" class="sub_bread">About Us</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="viewACT.php">Activities</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php $sql = "SELECT * FROM about_us WHERE content_id ='ACT'"; 
                                $res = pg_query($db,$sql);
                                $result = pg_fetch_assoc($res);
                            ?>
                            <div style="color: black;">
                                <p> <?php echo $result['content_description'];?></p>
                            </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }else {
    header("Location:index.php");
} ?>