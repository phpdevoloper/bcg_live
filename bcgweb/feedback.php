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
            <li class="completed"><a href="javascript:void(0);">About us</a></li>
            <li class=""><a href="objectives_of_bcg.php">feedback</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">Feedback</h3>
        </div>
        <div class="row text-center">
            <!-- About Content -->
            <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="contact_form_container">
                        <form id="contact_form" class="contact_form">
                            <div class="row">
                                <div class="col-md-6 input_col">
                                    <div class="input_container input_name">
                                    <input
                                        type="text"
                                        class="contact_input"
                                        name="user_name"
                                        placeholder="Name"
                                    />
                                    </div>
                                </div>
                                <div class="col-md-6 input_col">
                                    <div class="input_container">   
                                    <input
                                        type="email"
                                        class="contact_input"
                                        name="user_email"
                                        placeholder="E-mail"
                                    />
                                    </div>
                                </div>
                            </div>
                            <div class="input_container">
                                <input
                                    type="text"
                                    class="contact_input"
                                    name="user_sub"
                                    placeholder="Subject"
                                />
                            </div>
                            <div class="input_container">
                                <textarea
                                    class="contact_input contact_text_area"
                                    name="user_msg"
                                    placeholder="Message"
                                ></textarea>
                            </div>
                            <button type="submit" class="button contact_button sub"> send </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>