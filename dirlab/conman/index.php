<?php  session_start();

include('inc/dbconnection.php');   

$data=[
  "user_name"=>"",
  "user_pass"=>"",
  "err_uname"=>"",
  "err_upass"=>"",
  "err_msg"=>"",
  ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="referrer" content="strict-origin-when-cross-origin" />
    <?php 

    // header ("Set-Cookie: bcgvladmin ; expires=Tue, 17-May-12 14:39:58 GMT;path=/; domain=10.163.77.75");


     
    // header('X-Content-Type-Options: nosniff');

    // header("X-XSS-Protection: 1; mode=block");

    // header('Strict-Transport-Security: max-age=7776000');

    // header("X-Frame-Options: SAMEORIGIN");
    
    // header("Cross-Origin-Embedder-Policy: require-corp");

    // header("Cross-Origin-Opener-Policy: same-origin");
	
    // header("Cross-Origin-Resource-Policy: same-origin");


    // header("Content-Security-Policy: default-src 'self';object-src 'none';frame-ancestors 'none';upgrade-insecure-requests;block-all-mixed-content");
    
    // header("Content-Security-Policy: frame-src 10.163.77.75");

    // header("Content-Security-Policy: manifest-src 10.163.77.75");

    // header("Content-Security-Policy: connect-src 10.163.77.75");

    // header("Content-Security-Policy: font-src 10.163.77.75");

    // header("Content-Security-Policy: img-src 10.163.77.75");

    // header("Content-Security-Policy: media-src 10.163.77.75");
    
    // header("Referrer-Policy: no-referrer");

// $allowed_host = ['http://10.163.77.75','http://10.26.36.222'];
// if(!isset($_SERVER['HTTP_REFERER'])){

// if (!isset($_SERVER['SERVER_NAME']) || !in_array($_SERVER['SERVER_NAME'], $allowed_host)) 
// {
//    header('location:index.php');
//     exit;
// }
// }
    ?>
  <title>Login</title>
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Lato:300,400,700,900"] },
        custom: {
          families: [
            "Flaticon",
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/all.min.css">
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <style>
    /* @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap'); */
    @import url('css/roboto');

body {
  font-family: 'Open Sans', sans-serif;
  background: #f9faff;
  color: #f6f9ff;
  line-height: 1.6;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 0;
  padding: 0;
  
}
.main_content{
  width:100%;
  height: 571px;
  background: url('images/sliders/Banner.png');
  background-size: cover;
}

h1 {
  margin-top: 48px;
}

form {
  background: #fff;
  max-width: 360px;
  width: 100%;
  padding: 30px 30px;
  /* border: 1px solid ##e1e2f0; */
  border-radius: 4px;
  box-shadow: 0 0 5px 0 rgb(42 45 48 / 12%);
  transition: all 0.3s ease;
  margin-top: 15px;
}

.row {
  display: flex;
  /* flex-direction: column; */
  /* margin-bottom: 20px; */
}

.row label {
  font-size: 16px;
  color: #242428;
}

.row input {
  flex: 1;
  /* padding: 13px; */
  border: 1px solid #d6d8e6;
  border-radius: 4px;
  font-size: 16px;
  transition: all 0.2s ease-out;
}

.row input:focus {
  outline: none;
  box-shadow: inset 2px 2px 5px 0 rgba(42, 45, 48, 0.12);
}

.row input::placeholder {
  color: #C8CDDF;
}

button {
  width: 100%;
  padding: 12px;
  font-size: 18px;
  background: #15C39A;
  color: #fff;
  border: none;
  border-radius: 100px;
  cursor: pointer;
  font-family: 'Open Sans', sans-serif;
  /* margin-top: 15px; */
  transition: background 0.2s ease-out;
}

.btnRefresh{
  width: 100%;
  padding: 4px;
  font-size: 18px;
  background: #15C39A;
  color: #fff;
  border: none;
  border-radius: 100px;
  cursor: pointer;
  transition: background 0.2s ease-out;
}


button:hover {
  background: #55D3AC;
}

header{
  width : 100%;
}

.top_bar {
  width: 100%;
  background: #299adc;
}
.top_bar ul li{
  list-style: none;
}
.top_bar ul li a{
  text-decoration:none;
  color: #ffffff;
}

.top_bar li.line {
    border-left: 2px solid #1c1b1b;
    height: 20px;
    padding-right: 6px;
    margin-left: 7px;
}

.clogo a{
  text-decoration:none;
  color: #283290; 
}

.bcg_t {
  display: flex;
}
.clogo ul li {
  list-style: none;
  display: flex;
}

.logo img {
  width: 80px;
  height: 90px;
}
.s_logo{
  float: right;  
  margin-top: -111px;
}
.bcg_title{
  padding-left: 15px;
}

.main_title {
    background: #299adc;
    text-align: center;
    color: #f9faff;
}
.ref_btn{
  margin-top: 8px;
}


@media(max-width: 458px) {
  
  body {
    margin: 0 18px;
  }
  
  form {
    background: #f9faff;
    border: none;
    box-shadow: none;
    padding: 20px 0;
  }

}
  </style>
</head>
<body>
<header>
  <div class="top_bar">
    <ul class="d-flex" style="margin-bottom:5px">
      <li>
      <a href="index.php">BCGVL</a>
      </li>
      <li class="line"></li>
      <li class="">
        <a href="#">Government of india</a>
      </li>
    </ul>
  </div>
  <div class="main_header">
    <div class="clogo">
      <a href="index.php">
        <ul class="bcg_t">
          <li>
            <div class="logo">
              <img src="images/logo/download.png" alt="">
            </div>
          </li>
          <li>
            <ul class="bcg_title">
              <li class="one"><h3>BCG Vaccine Laboratory, Chennai</h3></li>
              <li class="two">Directorate General of Health Services(DGHS),</li>
              <li class="three">Ministry of Health and Family Welfare, Govt. of India</li>
            </ul>
          </li>
        </ul>
      </a>
      <div class="s_logo">
        <img src="images/logo/logo.png" alt="" style="width:80px; height:80px;margin: 13px;">
      </div>
    </div>
  </div>
  <div class="main_title">
    <h2>Content Management System(CMS)</h2>
  </div>
</header>
<!-- <h3>Login</h3> -->
<div class="main_content">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <form id="admin_login">
          <div class="row">
            <label for="email" class="form-label">User Name
              <span style="color:#ff0000">*</span></label>
            <input type="text" class="form-control" name="user_name" autocomplete="off" placeholder="User Name" required>
            <p style='color:red;'><?php echo $data["err_uname"]; ?></p>
          </div>
          <div class="row">
            <label for="password" class="form-label">Password
            <span style="color:#ff0000">*</span>
            </label>
            <input type="password" class="form-control" name="user_pass" placeholder="Password" required>
            <p style='color:red;'><?php echo $data["err_upass"]; ?></p>
          </div>
          <div class="row">
            <div class="col"> 
              <img id="captcha_code" src="captcha.php" style="width: 100%;">
            </div>
            <div class="col">
              <div class="ref_btn">
                <i class="icon-refresh btnRefresh"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <label for="password" class="form-label">Please enter the verification code
            <span style="color:#ff0000">*</span>
            </label>
            <input type="text" class="form-control" name="captcha_code" required>
            <p style='color:red;'><?php echo $data["err_msg"]; ?></p>
          </div>
          <button type="submit">Login</button>
        </form>
  
      </div>
    </div>
  </div>
</div>
</body>
 <script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="vendor/jquery-validation-1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<!-- Datatables -->
    <script type="text/javascript" src="vendor/DataTables/datatables.min.js"></script>
<script src="assets/js/jquery.inputmask.bundle.min.js"></script>
<script src="assets/js/custom.js"></script>
</html>
