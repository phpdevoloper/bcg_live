<?php 
session_start([
    'use_only_cookies' => 1,
    'cookie_lifetime' => 0,
    'cookie_secure' => 1,
    'cookie_httponly' => 1
]);
include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<style type="text/css">
    .ref_btn{
        margin-top: 22px;
    }
    #captcha_code{
        width: 63%;
    }
    /* .btnRefresh{
        margin-top:10px;
    } */
.btnRefresh {
    width: 10%;
    height: 35px;
    padding: 9px;
    font-size: 18px;
    background: #15C39A;
    color: #fff;
    border: none;
    border-radius: 100px;
    cursor: pointer;
    margin-top: 10px;
    margin-left: 20px;
    transition: background 0.2s ease-out;
}
</style>
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
                        <div class="alert alert-danger display-error" style="display:none;"></div>
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
                            <div class="row">
                                <div class="col-md-6 input_col d-flex align-item-center">
                                    <img id="captcha_code" src="captcha.php">
                                    <i class="fa fa-redo btnRefresh"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 input_col">
                                    <div class="input_container">   
                                    <input
                                        type="text"
                                        class="contact_input"
                                        name="captcha_code"
                                        placeholder="Enter the Captch"
                                    />
                                    </div>
                                </div>
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
<script type="application/javascript">
   $(document).ready(function(){
        $(".btnRefresh").click(function () {
            $("#captcha_code").attr("src", "captcha.php");
            return false;
        });
        // Feedback ajax
        $("#contact_form").validate({
            rules: {
            user_name: {
                required: true,
            },
            user_email: {
                required: true,
                email: true,
            },
            user_sub: {
                required: true,
            },
            user_msg: {
                required: true,
            },
            captcha_code: {
                required: true,
            },
            },
            messages: {
                user_name: "Please enter your firstname",
                captcha_code:"Please enter captcha",
                // user_email: "Please enter your email",
            },
            submitHandler: function (form, e) {
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "You wants to submit your feedback!",
                icon: "warning",
                buttons: ["No, cancel it!", "Yes, I am sure!"],
                dangerMode: true,
            }).then(function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                    method: "POST",
                    url: "feedbackAjax.php",
                    data: new FormData($("#contact_form")[0]),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        var data = JSON.parse(response);

                        if (data.code == "200") {
                            swal({
                                title: data.msg,
                                icon: "success",
                            }).then(function () {
                                
                            });
                        } 
                        else if (data.code == "404") {
                            swal({
                                title: data.msg,
                                icon: "warning",
                            }).then(function () {
                                
                            });
                        } 
                        else if (data.code == "2") {
                            swal({
                                title: data.msg,
                                icon: "warning",
                            }).then(function () {
                                
                            });
                        }else {
                            $(".display-error").html("<ul>" + data.msg + "</ul>");
                            $(".display-error").css("display", "block");
                        }
                    
                    }
                });
                } else {
                swal("Cancelled", "Done :)", "error");
                }
            });
            },
        });
   });

</script>