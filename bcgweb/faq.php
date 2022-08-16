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
            <li class="completed"><a href="javascript:void(0);">FAQ</a></li>
            <!-- <li class=""><a href="contact.php">RTI Proactive Disclosure</a></li> -->
        </ul>
    </section>
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;background: #eef0f2;">FAQ</h3>
    </div>

    <section>
        <div class="container">
            <div id="accordion">
            <?php $sql = "SELECT * FROM faq ORDER BY faq_id ASC"; 
            $exe = pg_query($db,$sql);
            $row = pg_fetch_all($exe);
            $i = 1;
            foreach ($row as $value) {
                // var_dump($value);
            ?>
                <div class="card" style="border-color: green; margin-bottom: 30px;">
                    <div class="card-header" id="heading-<?php echo $value["faq_title"];?>">
                        <h5 class="mb-0">
                            <a role="button" data-toggle="collapse" href="#collapse-<?php echo $i;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>">
                            <?php echo $value["faq_title"];?>
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-<?php echo $i;?>" class="collapse" data-parent="#accordion" aria-labelledby="heading-<?php echo $i;?>">
                        <div class="card-body">
                            <?php echo $value["faq_desc"];?>
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
        </div>
    </section>
</div>
    
<?php include('inc/simple_footer.php'); ?>