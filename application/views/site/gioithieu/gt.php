

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tuấn Hoàng Mobile - Uy tín - Chất lượng - Giá cả hợp lý</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Thêm thư viện -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendor2/css/all.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
        <!-- the CSS -->
        <link rel="stylesheet" href="<?php echo public_url()?>/site/css/reset.css" type="text/css">
        <link rel="stylesheet" href="<?php echo public_url()?>/site/css/style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo public_url()?>/site/css/menu.css" type="text/css">
        <link rel="stylesheet" href="<?php echo public_url()?>/site/css/input.css" type="text/css">
        <link rel="stylesheet" href="<?php echo public_url()?>/site/css/product.css" type="text/css">
        <link rel="stylesheet" href="<?php echo public_url()?>/site/css/slide-flim.css" type="text/css">
        <!-- End CSS -->
        <!-- the Javascript -->
        <script src="<?php echo public_url()?>/js/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo public_url()?>/js/jquery/jquery-ui.min.js" type="text/javascript"></script>
        <link type="text/css" href="<?php echo public_url()?>/js/jquery/jquery-ui/custom-theme/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <script src="<?php echo public_url()?>/site/js/script.js"></script>
        <!-- raty -->
        <script src="<?php echo public_url()?>/site/raty/jquery.raty.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
            	$.fn.raty.defaults.path = '<?php echo public_url()?>/site/raty/img';
            	$('.raty').raty({
            		score: function() {
            			return $(this).attr('data-score');
            		},
            		readOnly  : true,
            	});
            });
        </script>
        <style>.raty img{width:16px !important;height:16px; !important;}</style>
        <!--End raty -->
        <!-- End Javascript -->
        <script type="text/javascript">
            $(document).ready(function(){
            	$('#back_to_top').click(function() {
            		$('html, body').animate({scrollTop:0},"slow");
            	});
                  // go top
                  $(window).scroll(function() {
                  	if($(window).scrollTop() != 0) {
                  		$('#back_to_top').fadeIn();
                  	} else {
                  		$('#back_to_top').fadeOut();
                  	}
                  });
              });
        </script>
        <style>
            #back_to_top {
            bottom: 10px;
            color: #666;
            cursor: pointer;
            padding: 5px;
            position: fixed;
            right: 55px;
            text-align: center;
            text-decoration: none;
            width: auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- The box-header-->
                    <link rel="stylesheet" href="<?php echo public_url()?>/js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" type="text/css">
                    <script src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(function() {
                            $( "#text-search" ).autocomplete({
                                source: "",
                            });
                        });
                    </script>
                    <div class="top">
                        <!-- The top -->
                        <div id="logo">
                            <!-- the logo -->
                            <a title="" href="">
                            <img alt="" src="<?php echo public_url()?>/site/images/logo.png">
                            </a>
                        </div>
                        <!-- End logo -->
                        <!--  load gio hàng -->
                        <div class="cart" id="cart_expand">
                            <a class="cart_link" href="gio-hang.html">
                            Giỏ hàng <span id="in_cart">0</span> sản phẩm
                            </a>
                            <img src="<?php echo public_url()?>/site/images/cart.png" alt="cart bnc">
                        </div>
                        <div id="search">
                            <!-- the search -->
                            <form action="tim-kiem.html" method="get">
                                <input type="text" aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="ui-autocomplete-input" placeholder="Tìm kiếm sản phẩm..." value="" name="key-search" id="text-search">
                                <input type="submit" value="" name="but" id="but">
                            </form>
                        </div>
                        <!-- End search -->
                        <div class="clear"></div>
                        <!-- clear float -->
                    </div>
                    <!-- End top -->
                    <!-- End box-header  -->
                    <!-- The box-header-->
                    <div id="menu">
                        <!-- the menu -->
                        <ul class="menu_top">
                            <li class="active index-li"><a href="">Trang chủ </a></li>
                            <li class=""><a href="info/view/1.html">Iphone</a></li>
                            <li class=""><a href="info/view/2.html">Samsung</a></li>
                            <li class=""><a href="san-pham.html">Xiaomi</a></li>
                            <li class=""><a href="tin-tuc.html">Meizu</a></li>
                            <li class=""><a href="video.html">Phụ kiện</a></li>
                            <li class=""><a href="lien-he.html">Sửa chữa</a></li>
                            <li class=""><a href="lien-he.html">Giới thiệu</a></li>
                            <li class=""><a href="dang-ky.html">Đăng ký</a></li>
                            <li class=""><a href="dang-nhap.html">Đăng nhập</a></li>
                        </ul>
                    </div>
                    <!-- End menu -->
                    <!-- End box-header  -->
                </div>
            </div>
        </div>
        <!-- Giới thiệu -->
        <section style="padding-top: 35px;">
            <div class="container p-0" >
                <div class="row">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">   Giới thiệu về công ty
                                </li>
                            </ol>
                        </nav>

                        <div>
                            <h3 style="color: red; padding-top: 25px;">Giới Thiệu Chung</h3>
                            <p style="padding-top: 25px;">
                                <font  style="font-weight: bold; size: 16px;">I. Lịch sử hình thành </font><br>

                                <span style="font-weight: bold">Hệ thống bán lẻ Tuấn Hoàng Mobile</span> toàn quốc là một trong những điểm đến tin cậy của người tiêu dùng thông thái bắt nguồn từ đồ án môn học Thương mại điện tử. Tuấn Hoàng Mobile là thương hiệu đã được bảo hộ bởi <span style="font-weight: bold">Công Ty Cổ Phần Viễn Thông Tuấn Hoàng Mobile.</span>
                            </p>
                            <p>
                                <b>1. Một vài thông tin về công ty:</b><br>
                                – Tên công ty: Công Ty Cổ Phần Viễn Thông Tuấn Hoàng Mobile <br>
                                – Địa chỉ: 182 Lê Duẩn, phường Bến Thủy, TP Vinh, Nghệ An <br>
                                – MST: 0105899999 (Số giấy chứng nhận đăng ký kinh doanh thương nhân ) <br>

                                – Ngày cấp lần đầu: 12/10/2018 <br>

                                – Đăng ký thay đổi lần 2: 04/01/2019 <br>

                                – Nơi cấp: Vinh Học Đại <br>

                                – Số điện thoại : 04.62757392 / 04.62757393 <br>

                                – Được sự ủng hộ của Tập đoàn Amazong, Alibaba nhất lên đến hơn 10.000.000.000 trang (hơn 100.000.000.000 lượt bình luận) và hơn 3 triệu tỉ lượt views. <br>

                                – Được cộng đồng tinhte.vn đánh giá cao về bán hàng uy tín, tin cậy, hỗ trợ kĩ thuật nhiệt tình. <br>

                                Bắt nguồn từ một topic bán hàng của Tiêu Kim lấy tên ban đầu là vnandroid, người dùng biết đến chúng tôi với kim chỉ nam: <br>

                                “Bán hàng là nuôi thân, kết giao bạn bè bốn bể là nuôi dưỡng tâm hồn” <br>
                            </p>
                            <p>
                                <b>4. Dưới đây là các hạng mục sản phẩm mà hệ thống tuấn hoàng mobile cung cấp:</b> <br>

                                – Các sản phẩm của Apple: iPhone, iPad <br>

                                – Các sản phẩm Android quốc tế: HTC, Sony, SamSung, LG, Motorola. <br>

                                – Các sản phẩm chính hãng, phân phối chính hãng tại Việt Nam: Apple, Samsung, LG, Sony, HTC, Motorola, Lenovo, Oppo, Vivo, Huawei, Wiko, Gionee, Xiaomi, Meizu, Infinix… <br>

                                – Các sản phẩm SKY nội địa Hàn Quốc. <br>

                                – Các sản phẩm giá rẻ, chính hãng, chất lượng từ thị trường Trung Quốc: Samsung China, Xiaomi, Meizu, Lenovo, One Plus,... <br>

                                – Các phụ kiện cao cấp cho smartphone <br>

                                – Các dịch vụ sửa chữa, bảo hành, bảo trì điện thoại đời cao. <br>
                            </p>

                            <p>
                               <b> II. Tầm nhìn – sứ mệnh</b> <br>

                                Sứ mệnh:<br>

                                Chúng tôi lấy khách hàng làm trung tâm, lấy tổ chức chức chuyên nghiệp làm sức mạnh cạnh tranh, không ngừng nỗ lực cung cấp những sản phẩm, dịch vụ giá trị mới, chất lượng cao với giá hợp lý để đóng góp vào mục tiêu nâng cao chất lượng cuộc sống thông tin. <br>

                                Tầm nhìn:<br>

                                Trở thành một công ty hàng đầu cung cấp sản phẩm, dịch vụ các thế hệ tuấn hoàng mobile trong đó lấy chất lượng phục vụ khách hàng làm sự phát triển bền vững.
                            </p>
                            <p>
                               <b> III. Những Giá Trị Cốt Lõi </b>

                                Giá trị cốt lõi của Tuấn Hoàng Mobile  là các giá trị bền vững làm nên thành công,  là tôn chỉ toàn bộ hành động của công ty , được hình thành qua những ngày tháng gian khổ đầu tiên của công ty, được xây dựng từ những kinh nghiệm và học hỏi, tôi luyện qua những thử thách trong suốt quá trình phát triển.<br>
                                1. Tư duy hệ thống xã hội hóa: <br>

                                Công ty được tổ chức như một hệ thống với những nhiệm vụ sứ mệnh rõ ràng, được tổ chức toàn vẹn và hiệu quả, không ngừng nâng cấp để thay đổi về tầm ảnh hưởng, hệ thống sẽ được Xã Hội Hóa theo hướng là tài sản chung của toàn bộ cán bộ, nhân viên Tuấn Hoàng Mobile và đóng góp để trở thành 1 phần hữu cơ của Xã Hội.<br>

                                2. Thành công của con người là thành công của tổ chức.<br> 

                                Công ty Tuấn Hoàng Mobile xây dựng đội ngũ nhân viên như những người đồng đội trên cùng một chiến thuyền, mỗi cá nhân được đánh thức nhân sinh quan và hướng dẫn cách nhận định, phấn đấu vì mục tiêu sống, thành công của mỗi nhân viên là thành công của tổ chức. Hội tụ càng nhiều thành công này, tổ chức đạt được mục tiêu. Trên cùng một chiến thuyền, giữa biển khơi bao la…đòi hỏi một tập thể phải biết tối ưu ở mọi cấp độ, đoàn kết và tin tưởng vào mục tiêu của tổ chức. Hệ thống đòi hỏi những con người phải biết thành công và dám thành công.<br>

                                3. Giá trị doanh nghiệp nằm ở khách hàng <br>

                                Giá trị doanh nghiệp nằm ở khách hàng, kết nối khách hàng thành một xã hội và phục vụ xã hội này với những năng lực, tư duy luôn đổi mới. Mỗi khách hàng là một hạt nhân quan trọng trên bước đường cóp nhặt thành công của công ty. Toàn thể từ lãnh đạo đến nhân viên trước khách hàng luôn phải thể hiện trong vai trò người phục vụ: tận tụy, lắng nghe và đưa ra giải pháp tốt nhất.
                            </p>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        <!-- Hết giới thiệu -->
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

