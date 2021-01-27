<?= $this->extend('admin/layout/wrapper') ?>
<?= $this->section('head'); ?>
<!-- DataTables -->
<!-- <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->
<link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<?= $this->endSection(); ?>
<?= $this->section('adminContent') ?>
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <?php
                    $session = session();
                    $errors = $session->getFlashData('errors');
                    $success = $session->getFlashData('success');
                    $id_user = $session->get('id');

                    ?>
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
                    <?php endif; ?>
                    <?php if ($success != null) : ?>
                        <div class="alert alert-success mt-2" role="success">
                            <h4 class="alert-heading">SUKSES</h4>
                            <hr>
                            <p class="mb-0">
                                Data Telah Tersimpan
                            </p>
                        </div>
                    <?php endif ?>
                    <h3 class="header-title">ADD PRODUCTS</h3>
                    <?= form_open_multipart(base_url('product/addProduct')); ?>
                    <!-- <form action="<?= site_url('Product/addProduct'); ?>" method="POST"> -->

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-4">
                            <select name="idProductCategory" class="form-control" placeholder="Accesories Name">
                                <option value="">Choose Category</option>
                                <?php foreach ($categories as $index => $category) : ?>
                                    <option value="<?= $category->id; ?>"><?= $category->category; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label">INSTRUMENT NAME</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_Name" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label">TYPE </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_tpye" placeholder="Product Type">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label">BRAND </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_brand" placeholder="Product Brand">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label">DESCRIPTION</label>
                        <div class="col-sm-9">
                            <textarea name="product_description" class="form-control" id="exampleFormControlTextarea1" rows="3" name="problem_body"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">SPECIFICATION</label>
                        <div class="col-sm-9">
                            <textarea name="product_specification" class="form-control" id="exampleFormControlTextarea1" rows="3" name="action_body"></textarea>
                        </div>
                    </div>
                    <div class="form-goup row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">PHOTOS</label>
                        <div class="col-sm-9">
                            <input type="file" name="product_image[]" class="form-control" multiple="true">
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="#" class="btn btn-primary">Submit</a>
                    </div>
                    <?= form_close(); ?>
                    <!-- </form> -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- data table end -->
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>

<?= $this->endSection(); ?>