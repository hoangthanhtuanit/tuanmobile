

<!-- The box-header-->
<link rel="stylesheet" href="<?php echo public_url()?>/js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" type="text/css">
<script src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $( "#text-search" ).autocomplete({
            source: "product/search_ac.html",
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
        <li class="active index-li"><a href="<?php echo base_url('home') ?>">Trang chủ </a></li>
        <li class=""><a href="info/view/1.html">Iphone</a></li>
        <li class=""><a href="info/view/2.html">Samsung</a></li>
        <li class=""><a href="san-pham.html">Xiaomi</a></li>
        <li class=""><a href="tin-tuc.html">Meizu</a></li>
        <li class=""><a href="video.html">Phụ kiện</a></li>
        <li class=""><a href="lien-he.html">Sửa chữa</a></li>
        <li class=""><a href="lien-he.html">Giới thiệu</a></li>
        <li class=""><a href="dang-ky.html">Đăng ký</a></li>
        <li class=""><a href="<?php echo base_url('admin/Login') ?>">Đăng nhập</a></li>
    </ul>
</div>
<!-- End menu -->
<!-- End box-header  -->

