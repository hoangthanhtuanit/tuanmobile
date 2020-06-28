<?php require_once 'header.php'; ?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Thêm mới danh mục</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Danh mục sản phẩm</li>
                            <li class="breadcrumb-item active">Thêm danh mục</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="container">
                        <form method="post" enctype="multidata/form-data" action="<?= base_url(); ?>index.php/danhmuc/danhmuc_add">
                            <div class="form-group row">
                                <div class="col-sm-2 text-right">
                                    <label for="tendm"><b>Tên danh mục: </b></label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tendm" name="tendm" placeholder="Nhập tên danh mục ở đây">
                                </div>
                            </div>
                            <div class="form-group row text-sm-center">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END container-fluid -->
    </div>
    <!-- END content -->
</div>
<!-- END content-page-->
<?php require_once 'footer.php'; ?>