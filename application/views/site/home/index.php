<section class="slideqc">
	<div class="container p-0">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo base_url(); ?>images/7plus_new.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo base_url(); ?>images/iPhone-6-Plus-nguyen-seal.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo base_url(); ?>images/iPhone-6s-Plus-troi-bao-hanh.jpg" alt="Third slide">
					</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</section>
<!-- Hết slide quảng cáo -->
<section class="ht_sp">
	<div class="container">
		<br>
		<span>SẢN PHẨM NỔI BẬT</span>
	</div>
	<div class="container p-0">
		<div class="row sizeht">
			<div class="col-12 col-sm-12 col-lg-4">
				<?php foreach ($product as $key => $row):?>
				<div class="card ht_hproduct_show">
					<img class="card-img-top img-fluid" src="<?php echo base_url('upload/product/'.$row->anh)?>" alt="Card image cap">
					<div class="card-body">
						<span class="ht_hproduct_title">
							<a href="#"><?php echo $row->tensp ?> <br>
								<span class="ht_tinhtrang"><?php echo $row->title ?></span>
							</a>
						</span>
						<div class="ht_hproduct_price">
							<div class="ht_gia">
								<span class="ht_gia"><?php echo $row->gia ?> VNĐ</span>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- Hết hiển thị sp -->
<section class="phukien_show">
	<div class="ht_hphukien">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<br>
					<span style="font-weight: bold; font-size: 20px;">PHỤ KIỆN GIÁ RẺ</span>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="text-align: center;" id="ht_pk_show">
		<div class="row">
			<div class="col-6 col-sm-4 col-lg-2">
				<a href="">
					<div>
						<img src="<?php echo base_url(); ?>images/pk1.png" alt="" width="127" height="169" style="display: inline-block; opacity: 1;">
					</div>
					<div>
						<span class="ht_hproduct_title">Apple Watch Series 3 LTE 42mm Mới Trần</span><br>
						<span class="price">7.490.000 VNĐ</span>
					</div>
				</a>
			</div>
			<div class="col-6 col-sm-4 col-lg-2">
				<a href=""><img src="<?php echo base_url(); ?>images/pk1.png" alt="" width="127" height="169" style="display: inline-block; opacity: 1;">
					<span class="ht_hproduct_title">Apple Watch Series 3 LTE 42mm cũ</span><br>
					<span class="price">7.090.000 VNĐ</span>
				</a>
			</div>
			<div class="col-6 col-sm-4 col-lg-2">
				<a href=""><img src="<?php echo base_url(); ?>images/pk3.png" alt="" width="127" height="169" style="display: inline-block; opacity: 1;">
					<span class="ht_hproduct_title">Phone Apple Series 3.42mm cũ</span><br>
					<span class="price">3.690.000 VNĐ</span>
				</a>
			</div>
			<div class="col-6 col-sm-4 col-lg-2">
				<a href=""><img src="<?php echo base_url(); ?>images/pk4.png" alt="" width="127" height="169" style="display: inline-block; opacity: 1;">
					<span class="ht_hproduct_title">Apple Watch Series 3 42mm cũ</span><br>
					<span class="price">6.890.000 VNĐ</span>
				</a>
			</div>
			<div class="col-6 col-sm-4 col-lg-2">
				<a href=""><img src="<?php echo base_url(); ?>images/pk5.png" alt="" width="127" height="169" style="display: inline-block; opacity: 1;">
					<span class="ht_hproduct_title">Apple Watch Series 3 LTE 42mm Mới</span><br>
					<span class="price">8.090.000 VNĐ</span>
				</a>
			</div>
			<div class="col-6 col-sm-4 col-lg-2">
				<a href=""><img src="<?php echo base_url(); ?>images/pk6.png" alt="" width="127" height="169" style="display: inline-block; opacity: 1;">
					<span class="ht_hproduct_title">Apple Watch Series 3 38mm cũ</span><br>
					<span class="price">6.490.000 VNĐ</span>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- Hết phukien_show -->
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