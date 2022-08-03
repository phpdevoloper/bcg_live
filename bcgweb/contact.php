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
            <li class="completed"><a href="javascript:void(0);">Contact us</a></li>
            <li class=""><a href="contact.php">BCGVL Contacts</a></li>
        </ul>
    </section>
    <div class="contact">
        <div class="container">
            <div class="row" style="padding-top: 32px;">
                <?php $sql = "SELECT * FROM bcgvl_contacts"; 
                    $res = pg_query($db, $sql);
                    $result = pg_fetch_all($res);
                    $i=1;
                    foreach ($result as $value) {
                ?>
            <div class="col-lg-6">
                <div class="section_title"><h2>Contact Us</h2></div>
                <div class="contact_text">
                <p>
                </div>
                <ul class="contact_about_list">
                    <li>
                        <div class="contact_about_icon">
                        <img src="images/phone-call.svg" alt="" />
                        </div>
                        <span><?php echo $value['con_phone'];?></span>
                    </li>
                    <li>
                        <div class="contact_about_icon">
                        <img src="images/envelope.svg" alt="" />
                        </div>
                        <span
                        ><a
                            href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                            class="__cf_email__"
                            data-cfemail="e08f8686898385a094858d908c819485ce838f8d"
                            ><?php echo $value['con_email'];?></a
                        ></span
                        >
                    </li>
                    <li>
                        <div class="contact_about_icon">
                        <img src="images/placeholder.svg" alt="" />
                        </div>
                        <span><?php echo $value['con_address'];?></p></span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div style="width: 100%;">
                <iframe src="<?php echo $value['map_embed'];?>"
                    width="100%" height="300" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>   
<?php include('inc/simple_footer.php'); ?>