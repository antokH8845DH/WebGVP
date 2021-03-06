<?= $this->extend('layout/wrapper') ?>
<?= $this->section('head') ?>

<script src="<?= base_url(); ?>/leaflet/leaflet.js"></script>
<link rel="stylesheet" href="<?= base_url(); ?>/leaflet/leaflet.css">
<style>
    #maps {
        height: 500px;
        width: 900px;
    }

    @media (max-width: 992px) {
        #maps {
            height: 250px;
            max-width: 90%;

        }
    }
</style>

<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- Features -->




<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">



        <div class="section-title">
            <p>contact</p><br><br>
            <h2>Contact Us</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">


            <div class="col-lg-12 mt-4 mb-4 mt-ml-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <div id="maps" class="bx ">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>HEAD OFFICE</p>
                            <p>Jl. Sukarno-Hatta 8A, Semarang, Central Java, Indonesia</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>customer.service@gvp.co.id</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>(+62 24) 76729175</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 mt-4 mt-md-0 mb-4">
                <form action="<?= base_url('Home/sendEmail'); ?>" method="post" class="php-email-form">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="institution" class="form-control" placeholder="Institution" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Your phone number" data-rule="phone" data-msg="Please enter a valid phone" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

<?= $this->endSection(); ?>

<?= $this->section('script') ?>
<!-- leaflet js -->
<script>
    var map = L.map('maps').setView([-6.9859790145978184, 110.45528931245771], 7);
    // var map = L.map('maps').setView([-6.9859790145978184, 110.45528931245771], 5);
    // -5.827924796624273, 105.7695528550431
    // -8.802435402650714, 114.6904511492699

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    map.locate({
        setView: true,
        maxZoom: 7
    });

    function onLocationFound(e) {
        var radius = e.accuracy;
        var gvpIcon = L.icon({
            iconUrl: '/Image/gvpicon.png',
            // shadowUrl: 'leaf-shadow.png',

            // iconSize: [38, 95], // size of the icon
            shadowSize: [50, 64], // size of the shadow
            iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
            // shadowAnchor: [4, 62], // the same for the shadow
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });
        const lokasi = e.latlng;
        console.log(e.latlng);
        L.marker([-6.9859790145978184, 110.45528931245771]).addTo(map)
            .bindPopup('GVP Head Office')
            .openPopup();
        L.marker([-6.19941, 106.89318]).addTo(map)
            .bindPopup('Representative Jakarta')
        L.marker([-7.31641, 112.71820]).addTo(map)
            .bindPopup('Representative Surabaya')
        L.marker([-6.906668581596631, 107.64540635853554]).addTo(map)
            .bindPopup('Representative Bandung')


        L.marker(lokasi).addTo(map)
            .bindPopup("You are within " + radius + " meters from this point").openPopup();

        L.circle(e.latlng, radius).addTo(map);

    }
    map.on('locationfound', onLocationFound);
    // .openPopup();
</script>
<?= $this->endSection() ?>