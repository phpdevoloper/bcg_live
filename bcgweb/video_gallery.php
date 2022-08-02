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
            <li class=""><a href="contact.php">video Gallery</a></li>
        </ul>
    </section>
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;background: #eef0f2;">video Gallery</h3>
    </div>

    <section>
        <div class="container">
            <div class="gallery-image">
                <?php 
                    $sql = "select video_category.* from video_category 
                    join video_gallery on video_gallery.category = video_category.cate_id 
                    where  video_gallery.photo_file !='' group by video_category.cate_id order by video_category.cate_id";
                    $exe = pg_query($db,$sql);
                    $result = pg_fetch_all($exe);
                    foreach($result as $value1){
                ?>
                <a href="view_video_gallery.php?cate_id=<?php echo $value1['cate_id'];?>&category=<?php echo $value1['category_title'];?>">
                    <div class="img-box">
                        <?php 
                            $sql = "select * from video_gallery where category = '".$value1['cate_id']."' order by photo_id";
                            $exe = pg_query($db,$sql);
                            $result = pg_fetch_all($exe);
                            foreach($result as $value){
                                if ($value['photo_file']) {
                        ?>
                            <img src="images/promotional.webp" alt="" />
                            <p><?php echo $value1['category_title'];?></p>
                            <?php  } ?>
                            <?php 
                        } ?>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
    </section>
</div>
<?php include('inc/simple_footer.php'); ?>
    