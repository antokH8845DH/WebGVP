<?php

use App\Controllers\Product;
?>
<?= $this->extend('layout/wrapper') ?>
<?= $this->section('head') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/FrontEnd/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/FrontEnd/styles/about_responsive.css">

<?= $this->endSection('head') ?>
<?= $this->section('content') ?>

<div class="" style="padding-top:8rem">
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8">
                    <div class="owl-carousel portfolio-details-carousel" style="text-align: center;">
                        <img src="<?= base_url('/image/Product/DH36.png'); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 portfolio-info">
                    <h3>DH36</h3>
                    <ul>
                        <li style=";"><strong>Category</strong>: 3-Diff Hematology Analyzer</li>
                        <li><strong>Brand</strong>: Dymind</li>
                        <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                    </ul>
                    <ul>
                        <li><strong>Specification :</strong></li>
                    </ul>
                    <p style="color: dimgray; ">
                        <i class="icofont-check"> 21 parameters</i><br>
                        <i class="icofont-check"> Low sample consumption: 10µL only</i><br>
                        <i class="icofont-check"> 10.4 inch LCD touch screen</i><br>
                        <i class="icofont-check"> Up to 60 samples per hour</i><br>
                        <i class="icofont-check"> Excellent repeatability and wider linearity range</i><br>
                        <i class="icofont-check"> Powerful capability to flag abnormal cellsy</i><br>
                        <i class="icofont-check"> Large storage capacity: up to 50,000 samples</i><br>
                        <i class="icofont-check"> Both thermal printer and USB external printer are supported</i><br>
                        <i class="icofont-check"> Large storage capacity: up to 100,000 samples</i><br>
                        <i class="icofont-check"> No need flushing fluid</i><br>
                        <i class="icofont-check"> Support LIS</i><br>
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
</div>

<?= $this->endSection('content') ?>
<?= $this->section('script'); ?>


<?= $this->endSection('script'); ?>