<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<!-- Home -->
<div class="banner">
    <img src="images/about.jpg" alt="" />
</div>
<!-- product description -->
<div class="about">
    <section>
        <ul class="breadcrumb wizard">
            <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="completed"><a href="javascript:void(0);">Who's who</a></li>
            <li class=""><a href="director_desk.php">Organisation chart</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <?php $sql = "select * from production"; 
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_assoc($res);
                ?>
                <div class="section">
                    <h3 class="text-center txt" style="color: #299adc;">ORGANISATION CHART</h3>
                </div>
                <section id="about" class="about">
                    <div class="org_img">
                        <img src="<?php echo $result['production_pic'];?>" alt="">
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>