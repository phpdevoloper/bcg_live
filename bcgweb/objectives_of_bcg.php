<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<!-- Home -->
<div class="about">
    <section>
        <ul class="breadcrumb wizard">
            <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="completed"><a href="javascript:void(0);">About us</a></li>
            <li class=""><a href="objectives_of_bcg.php">Objectives of BCGVL</a></li>
        </ul>
    </section>
    <div class="container">
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;">Objectives of BCGVL</h3>
    </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <?php $sql = "select * from about_us where content_id = 'OBJ'"; 
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