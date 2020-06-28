<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Giỏ hàng </title>
	<!-- Thêm thư viện -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor2/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
</head>
<body>
	<section class="topheader">
		<div class="container p-0">
			<div class="row">
				<div class="col-sm-4 col-lg-8">
					<i class="fas fa-phone"></i>
					036-408-1626
				</div>
				<div class="m-8 col-lg-4 menutoph">
					<div class="row">
						<div class="col-4">
							<span class="float-right">
								<i class="fas fa-user-tie"></i>
								<a href="#">Đăng nhập</a>
							</span>
						</div>
						<div class="col-4">
							<span class="float-right">
								<i class="fas fa-key"></i>
								<a href="#">Đăng ký</a>
							</span>
						</div>
						<div class="col-4">
							<span class="float-right">
								<i class="fas fa-shopping-cart"></i>
								<a href="#">Giỏ hàng</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- 	Hết topheader -->
	<section class="menutop" id="bkcolor1">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<nav class="navbar navbar-expand-lg navbar-dark bg-success">
						<a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>images/logo1.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item active">
									<a class="nav-link" href="#"> Trang chủ <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Điện thoại
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="#"> Iphone </a>
										<a class="dropdown-item" href="#">Samsung</a>
										<a class="dropdown-item" href="#">HTC</a>
										<a class="dropdown-item" href="#">LG</a>
										<a class="dropdown-item" href="#">Huawei</a>
										<a class="dropdown-item" href="#">Xiaomi</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Máy tính bảng
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="#"> Ipad </a>
										<a class="dropdown-item" href="#">Samsung</a>
										<a class="dropdown-item" href="#">Xiaomi</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Phụ kiện</a>
								</li>
							</ul>
							<form class="form-inline my-2 my-lg-0">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- Hết menu top -->
	<section class="giohang my-5">
		<div class="container text-center">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col" style="width:5%">#</th>
						<th scope="col">TÊN SẢN PHẨM</th>
						<th scope="col" style="width:10%">SỐ LƯỢNG</th>
						<th scope="col" style="width:12%">ĐƠN GIÁ</th>
						<th scope="col" style="width:12%">THÀNH TIỀN</th>
						<th scope="col" style="width:5%">XÓA</th>
					</tr>
				</thead>
				<tbody>
					<tr class="cart-item">
						<th scope="row">1</th>
						<td>
							<div class="row align-items-center">
								<div class="col-md-2">
									<div class="cart-p-img">
										<img class="img-fluid" src="<?php echo base_url(); ?>images/sp1_1.png" alt="">
									</div>
								</div>
								<div class="col-md-10">
									<div class="cart-p-info">
										<a class="cart-name" href=""><b>iPhone 6 Plus 16GB Trôi Bảo Hành Nguyên hộp, chưa kích hoạt, hàng Nhật</b></a>
										<p class="cart-p-id">Mã sản phẩm: SP001</p>
										<p class="cart-warranty">Bảo hành 12 tháng</p>
									</div>
								</div>
							</div>
						</td>
						<td>
							<div class="quantity">
								<input type="number" class="w-75" value="1" min="1">
							</div>
						</td>
						<td>6.390.000 đ</td>
						<td>6.390.000 đ</td>
						<td class="actions" data-th="">
							<button class="btn btn-outline-danger"><i class="fas fa-times"></i></button>
						</td>
					</tr>
					<tr class="cart-item">
						<th scope="row">2</th>
						<td>
							<div class="row align-items-center">
								<div class="col-md-2">
									<div class="cart-p-img">
										<img class="img-fluid" src="<?php echo base_url(); ?>images/sp1_1.png" alt="">
									</div>
								</div>
								<div class="col-md-10">
									<div class="cart-p-info">
										<a class="cart-name" href=""><b>iPhone 6 Plus 16GB Trôi Bảo Hành Nguyên hộp, chưa kích hoạt, hàng Nhật</b></a>
										<p class="cart-p-id">Mã sản phẩm: SP001</p>
										<p class="cart-warranty">Bảo hành 12 tháng</p>
									</div>
								</div>
							</div>
						</td>
						<td>
							<div class="quantity">
								<input type="number" class="w-75" value="1" min="1">
							</div>
						</td>
						<td>6.390.000 đ</td>
						<td>6.390.000 đ</td>
						<td class="actions" data-th="">
							<button class="btn btn-outline-danger"><i class="fas fa-times"></i></button>
						</td>
					</tr>
					<tr class="cart-item">
						<th scope="row">3</th>
						<td>
							<div class="row align-items-center">
								<div class="col-md-2">
									<div class="cart-p-img">
										<img class="img-fluid" src="<?php echo base_url(); ?>images/sp1_1.png" alt="">
									</div>
								</div>
								<div class="col-md-10">
									<div class="cart-p-info">
										<a class="cart-name" href=""><b>iPhone 6 Plus 16GB Trôi Bảo Hành Nguyên hộp, chưa kích hoạt, hàng Nhật</b></a>
										<p class="cart-p-id">Mã sản phẩm: SP001</p>
										<p class="cart-warranty">Bảo hành 12 tháng</p>
									</div>
								</div>
							</div>
						</td>
						<td>
							<div class="quantity">
								<input type="number" class="w-75" value="1" min="1">
							</div>
						</td>
						<td>6.390.000 đ</td>
						<td>6.390.000 đ</td>
						<td class="actions" data-th="">
							<button class="btn btn-outline-danger"><i class="fas fa-times"></i></button>
						</td>
					</tr>
					<tr>
						<td colspan="2"></td>
						<td colspan="4">
							<div class="cart-sumup">
								Tổng tiền: <span class="tong-tien">19.170.000</span> <u><b>đ</b></u>
								<br>
								<small><i>(đã bao gồm VAT)</i></small>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="cart-button text-right">
				<button type="button" class="btn btn-primary">Chọn thêm sản phẩm</button>
				<button type="button" class="btn btn-danger">Thanh toán</button>
			</div>
		</div>
	</section>
		<!-- Hết giỏ hàng -->
	<section class="ht_hfooter bkhf1">
		<div class="container bkhf2">
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="row">
						<div class="col-2">
							<i class="far fa-question-circle"></i>
						</div>
						<div class="col-10">
							<strong>HỎI ĐÁP</strong>
							<br>Mua hàng online
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="row">
						<div class="col-2">
							<i class="fas fa-sync"></i>
						</div>
						<div class="col-10">
							<strong>ĐỔI TRẢ HÀNG</strong>
							<br>Dễ dàng lên đến 45 ngày
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="row">
						<div class="col-2">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="col-10">
							<strong>MIỄN PHÍ</strong>
							<br>Vận chuyển toàn quốc
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hết ht_footer -->
	<section class="ht_midfooter">
		<div class="container ht_footer_bg">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-3">
					<a href="">Tìm hiểu về mua trả góp</a><br>
					<a href="">Chính sách bảo hành</a><br>
					<a href="">Chính sách đổi trả</a><br>
					<a href="">Giao hàng & thanh toán</a>
				</div>
				<div class="col-12 col-sm-12 col-lg-3">
					<a href="">Giới thiệu về công ty</a><br>
					<a href="">Tuyển dụng</a><br>
					<a href="">Góp ý kiến và khiếu nại</a><br>
					<a href="">Tìm cửa hàng</a><br>
					<a href="">Xem bản đồ online</a>
				</div>
				<div class="col-12 col-sm-12 col-lg-3 ht_sdt">
					Gọi mua hàng: <strong>036.408.1626</strong><br>
					Gọi khiếu nại: <strong>0987.777.777</strong><br>
					Gọi bảo hành: <strong>0989.999.999</strong><br>
					Hỗ trợ kỹ thuật: <strong>0968.68.68.68</strong>
				</div>
				<div class="col-12 col-sm-12 col-lg-3">
					<div class="row">
						<div class="col-4">
							<i class="fab fa-cc-visa"></i>
						</div>
						<div class="col-4">
							<i class="fab fa-cc-mastercard"></i>
						</div>
						<div class="col-4">
							<i class="fab fa-cc-jcb"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hết ht_midfooter -->
	<footer class="footer">
		Copyright © 2018 - TuanHoangMobile Designed by FB_ThanhTuan
	</footer>
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