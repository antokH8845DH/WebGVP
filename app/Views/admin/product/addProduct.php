<?= $this->extend('admin/layout/wrapper') ?>
<?= $this->section('head'); ?>
<script src="<?= base_url('/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?= base_url('/ckeditor5/build/ckeditor.js'); ?>"></script>
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
                    <h3 class="header-title">ADD PRODUCT</h3>
                    <form action="<?= site_url('Product/Product'); ?>" enctype="multipart/form-data" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" style="font-weight: bold;">CATEGORY</label>
                            <div class="col-sm-4">
                                <select name="idProductSubCategory" class="form-control" placeholder="Accesories Name">
                                    <option value=""></option>
                                    <?php foreach ($subCategories as $index => $subCategory) : ?>
                                        <option value="<?= $subCategory->idProductSubCategory; ?>"><?= $subCategory->subCategory; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label" style="font-weight: bold;">INSTRUMENT NAME</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="product_name" placeholder="Product Name">
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
                                <input type="text" class="form-control" name="product_brand" placeholder="Product Brand">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label" style="font-weight: bold;">IMAGES</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="product_image[]" multiple='multiple' placeholder="Product Brand">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label" style="font-weight: bold;">DESCRIPTION</label>
                            <div class="col-sm-9">
                                <textarea name="product_description" class="form-control" id="product_description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="font-weight: bold;">SPECIFICATION</label>
                            <div class="col-sm-9">
                                <textarea name="product_specification" class="form-control" id="product_specification" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="font-weight: bold;"><b>OTHER INFORMATION</b></label>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="font-weight: bold;">TITLE</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="judul_other"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="font-weight: bold;">INFORMATION</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="other_information" rows="3" name="other_information"></textarea>
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
<!-- <script>
    ClassicEditor
        .create(document.querySelector('#other_information'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#specification'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script> -->
<!-- <script>
    InlineEditor
        .create(document.querySelector('#product_description'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script> -->
<?= $this->endSection(); ?>