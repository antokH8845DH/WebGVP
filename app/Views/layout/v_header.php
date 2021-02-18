<header class="header">
    <?php
    $categoryProductModel =  new \App\Models\CategoryProductModel();
    $catentity = new \App\Entities\CategoryProduct();
    $categories =  $categoryProductModel->where('active', 'Y')->findAll();
    ?>
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
                                    <div>customer.service@gvp.co.id</div>
                                </li>
                            </ul>
                            <div class="top_bar_login ml-auto">
                                <div class="login_button"><a href="<?= site_url('Auth/Login'); ?>">Login</a></div>
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
                                <li class="active"><a href="<?= site_url('Home'); ?>">Home</a></li>
                                <li><a href="<?= site_url('/aboutUs'); ?>">About</a></li>

                                <li class="drop-down"><a href="#">Product</a>
                                    <ul>
                                        <?php foreach ($categories as $product) : ?>
                                            <li class="drop-down"><a href="#"><?= $product->category; ?></a>
                                                <ul>
                                                    <?php
                                                    $SubCategoryProductModel = new \App\Models\SubCategoryProductModel();
                                                    $subCategory = $SubCategoryProductModel->where(['idProductCategory' => $product->idProductCategory, 'active' => 'Y'])->findAll();
                                                    foreach ($subCategory as $sub) :
                                                        $drop = $sub->header;
                                                        if ($drop == 'Y') :     ?>
                                                            <li class="drop-down"><a href="#"><?= $sub->subCategory; ?></a>
                                                            <?php else : ?>
                                                            <li class=""><a href="#"><?= $sub->subCategory; ?></a>
                                                            <?php endif ?>
                                                            <ul>
                                                                <?php
                                                                $productDetailModel = new \App\Models\ProductDetailModel();
                                                                $details = $productDetailModel->where(['idProductSubCategory' => $sub->idProductSubCategory, 'active' => 'Y'])->findAll();
                                                                foreach ($details as $detail) :
                                                                ?>
                                                                    <li><a href="<?= site_url('/Product/Detail/' . $detail->idProductDetail); ?>"><?= $detail->product_name; ?></a></li>
                                                                <?php endforeach ?>
                                                            </ul>
                                                            </li>
                                                        <?php endforeach ?>
                                                </ul>
                                            </li>
                                            <div class="dropdown-divider"></div>
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <li><a href="#">Services</a></li>
                                <li><a href="<?= site_url('News'); ?>">News</a></li>
                                <li><a href="<?= site_url('Career'); ?>">Career</a></li>
                                <!-- <li><a href="<?= site_url('Auth/Register'); ?>">register</a></li> -->
                                <li><a href="<?= site_url('ContactUs'); ?>">Contact</a></li>

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