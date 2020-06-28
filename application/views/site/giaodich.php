

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
                    <div class="phanthan" style="padding-top: 35px;">
                        <body class="bg-light">
                            <div class="container">
                            	<nav aria-label="breadcrumb" style="padding-bottom: 30px;">
                                		<ol class="breadcrumb">
                                			<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                			<li class="breadcrumb-item"><a href="#">Giỏ hàng</a></li>
                                			<li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                                		</ol>
                                	</nav>
                                <div class="row">
                                    <div class="col-md-4 order-md-2 mb-4">
                                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-muted"> ĐƠN HÀNG CỦA BẠN</span>
                                            <span class="badge badge-secondary badge-pill">2</span>
                                        </h4>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Tên sản phẩm</h6>
                                                    <small class="text-muted">Iphone XS Max 512 GB</small>
                                                </div>
                                                <span class="text-muted">28,000,000 VNĐ</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Phụ kiện đi kèm</h6>
                                                    <small class="text-muted">Tai nghe AirPort</small>
                                                </div>
                                                <span class="text-muted">2,000,000 VNĐ</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Phí vận chuyển</h6>
                                                    <small class="text-muted"></small>
                                                </div>
                                                <span class="text-muted">Miễn phí</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between bg-light">
                                                <div class="text-success">
                                                    <h6 class="my-0">Thuế VAT</h6>
                                                    <small></small>
                                                </div>
                                                <span class="text-success">1%</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Tổng tiền (VNĐ)</span>
                                                <strong>30,300,000</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-8 order-md-1">
                                        <h4 class="mb-3">THÔNG TIN GIAO HÀNG</h4>
                                        <form class="needs-validation" novalidate="">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="firstName">Họ và tên</label>
                                                    <input type="text" class="form-control" id="firstName" placeholder="Hoàng Thanh Tuấn" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="tuandhv96@gmail.com">
                                            </div>
                                            <div class="mb-3">
                                                <label for="address">Địa chỉ</label>
                                                <input type="text" class="form-control" id="address" placeholder="Hồng Lĩnh - Hà Tĩnh" required="">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 mb-3">
                                                    <label for="country">Quốc gia</label>
                                                    <select class="custom-select d-block w-100" id="country" required="">
                                                        <option value="" selected="selected">Chọn...</option>
                                                        <option>Việt Nam</option>
                                                        <option>Hàn Quốc</option>
                                                        <option>Trung Quốc</option>
                                                        <option>Nhật Bản</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="state">Tỉnh thành</label>
                                                    <select class="custom-select d-block w-100" id="state" required="">
                                                        <option value="" selected="selected">Chọn...</option>
                                                        <option>Hà Tĩnh</option>
                                                        <option>Nghệ An</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="zip">Mã bưu chính</label>
                                                    <input type="text" class="form-control" id="zip" placeholder="" required="">
                                                </div>
                                            </div>
                                            <hr class="mb-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="same-address">
                                                <label class="custom-control-label" for="same-address">Địa chỉ giao hàng giống như địa chỉ thanh toán của tôi</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="save-info">
                                                <label class="custom-control-label" for="save-info">Lưu thông tin này cho lần sau</label>
                                            </div>
                                            <hr class="mb-4">
                                            <h4 class="mb-3">Thanh toán</h4>
                                            <div class="d-block my-3">
                                                <div class="custom-control custom-radio">
                                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="checked" required="">
                                                    <label class="custom-control-label" for="credit">Credit card</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                                    <label class="custom-control-label" for="debit">Debit card</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-name">Tên trên thẻ</label>
                                                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                                    <small class="text-muted">Tên đầy đủ như được hiển thị trên thẻ</small>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-number">Mã số thẻ</label>
                                                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 mb-3">
                                                    <label for="cc-expiration">Expiration</label>
                                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="cc-expiration">CVV</label>
                                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                                </div>
                                            </div>
                                            <hr class="md2">
                                            <button class="btn btn-lg btn-block" style="background-color: #28A745" type="submit"><font color="white">Xác nhận đơn hàng</font></button>
                                        </form>
                                    </div>
                                </div>
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
                            </div>
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
        <script src="Checkout%20example%20for%20Bootstrap_files/jquery-3.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="Checkout%20example%20for%20Bootstrap_files/popper.js"></script>
        <script src="Checkout%20example%20for%20Bootstrap_files/bootstrap.js"></script>
        <script src="Checkout%20example%20for%20Bootstrap_files/holder.js"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
              'use strict';
            
              window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
            
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false);
            })();
        </script>
    </body>
</html>

