<?= $this->extend('layout/wrapper') ?>

<?= $this->section('content') ?>

<!-- ======= Portfolio Details Section ======= -->

<div class="" style="padding-top:6rem">
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-12">
                    <div class="owl-carousel portfolio-details-carousel">
                        <?php foreach ($headers as $header) : ?>

                            <!-- <img src="<?= base_url(); ?>/image/home/slider2.jpg" class="img-fluid" alt="">
                        <img src="<?= base_url(); ?>/image/home/slider1.png" class="img-fluid" alt="">
                        <img src="<?= base_url(); ?>/image/home/slider3.png" class="img-fluid" alt=""> -->
                            <img src="<?= base_url('/Image/Headers/' . $header->image); ?>" class="img-fluid" alt="">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
    </section><!-- End Portfolio Details Section -->
</div>
<!-- Features -->
<main id="main">

    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
        <div class="container">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="content">
                        <h3>Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Corporis voluptates sit</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Ullamco laboris nisi</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-images"></i>
                                <h4>Labore consequatur</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-shield"></i>
                                <h4>Beatae veritatis</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </div>
                        </div>
                    </div>End .content
                </div>
            </div>

        </div>
    </section> -->
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url(); ?>/Image/Brand/autobio.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url(); ?>/image/Brand/dymind.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url(); ?>/image/Brand/fiocchetti.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url(); ?>/image/Brand/serosep.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url(); ?>/image/Brand/horron.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url(); ?>/image/Brand/smartlab.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2>Features</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row content">
                <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?= base_url(); ?>/Image/Product/A1000-1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                    <h3>Autolumo A1000</h3>
                    <p class="font-italic">
                        A1000 is the fully automatic Chemiluminescence immunoassay analyzer provided by Autobio It combines sophisticated technology and high performance,
                        A2000P is valued by its flexibility and quality.
                    </p>
                    <ul>
                        <li><i class="icofont-check"></i> Throughput: up to 100T/H.</li>
                        <li><i class="icofont-check"></i> Time to 1st result: approximate 20mins.</li>
                        <li><i class="icofont-check"></i> Loading capacity of 100 samples per batch.</li>
                        <li><i class="icofont-check"></i> Independent STAT Position available.</li>
                    </ul>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="<?= base_url(); ?>/Image/Product/histopot all.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3>Histopot Biopsy Sample Containers</h3>
                    <p class="font-italic">

                    </p>
                    <p>
                        Ready to Use, Cost Effective, Facilitating Lean Processing, the Serosep comprehensive range of pre-filled Histopot specimen containers for use in histology
                        and pathology laboratories are manufactured to the highest standard, using quality state of the art production techniques,
                        in a certified manufacturing facility.
                        HistoPot is a trusted brand that has built a reputation in the safety of Patients Biopsy Sample Fixation,
                        which is the single most important stage in the Histopathology process.
                    </p>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-5" data-aos="fade-right">
                    <img src="<?= base_url(); ?>/Image/Product/fiocchetti.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5" data-aos="fade-left">
                    <h3>Refrigerators, Freezers</h3>
                    <p>For more than 40 years Fiocchetti has been manufacturing refrigerators and freezers for a dedicated use in pharmacies, laboratories and hospitals. The respect of the strictest normative for this sector is always assured: sanitary,
                        biological thermosensitive products, needing a specific control on temperature, are granted optimal storage conditions.</p>
                    <ul>
                        <li><i class="icofont-check"></i> Temperature from -80°C to +15°C</li>
                        <li><i class="icofont-check"></i> 100 liters for minor needs to 1500 liters.</li>
                        <li><i class="icofont-check"></i> the system of stainless steel racks allows having an internal fitting mixing shelves and drawers perfectly interchangeable</li>
                    </ul>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="<?= base_url(); ?>/Image/Product/smartlab.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3>SmartLab Laboratory Information System</h3>
                    <p class="font-italic">
                        The Quest for a true web-based application came about from real needs for increased efficiently and remote global access.
                    </p>
                    <ul>
                        <li><i class="icofont-check"></i> Web-Based system and internet accesible</li>
                        <li><i class="icofont-check"></i> Auto backup system</li>
                        <li><i class="icofont-check"></i> Multi level security</li>
                        <li><i class="icofont-check"></i> HIS integrated</li>
                        <li><i class="icofont-check"></i> Customable management report</li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->
</main>
<?= $this->endSection(); ?>