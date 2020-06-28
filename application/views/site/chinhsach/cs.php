

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
                            <a class="cart_link" href="<?php echo base_url('test') ?>">
                            Giỏ hàng <span id="in_cart">3</span> sản phẩm
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
        <!-- Phần chính sách -->
        <section style="padding-top: 25px;">
            <div class="container p-0" >
                <div class="row">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Chính sách đổi trả
                                </li>
                            </ol>
                        </nav>
                        <div style="padding-top: 25px;">
                            <h2 style="color: red">
                                Đổi trả lên đến 45 ngày, tặng thêm quà nếu không may sản phẩm lỗi.
                            </h2>
                            <p style="padding-top: 35px; font-size: 16px;">
                                <h3 style="color: red;">I. Lời cảm ơn!</h3>
                                Cảm ơn quý khách đã tin tưởng và mua hàng tại Tuấn Hoàng Mobile. Tuy nhiên thật không may, sản phẩm của bạn bị lỗi, hoặc trong quá trình sử dụng thấy sản phẩm không được như ý, không đúng với mục đích sử dụng quý khách hoàn toàn có quyền đổi, trả (hoàn tiền) sản phẩm theo chính sách dưới đây:
                            </p>
                            <p style="padding-top: 25px; font-size: 16px;">
                                <h3 style="color: red;">II. Điều kiện đổi trả sản phẩm:</h3>

                                – Quý khách lưu ý, đối với sản phẩm của công ty Tuấn Hoàng Mobile nhập sẽ có 3 chế độ bảo hành có thời gian đổi trả khác nhau.<br>

                                – Điều kiện được đổi trả sản phẩm của D D T M  là phải trong hạn đổi trả ( (dCare: 15 ngày; dCare+: 30 ngày; dCareS: 45 ngày) tham khảo chi tiết chế độ bảo hành<br>

                                – Đối với các sản phẩm chính hãng được phân phối tại Việt Nam sẽ theo quy định đổi trả sản phẩm của các hãng – Tham khảo tại đây<br>

                                – Sản phẩm cần được giữ nguyên trạng như tình trạng xuất kho:<br>
                                *  Sản phẩm không được có dấu hiệu vào nước, hóa chất.<br>

                                *  Với máy cũ cần đúng tình trạng như mô tả trên phiếu bán hàng.<br>

                                * Với máy mới cần không được trầy xước, móp méo, đầy đủ phụ kiện, hộp, tem imei (nếu có), sách hướng dẫn sử dụng còn mới.<br>

                                – Khách hàng cần xuất trình đầy đủ giấy tờ mua hàng kiêm phiếu bảo hành, sản phẩm phải còn nguyên tem của Tuấn Hoàng Mobile. Với Samsung, iPhone các sản phẩm nguyên khối sẽ được dán tem ốc, với các sản phẩm tháo được nắp lưng sẽ được dán trên ốc.<br>

                                – Khách hàng cần thoát các tài khoản bảo mật iCloud, Gooogle Acc… yêu cầu kĩ thuật viên sao lưu và xóa dữ liệu trước khi đổi trả.<br>

                                – Sản phẩm không bị người dùng tự ý can thiệp phần mềm (up các bản rom không ổn định, unlock bootloader, jaibreak…) khác với các bản rom chuẩn được Kĩ thuật viên đã cài đặt.<br>

                                – Với trường hợp sản phẩm bị cháy nổ thì Tuấn Hoàng Mobile cần phải tiến hành các nghiệp vụ xác minh xem cháy nổ do thiết bị, phụ kiện hay do chập điện từ phía người dùng.<br>
                            </p>
                            <p style="padding-top: 25px;">
                                <h3 style="color: red;">III. Quy trình đổi, trả hàng</h3>

                                Khi sản phẩm bị lỗi khách hàng cần liên hệ với bộ phận kĩ thuật của Tuấn Hoàng Mobile để được tư vấn khắc phục và hướng dẫn tư vấn thủ tục đổi trả tại: ddtmcare@gmail.com hoặc gọi trực tiếp tới: 0439.966669<br>

                                Quý khách mang sản phẩm đến cửa hàng gần nhất và thông báo lỗi của sản phẩm cho nhân viên kĩ thuật<br>

                                Kĩ thuật viên sẽ tiến hành giám định điều kiện đổi trả sản phẩm trong thời gian khoảng 10-30 phút.<br>

                                Kĩ thuật viên sẽ thông báo kết quả đủ điều kiện đổi trả cho quý khách và phiếu phiếu nhập lại sản phẩm.<br>

                                Khách hàng cầm sản phẩm lỗi và phiếu nhập lại sản phẩm gặp bộ phận bán hàng để được thực hiện đổi trả sản phẩm.

                            </p>
                            <p style="padding-top: 25px;">
                                <h3 style="color: red;">IV. Trường hợp máy lỗi do nhà sản xuất:</h3>
                                Nếu máy lỗi do nhà sản xuất được xác định bởi kĩ thuật viên thì khách hàng có quyền:<br>

                                Đổi sang sản phẩm tương đương, giữ lại các phụ kiện đã sử dụng (sạc, cable, tai nghe).<br>

                                Trong trường hợp khách hàng đổi sang sản phẩm tương đương hoặc đổi sang sản phẩm khác  thì sẽ được tặng thêm 15 ngày đổi trả và tặng 1 phần quà trị giá 200.000vnđ (ốp lưng thời trang, gậy tự sướng, pin dự phòng, loa bluetooth…)<br>

                                Nếu hệ thống có sản phẩm để đổi, nhưng khách hàng muốn hoàn tiền thì tiền hoàn bằng giá trị sản phẩm bán niêm yết trên website tại thời điểm đổi trả và được hoàn luôn cả giá trị gói bảo hành mua kèm.<br>

                                Nếu hệ thống không có sản phẩm để đổi trong 3 ngày, khách hàng sẽ được hoàn 100% giá trị trên hóa đơn (bao gồm giá trị hàng, phụ kiện, dịch vụ bảo hành mua kèm tại thời điểm mua hàng).<br>

                                Đổi sang sản phẩm khác thì khách hàng sẽ bù thêm khoản chênh lệch giữa giá 2 sản phẩm niêm yết trên website tại thời điểm đổi trả.<br>

                                VD: Khách hàng mua sản phẩm iPhone 6 mới trị giá 9 triệu, bị lỗi do nhà sản xuất thì:<br>

                                Khách hàng sẽ được đổi sang sản phẩm iPhone 6 mới tương đương.<br>

                                Nếu khách hàng muốn hoàn tiền, thì giả sử tại thời điểm sau 2 tuần sản phẩm được bán với giá 8.5 triệu trên website thì hệ thống sẽ hoàn tiền cho khách hàng 8.5 triệu<br>
<br>
                                Nếu khách hàng muốn đổi sang sản phẩm 6 Plus lúc này giá 9.5 triệu thì khách hàng cần bù khoản chênh lệch là 1 triệu (giữa giá của iPhone 6 mới giá 8.5 triệu và iPhone 6 PLus giá 9.5 triệu)

                            </p>
                            <p style="padding-top: 25px;">
                               <h3 style="color: red;"> V. Trường hợp máy không lỗi mà quý khách muốn đổi trả</h3>

                                Áp dụng trong trường hợp máy không lỗi mà quý khách muốn đổi trả trong thời gian đổi trả quy định của các gói dCare<br>

                                Với khách hàng mua máy cũ:<br>

                                Muốn đổi sang sản phẩm khác. Hệ thống sẽ tính chiết khấu 10% từ giá sản phẩm đang bán tại website. Gói bảo hành được bù trừ theo giá trị chênh lệch sang sản phẩm mới.<br>

                                Muốn bán lại thì giá nhập sẽ được tính chiết khấu 15% từ giá sản phẩm đang bán tại website, không nhập lại các gói bảo hành, các phụ kiện đã sử dụng.<br>

                                Với khách hàng mua máy mới, khi muốn đổi/ trả sản phẩm thì sản phẩm sẽ được định giá nhập lại dựa trên giá sản phẩm cũ fullbox nhưng giá sẽ không thấp hơn giá sản phẩm mới trên website trừ đi tối đa 25%.<br>

                                Ví dụ:<br>

                                Khách hàng mua sản phẩm iPhone 6 cũ giá 6.5 triệu, sau 15 ngày mà muốn đổi/ trả sản phẩm. Tại thời điểm này giá iPhone 6 cũ niêm yết tại website TuanHoangMobile là 6.2 triệu (thị trường giảm giá) thì:<br>

                                Nếu khách hàng muốn đổi máy thì giá trị nhập lại để đổi bị trừ 10% từ giá 6.2 triệu: 6,200,000 – 620,000 =  5,580,000vnđ<br>

                                Khách hàng muốn đổi lên sản phẩm khác thì sẽ bù thêm khoản chênh lệch<br>

                                Nếu khách hàng muốn hoàn tiền thì giá trị hoàn tiền bị trừ đi 15% từ giá 6.2 triệu:<br>

                                6,200,000 – 930,000 = 5,270,000vnđ<br>



                                Lưu ý với những sản phẩm có giá dưới 1,5 triệu nếu khách hàng muốn nhập lại thì sẽ chiết khấu từ 30-50%tuỳ theo giá trị sản phẩm

                            </p>
                            <p style="padding-top: 25px;">
                                <h3 style="color: red;">VI. Chế độ hỗ trợ khách hàng nhập lại lên đời máy ngoài thời gian đổi trả:</h3>

                                Nếu ngoài thời gian đổi trả, quý khách muốn đổi sang sản phẩm khác. Tuấn Hoàng Mobile có thể hỗ trợ nhập lại theo giá thỏa thuận để hỗ trợ quý khách đổi máy lên đời, nếu sản phẩm đủ các điều kiện:<br>

                                Sản phẩm hiện đang còn trong danh mục kinh doanh của Tuấn Hoàng Mobile<br>

                                Sản phẩm hình thức còn đẹp nguyên bản, chưa bị sửa chữa, thấm nước, hóa chất.<br>

                                Giá nhập lại được tính dựa trên giá nhập, giá bán trên thị trường và khoản hỗ trợ khách hàng khi mua sản phẩm mới trên hệ thống.<br>

                                Khách hàng được tặng ốp lưng, dán cường lực cho sản phẩm đổi lên đời.

                            </p>
                            <p style="padding-top: 25px;">
                                <h3 style="color: red;">VII. Chế độ hỗ trợ nhập lại đổi máy trong trường hợp bảo hành sửa chữa:</h3>

                                Đối với sản phẩm điện tử bị lỗi phải bảo hành, trách nhiệm phải sửa chữa sản phẩm thuộc về Tuấn Hoàng Mobile.
                                Trung tâm bảo hành Tuấn Hoàng Mobile cam kết đưa ra giải pháp tốt nhất và triệt để nhằm tránh các bất tiện trong quá trình sử dụng.<br>
                                Một số máy khi dính phải các lỗi nghiêm trọng trên CPU, hoặc quá sâu trên main khi sửa xong sẽ thiếu ổn định hoặc có thể bị lại ngoài thời gian bảo hành, lúc đó khách hàng sẽ là người thiệt. Vì thế khi gặp các lỗi này, Tuấn Hoàng Mobile sẽ thực hiện chính sách hỗ trợ:<br>

                                Nhằm giúp khách hàng không phải sử dụng máy đã qua sửa chữa sâu, không ổn định<br>

                                Nhằm tích kiệm thời gian của khách hàng: chờ đợi sửa máy lâu, đi bảo hành đi, đi bảo hành lại<br>

                                Sau này bán máy đã qua sửa chữa sẽ khó bán hoặc mất giá nhiều.<br>

                                Tuấn Hoàng Mobile sẽ đưa ra giải pháp nhập lại với một mức giá hợp lý và trợ giá khách hàng để đổi sang sản phẩm tương đương nguyên bản, hình thức mới hơn, hoặc đổi sang sản phẩm khác.<br>

                                Khoản chênh lệch bù thêm để đổi lấy sản phẩm nguyên bản không bị lỗi tương đương từ 10-15% giá sản phẩm đang bán tại website TuanHoangMobile<br>

                                VD: Khách hàng mua cây S6 đến tháng thứ 6 thì bị lỗi CPU. KTV xác định đây là lỗi vào CPU nếu sửa sẽ không ổn định, hoặc có thể bị lại sau một thời gian sử dụng.<br>

                                Bộ phận bảo hành sẽ đưa ra giải pháp khách hàng bù tiền để đổi một sản phẩm S6 nguyên bản khác đang được bán với giá 5,500,000vnđ tại Tuấn Hoàng Mobile là thêm khoảng 500.000vnđ – 750.000vnđ.<br>
                            </p>
                            <p style="padding-top: 25px; padding-bottom: 25px;">
                                <h3 style="color: red;">Câu hỏi thường gặp:</h3>

                                Tôi mới mua sản phẩm, nhưng sau vài ngày sử dụng tôi thấy không thích? vậy tôi muốn trả sản phẩm lấy lại tiền thì chính sách như thế nào?<br>

                                Trả lời: <br>
                                Theo chính sách đổi trả sản phẩm tại mục V:<br>

                                Nếu là sản phẩm cũ thì bạn sẽ bị chiết khấu một khoản 15% từ giá sản phẩm đang bán tại website, phụ kiện đã dùng và gói dịch vụ bảo hành sẽ không được nhập lại.<br>

                                Nếu là sản phẩm mới thì bạn sẽ bị chiết khấu một khoản tối đa 25% từ giá sản phẩm đang bán trên website.<br>

                                Tôi mua sản phẩm đã 6 tháng, hiện đang sử dụng bình thường, tôi muốn đổi lên sản phẩm cao cấp hơn thì được hỗ trợ như thế nào?<br>

                                Trả lời:<br>
                                Theo chính sách đổi trả sản phẩm tại mục X:<br>

                                Nếu sản phẩm của bạn đang trong hạng mục kinh doanh thì sẽ được hỗ trợ nhập lại<br>

                                Giá nhập lại được hỗ trợ theo giá nhập sản phẩm của hệ thống<br>

                                Khách hàng sẽ được tặng dán cường lực, ốp lưng với sản phẩm đổi lên đời.<br>

                                Xin chân thành cảm ơn Quý khách đã đến với Tuấn Hoàng Mobile!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hết phẩn chính sách -->
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

