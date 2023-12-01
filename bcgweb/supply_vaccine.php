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
            <li class="completed"><a href="javascript:void(0);">Who's who</a></li>
            <li class=""><a href="director_desk.php">Supply of BCG Vaccine</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <?php $sql = "select * from vaccine_supply"; 
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_assoc($res);
                ?>
                <div class="section">
                    <h3 class="text-center txt" style="color: #299adc;">Supply of BCG Vaccine</h3>
                </div>
                <section id="about">
                    <div class="text-center" style="margin-left: 140px;">
                    <?php echo $result['vs_details'];?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>