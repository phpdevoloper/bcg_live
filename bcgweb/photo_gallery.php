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
            <li class=""><a href="contact.php">Photo Gallery</a></li>
        </ul>
    </section>
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;background: #eef0f2;">Photo Gallery</h3>
    </div>

    <section>
        <div class="container">
            <div class="row">
            <?php 
                $sql = "select * from photo_category order by cate_id";
                $exe = pg_query($db,$sql);
                $result = pg_fetch_all($exe);
                foreach($result as $value1){
            ?>
                <div class="col-4">
                    <div class="gallery-image">
                        <a href="view_photo_gallery.php?cate_id=<?php echo $value1['cate_id'];?>&category=<?php echo $value1['category_title'];?>">
                            <div class="img-box">
                                <?php 
                                    $sql = "select * from photo_gallery where category = '".$value1['cate_id']."' order by photo_id";
                                    $exe = pg_query($db,$sql);
                                    $result = pg_fetch_all($exe);
                                    foreach($result as $value){?>
                                    <img src="uploads/gallery/photo/<?php echo $value['photo_file']; ?>" alt="" />
                                        <!-- <img src="images/no_image.webp" alt="" /> -->
                                    <?php } ?>
                                    <div class="transparent-box">
                                        <div class="caption">
                                            <p><?php echo $value1['category_title'];?></p>
                                        </div>
                                    </div> 
                                </div>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>
<?php include('inc/simple_footer.php'); ?>
    