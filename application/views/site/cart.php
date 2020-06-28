<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('site/head'); ?>
</head>
<body>
	<a id="back_to_top" href="#" style="display: none;">
		<img src="<?php echo public_url()?>/site/images/top.png">
	</a>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="header">
					<?php $this->load->view('site/header'); ?>
				</div>

				<div class="phanthan">
					<nav aria-label="breadcrumb" style="padding-left: 20px; padding-right: 20px; padding-top: 25px;">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
						</ol>
					</nav>
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
								<button type="button" class="btn btn-primary" href="<?php echo base_url('home') ?>">Chọn thêm sản phẩm</button>
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
									<a href="<?php echo base_url('test1') ?>">Chính sách bảo hành</a><br>
									<a href="<?php echo base_url('test1') ?>">Chính sách đổi trả</a><br>
									<a href="">Giao hàng & thanh toán</a>
								</div>
								<div class="col-12 col-sm-12 col-lg-3">
									<a href="<?php echo base_url('test2') ?>">Giới thiệu về công ty</a><br>
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
					<div class="clear"></div>
				</div>
				<center>
					<img src="<?php echo public_url()?>/site/images/bank.png">
				</center>
			</div>
		</div>
	</div>
	<div class="footer">
		<?php $this->load->view('site/footer'); ?>
	</div>
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