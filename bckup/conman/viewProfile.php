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
                            <a href="editProfile.php" class="btn btn-primary">Edit</a>
                        </div>
                            <div class="d-flex align-items-center">
                                <!-- <h4 class="card-title">Basic Details</h4> -->
                                <div class="page-header">
                                    <ul class="breadcrumbs">
                                        <li class="nav-item">
                                            <a href="#" class="sub_bread">Director Desk</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="viewProfile.php">Profile Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <?php $sql = "select * from director_desk"; 
                                      $res = pg_query($db,$sql);
                                      $result = pg_fetch_assoc($res);
                                    //   var_dump($result);
                                        ?>
                                    <div class="col-md-4">
                                        <div class="held">
                                            <h5><?php echo $result['director_position'] ?? ''; ?></h5>
                                            <img src="<?php echo $result['director_photo'] ?? ''; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="held">
                                            <h5>Short Profile</h5>
                                            <a href="<?php echo $result['short_profile'];?>" target = "_blank"><i class="fas fa-file-pdf" style="padding-right : 5px ;"></i>View</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="held">
                                            <h5>Detailed Profile</h5>
                                            <a href="<?php echo $result['detail_profile'];?>" target = "_blank"><i class="fas fa-file-pdf" style="padding-right : 5px ;"></i>View</a>
                                        </div>
                                    </div>
                            </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }else{
    header("Location:index.php");
} 
?>