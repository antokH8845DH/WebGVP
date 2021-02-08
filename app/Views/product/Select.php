<?php

use App\Controllers\Product;
?>
<?= $this->extend('layout/wrapper') ?>
<?= $this->section('head') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/FrontEnd/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/FrontEnd/styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/cssku/cssku.css">
<?= $this->endSection('head') ?>
<?= $this->section('content') ?>

<div class="" style="padding-top:8rem">
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-6">
                    <div class="owl-carousel portfolio-details-carousel" style="text-align: center;">
                        <img src="<?= base_url('/image/Product/A1000.png'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/A1000-2.png'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/A1000-3.png'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/A1000-4.png'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/A1000-5.png'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/A1000-6.png'); ?>" class="img-fluid" alt="">
                    </div>
                </div>


                <div class="col-lg-6">
                    <h3>Autolumo A1000</h3>
                    <ul>
                        <li><strong>Category</strong>: Immunoassay Analyzer</li>
                        <li><strong>Brand</strong>: Autolumo</li>
                        <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                    </ul>

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Specification</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p style="color:dimgray">
                                Throughput: up to 100T/H.<br>
                                Time to 1st result: approximate 20mins.<br>

                                Sample dilution factor: usually ≤50<br>
                                Liquid level detection and clot detection<br>
                                Anti-collision & warning for air suction<br>
                                and blocking supported<br>
                                <br>
                                Sample Loading Module<br>
                                Loading capacity of 100 samples per batch (5 samples per rack)<br>
                                Continuous loading and offloading supported<br>
                                Independent STAT Position available<br>
                                Random access<br>
                                <br>
                                Substrate vial volume: 100 ml per bottle<br>
                                Temperature: 42℃ ± 0.5℃, constant heating<br>
                                Substrate pipetting CV: < 2% at 50μl Fixed Pipette Probe Module Precise syringe system ensures the low carryover Intelligent liquid level and clot detection system Teflon pipette without disposal tips Vertical and horizontal collision protection Sampling volume: 5-150 μl On board sample dilution : 1 : 100 <br>
                            </p>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p style="color:dimgray">
                                ~ Throughput up to 100 tests/hour</i><br>
                                ~ Up to 100 sample loading capacity</i><br>
                                ~ Independent STAT position</i><br>
                                ~ Up to 24 reagents packs and storage onboard loading</i><br>
                                ~ Up to 240 pcs RV capacity and continous loading</i><br>
                                ~ Pricise syringe system</i><br>
                                ~ 72 reaction position</i><br>
                                ~ More than 100 parameters</i><br>
                                ~ Powerfull data processing and visual management</i><br>
                                ~ Support bi‐directional LIS</i><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features" data-aos="fade-up">
        <div class="container">
            <div class="section-title" style="text-align: center;">
                <h2>Parameter Items</h2>
                <p style="color:dimgray">more than 100's parameters which can used to </p>
            </div>
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?= base_url(); ?>/image/product/parametersAutobio.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
</div>

<?= $this->endSection('content') ?>
<?= $this->section('script'); ?>


<?= $this->endSection('script'); ?>