 <?php 
 session_start();
include('inc/header.php'); 
include('inc/dbconnection.php');
include('inc/checkval.php');

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
        <h3 class="text-center txt" style="color: #299adc;background: #eef0f2;">
        <?php 
        $cate_id = check_numeric($_SESSION['cate_id']); 
        $sql = "SELECT * FROM photo_category WHERE cate_id='$cate_id' ORDER BY cate_id ASC";
        $exe = pg_query($db,$sql);
        $re = pg_fetch_assoc($exe);
        echo ($re['category_title']);
        if ($cate_id == 2) { ?>
             <ul>
                 <li><i class="fa fa-exclamation-circle"></i>Invalid Category ID</li>
             </ul>
        <?php } ?>
        </h3>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <?php 
                    $sql = "select * from photo_gallery where category='$cate_id' order by photo_id";
                    $exe = pg_query($db,$sql);
                    $result = pg_fetch_all($exe);
                    foreach($result as $value){
                ?>
                <div class="col-4">
                    <div class="gallery-image btn-gallery">
                        <div class="img-box">
                            <img src="uploads/gallery/photo/<?php echo $value['photo_file']; ?>" alt="" />
                            <div class="transparent-box">
                                <div class="caption">
                                    <p><?php echo $value['photo_caption'];?></p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
</div>
<?php include('inc/simple_footer.php'); ?>
<script type="application/javascript">
    $(document).ready(function() {
    
    $('.btn-gallery').on('click', function(event) {
        event.preventDefault();
        
        var gallery = $(this).attr('href');
    
        $(gallery).magnificPopup({
      delegate: 'a',
            type:'image',
            gallery: {
                enabled: true
            }
        }).magnificPopup('open');
    });
    
    });
</script>
    