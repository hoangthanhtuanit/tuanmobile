<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Nhập dữ liệu </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<!-- Thêm thư viện -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor2/css/all.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="text-md-center">
				<h4 class="display-5"> Thêm mới sản phẩm</h3>
					<hr>
				</div>
				<form action="<?= base_url() ?>/index.php/themdulieu/addData" enctype="multidata/form-data" method="post" >
					<div class="form-group row">
						<label for="ten" class="col-sm-4 form-control-label text-md-right">Tên sản phẩm</label>
						<div class="col-sm-6">
							<input name="ten" type="text" class="form-control" id="ten" placeholder="Tên sản phẩm">
						</div> 
					</div>
					<div class="form-group row">
						<label for="tieude" class="col-sm-4 form-control-label text-md-right">Tiêu đề sản phẩm</label>
						<div class="col-sm-6">
							<input name="titlephone" type="text" class="form-control" id="titlephone" placeholder="Tiêu đề sản phẩm">
						</div> 
					</div>
					<div class="form-group row">
						<label for="mota" class="col-sm-4 form-control-label text-md-right">Mô tả</label>
						<div class="col-sm-6">
							<input name="description" type="text" class="form-control" id="description" placeholder="Mô tả sản phẩm">
						</div> 
					</div>
					<div class="form-group row">
						<label for="giatien" class="col-sm-4 form-control-label text-md-right">Giá tiền</label>
						<div class="col-sm-6">
							<input name="price" type="number" class="form-control" id="price" placeholder="Giá tiền">
						</div> 
					</div>
					<div class="form-group row">
						<label for="soluong" class="col-sm-4 form-control-label text-md-right">Số lượng</label>
						<div class="col-sm-6">
							<input name="quantity" type="number" class="form-control" id="quantity" placeholder="Số lượng">
						</div> 
					</div>
					<div class="form-group row">
						<label for="bangthong" class="col-sm-4 form-control-label text-md-right">Băng thông</label>
						<div class="col-sm-6">
							<input name="bangthong" type="text" class="form-control" id="bangthong" placeholder="Băng thông">
						</div> 
					</div>
					<div class="form-group row">
						<label for="cpu" class="col-sm-4 form-control-label text-md-right">CPU</label>
						<div class="col-sm-6">
							<input name="cpu" type="text" class="form-control" id="cpu" placeholder="CPU">
						</div> 
					</div>
					<div class="form-group row">
						<label for="dungluong" class="col-sm-4 form-control-label text-md-right">Dung lượng</label>
						<div class="col-sm-6">
							<input name="memory" type="text" class="form-control" id="memory" placeholder="Dung lượng">
						</div> 
					</div>
					<div class="form-group row">
						<label for="baomat" class="col-sm-4 form-control-label text-md-right">Bảo mật</label>
						<div class="col-sm-6">
							<input name="security" type="text" class="form-control" id="security" placeholder="Bảo mật">
						</div> 
					</div>
					<div class="form-group row">
						<label for="ram" class="col-sm-4 form-control-label text-md-right">RAM</label>
						<div class="col-sm-6">
							<input name="ram" type="text" class="form-control" id="ram" placeholder="RAM">
						</div> 
					</div>
					<div class="form-group row">
						<label for="cambien" class="col-sm-4 form-control-label text-md-right">Cảm biến</label>
						<div class="col-sm-6">
							<input name="cambien" type="text" class="form-control" id="cambien" placeholder="Cảm biến">
						</div> 
					</div>
					<div class="form-group row">
						<label for="pin" class="col-sm-4 form-control-label text-md-right">Dung lượng pin</label>
						<div class="col-sm-6">
							<input name="battery" type="text" class="form-control" id="battery" placeholder="Dung lượng pin">
						</div> 
					</div>
					<div class="form-group row">
						<label for="manhinh" class="col-sm-4 form-control-label text-md-right">Màn hình</label>
						<div class="col-sm-6">
							<input name="monitor" type="text" class="form-control" id="monitor" placeholder="Màn hình">
						</div> 
					</div>
					<div class="form-group row">
						<label for="cameratruoc" class="col-sm-4 form-control-label text-md-right">Camera trước</label>
						<div class="col-sm-6">
							<input name="cameratruoc" type="text" class="form-control" id="cameratruo" placeholder="Camera trước">
						</div> 
					</div>
					<div class="form-group row">
						<label for="camerasau" class="col-sm-4 form-control-label text-md-right">Camera sau</label>
						<div class="col-sm-6">
							<input name="camerasau" type="text" class="form-control" id="camerasau" placeholder="Camera sau">
						</div> 
					</div>
					<div class="form-group row">
						<label for="sim" class="col-sm-4 form-control-label text-md-right">Sim</label>
						<div class="col-sm-6">
							<input name="sim" type="text" class="form-control" id="sim" placeholder="Sim">
						</div> 
					</div>
					<div class="form-group row">
						<label for="mau" class="col-sm-4 form-control-label text-md-right">Màu</label>
						<div class="col-sm-6">
							<input name="mau" type="text" class="form-control" id="mau" placeholder="Màu">
						</div> 
					</div>
					<div class="form-group row">
						<label for="tinhtrang" class="col-sm-4 form-control-label text-md-right">Tình trạng sản phẩm</label>
						<div class="col-sm-6">
							<input name="trinhtrangsanpham" type="text" class="form-control" id="trinhtrangsanpham" placeholder="Tình trạng sản phẩm">
						</div> 
					</div>
					<div class="form-group row">
						<label for="anh" class="col-sm-4 form-control-label text-md-right ">Ảnh sản phẩm</label>
						<div class="col-sm-6">
							<input name="files[]" type="file" class="form-control" id="imagephone" placeholder="Upload anh">
						</div>
					</div>
					<div class="form-group row">
						<label for="khuyenmai" class="col-sm-4 form-control-label text-md-right">Khuyến mãi</label>
						<div class="col-sm-6">
							<input name="khuyenmai" type="text" class="form-control" id="khuyenmai" placeholder="Khuyễn mãi">
						</div> 
					</div>
					<div class="form-group row">
						<label for="danhmucsp" class="col-sm-4 form-control-label text-md-right">Danh mục sản phẩm</label>
						<div class="col-sm-6">
							<input name="category_id" type="text" class="form-control" id="category_id" placeholder="Danh mục sản phẩm">
						</div> 
					</div>
				</div>
				<div class="form-group row text-md-right">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-outline-success nutxulyajax">Thêm mới</button>
						<button type="reset" class="btn btn-outline-danger">Nhập lại</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>funcjs.js"></script>
</body>
</html>