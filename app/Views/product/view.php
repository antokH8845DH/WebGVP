<?= $this->extend('layout/wrapper') ?>
<?= $this->section('head') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/FrontEnd/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/FrontEnd/styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/cssku/cssku.css">
<?= $this->endSection('head') ?>
<?= $this->section('content') ?>


<div class="" style="padding-top:6rem">
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-6 mt-2">
                    <div class="owl-carousel portfolio-details-carousel" style="text-align: center;">
                        <?php

                        use Psr\Log\NullLogger;

                        foreach ($images as $image) : ?>
                            <img src="<?= base_url('/Image/Products/' . $image->img); ?>" class="img-fluid" alt="">
                        <?php endforeach ?>
                    </div>
                </div>


                <div class="col-lg-6 mt-4">

                    <h3><?= $detail->product_name
                        ?></h3>
                    <ul>
                        <li style=";"><strong>Category</strong>: <?= $detail->subCategory; ?></li>
                        <li><strong>Brand</strong>: <?= $detail->product_brand; ?></li>
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
                                <?= $detail->product_description; ?>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p style="color:dimgray">
                                <?= $detail->product_specification; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features" data-aos="fade-up">
        <div class="container">
            <div class="section-title" style="text-align: center;">
                <h2><?= $detail->judul_other; ?></h2>
                <p style="color:dimgray"><?= $detail->other_information; ?> </p>
            </div>
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <?php
                    // $Cek = $otherImages->img;
                    if ($otherImages <> '') : ?>
                        <img src="<?= base_url('/Image/Products/' . $otherImages->img); ?>" class="img-fluid" alt="">
                    <?php endif ?>
                </div>
            </div>
        </div>

    </section>
</div>

<?= $this->endSection('content') ?>
<?= $this->section('script'); ?>


<?= $this->endSection('script'); ?>