<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Đăng nhập </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<!-- Thêm thư viện -->
	

	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor2/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
</head>
<body style="color: #4e4e4e;background: #e2e2e2;">
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
					<nav class="navbar navbar-expand-lg">
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
	<section class="login-form">
		<h2 class="text-center">Thành viên đăng nhập</h2>
		<form action="/examples/actions/confirmation.php" method="post">
			<div class="avatar">
				<img src="<?php echo base_url(); ?>images/avartaruser.png" alt="Avatar">
			</div>           
			<div class="form-group">
				<input type="text" class="form-control input-lg" name="username" placeholder="Tên đăng nhập" required="required">	
			</div>
			<div class="form-group">
				<input type="password" class="form-control input-lg" name="password" placeholder="Mật khẩu" required="required">
			</div>        
			<div class="form-group clearfix">
				<label class="pull-left checkbox-inline"><input type="checkbox">Lưu đăng nhập</label>
				<button type="submit" class="btn btn-primary btn-lg pull-right">Đăng nhập</button>
			</div>		
		</form>
		<div class="hint-text">Bạn không có tài khoản? <a href="#">Đăng ký</a></div>
	</section>
	<!-- Hết form đăng nhập -->
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