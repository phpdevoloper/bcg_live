<?php session_start();
include('inc/dbconnection.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>BCG - BCG Vaccine Laboratory, Chennai</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <!-- <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" /> -->

    <!-- Fonts and icons -->
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

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/atlantis.min.css" />

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>


    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
    <!-- <link rel="stylesheet" href="assets/css/richtext.min.css"> -->
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">
          <a href="dashboard.php" class="logo">
            <span>BCGVL</span>
          </a>
          <button
            class="navbar-toggler sidenav-toggler ml-auto"
            type="button"
            data-toggle="collapse"
            data-target="collapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon">
              <i class="icon-menu"></i>
            </span>
          </button>
          <button class="topbar-toggler more">
            <i class="icon-options-vertical"></i>
          </button>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="icon-menu"></i>
            </button>
          </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav
          class="navbar navbar-header navbar-expand-lg"
          data-background-color="blue2"
        >
          <div class="container-fluid">
            <div class="collapse" id="search-nav">
              <div class="navbar-left navbar-form nav-search mr-md-3">
                <span>BCG Vaccine Laboratory, Chennai</span><br>
                <span style="font-size:15px">Content Management System(CMS)</span>
              </div>
            </div>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
              <li class="nav-item toggle-nav-search hidden-caret">
                <a
                  class="nav-link"
                  data-toggle="collapse"
                  href="#search-nav"
                  role="button"
                  aria-expanded="false"
                  aria-controls="search-nav"
                >
                  <i class="fa fa-search"></i>
                </a>
              </li>
              <li class="nav-item dropdown hidden-caret">
                <a
                  class="dropdown-toggle profile-pic"
                  data-toggle="dropdown"
                  href="#"
                  aria-expanded="false"
                >
                  <div class="avatar-sm">
                    <img
                      src="assets/img/profile.jpg"
                      alt="..."
                      class="avatar-img rounded-circle"
                    />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                  <div class="dropdown-user-scroll scrollbar-outer">
                    <li>
                      <div class="user-box">
                        <div class="avatar-lg">
                          <img
                            src="assets/img/profile.jpg"
                            alt="image profile"
                            class="avatar-img rounded"
                          />
                        </div>
                        <div class="u-text">
                          <h4><?php echo $_SESSION['user']['uname'];?></h4>
                          <!-- <p class="text-muted">hello@example.com</p> -->
                          <!-- <a
                            href="profile.html"
                            class="btn btn-xs btn-secondary btn-sm"
                            >View Profile</a
                          > -->
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                      <!-- <a class="dropdown-item" href="#">My Profile</a> -->
                      <!-- <a class="dropdown-item" href="#">My Balance</a>
                      <a class="dropdown-item" href="#">Inbox</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Account Setting</a>
                      <div class="dropdown-divider"></div> -->
                      <a class="dropdown-item logout" href="#">Logout</a>
                    </li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>

      <!-- Sidebar -->
      <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <!-- <div class="user">
              <div class="avatar-sm float-left mr-2">
                <img
                  src="assets/img/profile.jpg"
                  alt="..."
                  class="avatar-img rounded-circle"
                />
              </div>
              <div class="info">
                <a
                  data-toggle="collapse"
                  href="#collapseExample"
                  aria-expanded="true"
                >
                  <span>
                    <span class="user-level">Administrator</span>
                    <span class="caret"></span>
                  </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample">
                  <ul class="nav">
                    <li>
                      <a href="#profile">
                        <span class="link-collapse">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a href="#edit">
                        <span class="link-collapse">Edit Profile</span>
                      </a>
                    </li>
                    <li>
                      <a href="#settings">
                        <span class="link-collapse">Settings</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->
            <ul class="nav nav-primary">
              <li class="nav-item <?php echo (basename($_SERVER['SCRIPT_FILENAME']) == 'dashboard.php'? 
        'active':'');?>">
                <a
                  href="dashboard.php"
                  class="collapsed"
                >
                  <i class="fas fa-home"></i>
                  <p>DASHBOARD</p>
                  <!-- <span class="caret"></span> -->
                </a>
                <!-- <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="demo1/index.html">
                        <span class="sub-item">Dashboard 1</span>
                      </a>
                    </li>
                    <li>
                      <a href="demo2/index.html">
                        <span class="sub-item">Dashboard 2</span>
                      </a>
                    </li>
                  </ul>
                </div> -->
              </li>
              <!-- <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Components</h4>
              </li> -->
              <li class="nav-item">
                <a data-toggle="collapse" href="#hps">
                    <i class="fas fa-user-md"></i>
                    <p>HOME PAGE</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="hps">
                    <ul class="nav nav-collapse">
                      <li>
                          <a href="#">
                            <span class="sub-item">Sliders</span>
                          </a>
                      </li>
                    </ul>
                  </div>
              </li>
							<li class="nav-item <?php 
								if (basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details1.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details1.php'?'active':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details.php'?'active':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewProfile.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewProfile.php'?'active':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'profile_details.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'profile_details.php'?'active':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewMessage.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewMessage.php'?'active':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'director_message.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'director_message.php'?'active':'');
								}
        			?>">
                <a data-toggle="collapse" href="#ddesk">
                  <i class="fas fa-user-md"></i>
                  <p>DIRECTOR DESK</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php 
								if (basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details1.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details1.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewProfile.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewProfile.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'profile_details.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'profile_details.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewMessage.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewMessage.php'? 'show':'');
								}
                elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'director_message.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'director_message.php'? 'show':'');
								}?>" id="ddesk">
                  <ul class="nav nav-collapse">
                    <li class="<?php 
                    if(basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details1.php'){
                      echo (basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details1.php' ? 'active':''); 
                    }
                    elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details.php'){
                      echo (basename($_SERVER['SCRIPT_FILENAME']) == 'basic_details.php' ? 'active':''); 
                    }
        						?>">
                      <a href="basic_details1.php">
                        <span class="sub-item">Basic Details</span>
                      </a>
                    </li>
                    <li class="
                    <?php 
                    if (basename($_SERVER['SCRIPT_FILENAME']) == 'viewProfile.php') {
                      echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewProfile.php' ? 'active':'');
                    } 
                    elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'profile_details.php') {
                      echo (basename($_SERVER['SCRIPT_FILENAME']) == 'profile_details.php' ? 'active':'');
                    } 
                    ?>">
                      <a href="viewProfile.php">
                        <span class="sub-item">Profile Details</span>
                      </a>
                    </li>
                    <li class="
                    <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'viewMessage.php') {
                      echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewMessage.php'? 'active':'');
                    } 
                    elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'director_message.php') {
                      echo (basename($_SERVER['SCRIPT_FILENAME']) == 'director_message.php'? 'active':'');
                    } 
                    ?>">
                      <a href="viewMessage.php">
                        <span class="sub-item">Message</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item <?php 
								if (basename($_SERVER['SCRIPT_FILENAME'])  == 'viewOBJ.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewOBJ.php'? 'active':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME'])  == 'objectives_of_bcgvl.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'objectives_of_bcgvl.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewHIS.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewHIS.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'history_of_bcg.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'history_of_bcg.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewABT.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewABT.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'about_bcg.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'about_bcg.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewACT.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewACT.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'activities_of_bcg.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'activities_of_bcg.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewREV.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewREV.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'revenue.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'revenue.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewACH.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewACH.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'achivement.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'achivement.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewFUT.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewFUT.php'? 'active':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'future_plans.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'future_plans.php'? 'active':'');
								}
                ?>">
                <a data-toggle="collapse" href="#base">
                  <i class="fas fa-layer-group"></i>
                  <p>ABOUT US</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php 
								if (basename($_SERVER['SCRIPT_FILENAME']) == 'viewOBJ.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewOBJ.php'? 'show':'');
								}
                elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'objectives_of_bcgvl.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'objectives_of_bcgvl.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewHIS.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewHIS.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'history_of_bcg.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'history_of_bcg.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewABT.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewABT.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'about_bcg.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'about_bcg.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewACT.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewACT.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'activities_of_bcg.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'activities_of_bcg.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewREV.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewREV.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'revenue.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'revenue.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewACH.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewACH.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'achivement.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'achivement.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'viewFUT.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewFUT.php'? 'show':'');
								}
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'future_plans.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'future_plans.php'? 'show':'');
								}
                ?>" id="base">
                  <ul class="nav nav-collapse">
                    <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME']) == 'viewOBJ.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewOBJ.php'? 
                     'active':''); 
                    }elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'objectives_of_bcgvl.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'objectives_of_bcgvl.php'? 
        						'active':'');} ?>">
                      <a href="viewOBJ.php">
                        <span class="sub-item">Objectives of BCGVL</span>
                      </a>
                    </li>
                    <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME']) == 'viewHIS.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewHIS.php'? 
                     'active':''); 
                    }elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'history_of_bcg.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'history_of_bcg.php'? 
        						'active':'');}?>">
                      <a href="viewHIS.php">
                        <span class="sub-item">History of BCGVL</span>
                      </a>
                    </li>
                    <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME']) == 'viewABT.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewABT.php'? 
                     'active':''); 
                    }elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'about_bcg.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'about_bcg.php'? 
        						'active':'');}?>">
                      <a href="viewABT.php">
                        <span class="sub-item">About BCG</span>
                      </a>
                    </li>
                    <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME']) == 'viewACT.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewACT.php'? 
                     'active':''); 
                    }elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'activities_of_bcg.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'activities_of_bcg.php'? 
        						'active':'');}?>">
                      <a href="viewACT.php">
                        <span class="sub-item">Activities</span>
                      </a>
                    </li>
                    <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME']) == 'viewREV.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewREV.php'? 
                     'active':''); 
                    }elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'revenue.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'revenue.php'? 
        						'active':'');}?>">
                      <a href="viewREV.php">
                        <span class="sub-item">Revenue</span>
                      </a>
                    </li>
                    <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME']) == 'viewACH.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewACH.php'? 
                     'active':''); 
                    }else if(basename($_SERVER['SCRIPT_FILENAME']) == 'achivement.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'achivement.php'? 
        						'active':'');}?>">
                      <a href="viewACH.php">
                        <span class="sub-item">Achievements / Milestones</span>
                      </a>
                    </li>
                    <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME']) == 'viewFUT.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewFUT.php'? 
                     'active':''); 
                    }else if(basename($_SERVER['SCRIPT_FILENAME']) == 'future_plans.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'future_plans.php'? 
        						'active':'');}?>">
                      <a href="viewFUT.php">
                        <span class="sub-item">Future Plans</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item <?php 
								if (basename($_SERVER['SCRIPT_FILENAME']) == 'whats_new.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'whats_new.php'? 'active':'');
								}?>">
                <a href="whats_new.php">
                  <i class="fas fa-layer-group"></i>
                  <p>WHAT'S NEW</p>
                </a>
              </li>
              <li class="nav-item <?php 
								if (basename($_SERVER['SCRIPT_FILENAME'])  == 'organisation_chart.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'organisation_chart.php'? 'active':'');
								} elseif (basename($_SERVER['SCRIPT_FILENAME'])  == 'staff_details.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'staff_details.php'? 'active':'');
								}elseif (basename($_SERVER['SCRIPT_FILENAME'])  == 'former_directors.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'former_directors.php'? 'active':'');
								}?>">
                <a data-toggle="collapse" href="#basewho">
                  <i class="fas fa-layer-group"></i>
                  <p>WHO'S WHO</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php 
                if(basename($_SERVER['SCRIPT_FILENAME']) == 'organisation_chart.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'organisation_chart.php'? 'show':'');
								}elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'staff_details.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'staff_details.php'? 'show':'');
								} 
                elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'former_directors.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'former_directors.php'? 'show':'');
								} 
                ?>" id="basewho">
                  <ul class="nav nav-collapse">
                    <li class="<?php 
                    if(basename($_SERVER['SCRIPT_FILENAME']) == 'organisation_chart.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'organisation_chart.php'?'active':''); 
                    }?>">
                      <a href="organisation_chart.php">
                        <span class="sub-item">Organisation Chart</span>
                      </a>
                    </li>
                    <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME']) == 'staff_details.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'staff_details.php'? 
                     'active':'');}
                     ?>">
                      <a href="staff_details.php">
                        <span class="sub-item">Staff Details</span>
                      </a>
                    </li>
                    <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME']) == 'former_directors.php'){
                     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'former_directors.php'? 
                     'active':'');}
                     ?>">
                      <a href="former_directors.php">
                        <span class="sub-item">Former Directors of BCGVL</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item <?php 
              if (basename($_SERVER['SCRIPT_FILENAME']) == 'administration.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'administration.php'? 'active':'');
              }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewADM.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewADM.php'? 'active':'');
              }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQUA.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQUA.php'? 'active':'');
              }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewPRO.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewPRO.php'? 'active':'');
              }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQTC.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQTC.php'? 'active':'');
              }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_assurance.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_assurance.php'? 'active':'');
							}elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'div_production.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'div_production.php'? 'active':'');
							}elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_control.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_control.php'? 'active':'');
								}
                ?>">
                <a data-toggle="collapse" href="#sidebarLayouts">
                  <i class="fas fa-th-list"></i>
                  <p>DIVISIONS</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse 
                <?php 
              if (basename($_SERVER['SCRIPT_FILENAME']) == 'administration.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'administration.php'? 'show':'');
              }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewADM.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewADM.php'? 'show':'');
              }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQUA.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQUA.php'? 'show':'');
              }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewPRO.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewPRO.php'? 'show':'');
              }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQTC.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQTC.php'? 'show':'');
              }
              elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_assurance.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_assurance.php'? 'show':'');
								}elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'div_production.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'div_production.php'? 'show':'');
								}elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_control.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_control.php'? 'show':'');
								}
                ?>" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <li class="<?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'viewADM.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewADM.php'? 'active':'');
                      }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'administration.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'administration.php'? 'active':'');
                      }
                      ?>">
                      <a href="viewADM.php">
                        <span class="sub-item">Administration</span>
                      </a>
                    </li>
                    <li class="<?php
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQUA.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQUA.php'? 'active':'');
                      }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_assurance.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_assurance.php'?'active':'');
                      }?>">
                      <a href="viewQUA.php">
                        <span class="sub-item">Quality Assurance</span>
                      </a>
                    </li>
                    <li class="<?php
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'viewPRO.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewPRO.php'? 'active':'');
                      }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'div_production.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'div_production.php'? 'active':'');
                      }?>">
                      <a href="viewPRO.php">
                        <span class="sub-item">Production</span>
                      </a>
                    </li>
                    <li class="<?php
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQTC.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewQTC.php'? 'active':'');
                      } 
                      elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_control.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'quality_control.php'? 'active':'');
                      }?>">
                      <a href="viewQTC.php">
                        <span class="sub-item">Quality Control</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item  <?php 
              if (basename($_SERVER['SCRIPT_FILENAME']) == 'product.php') {
                echo (basename($_SERVER['SCRIPT_FILENAME']) == 'product.php'? 'active':'');
              }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'production.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'production.php'? 'active':'');
								}elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewSupply.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewSupply.php'? 'active':'');
								}elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'vacine_supply.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'vacine_supply.php'? 'active':'');
								}
                ?>">
                <a data-toggle="collapse" href="#submenu">
                <i class="fas fa-cart-plus"></i>
                  <p>PRODUCTS</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php 
                if (basename($_SERVER['SCRIPT_FILENAME']) == 'product.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'product.php'? 'show':'');
								}elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'production.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'production.php'? 'show':'');
								} elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'viewSupply.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewSupply.php'? 'show':'');
								}elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'vaccine_supply.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'vaccine_supply.php'? 'show':'');
								}
                ?>" id="submenu">
                  <ul class="nav nav-collapse">
                    <li class="<?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'product.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'product.php'? 'active':'');
                      }?>">
                      <a href="product.php">
                        <span class="sub-item">Products</span>
                      </a>
                    </li>
                    <li class="<?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'production.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'production.php'? 'active':'');
                      }?>">
                      <a href="production.php">
                        <span class="sub-item">Production Process</span>
                      </a>
                    </li>
                    <li class="<?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'viewSupply.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'viewSupply.php'? 'active':'');
                      }elseif(basename($_SERVER['SCRIPT_FILENAME']) == 'vaccine_supply.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'vaccine_supply.php'? 'active':'');
                      }
                      ?>">
                      <a href="viewSupply.php">
                        <span class="sub-item">Supply of BCG Vaccine</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item <?php 
								if (basename($_SERVER['SCRIPT_FILENAME']) == 'events.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'events.php'? 'active':'');
								}
                ?>">
                <a href="events.php">
                <i class="fas fa-calendar-alt"></i>
                  <p>EVENTS</p>
                </a>
              </li>
              <li class="nav-item <?php 
								if (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery.php'? 'active':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery_view.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery_view.php'? 'active':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'event_category.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'event_category.php'? 'active':'');
								}
                ?>">
                <a data-toggle="collapse" href="#maps">
                <i class="fas fa-image"></i>
                  <p>GALLERY</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php 
								if (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery_view.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery_view.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'event_category.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'event_category.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_gallery.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_gallery.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_gallery_view.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_gallery_view.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_category.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_category.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'video_gallery.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'video_gallery.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'video_gallery_view.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'video_gallery_view.php'? 'show':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'video_category.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'video_category.php'? 'show':'');
								}
                ?>" id="maps">
                  <ul class="nav nav-collapse">
                    <li class="<?php 
								if (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery.php'? 'active':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery_view.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'event_gallery_view.php'? 'active':'');
								}
								elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'event_category.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'event_category.php'? 'active':'');
								}
                ?>">
                      <a href="event_gallery.php">
                        <span class="sub-item">Event Gallery</span>
                      </a>
                    </li>
                    <li class="<?php 
								if (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_gallery.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_gallery.php'? 'active':'');
								} 
								else if (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_gallery_view.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_gallery_view.php'? 'active':'');
								} 
                elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_category.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_category.php'? 'active':'');
								}
                elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_gallery_view.php') {
									echo (basename($_SERVER['SCRIPT_FILENAME']) == 'photo_gallery_view.php'? 'active':'');
								}
                ?>">
                      <a href="photo_gallery.php">
                        <span class="sub-item">Photo Gallery</span>
                      </a>
                    </li>
                    <li class="<?php 
                    if (basename($_SERVER['SCRIPT_FILENAME']) == 'video_gallery.php') {
                      echo (basename($_SERVER['SCRIPT_FILENAME']) == 'video_gallery.php'? 'active':'');
                    } 
                    else if (basename($_SERVER['SCRIPT_FILENAME']) == 'video_gallery_view.php') {
                      echo (basename($_SERVER['SCRIPT_FILENAME']) == 'video_gallery_view.php'? 'active':'');
                    } 
                    elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'video_category.php') {
                      echo (basename($_SERVER['SCRIPT_FILENAME']) == 'video_category.php'? 'active':'');
                    }
                    elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'video_gallery_view.php') {
                      echo (basename($_SERVER['SCRIPT_FILENAME']) == 'video_gallery_view.php'? 'active':'');
                    }
                    ?>">
                      <a href="video_gallery.php">
                        <span class="sub-item">Video Gallery</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'annual_report.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'annual_report.php'? 'active':'');
                      } elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'recruitment_rules.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'recruitment_rules.php'? 'active':'');
                      }?>">
                <a data-toggle="collapse" href="#charts">
                <i class="fas fa-file-alt"></i>
                  <p>DOCUMENTS</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'annual_report.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'annual_report.php'? 'show':'');
                      }elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'recruitment_rules.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'recruitment_rules.php'? 'show':'');
                      }
                      ?>" id="charts">
                  <ul class="nav nav-collapse">
                    <li class="<?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'annual_report.php') {
                        echo(basename($_SERVER['SCRIPT_FILENAME']) == 'annual_report.php'? 'active':'');
                      }?>">
                      <a href="annual_report.php">
                        <span class="sub-item">Annual Reports</span>
                      </a>
                    </li>
                    <li class="<?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'recruitment_rules.php') {
                        echo(basename($_SERVER['SCRIPT_FILENAME']) == 'recruitment_rules.php'? 'active':'');
                      }?>">
                      <a href="recruitment_rules.php">
                        <span class="sub-item">Recruitment Rules</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'recruitment.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'recruitment.php'? 'active':'');
                      }?>">
                <a href="recruitment.php">
                  <i class="fas fa-bars"></i>
                  <span class="sub-item">RECRUITMENTS</span>
                </a>
              </li>
              <li class="nav-item <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'tenders.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'tenders.php'? 'active':'');
                      }?>">
                <a data-toggle="collapse" href="#tenders">
                  <i class="far fa-chart-bar"></i>
                  <p>TENDERS</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'tenders.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'tenders.php'? 'show':'');
                      }?>" id="tenders">
                  <ul class="nav nav-collapse">
                    <li class="<?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'tenders.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'tenders.php'? 'active':'');
                      }?>">
                      <a href="tenders.php">
                        <span class="sub-item">Active Tenders</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">Closed Tenders</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'rti.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'rti.php'? 'active':'');
                      }?>">
                <a data-toggle="collapse" href="#rti">
                  <i class="fas fa-bars"></i>
                  <p>RTI</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'rti.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'rti.php'? 'show':'');
                      }
                      elseif (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_contacts.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_contacts.php'? 'show':'');
                      }
                      ?>" id="rti">
                  <ul class="nav nav-collapse">
                    <li class="<?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'rti.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'rti.php'? 'active':'');
                      }?>">
                      <a href="rti.php">
                        <span class="sub-item">RTI Proactive Disclosure</span>
                        <span class="caret"></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_rti_contacts.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_rti_contacts.php'? 'active':'');
                      }?>">
                <a data-toggle="collapse" href="#contacts">
                <i class="fas fa-address-book"></i>
                  <p>CONTACT US</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_rti_contacts.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_rti_contacts.php'? 'show':'');
                      }?>" id="contacts">
                  <ul class="nav nav-collapse">
                    <li class="<?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_contacts.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_contacts.php'? 'active':'');
                      }?>">
                      <a href="bcgvl_contacts.php">
                        <span class="sub-item">BCGVL Contacts</span>
                      </a>
                    </li>
                    <li>
                      <a data-toggle="collapse" href="#con1">
                        <span class="sub-item">RTI Contacts</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_rti_contacts.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_rti_contacts.php'? 'show':'');
                      }?>" id="con1">
                        <ul class="nav nav-collapse subnav">
                          <li class="<?php 
                            if (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_rti_contacts.php') {
                              echo (basename($_SERVER['SCRIPT_FILENAME']) == 'bcgvl_rti_contacts.php'? 'active':'');
                            }?>">
                            <a href="bcgvl_rti_contacts.php">
                              <span class="sub-item">PIO / APIO</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="sub-item">AA</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item"
                          >Web Information Manager (WIM)</span
                        >
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item <?php 
                      if (basename($_SERVER['SCRIPT_FILENAME']) == 'faq.php') {
                        echo (basename($_SERVER['SCRIPT_FILENAME']) == 'faq.php'? 'active':'');
                      }?>">
                <a href="faq.php">
                <i class="fas fa-question"></i>
                  <span class="sub-item">FAQ</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="feedback.php">
                <i class="fas fa-comments"></i>
                  <span class="sub-item">FEEDBACK</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->