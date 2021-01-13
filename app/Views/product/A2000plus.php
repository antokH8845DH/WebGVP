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
                        <img src="<?= base_url('/image/Product/A2000-1.jpg'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/A2000-2.jpg'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/A2000-3.jpg'); ?>" class="img-fluid" alt="">
                        <img src="<?= base_url('/image/Product/A2000-4.png'); ?>" class="img-fluid" alt="">
                    </div>
                </div>


                <div class="col-lg-6">
                    <h3>Autolumo A2000 plus</h3>
                    <ul>
                        <li style=";"><strong>Category</strong>: Immunoassay Analyzer</li>
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
                                Throughput: up to 200T/H.<br>
                                Time to 1st result: approximate 20 mins.<br>
                                RV loader capacity: 1000 pcs.<br>
                                Sample loading capacity: 100.<br>
                                <br>

                                Sample pipette volume: 5-150ul.<br>
                                STAT available.<br>
                                Sample dilution factor: 10-100.<br>
                                Liquid level detection and clot detection.<br>
                                <br>
                                Onboard reagent capacity: 24 racks.<br>
                                Onboard reagent storage: 4-10℃.<br>
                                Real-time replacement of reagent (by appointment).<br>
                                Reagent residue calculation: by the rest number left.<br>
                                <br>
                                Substrate: Substrate A+B.<br>
                                Substrate volume: 100ml for each.<br>
                                Substrate pipetting volume: 50ul fixed, CV<2%. <br>
                                    Substrate switching: 2 sets of substrates available on board by automatic switch.<br>
                                    Carry-over: <1ppm. Incubation temperature:37℃±0.5.<br>
                                        Reaction mode: 1 step and 2 steps.<br>
                                        Size (W*D*H, mm): 1374*950*1200. Weight: approximate 390kg.<br>
                                        Power supply: AC 100-230V, 50/60Hz，800VA.<br>
                                        Working temperature: 18-30℃.<br>
                                        LIS communication: based on RS232 port.
                        </div>
                        </p>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p style="color:dimgray">
                                ~ Throughput up to 200 tests/hour<br>
                                ~ Up to 100 sample loading capacity<br>
                                ~ Independent STAT position<br>
                                ~ Up to 24 reagents packs and storage onboard loading<br>
                                ~ Bulk supply an automated load of RVs<br>
                                ~ Fixed pippete probe needs no maintenance and loading of tips<br>
                                ~ On board dilution with two types diluent<br>
                                ~ 72 reaction position<br>
                                ~ More than 100 parameters<br>
                                ~ Powerfull data processing and visual management<br>
                                ~ Support bi‐directional LIS<br>
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