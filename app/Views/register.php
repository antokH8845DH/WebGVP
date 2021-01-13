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
<h1>Register Form</h1>
<?php if ($errors != null) : ?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Terjadi Kesalahan</h4>
        <hr>
        <p class="mb-0">
            <?php
            foreach ($errors as $err) {
                echo $err . '<br>';
            }
            ?>
        </p>
    </div>
<?php endif ?>
<section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 mt-4 mb-4 mt-ml-0">
                <div class="row">
                    <div class="col-12">
                        <div class="info-box">
                            <h3>Register to WEBGVP</h3>
                            <div class="col-md-12 mx-auto">
                                <form action="<?= base_url('Auth/register'); ?>" method="post" role="form" class="php-email-form">
                                    <div class="form-group row col-md-6 mx-auto">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="UserName" data-rule="minlen:4" data-msg="Please enter at least 4 chars" name="username" />
                                        <!-- <div class="validate"></div> -->
                                    </div>
                                    <div class="form-group row col-md-6 mx-auto">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <!-- <div class="validate"></div> -->
                                    </div>
                                    <div class="form-group row col-md-6 mx-auto">
                                        <label for="password">Re-type Password</label>
                                        <input type="password" class="form-control" name="repeatPassword" id="repeatPassword" placeholder="Re-type Password" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <!-- <div class="validate"></div> -->
                                    </div>
                                    <div class="mb-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your data has been save. Please Login!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Register</button></div>
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