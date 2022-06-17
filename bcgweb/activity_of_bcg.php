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
            <li class="completed"><a href="javascript:void(0);">About us</a></li>
            <li class=""><a href="director_desk.php">Activites of BCG</a></li>
            <li class="text-center">Activites of BCG</li>
        </ul>
    </section>
    <div class="container">
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <?php $sql = "select * from about_us where content_id = 'ACT'"; 
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