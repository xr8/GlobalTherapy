<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!--Search Popup Start Here-->
<div class="searchOverlay">
    <div class="sidenav-wrap">
        <div class="logo-area">
            <div class="logo">
                <a href="<?php echo INDEX_PAGE;?>"><img src="<?php echo $logo; ?>" alt="Nav Logo" style="height: 75px;"></a>
            </div>
        </div>
        <!--Logo End-->
        <div class="overlay-content">
            <span class="closebtn" title="Close Overlay">×</span>
            <form>
                <div class="Search-section">
                    <input type="text" placeholder="What can wzdfe help you with?" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Search Popup End Here-->

<!--Side Nav Start Here-->
<div class="sidenav" style="background-image: url(<?php echo CDN_URL+$bgImg;?>);background-size: cover;">
    <div class="sidenav-wrap">
        <div class="logo-area">
            <div class="logo">
                <a href="<?php echo INDEX_PAGE;?>"><img src="<?php echo $logo; ?>" alt="Nav Logo" style="height: 75px;"></a>
            </div>
        </div>
        <!--Logo End-->
        <div class="overlay-content">
            <span class="closebtn" title="Close Overlay">×</span>
            <div class="overlay-menu">
                <ul class="side-menu">
                    <li class="items"><a class="itme-nav" href="#">Inicio</a></li>
                    <li class="items"><a class="itme-nav" href="<?php echo INDEX_PAGE; ?>productos/">Productos</a></li>
                    <li class="items"><a class="itme-nav" href="#">Áreas de Negocio</a></li>
                    <li class="items"><a class="itme-nav" href="#">Acerca de GLOBAL THERAPY</a></li>
                    <li class="items"><a class="itme-nav" href="#">Contacto</a></li>
                </ul>
                <div class="social-icon">
                    <a class="icon" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="icon" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="icon" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="icon" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Side Nav End Here-->

<!--Side Form Popup Start Here-->
<div class="side-form-popup">
    <div class="popup-wrapper">
        <div class="logo-area">
            <a href="<?php echo INDEX_PAGE;?>"><img src="<?php echo $logo; ?>" alt="Nav Logo" style="height: 75px;"></a>
        </div>
        <!--// Popup Logo Area End-->
        <div class="opening-popup">
            <div class="close-popup">×
                <!-- <i class="fas fa-times"></i> -->
            </div>
            <div class="row">
                <div class="modal-image">
                    <img src="<?php echo CDN_URL; ?>img/modal/modal-02.png" alt="img">
                </div>
                <!--// Modal Image-->
                <div class="address-area">
                    <div class="address-content">
                        <h4 class="heading-04 padding-10">Visiting Hours</h4>
                        <ul>
                            <li class="items"><span class="days">Monday - Friday</span> <span class="timing">2 PM to 4 PM</span> </li>
                            <li class="items"><span class="days">Saturday</span> <span class="timing">1 PM to 4 PM</span> </li>
                            <li class="items"><span class="days">Sunday</span> <span class="timing">3 PM to 4 PM</span> </li>
                        </ul>
                        <h4 class="heading-04 padding-10">Phone Number</h4>
                        <ul>
                            <li class="items">+230 453 38463</li>
                            <li class="items">+230 345 24463</li>
                        </ul>
                    </div>
                </div>
                <!--// Modal Address Area-->
            </div>
        </div>
        <div class="location-popup">
            <div class="close-popup">×
                <!-- <i class="fas fa-times"></i> -->
            </div>
            <div class="row">
                <div id="google-map2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.1899657893728!2d90.42380431666383!3d23.779746865573756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7499f257eab%3A0xe6b4b9eacea70f4a!2sManama+Tower!5e0!3m2!1sen!2sbd!4v1561542597668!5m2!1sen!2sbd" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="address-area">
                    <div class="address-content">
                        <h4>Address</h4>
                        <p class="padding-30">24 Impasse Edgar, Rose Hill</p>
                        <div class="main-btn-wrap-2 modal-btn">
                            <a href="#" class="main-btn">Get Direction</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-popup">
            <div class="close-popup">×
                <!-- <i class="fas fa-times"></i> -->
            </div>
            <div class="row">
                <!--Appointment Section Start Here-->
                <div class="appointment-section style-02">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <!--// Appoing Title End Here-->
                                <div class="appointment-content">
                                    <div class="tab-content">
                                        <div class="appointment-img-area">
                                            <img src="<?php echo CDN_URL; ?>img/04.png" alt="img">
                                            <div class="doctor-info">
                                                <div class="name">
                                                    <h6 class="heading-06"> Dr George Abdreas Pompeia</h6>
                                                </div>
                                                <div class="designation">
                                                    <span>Specialist cardiologue</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="appointment-form-area">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" name="your_name" placeholder="Your Name" class="form-control margin-15">
                                                        <input type="email" name="your_email" placeholder="Your Email" class="form-control margin-15">
                                                        <div class="custom-select margin-15">
                                                            <select>
                                                                <option>Doctor Name</option>
                                                                <option>Doctor Name</option>
                                                                <option>Doctor Name</option>
                                                                <option>Doctor Name</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-select margin-15">
                                                            <select>
                                                                <option selected>Your Gender</option>
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="calendar-icon margin-15">
                                                            <span class="calendar">
                                                                <label for="datepicker">
                                                                    <input type="text" id="datepicker" class="form-control" autocomplete="off" placeholder="Date">
                                                                </label>
                                                            </span>
                                                            <span class="icon"><i class="fas fa-calendar-week"></i></span>
                                                        </div>
                                                        <div class="custom-select margin-15">
                                                            <select>
                                                                <option selected>Department</option>
                                                                <option>Department</option>
                                                                <option>Department</option>
                                                                <option>Department</option>
                                                                <option>Department</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-btn-wrap style-02">
                                                    <input class="main-btn" type="submit" value="Make Appointment">
                                                </div>
                                            </form>
                                            <!--// Form End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Appointment Section End Here-->
            </div>
        </div>
    </div>
</div>
<!--// Side Form Popup End Here-->

<!--Header Start Here-->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="header-area">
                <div class="logo-area">
                    <a href="<?php echo INDEX_PAGE;?>"><img src="<?php echo $logo; ?>" alt="Nav Logo" style="height: 75px;"></a>
                </div>

                <!--Delete nav-->

                <!--Navbar area end here-->
                <div class="search-area">
                    <div class="openSearchBtn">
                        <div class="search-icon">
                            <i class="flaticon-search"></i>
                        </div>
                    </div>
                    <div class="open-side-menu">
                        <div class="menu-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <!--Search area end here-->
                <div class="header-bg"></div>
            </div>
        </div>
    </div>
</header>
<!--Header Area End Here-->
