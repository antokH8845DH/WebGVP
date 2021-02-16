<?= $this->extend('admin/layout/wrapper') ?>
<?= $this->section('head'); ?>
<script src="<?= base_url('/ckeditor/ckeditor.js'); ?>"></script>
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
                    <h3 class="header-title">EDIT PRODUCT</h3>
                    <form action="<?= site_url('Product/editProduct/' . $detail->idProductDetail); ?>); ?>" enctype="multipart/form-data" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" style="font-weight: bold;">CATEGORY</label>
                            <div class="col-sm-4">
                                <select name="idProductSubCategory" class="form-control" placeholder="Accesories Name">
                                    <option value="<?= $subCat->idProductSubCategory; ?>"><?= $subCat->subCategory; ?></option>
                                    <?php foreach ($subCategories as $index => $subCategory) : ?>
                                        <option value="<?= $subCategory->idProductSubCategory; ?>"><?= $subCategory->subCategory; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label" style="font-weight: bold;">INSTRUMENT NAME</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="product_name" value="<?= $detail->product_name; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label" hidden>TYPE </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="product_tpye" placeholder="Product Type" hidden>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label" style="font-weight: bold;">BRAND </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="product_brand" value="<?= $detail->product_brand; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label" style="font-weight: bold;">IMAGES</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="product_image[]" multiple='multiple'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label" style="font-weight: bold;">DESCRIPTION</label>
                            <div class="col-sm-9">
                                <textarea name="product_description" class="form-control" id="product_description" rows="3"><?= $detail->product_description; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="font-weight: bold;">SPECIFICATION</label>
                            <div class="col-sm-9">
                                <textarea name="product_specification" class="form-control" id="product_specification" rows="3"><?= $detail->product_specification; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="font-weight: bold;"><b>OTHER INFORMATION</b></label>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="font-weight: bold;">TITLE</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="judul_other" value="<?= $detail->judul_other; ?> "></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="font-weight: bold;">INFORMATION</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="other_information" rows="3" name="other_information"><?= $detail->other_information; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="font-weight: bold;">ADDITIONAL IMAGE</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="other_image[]" multiple='multiple'>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Images Product</h4>
                    <?php foreach ($productImages as $PI) : ?>
                        <a href="" class="" data-toggle="modal" data-target="#modalView<?= $PI->idProductImage ?>"><img src="<?= base_url('/Image/Products/' . $PI->img) ?>" width="100px" class="img-thumbnail mt-1 ml-4"></a>
                        <!-- <a href="" class="" data-toggle="modal" data-target="#modalView<?= $PI->idProductImage ?>">View</a> -->
                        <div class="modal fade" id="modalView<?= $PI->idProductImage ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalCenterTitle"></h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="col-12">
                                                <img src="<?= base_url('/Image/Products/' . $PI->img) ?>" class="card-img mt-2 mb-2 mx-1" size="200px" alt="image">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <a href="" class="" data-toggle="modal" data-target="#modalHapus<?= $PI->idProductImage ?>">Delete</a>
                        <div class="modal fade bd-example-modal-lg" id="modalHapus<?= $PI->idProductImage ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Yakin Foto akan dihapus??</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= site_url('/Product/delProductImage/' . $PI->idProductImage); ?>" method="POST">
                                        <div class="modal-body" style="text-align: left;">
                                            <img src="<?= base_url('/Image/Products/' . $PI->img); ?>" width="300px" class="img-thumbnail">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger">Ya Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- <br><br> -->
                    <?php endforeach ?>
                    <h4 class="header-title mt-4">Other Image</h4>
                    <?php foreach ($otherImages as $OI) : ?>
                        <a href="" class="" data-toggle="modal" data-target="#modalView<?= $OI->idProductImage ?>"><img src="<?= base_url('/Image/Products/' . $OI->img) ?>" width="100px" class="img-thumbnail mt-1 ml-4"></a>
                        <div class="modal fade" id="modalView<?= $OI->idProductImage ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalCenterTitle"></h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="col-12">
                                                <img src="<?= base_url('/Image/Products/' . $OI->img) ?>" class="card-img mt-2 mb-2 mx-1" size="200px" alt="image">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <a href="" class="" data-toggle="modal" data-target="#modalHapus<?= $OI->idProductImage ?>">Delete</a>
                        <div class="modal fade bd-example-modal-lg" id="modalHapus<?= $OI->idProductImage ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Yakin Foto akan dihapus??</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= site_url('/Product/delProductImage/' . $OI->idProductImage); ?>" method="POST">
                                        <div class="modal-body" style="text-align: left;">
                                            <img src="<?= base_url('/Image/Products/' . $OI->img); ?>" width="300px" class="img-thumbnail">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger">Ya Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- data table end -->
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<style>
    .ck-editor__editable_inline {
        min-height: 200px;
    }
</style>
<script>
    CKEDITOR.replace('product_description');
    CKEDITOR.replace('product_specification');
    CKEDITOR.replace('other_information');
</script>

<?= $this->endSection(); ?>