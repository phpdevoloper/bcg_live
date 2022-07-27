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
            <li class="completed"><a href=""><i class="fa fa-home"></i></a></li>
            <li class="completed"><a href="javascript:void(0);">Gallery</a></li>
            <li class=""><a href="contact.php">Video Gallery</a></li>
        </ul>
    </section>
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;background: #eef0f2;"><?php echo $_GET['category'];?></h3>
    </div>

    <section>
        <div class="container">
            <div class="gallery-image">
                <?php 
                    $sql = "select * from video_gallery where category='".$_GET['cate_id']."' order by photo_id";
                    $exe = pg_query($db,$sql);
                    $result = pg_fetch_all($exe);
                    foreach($result as $value){
                ?>
                <div class="img-box">
                    <iframe height="250" width="350" src="<?php echo $value['photo_file']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>
<?php include('inc/simple_footer.php'); ?>
    