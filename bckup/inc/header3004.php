<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BCG Vaccine Laboratory</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CareMed demo project" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="referrer" content="strict-origin-when-cross-origin" />
   
    <link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">
    <?php 
    session_start();

    // ini_set('session.cookie_httponly', 1);
  
    // ini_set('session.use_only_cookies', 1);
      
    // ini_set('session.cookie_secure', 1);
  header ("Set-Cookie: bcgvladmin ; expires=Tue, 17-May-12 14:39:58 GMT;path=/; domain=https://dirbcglab.gov.in");
     
    header('X-Content-Type-Options: nosniff');

    header("X-XSS-Protection: 1; mode=block");

    header('Strict-Transport-Security: max-age=7776000');

    header("X-Frame-Options: SAMEORIGIN");
    
    header("Cross-Origin-Embedder-Policy: require-corp");

    header("Cross-Origin-Opener-Policy: same-origin");
  
    header("Cross-Origin-Resource-Policy: same-origin");


    header("Content-Security-Policy: default-src 'self'; object-src 'none';frame-ancestors 'none';upgrade-insecure-requests;block-all-mixed-content");
    
    header("Content-Security-Policy: frame-src  https://dirbcglab.gov.in");

    header("Content-Security-Policy: manifest-src  https://dirbcglab.gov.in");

    header("Content-Security-Policy: connect-src  https://dirbcglab.gov.in");

    header("Content-Security-Policy: font-src  https://dirbcglab.gov.in");

    header("Content-Security-Policy: img-src  https://dirbcglab.gov.in");

    header("Content-Security-Policy: media-src  https://dirbcglab.gov.in");

    
   header("Referrer-Policy: strict-origin-when-cross-origin");

/*$allowed_host = array('10.163.77.75');

if (!isset($_SERVER['HTTP_HOST']) || !in_array($_SERVER['HTTP_HOST'], $allowed_host)) 
{
    header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
    exit;
}*/
    ?>
    <link rel="stylesheet" href="plugins/bootstrap-4.6.2/css/bootstrap.min.css">
    <link
      href="assets/fonts/fontawesome/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="plugins/OwlCarousel2-2.3.4/assets/owl.carousel.min.css"
    />
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="plugins/OwlCarousel2-2.2.1/animate.css"
    />  -->
    <link rel="stylesheet" type="text/css" href="css/swal.css" />
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
    <link rel="stylesheet" type="text/css" href="styles/responsive.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="plugins/slick-carousel/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="plugins/slick-carousel/slick/slick-theme.css"
    />
    <link rel="stylesheet" type="text/css" href="plugins/datatables/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="styles/custom.css"/>
    <!-- Icon Font Css -->
    <!-- <link rel="stylesheet" href="plugins/icofont/icofont.min.css" /> -->
  </head>
  <body>
    <div class="super_container">
      <!-- Header -->

      <header class="header trans_200">
        <!-- Top Bar -->
        <div class="top_bar">
          <div class="container">
            <div class="row">
              <div class="col">
                <div
                  class="top_bar_content d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="top_bar_item d-flex flex-row justify-content-start bcgvltitle">
                    <a href="index.php">BCGVL</a>
                    <a href="#" class="g_title">|&nbsp;&nbsp;Government of India</a>
                  </div>
                  
                  <div
                    class="emergencies d-flex flex-row align-items-center justify-content-start ml-auto"
                  >
                    <ul class="d-flex flex-row justify-content-start ml-auto">
                      <li class="scr_reader">
                        <a href="screenreader.php">Screen Reader Access</a>
                      </li>
                      <!-- <li class="line"></li>
                      <li class="social-media">
                        <a href="javascript:void(0);" class="search_btn"><i class="fa fa-search"></i></a>
                        <div class="search-box">
                          <input type="text" placeholder=""/>
                          <input type="button" value="Search"/>
                        </div>
                      </li> -->
                      <li class="line"></li>
                      <li class="social-media">
                        <a href="#servhov"><i class="fas fa-share-square"></i></a>
                      </li>
                      <li class="line"></li>
                      <li class="social-media">
                        <a href="sitemap.php"><i class="fa fa-sitemap" aria-hidden="true"></i></a>
                      </li>
                      <li class="line"></li>
                      <li class="social-media">
                      <a href="#"><i class="fa fa-wheelchair" aria-hidden="true"></i></a>
                        <ul class="accessiblelinks">
                          <li class="fontSizeEvent" id="btn-increase"><a href="#" data-event-type="increase" data-label="Font Size Increase"
                          aria-label="Font Size Increase - selected">A+</a></li>
                          <li class="fontSizeEvent" id="btn-orig"><a href="#" data-event-type="normal" data-label="Normal Font" title="Normal Font">A</a></li>
                          <li class="fontSizeEvent" id="btn-decrease"><a href="#" data-event-type="decrease" data-label="Font Size Decrease"
                          aria-label="Font Size Decrease">A-</a></li>
                          <li class="dark"><a href="#">A</a></li>
                          <li class="light"><a href="#">A</a></li>
                        </ul>
                      </li>
                      <!-- <li class="line"></li> -->
                      <!-- <li>
                        <a
                          href="bcg-hi/index.html"
                          style="color: #ffffff"
                          aria-hidden="true"
                          >हिन्दी</a
                        >
                      </li> -->
                      <li class="line"></li>
                      <li class="social-media">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li class="line"></li>
                      <li class="social-media">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Logo bar -->
        <div class="clogo">
          <div class="container">
            <div class="col-12">
              <div class="row">
                <div class="col-md-6 col-12">
                  <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="images/logo/download.png" alt="" />
                    <div class="main_title">
                      <h2 class="bcg_title">BCG Vaccine Laboratory Chennai</h2>
                      <h5 class="titbcg">
                        Directorate General of Health Services(DGHS),<br>
                        Ministry of Health and Family Welfare, Govt. of India
                      </h5>
                    </div>
                  </a>
                </div>
                <div class="right-logo col-md-6 col-12" >
                  <img class="dghs" src="images/logo/logo.png" alt="DGHS_logo"/>
                  <img class="dghs" src="images/logo/DGHS_logo.png" alt="DGHS_logo"/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Header Content -->
        <div class="header_container bg-dark nav_light bg-green">
          <div class="container">
            <div class="header_content d-flex align-items-center justify-content-start">
              <nav class="main_nav ml-auto">
                <ul>
                  <li class="">
                    <a href="index.php" class="nav-link"><i class="fas fa-home"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="" class="nav-link">About us</a>
                    <ul class="dropdown-nav">
                      <li>
                        <a href="objectives_of_bcg.php" class="list_a">Objectives of BCGVL</a>
                      </li>
                      <li>
                        <a href="history_of_bcg.php" class="list_a">History of BCGVL</a>
                      </li>
                      <li>
                        <a href="about_bcg.php" class="list_a">About BCGVL</a>
                      </li>
                      <li>
                        <a href="activity_of_bcg.php" class="list_a">Activites</a>
                      </li>
                      <li>
                        <a href="revenue_of_bcg.php" class="list_a">Revenue</a>
                      </li>
                      <li>
                        <a href="achivement_of_bcg.php" class="list_a">Achievements</a>
                      </li>
                      <li>
                        <a href="milestones_of_bcg.php" class="list_a">Milestones</a>
                      </li>
                      <li>
                        <a href="future_plans.php" class="list_a">Future Plans</a>
                      </li>
                    </ul>
                  </li>
                  <!-- <li>
                    <a href="whats_new.php" class="nav-link">What's New</a>
                  </li> -->
                  <li class="dropdown">
                    <a href="" class="nav-link">Who's who</a>
                    <ul class="dropdown-nav">
                      <li>
                        <a href="director_desk3.php" class="list_a">Director of BCGVL</a>
                      </li>
                      <li>
                        <a href="director_message.php" class="list_a">Director's Message</a>
                      </li>
                      <li>
                        <a href="organisation_chart.php" class="list_a">Organisation Chart</a>
                      </li>
                      <li>
                        <a href="staff_list.php" class="list_a">Staff Details</a>
                      </li>
                      <li>
                        <a href="former_directors.php" class="list_a"
                          >List of Directors</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="" class="nav-link">Division</a>
                    <ul class="dropdown-nav">
                      <li>
                        <a href="administration.php" class="list_a">Administration</a>
                      </li>
                      <li>
                        <a href="quality.php" class="list_a">Quality Assurance</a>
                      </li>
                      <li>
                        <a href="production.php" class="list_a">Production</a>
                      </li>
                      <li>
                        <a href="quality_control.php" class="list_a">Quality Control</a>
                      </li>
                      <li>
                        <a href="engineering.php" class="list_a">Engineering</a>
                      </li>
                      <li>
                        <a href="warehouse.php" class="list_a">Warehouse</a>
                      </li>
                      <li>
                        <a href="laboratory_house.php" class="list_a">Laboratory Animal House</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="nav-link">Products</a>
                    <ul class="dropdown-nav">
                      <li>
                        <a href="product.php" class="list_a">Products</a>
                      </li>
                      <li>
                        <a href="production_chart.php" class="list_a">Production Process</a>
                      </li>
                      <li>
                        <a href="supply_vaccine.php" class="list_a">Supply of BCG Vaccine</a>
                          <!-- <ul class="dropdown-nav-1">
                            <li>
                              <a href="fy2021_22.php" class="list_a">FY 2021-2022</a>
                            </li>
                            <li>
                              <a href="fy2020_21.php" class="list_a">FY 2020-2021</a>
                            </li>
                          </ul> -->
                      </li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="#" class="nav-link">Tenders</a>
                    <ul class="dropdown-nav">
                      <li>
                        <a href="tenders.php" class="list_a">Open Tenders</a>
                      </li>
                      <li>
                        <a href="closed_tenders.php" class="list_a">Closed Tenders</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="recruitments.php" class="nav-link">Recruitments</a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="nav-link">RTI</a>
                    <ul class="dropdown-nav">
                      <li>
                        <a href="rti.php" class="list_a">RTI Proactive Disclosure</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="contact.php" class="nav-link">Contact Us</a>
                  </li>
                </ul>
              </nav>
              <div class="side-btn">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#sidebarMenu"
                  aria-controls="sidebarMenu"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <i class="fa fa-bars"></i>
                </button>
              </div>
              <div class="hamburger ml-auto">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
        <nav id="sidebarMenu" class="collapse sidebar collapse bg-white trans_200">
          <div class="close_btn">
          </div>
          <!-- Menu Close Button -->
          <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
              <!-- <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple navbar-toggler drop-d"
                data-toggle ="collapse" data-target ="#colNav"
                ><span>Employees Corner</span>
                <i class="fa fa-angle-down downar"></i>
              </a>
              <div class ="collapse navbar-collapse exCollapse" id ="colNav">
                <ul class ="navbar-nav">
                  <li class ="nav-item">
                    <a class ="nav-link" href="#"> Services </a>
                  </li>
                  <li class ="nav-item">
                    <a class ="nav-link" href ="#"> About Us</a>
                  </li>
                  <li class ="nav-item">
                    <a class ="nav-link" href ="#"> Contact Us </a>
                  </li>
                </ul>
              </div> -->
              <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple navbar-toggler drop-d"
                data-toggle ="collapse" data-target ="#colNav1"
                ><span>Events</span>
                <i class="fa fa-angle-down downar"></i>
              </a>
              <div class ="collapse navbar-collapse exCollapse" id ="colNav1">
                <ul class ="navbar-nav">
                  <li class ="nav-item">
                    <a class ="nav-link" href="events_details.php">Major Events</a>
                  </li>
                  <li class ="nav-item">
                    <a class ="nav-link" href ="training_programmes.php"> Training Programmes </a>
                  </li>
                </ul>
              </div>
              <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple navbar-toggler drop-d"
                data-toggle ="collapse" data-target ="#colNav2"
                ><span>Gallery</span>
                <i class="fa fa-angle-down downar"></i>
              </a>
              <div class ="collapse navbar-collapse exCollapse" id ="colNav2">
                <ul class ="navbar-nav">
                  <li class ="nav-item">
                    <a class ="nav-link" href="photo_gallery.php"> Photo Gallery</a>
                  </li>
                  <li class ="nav-item">
                    <a class ="nav-link" href ="video_gallery.php"> Video Gallery </a>
                  </li>
                </ul>
              </div>
              <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple navbar-toggler drop-d"
                data-toggle ="collapse" data-target ="#colNav3"
                ><span>Publications / Documents</span>
                <i class="fa fa-angle-down downar"></i>
              </a>
              <div class ="collapse navbar-collapse exCollapse" id ="colNav3">
                <ul class ="navbar-nav">
                  <li class ="nav-item">
                    <a class ="nav-link" href="annual_report.php">Annual Reports</a>
                  </li>
                
                </ul>
              </div>
              <!-- <a
                href="tenders.php"
                class="list-group-item list-group-item-action py-2 ripple"
                ><span>Tenders</span></a
              >
              <a
                href="rti.php"
                class="list-group-item list-group-item-action py-2 ripple"
                ><span>RTI</span></a
              > -->
              <!-- <a
                href="faq.php"
                class="list-group-item list-group-item-action py-2 ripple"
                ><span>FAQ</span></a
              > -->
              <!-- <a
                href="recruitments.php"
                class="list-group-item list-group-item-action py-2 ripple"
                ><span>Recruitments</span></a
              > -->
              <a
                href="employees_corner.php"
                class="list-group-item list-group-item-action py-2 ripple"
                ><span>Employees Corner</span></a
              >
              <!-- <a
                href="feedback.php"
                class="list-group-item list-group-item-action py-2 ripple"
                ><span>Feedback</span></a
              > -->
            </div>
          </div>
        </nav>
        <!-- Sidebar -->
      </header>

      <!-- Menu -->

      <div class="menu_container menu_mm">
        <!-- Menu Close Button -->
        <div class="menu_close_container">
          <div class="menu_close"></div>
        </div>

        <!-- Menu Items -->
        <div id="menu_mm" class="menu_inner menu_mm">
          <div class="menu menu_mm">
            <ul class="menu_list menu_mm">
              <li class="menu_item menu_mm dropdown show">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us
                </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <li>
                        <a href="objectives_of_bcg.php" class="dropdown-item">Objectives of BCGVL</a>
                      </li>
                      <li>
                        <a href="history_of_bcg.php" class="dropdown-item">History of BCGVL</a>
                      </li>
                      <li>
                        <a href="about_bcg.php" class="dropdown-item">About BCGVL</a>
                      </li>
                      <li>
                        <a href="activity_of_bcg.php" class="dropdown-item">Activites</a>
                      </li>
                      <li>
                        <a href="revenue_of_bcg.php" class="dropdown-item">Revenue</a>
                      </li>
                      <li>
                        <a href="achivement_of_bcg.php" class="dropdown-item">Achievement</a>
                      </li>
                      <li>
                        <a href="milestones_of_bcg.php" class="dropdown-item">Milestones</a>
                      </li>
                      <li>
                        <a href="future_plans.php" class="dropdown-item">Future Plans</a>
                      </li>
                  </ul>
              </li>
              
              <li class="menu_item menu_mm dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Who's who</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                    <li>
                      <a href="director_desk3.php" class="dropdown-item">Director of BCGVL</a>
                    </li>
                    <li>
                      <a href="director_message.php" class="dropdown-item">Director's Message</a>
                    </li>
                    <li>
                      <a href="organisation_chart.php" class="dropdown-item">Organisation Chart</a>
                    </li>
                    <li>
                      <a href="staff_list.php" class="dropdown-item">Staff Details</a>
                    </li>
                    <li>
                      <a href="former_directors.php" class="dropdown-item"
                        >List of Directors</a
                      >
                    </li>
                </ul>
              </li>
              <li class="menu_item menu_mm dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Division</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                      <li>
                        <a href="administration.php" class="dropdown-item">Administration</a>
                      </li>
                      <li>
                        <a href="quality.php" class="dropdown-item">Quality Assurance</a>
                      </li>
                      <li>
                        <a href="production.php" class="dropdown-item">Production</a>
                      </li>
                      <li>
                        <a href="quality_control.php" class="dropdown-item">Quality Control</a>
                      </li>
                      <li>
                        <a href="engineering.php" class="dropdown-item">Engineering</a>
                      </li>
                      <li>
                        <a href="warehouse.php" class="dropdown-item">Warehouse</a>
                      </li>
                      <li>
                        <a href="laboratory_house.php" class="dropdown-item">Laboratory Animal House</a>
                      </li>
                  
                </ul>
              </li>
              <li class="menu_item menu_mm dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                    <li>
                      <a href="product.php" class="dropdown-item">Products</a>
                    </li>
                    <li>
                      <a href="production_chart.php" class="dropdown-item">Production Process</a>
                    </li>
                    <li class="dropdown drop">
                      <a class="dropdown-toggle" href="supply_vaccine.php" role="button" id="dropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Supply of BCG Vaccine </a>
                    </li>
            </ul>
              <li class="menu_item menu_mm dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tenders</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                  <li>
                    <a href="tenders.php" class="dropdown-item">Open Tenders</a>
                  </li>
                  <li>
                    <a href="closed_tenders.php" class="dropdown-item">Closed Tenders</a>
                  </li>
                </ul>
              </li>
              <li class="menu_item menu_mm dropdown">
                <a href="index.html">Recruitments</a>
              </li>
              <li class="menu_item menu_mm dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RTI</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                  <li>
                    <a href="rti.php" class="dropdown-item">RTI Proactive Disclosure</a>
                  </li>
                </ul>
              </li>
              <li class="menu_item menu_mm dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                  <li>
                    <a class ="dropdown-item" href="events_details.php">Major Events </a>
                  </li>
                  <li>
                    <a class ="dropdown-item" href ="training_programmes.php"> Training Programmes </a>
                  </li>
                </ul>
              </li>
              <li class="menu_item menu_mm dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                  <li>
                    <a class ="dropdown-item" href="photo_gallery.php"> Photo Gallery</a>
                  </li>
                  <li>
                    <a class ="dropdown-item" href ="video_gallery.php"> Video Gallery </a>
                  </li>
                </ul>
              </li>
              <li class="menu_item menu_mm dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Publications / Documents</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                  <li>
                    <a class ="dropdown-item" href="annual_report.php">Annual Reports</a>
                  </li>
                  <li>
                    <a class ="dropdown-item" href ="recruitment_rules.php">Recruitment Rules </a>
                  </li>
                </ul>
              </li>
              <li class="menu_item menu_mm">
                <a href="employees_corner.php">Employees Corner</a>
              </li>
              <!-- <li class="menu_item menu_mm">
                <a href="feedback.php">Feedback</a>
              </li> -->
              <li class="menu_item menu_mm dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                    <li>
                      <a href="contact.php" class="dropdown-item">BCGVL Contacts</a>
                    </li>
                    <li class="dropdown">
                      <a href="bcgvl_rti_contacts.php" class="dropdown-item">RTI Contacts</a>
                    </li>
                  </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>