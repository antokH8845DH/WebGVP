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
                    // print_r($dataproducts);
                    // exit;
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
                    <h3 class="header-title">LIST PRODUCTS</h3>
                    <a href="<?= base_url('product/Product'); ?>" class="btn btn-outline-primary btn-sm mb-3" role="button">Add Product</a>
                    <!-- <a href="" class="btn btn-outline-primary btn-sm mb-3" href="#" role="button" data-toggle="modal" data-target="#modalProduct"><i class="fa fa-plus-circle"></i> Add Menu Product</a> -->
                    <!-- <a href="" class="btn btn-danger" data-toggle="modal" data-target="#modalPassword">Ganti Password</a> -->
                    <div class="modal fade" id="modalProduct" tabindex="-10" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= site_url(); ?>/product/addCategory" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Category</label>
                                            <div class="col-sm-7">
                                                <select name="idProductCategory" class="form-control ml-1" placeholder="Accesories Name">
                                                    <option value="">Choose Category</option>
                                                    <?php foreach ($subCategories as $index => $sub) : ?>
                                                        <option value="<?= $sub->idProductCategory; ?>"><?= $sub->subCategory; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Sub Category</label>
                                            <input type="text" class="col-sm-7 ml-2 form-control" name="subCategory">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Brand</th>
                                <th>Product Name</th>
                                <th>Action</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataproducts as $index => $product) : ?>
                                <tr>
                                    <th><?= ($index + 1) ?></th>
                                    <th><?= $product->category; ?></th>
                                    <th><?= $product->subCategory; ?></th>
                                    <th><?= $product->product_brand; ?></th>
                                    <th><?= $product->product_name; ?></th>
                                    <th><a href="<?= site_url('Product/editProduct/' . $product->idProductDetail); ?>" class="btn btn-xs btn-outline-warning">Edit</a>
                                        <a href="" class="btn btn-xs btn-outline-danger" data-toggle="modal" data-target="#modalDelete<?= $product->idProductDetail ?>">Delete</a>
                                        <div class="modal fade" id="modalDelete<?= $product->idProductDetail ?>" tabindex="-10" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Are You Sure To Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= site_url('/Product/delProduct/' . $product->idProductDetail); ?>" method="POST">
                                                        <div class="modal-body" style="text-align: left;">
                                                            <p>Product Brand : <?= $product->product_brand; ?></p>
                                                            <p>Product Name : <?= $product->product_name; ?></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-danger">Ya Hapus</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- data table end -->
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>

<?= $this->endSection(); ?>