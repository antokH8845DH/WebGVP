<?= $this->extend('layout/wrapper') ?>
<?= $this->section('head') ?>

<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];

$repeatPassword = [
    'name' => 'repeatPassword',
    'id' => 'repeatPassword',
    'class' => 'form-control'
];

$session = session();
$errors = $session->getFlashdata('errors');
?>
<h1>LOGIN FORM</h1>

<section id="contact" class="contact section-bg" style="padding-top:8rem">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 mt-4 mb-4 mt-ml-0">
                <div class="row">
                    <div class="col-12">
                        <div class="info-box">
                            <h3>Login to WEBGVP</h3>
                            <div class="col-md-6 offset-md-3">
                                <?php if ($errors != null) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <!-- <h4 class="alert-heading">Terjadi Kesalahan</h4>
                                        <hr> -->
                                        <p class="mb-0">
                                            <?php
                                            foreach ($errors as $err) {
                                                echo $err . '<br>';
                                            }
                                            ?>
                                        </p>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div class="col-md-12 ">

                                <form action="<?= base_url('Auth/login'); ?>" method="post" role="form">
                                    <div class="form-group row col-md-6 offset-md-3">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="UserName" />
                                        <!-- <div class="validate"></div> -->
                                    </div>
                                    <div class="form-group row col-md-6 offset-md-3">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" />
                                        <!-- <div class="validate"></div> -->
                                    </div>
                                    <div class="mb-3">
                                        <!-- <div class="loading">Loading</div>
                                        <div class="error-message"></div> -->
                                        <!-- <div class="sent-message">Your data has been save. Please Login!</div> -->
                                    </div>
                                    <div class="text-center"><button type="submit">Login</button></div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection(); ?>