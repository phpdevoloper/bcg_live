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
            <li class="completed"><a href="javascript:void(0);">Division</a></li>
            <li class=""><a href="contact.php">Quality Assurance</a></li>
        </ul>
    </section>
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;background: #eef0f2;">Quality Assurance</h3>
    </div>
    <div class="container aos-init aos-animate" data-aos="fade-up" style="padding-top: 38px;">
        <div class="container">
            <!-- About Content -->
            <section id="about">
                <div class="container aos-init aos-animate admin" data-aos="fade-up">
                        <?php $sql = "SELECT * FROM division WHERE div_name = 'QAS' ORDER BY div_id ASC "; 
                            $res = pg_query($db,$sql);
                            $result = pg_fetch_all($res);
                            foreach($result as $value){?>
                            <?php } ?>
                
                            <?php echo html_entity_decode($value['div_content']);?>
                </div>
            </section>
        </div>
    </div>
</div>
    
<?php include('inc/simple_footer.php'); ?>