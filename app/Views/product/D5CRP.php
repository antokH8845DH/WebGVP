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
                        <img src="<?= base_url('/image/Product/D5CRP-1.png'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/D5CRP-2.png'); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 portfolio-info">
                    <h3>D5-CRP</h3>
                    <ul>
                        <li style=";"><strong>Category</strong>: 5-Diff Hematology Analyzer</li>
                        <li><strong>Brand</strong>: Dymind</li>
                        <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                    </ul>
                    <ul>
                        <li><strong>Specification :</strong></li>
                    </ul>
                    <p style="color: dimgray; ">
                        <i class="icofont-check"> Enhanced scattering immunoturbidimetry +Laser scatter</i><br>
                        <i class="icofont-check"> 5‐part differentiation + CRP, 30 parameters</i><br>
                        <i class="icofont-check"> Up to 60 samples per hour</i><br>
                        <i class="icofont-check"> CRP reagent internal cooling</i><br>
                        <i class="icofont-check"> 5 testing mode</i><br>
                        <i class="icofont-check"> Low sample consumption: 20µL only</i><br>
                        <i class="icofont-check"> Independent channel for Basophil measurement</i><br>
                        <i class="icofont-check"> Powerful capability to flag abnormal cells</i><br>
                        <i class="icofont-check"> Large storage capacity: up to 100,000 samples</i><br>
                        <i class="icofont-check"> Support bi‐directional LIS</i><br>
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
</div>

<?= $this->endSection('content') ?>
<?= $this->section('script'); ?>


<?= $this->endSection('script'); ?>