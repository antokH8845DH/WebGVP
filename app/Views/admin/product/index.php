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
                    <h3 class="header-title">Data Products</h3>
                    <a class="btn btn-outline-primary btn-sm mb-3" href="#" role="button"><i class="fa fa-plus-circle"></i> Add Menu Product</a>
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
                            <?php foreach ($products as $index => $products) : ?>
                                <tr>
                                    <th><?= ($index + 1) ?></th>
                                    <th><?= $products->idProductCategory; ?></th>
                                    <th><?= $products->subCategory; ?></th>
                                    <!-- <th><?= $products->subCategory; ?></th> -->
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