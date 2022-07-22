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
                    <form action="#" id="contact_form" class="contact_form">
                        <div class="row">
                        <div class="col-md-6 input_col">
                            <div class="input_container input_name">
                            <input
                                type="text"
                                class="contact_input"
                                placeholder="Name"
                                required
                            />
                            </div>
                        </div>
                        <div class="col-md-6 input_col">
                            <div class="input_container">
                            <input
                                type="email"
                                class="contact_input"
                                placeholder="E-mail"
                                required
                            />
                            </div>
                        </div>
                        </div>
                        <div class="input_container">
                        <input
                            type="text"
                            class="contact_input"
                            placeholder="Subject"
                            required
                        />
                        </div>
                        <div class="input_container">
                        <textarea
                            class="contact_input contact_text_area"
                            placeholder="Message"
                            required
                        ></textarea>
                        </div>
                        <button class="button contact_button">
                        <a href="#">send</a>
                        </button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>