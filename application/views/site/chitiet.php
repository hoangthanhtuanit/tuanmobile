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
					<section class="vunbanhmi">
						<div class="container p-0">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">
										<i class="fas fa-home"></i>
										Trang chủ
									</a></li>
									<li class="breadcrumb-item"><a href="#"></a>Iphone</li>
									<li class="breadcrumb-item active" aria-current="page"><?php echo $product->tensp ?></li>
								</ol>
							</nav>
						</div>
					</section>
					<!-- Hết vụn bánh mì -->
					<section class="ht_midctsp">
						<div class="container">
							<div class="ht_single_title">
								<h3 class="product_title">
									<?php echo $product->tensp ?>
									<span class="ht_subtitle"><?php echo $product->title ?></span>
								</h3>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="row" class="ctspanh">
										<img src="<?php echo base_url('upload/product/'.$product->anh)?>" alt="" >
									</div>
									<div class="j_dr1">
										<span id="dst_tt" style="font-weight: bold">Thông tin sản phẩm: </span><p><span><?php echo $product->mota ?> </span></p>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">	
									<div class="row">
										<div class="sp_giasp">
											<span class="price"><span><?php echo $product->gia ?><span> VNĐ</span></span></span>
										</div>
									</div>
									<div class="dst_quickby">
										<h4 class="product_title entry-title"><?php echo $product->tensp ?><span class="dst_subtitle"><?php echo $product->title ?></span></h4>
										<span id="giss"></span>
										<div class="dst-km">
											<h4 style="font-weight: bold">Khuyến mãi và Ưu đãi</h4>
											<div class="jkem scrollbar" id="jc_kems">
												<p><span id=""><?php echo $product->khuyenmai ?>
												</div>
											</div>
											<button type="submit" id="dst_dsmua" class="single_add_to_cart_button button alt">MUA NGAY<span>Giao tận nơi hoặc nhận ở cửa hàng</span>
											</button>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-5">
										<div class="dst-attr">
											<h2 class="dst-ctitle">Thông số kỹ thuật</h2>
											<table class="shop_attributes">
												<tbody><tr>
													<th>Băng tần - Sim</th>
													<td><p><?php echo $product->bangthong ?></p>
													</td>
												</tr>
												<tr>
													<th>CPU</th>
													<td><p><?php echo $product->cpu ?></p>
													</td>
												</tr>
												<tr>
													<th>Bộ nhớ trong</th>
													<td><p><?php echo $product->bonho ?></p>
													</td>
												</tr>
												<tr>
													<th>Bảo mật nâng cao</th>
													<td><p><?php echo $product->baomat ?></p>
													</td>
												</tr>
												<tr>
													<th>RAM</th>
													<td><p><?php echo $product->ram ?></p>
													</td>
												</tr>
												<tr>
													<th>Cảm biến</th>
													<td><p><?php echo $product->cambien ?></p>
													</td>
												</tr>
												<tr>
													<th>Pin</th>
													<td><p><?php echo $product->pin ?></p>
													</td>
												</tr>
												<tr>
													<th>Màn hình</th>
													<td><p><?php echo $product->manhinh ?></p>
													</td>
												</tr>
												<tr>
													<th>Camera trước</th>
													<td><p><?php echo $product->camtruoc ?></p>
													</td>
												</tr>
												<tr>
													<th>Camera sau</th>
													<td><p><?php echo $product->camsau ?></p>
													</td>
												</tr>
												<tr>
													<th>Sim</th>
													<td><p><?php echo $product->sim ?></p>
													</td>
												</tr>
												<tr>
													<th>Màu sắc</th>
													<td><p><?php echo $product->mau ?></p>
													</td>
												</tr>
												<tr>
													<th>Tình trạng sản phẩm</th>
													<td><p><?php echo $product->tinhtrangsp ?></p>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- Hết ht_midctsp -->
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