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
            <li class="completed"><a href="javascript:void(0);">Contact Us</a></li>
            <li class=""><a href="contact.php">RTI Contacts</a></li>
        </ul>
    </section>
    <div class="contact">
        <div class="container">
            <div class="section">
                <h3 class="text-center txt" style="color: #299adc;">RTI Contacts</h3>
            </div>
            <div class="row" style="padding-top: 32px;">
                <?php $sql = "select * from rti_contacts ORDER BY contact_id ASC"; 
                    $res = pg_query($db,$sql);
                    $result = pg_fetch_all($res);
                    foreach($result as $value){
                ?>
                <div class="col-lg-6 mb-5">
                    <div class="container">
                        <div class="section_title">
                            <h3><?php echo $value['contact_title'];?></h3>
                        </div>
                        <div class="contact_text">
                            <h5><?php echo $value['user_name'];?></h5>
                            <h5><?php echo $value['designation'];?></h5>
                        </div>
                        <ul class="contact_about_list">
                        <li>
                            <div class="contact_about_icon">
                            <img src="images/phone-call.svg" alt="" />
                            </div>
                            <span><?php echo $value['user_phone'];?></span>
                            <span><?php echo $value['office_phone'];?></span>
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
                                ><?php echo $value['user_email'];?><?php echo $value['organization_email'];?></a
                            ></span>
                        </li>
                        <li>
                            <div class="contact_about_icon">
                            <img src="images/placeholder.svg" alt="" />
                            </div>
                            <span>
                                <?php echo $value['contact_address'];?>
                            </span>
                        </li>
                        </ul>
                    </div>
                </div>
                <?php  } ?>
            </div>
            <div class="rti_complaint">
                <p>File your RTI complaints online&nbsp;</table><a href="#" id="online_complaint">Click here</a></p>
            </div>         
        </div>
    </div>   
</div>   
<?php include('inc/simple_footer.php'); ?>
<script>
     $(document).ready(function () {
        $("#online_complaint").on("click", function (event) {
            swal({
            title: "BCGVL",
            text: "You are being redirected to an external website. Please note that BCG Vaccine Laboratory cannot be held responsible for external websites content & privacy policies.",
            buttons: ["No, cancel it!", "Ok"],
            dangerMode: true,
          }).then(function (isConfirm) {
            if (isConfirm) {
                window.open("https://rtionline.gov.in/", "_blank");
            } else {
              swal("Cancelled", "Done :)", "error");
            }
          });
        });
     });
</script>