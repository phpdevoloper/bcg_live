<?php include('inc/dbconnection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap'); */
    @import url('css/roboto');

body {
  font-family: 'Open Sans', sans-serif;
  background: #f9faff;
  color: #3a3c47;
  line-height: 1.6;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 0;
  padding: 0;
}

h1 {
  margin-top: 48px;
}

form {
  background: #fff;
  max-width: 360px;
  width: 100%;
  padding: 58px 44px;
  border: 1px solid ##e1e2f0;
  border-radius: 4px;
  box-shadow: 0 0 5px 0 rgba(42, 45, 48, 0.12);
  transition: all 0.3s ease;
}

.row {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.row label {
  font-size: 13px;
  color: #8086a9;
}

.row input {
  flex: 1;
  padding: 13px;
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
  margin-top: 15px;
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
<h3>Login</h3>
  <form id="admin_login">
    <div class="row">
      <label for="email">User Name</label>
      <input type="text" name="user_name" autocomplete="off" placeholder="email@example.com">
    </div>
    <div class="row">
      <label for="password">Password</label>
      <input type="password" name="user_pass">
    </div>
    <button type="submit">Login</button>
  </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/custom.js"></script>
</html>