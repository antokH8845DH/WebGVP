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
                    // $success = $session->getFlashData('flash');
                    // $success = $session->getFlashData('success');
                    $id_user = $session->get('id');

                    $eror = '';
                    if ($errors != null) {
                        foreach ($errors as $err) {
                            $eror .=   $err . ' | ';
                            // foreach ($ARRAY as $item) { $STRING .= $item; }
                        }
                    }
                    ?>
                    <div class="flash-data" data-flashdata="<?= $session->getFlashData('flash'); ?>"></div>
                    <div class="flash-error" data-flasherror="<?= $eror; ?>"></div>

                    <h3 class="header-title">Data Sub Category Products</h3>
                    <a href="" class="btn btn-outline-primary btn-sm mb-3" href="#" role="button" data-toggle="modal" data-target="#modalProduct"><i class="fa fa-plus-circle"></i> Add Menu Product</a>
                    <!-- <a href="" class="btn btn-danger" data-toggle="modal" data-target="#modalPassword">Ganti Password</a> -->
                    <div class="modal fade" id="modalProduct" tabindex="-10" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">ADD SUB-CATEGORY</h5>
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
                                                    <?php foreach ($categories as $index => $category) : ?>
                                                        <option value="<?= $category->idProductCategory; ?>"><?= $category->category; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Is Header?</label>
                                            <div class="col-sm-7">
                                                <select name="header" class="form-control ml-1">
                                                    <option value="Y">Yes</option>
                                                    <option value="N">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Sub Category</label>
                                            <input type="text" class="col-sm-7 ml-3 form-control" name="subCategory">
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
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $index => $product) : ?>
                                <tr>
                                    <th><?= ($index + 1) ?></th>
                                    <th><?= $product->category; ?></th>
                                    <th><?= $product->subCategory; ?></th>
                                    <!-- <th><?= $product->subCategory; ?></th> -->
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