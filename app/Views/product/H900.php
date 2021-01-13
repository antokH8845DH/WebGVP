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
                        <img src="<?= base_url('/image/Product/H900-1.png'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/H900-2.png'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/H900-3.png'); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 portfolio-info">
                    <h3>H900</h3>
                    <ul>
                        <li style=";"><strong>Category</strong>: Electrolyte Analyzer</li>
                        <li><strong>Brand</strong>: Horron</li>
                        <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                    </ul>
                    <ul>
                        <li><strong>Specification :</strong></li>
                    </ul>
                    <p style="color: dimgray; ">
                        <i class="icofont-check"> Parameter: K, Na, Cl, Ca, PH, TCO2, Ag, Li, Mg</i><br>
                        <i class="icofont-check"> Measuring method: Ion selective electrode (Direct ISE)</i><br>
                        <i class="icofont-check"> Auto-calibration solution A and B </i><br>
                        <i class="icofont-check"> 7” Color touch screen, easy to operate</i><br>
                        <i class="icofont-check"> Highly accurate,long-life electrode and TCO2 sensor</i><br>
                        <i class="icofont-check"> Reagent pack, real-time monitoring reagent residual volume</i><br>
                        <i class="icofont-check"> Up to 10,000 test results can be stored</i><br>
                        <i class="icofont-check"> RS-232 port, supporting bar-code reader</i><br>
                        <i class="icofont-check"> Sleep-mode reducing reagent consumption</i><br>
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