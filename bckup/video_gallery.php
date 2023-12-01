 <?php 
 session_start();
 include('inc/header.php'); 
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
            <li class=""><a href="video_gallery.php">Video Gallery</a></li>
        </ul>
    </section>
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;background: #eef0f2;">Video Gallery</h3>
    </div>

    <section>
        <div class="container">
            <div class="gallery-image">
                <?php 
                    $sql = "select * from video_category order by cate_id";
                    $exe = pg_query($db,$sql);
                    $result = pg_fetch_all($exe);
                    foreach($result as $value1){
                ?>
                <a class="get_cate" data-cate_id="<?php echo $value1['cate_id'];?>">
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
<script type="text/javascript">
    $(document).ready(function(){
        $(".get_cate").on('click',function(e){
            e.preventDefault();
            var cate_id = $(this).attr("data-cate_id");
            // console.log(cate_id);
            $.ajax({
                type: "POST",
                url: "galleryAjax.php",
                data : {  cate_id :  cate_id},
                success: function(response){
                    window.location.href = "view_video_gallery.php"
                }
            });
        });
    });
</script>