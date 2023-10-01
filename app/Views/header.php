<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('public') ?>/images/x-icon/01.png">

    <link rel="stylesheet" href="<?= base_url('public') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public') ?>/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('public') ?>/css/icofont.min.css">
    <link rel="stylesheet" href="<?= base_url('public') ?>/css/lightcase.css">
    <link rel="stylesheet" href="<?= base_url('public') ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url('public') ?>/css/style.css">
</head>

<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->

    <!-- Header Section Starts Here -->
    <header class="header-3 pattern-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-3 col-12">
                    <div class="mobile-menu-wrapper d-flex flex-wrap align-items-center justify-content-between">
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="logo">
                            <a href="<?= base_url() ?>">
                                <img src="<?= base_url('public') ?>/images/logo/01.png
                                " alt="logo">
                            </a>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-12">
                    <div class="header-top">
                        <div class="header-top-area">
                            <ul class="left lab-ul">
                                <li>
                                    <i class="icofont-ui-call"></i> <span>04998-242472</span>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Post Uppala - 671322, Kasaragod, Kerala
                                </li>
                            </ul>
                            <ul class="social-icons lab-ul d-flex">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-wifi"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="header-wrapper">
                            <div class="menu-area justify-content-between w-100">
                                <ul class="menu lab-ul">
                                    <li>
                                        <a href="<?= base_url() ?>">Home</a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)">About</a>
                                        <ul class="submenu">
                                            <li><a href="<?= base_url('about') ?>">About</a></li>
                                              <li> 
                                                <a href="<?= base_url('mission-vision'); ?>">
                                                    Vision & Mission
                                                </a>
                                            </li>
                                            <li><a href="<?= base_url('list_of_smc') ?>">School Management</a></li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="javascript:void(0)">Administration</a>
                                        <ul class="submenu"> 
                                          <li><a href="<?= base_url('feesstructure'); ?>">Fees Structure</a></li>
                                          <li><a href="<?= base_url('teachers'); ?>">Teachers details</a></li>
                                          <li><a href="<?= base_url('link_of_result'); ?>">Result of Board Exam</a>  </li>
                                          <li><a href="<?= base_url('academiccalendar'); ?>">Annual Academic Calendar</a> </li>
                                          <li><a href="<?= base_url('link_of_pta'); ?>">List of PTA Members </a></li>
                                      </ul>
                                  </li>
                                


                                <li>
                                    <a href="javascript:void(0)">Certificates</a>
                                    <ul class="submenu"> 
                                        <li><a href="<?= base_url('affiliationletter'); ?>">Affiliation Certificate</a></li>
                                        <li><a href="<?= base_url('noc'); ?>">No objection certificate</a> </li>
                                        <li><a href="<?= base_url('buildingcertificate'); ?>">Building safety certificate</a> </li>
                                        <li><a href="<?= base_url('recognitioncertificate'); ?>">Recognition letter</a> </li>
                                        <li><a href="<?= base_url('firecertificate'); ?>">Fire safety certificate</a></li>
                                        <li><a href="<?= base_url('deocertificate'); ?>">Self Certification</a></li>
                                        <li><a href="<?= base_url('waterhealthcertificate'); ?>">Sanitary certificate</a> </li>
                                  </ul>
                              </li>





                              <li> 
                                <a href="<?= base_url('contact'); ?>">
                                    Contact
                                </a>
                            </li>

                        </ul>
                        <div class="prayer-time d-none d-lg-block">
                            <a href="<?= base_url('donation'); ?>" class="prayer-time-btn"><i class="icofont-money-bag"></i> Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
    <!-- Header Section Ends Here-->