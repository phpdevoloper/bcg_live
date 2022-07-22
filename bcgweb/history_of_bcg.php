<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<!-- Home -->
<!-- <div class="banner">
    <img src="images/about.jpg" alt="" />
</div> -->
<!-- product description -->
<div class="about">
    <section>
        <ul class="breadcrumb wizard">
            <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="completed"><a href="javascript:void(0);">About us</a></li>
            <li class=""><a href="history_of_bcg.php">History of BCG</a></li>
        </ul>
    </section>
    <div class="container">
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;">History of BCGVL</h3>
    </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <img src="images/about/house2.jpg" class="history" alt="">
                <?php $sql = "select * from about_us where content_id = 'HIS'"; 
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_all($res);
                        foreach($result as $value){
                ?>
                    <?php echo $value['content_description'];?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>