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
            <li class="completed"><a rel='noopener noreferrer' href=""><i class="fa fa-home"></i></a></li>
            <li class="completed"><a rel='noopener noreferrer' href="javascript:void(0);">RTI</a></li>
            <li class=""><a rel='noopener noreferrer' href="contact.php">RTI Proactive Disclosure</a></li>
        </ul>
    </section>
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;background: #eef0f2;">RTI Proactive Disclosure</h3>
    </div>

    <section>
        <div class="container">
            <div id="accordion">
                <?php $sql = "SELECT * FROM mst_rti ORDER BY rti_id"; 
                        $exe = pg_query($db,$sql);
                        $row = pg_fetch_all($exe);
                        $i = 1;
                        foreach ($row as $value) {
                ?>
                <div class="card" style="border-color: green; margin-bottom: 30px;">
                    <div class="card-header" id="heading-<?php echo $i;?>">
                    <h5 class="mb-0">
                        <a role="button" data-toggle="collapse" rel='noopener noreferrer' href="#collapse-<?php echo $i;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>">
                        <?php echo $value['rti_name'];?>
                        </a>
                    </h5>
                    </div>
                    <div id="collapse-<?php echo $i;?>" class="collapse" data-parent="#accordion" aria-labelledby="heading-<?php echo $i;?>">
                        <div class="card-body">
                            <div id="accordion-<?php echo $i;?>">
                                <?php $sql = "SELECT * FROM mst_sub_rti WHERE mst_rti_id = '".$value['rti_id']."'"; 
                                    $exe = pg_query($db,$sql);
                                    $row = pg_fetch_all($exe);
                                    $b = 1;
                                    foreach ($row as $value) {
                                ?>
                                    <div class="card-header" id="heading-<?php echo $i;?>-<?php echo $b;?>">
                                        <?php if ($value['mst_rti_id'] == '3') { ?>
                                            <h5 class="exe">
                                                <a rel='noopener noreferrer' href="<?php echo $value['rti_upload'];?>">
                                                <?php echo $value['sub_rti_name'];?>
                                                </a>
                                            </h5>
                                        <?php } else { 
                                            if($value['file_type'] == 'pdf'){
                                            ?>
                                                <h5 class="ex">
                                                    <a rel='noopener noreferrer' href="uploads/RTI/<?php echo $value['rti_upload'];?>" target="_blank">
                                                    <?php echo $value['sub_rti_name'];?>
                                                    </a>
                                                </h5>
                                            <?php  }else if($value['file_type'] == 'Url'){?>
                                                <h5 class="exe">
                                                    <a rel='noopener noreferrer' href="<?php echo $value['rti_upload'];?>" target="_blank">
                                                    <?php echo $value['sub_rti_name'];?>
                                                    </a>
                                                </h5>
                                            <?php }else{?>
                                                <h5 class="mb-0">
                                                    <a class="collapsed" role="button" data-toggle="collapse" rel='noopener noreferrer' href="#collapse-<?php echo $i;?>-<?php echo $b;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>-<?php echo $b;?>">
                                                    <?php echo $value['sub_rti_name'];?>
                                                    </a>
                                                </h5>
                                            <?php } ?>
                                    <?php } ?>
                                    </div>
                                    <div id="collapse-<?php echo $i;?>-<?php echo $b;?>" class="collapse" data-parent="#accordion-<?php echo $b;?>" aria-labelledby="heading-<?php echo $i;?>-<?php echo $b;?>">
                                        <div class="card-body">
                                            <div id="accordion-<?php echo $i;?>-<?php echo $b;?>">
                                                <?php $sql = "SELECT * FROM mst_subs_rti WHERE mst_sub_id = '".$value['sub_rti_id']."' order by subs_rti_id asc"; 
                                                $exe = pg_query($db,$sql);
                                                $row = pg_fetch_all($exe);
                                                $c = 1;
                                                foreach ($row as $value) {
                                                ?>
                                                <div class="card-header" id="heading-<?php echo $i;?>-<?php echo $b;?>-<?php echo $c;?>">
                                                    <?php if($value['file_type'] == 'pdf'){ ?>
                                                        <h5 class="ex">
                                                           <a rel='noopener noreferrer' href="uploads/RTI/<?php echo $value['rti_upload'];?>" target="_blank"><?php echo $value['subs_rti_name'];?></a>
                                                        </h5>
                                                           <?php }else{ ?>
                                                        <h5 class="exe">
                                                            <a rel='noopener noreferrer' href="<?php echo $value['rti_upload'];?>" target="_blank"><?php echo $value['subs_rti_name'];?></a>
                                                        </h5>
                                                       <?php } ?>
                                                </div>
                                                <?php $c++; } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php $b++; } ?>
                            </div>      
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
        </div>
    </section>
</div>
    
<?php include('inc/simple_footer.php'); ?>