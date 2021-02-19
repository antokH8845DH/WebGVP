<?= $this->extend('admin/layout/wrapper') ?>
<?= $this->section('head'); ?>
<!-- DataTables -->
<!-- <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->
<link rel="stylesheet" href="<?= base_url(); ?>/BackEnd/srtdash/assets/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/BackEnd/srtdash/assets/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> -->
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
                    <h3 class="header-title">Header Image View</h3>
                    <h3 class="small">Edit main head images which is scrolling images at the first loading web</h3>
                    <a href="" class="btn btn-outline-primary btn-sm mt-3 mb-3" href="#" role="button" data-toggle="modal" data-target="#modalAddHeader"><i class="fa fa-plus-circle"></i> Add New Header</a>
                    <!-- <a href="" class="btn btn-danger" data-toggle="modal" data-target="#modalPassword">Ganti Password</a> -->
                    <div class="modal fade" id="modalAddHeader" tabindex="-10" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">ADD IMAGES</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= site_url(); ?>/Tampilan/addHeader" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label" style="font-weight: bold;">IMAGES</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="header_images[]" multiple="multiple">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <!-- <table class="table table-striped table-hover"> -->
                            <thead>
                                <tr style="text-align: center;">
                                    <th>No</th>
                                    <!-- <th>Order</th> -->
                                    <th>Image Header</th>
                                    <th>Active</th>
                                    <th></th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($headers as $index => $head) : ?>
                                    <tr>
                                        <th style="text-align: center;vertical-align:middle"><?= ($index + 1) ?></th>
                                        <!-- <th><?= $head->order; ?></th> -->
                                        <th>
                                            <a href="" class="" data-toggle="modal" data-target="#modalView<?= $head->idHeaderImage ?>"><img src="<?= base_url('/Image/Headers/' . $head->image) ?>" width="100px" class="img-thumbnail ml-1 mr-3"></a>
                                            <?= $head->original; ?>
                                            <div class="modal fade" id="modalView<?= $head->idHeaderImage ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title ml-4" id="exampleModalCenterTitle"><?= $head->original; ?></h6>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?= site_url('/Tampilan/editHeader/' . $head->idHeaderImage); ?>" method="POST">
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <div class="col-12">
                                                                        <img src="<?= base_url('/Image/Headers/' . $head->image) ?>" class="card-img mt-2 mb-2 mx-1" size="200px" alt="image">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success ml-3">
                                                                        <input name="active" type="checkbox" <?php if ($head->active == 'Y') {
                                                                                                                    echo 'checked';
                                                                                                                } else {
                                                                                                                }; ?> class="custom-control-input" id="customSwitch<?= ($index + 1) ?>" value="Y">
                                                                        <label class="custom-control-label" for="customSwitch<?= ($index + 1) ?>">Active</label>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-danger">Update</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        <th style="text-align: center;vertical-align:middle"><?= $head->active; ?></th>
                                        <th style="text-align: center;vertical-align:middle"></th>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- data table end -->
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>

<?= $this->endSection(); ?>