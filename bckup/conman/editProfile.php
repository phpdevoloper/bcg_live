<?php 
    session_start();
    if(isset($_SESSION['user'])){
	include('inc/dbconnection.php');
	include('inc/header.php');
?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
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
                    <form id="editprofile">
                        <div class="row text-center">
                            <?php $sql = "select * from director_desk"; 
                                    $res = pg_query($db,$sql);
                                    $result = pg_fetch_assoc($res);
                                    ?>
                            <div class="col-lg-4">
                                <div class="held">
                                    <h5><?php echo $result['director_position'] ; ?></h5>
                                    <img src="<?php echo $result['director_photo']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <table class="table">
                                    <tbody class="profile">
                                        <tr>
                                            <td>Short Profile</td>
                                            <td>
                                                <input type="hidden" id="Director_id" name="director_id" value="<?php echo $result['dir_desk_id']; ?>">
                                                <input type="file" class="custom_text" id="short_pro" name="short_pro"/>
                                                <label id="short" class="custom_lable"><?php echo $result['short_profile'];?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Detailed Profile</td>
                                            <td>
                                                <input type="file" class="custom_text" id="detail_pro" name="detail_pro">
                                                <label id="detail" class="custom_lable"><?php echo $result['detail_profile'];?></label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <input type="submit" class="btn btn-primary" value="Update">
                                    <a href="viewProfile.php" class="btn btn-danger">cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                <div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php');
}else {
    header("Location:index.php");
} ?>