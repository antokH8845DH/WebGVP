<header class="header">

    <!-- Top Bar -->
    <div class="top_bar">
        <div class="top_bar_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <ul class="top_bar_contact_list">
                                <li>
                                    <div class="question">Have any questions?</div>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div>(+62 24) 76729175</div>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <div>cs.marketing@gvp.co.id</div>
                                </li>
                            </ul>
                            <div class="top_bar_login ml-auto">
                                <div class="login_button"><a href="<?= base_url('Auth/Login'); ?>">Login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="#">
                                <!-- <div class="logo_text">Unic<span>at</span></div> -->
                                <div class="logo_text"><img src="<?= base_url(); ?>/image/gvp.png" width="220px" alt=""> </span></div>
                            </a>
                        </div>

                        <nav class="nav-menu d-none d-lg-block">
                            <ul>
                                <li class="active"><a href="<?= base_url('Home'); ?>">Home</a></li>
                                <li><a href="<?= base_url('/aboutUs'); ?>">About</a></li>
                                <li class="drop-down"><a href="#">Product</a>
                                    <ul>
                                        <!-- <li><a href="#">Drop Down 1</a></li> -->
                                        <li class="drop-down"><a href="#">Analyzers</a>
                                            <ul>
                                                <li class="drop-down"><a href="#">Hematology</a>
                                                    <ul>
                                                        <li><a href="<?= base_url('/product/DH36'); ?>">Dymind DH36</a></li>
                                                        <li><a href="<?= base_url('/product/D5CRP'); ?>">Dymind D5CRP</a></li>
                                                    </ul>
                                                <li class="drop-down"><a href="#">Immunology</a>
                                                    <ul>
                                                        <li><a href="<?= base_url('/product/A1000'); ?>">Autolumo A1000</a></li>
                                                        <li><a href="<?= base_url('/product/A2000plus'); ?>">Autolumo A2000plus</a></li>
                                                    </ul>
                                                </li>
                                                <li class="drop-down"><a href="#">Chlinical Chemistry</a>
                                                    <ul>
                                                        <!-- <li><a href="#">GS200</a></li>
                                                        <li><a href="#">GS400</a></li> -->
                                                        <li><a href="<?= base_url('/product/MS480'); ?>">MS480</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?= base_url('/product/H900'); ?>">Electrolyte</a></li>
                                                <li><a href="#">Protein</a></li>
                                                <li><a href="#">Coagulation</a></li>
                                                <li><a href="#">ESR</a></li>
                                                <li><a href="#">Urine</a></li>
                                            </ul>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li class="drop-down"><a href="#">Pre-Analytic Module</a>
                                            <ul>
                                                <li class="drop-down"><a href="#">Automatic Tube Labeler</a>
                                                    <!-- <ul>
                                                        <li><a href="#">Select</a></li>
                                                        <li><a href="#">Select-u</a></li>
                                                    </ul> -->
                                                </li>
                                                <li><a href="#">Pre-filled Speciment Container</a></li>
                                            </ul>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li class="drop-down"><a href="#">Healthcare System</a>
                                            <ul>
                                                <li><a href="#">Laboratory Information System</a></li>
                                            </ul>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li class="drop-down"><a href="#">Medical Refrigerator</a>
                                            <ul>
                                                <li><a href="#">Refrigerators</a></li>
                                                <li><a href="#">Freezers</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="#">Services</a></li>
                                <li><a href="<?= base_url('News'); ?>">News</a></li>
                                <li><a href="<?= base_url('Career'); ?>">Career</a></li>
                                <!-- <li><a href="<?= base_url('Auth/Register'); ?>">register</a></li> -->
                                <li><a href="<?= base_url('ContactUs'); ?>">Contact</a></li>

                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Search Panel -->
    <div class="header_search_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#" class="header_search_form">
                            <input type="search" class="search_input" placeholder="Search" required="required">
                            <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>