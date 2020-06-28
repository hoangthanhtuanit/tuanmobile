

<div id="leftSide" style="padding-top:30px;">
    <!-- Account panel -->
    <div class="sideProfile">
        <a href="#" title="" class="profileFace"><img src="<?php echo base_url(); ?>public/admin/images/hoangthanhtuan.jpg" width="40"></a>
        <span>Xin chào: <strong>admin!</strong></span>
        <span>Hoàng Thanh Tuấn</span>
        <div class="clear"></div>
    </div>
    <div class="sidebarSep"></div>
    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <li class="home">
            <a href="<?php echo admin_url() ?>" class="active" id="current">
            <span>Bảng điều khiển</span>
            <strong></strong>
            </a>
        </li>
        <li class="tran">
            <a href="admin/tran.html" class="exp inactive">
            <span>Quản lý bán hàng</span>
            <strong>2</strong>
            </a>
            <ul class="sub" style="display: none;">
                <li>
                    <a href="admin/tran.html">
                    Giao dịch                           
                    </a>
                </li>
                <li>
                    <a href="admin/product_order.html">
                    Đơn hàng sản phẩm                           
                    </a>
                </li>
            </ul>
        </li>
        <li class="product">
            <a href="admin/product.html" class="exp inactive">
            <span>Sản phẩm</span>
            <strong>2</strong>
            </a>
            <ul class="sub" style="display: none;">
                <li>
                    <a href="<?php echo admin_url('Sanpham')?>">
                    Sản phẩm
                    </a>
                </li>
                <li>
                    <a href="<?php echo admin_url('Danhmuc')?>">
                    Danh mục
                    </a>
                </li>
                <li>
                    <a href="<?php echo admin_url('Nhacungcap')?>">
                    Nhà cung cấp
                    </a>
                </li>
            </ul>
        </li>
        <li class="account">
            <a href="" class="exp inactive">
            <span>Tài khoản</span>
            <strong>2</strong>
            </a>
            <ul class="sub" style="display: none;">
                <li>
                    <a href="<?php echo admin_url('admin') ?>">
                    Ban quản trị
                    </a>
                </li>
                <li>
                    <a href="<?php echo admin_url('thanhvien') ?>">
                    Thành viên
                    </a>
                </li>
            </ul>
        </li>
        <li class="support">
            <a href="" class="exp inactive">
            <span>Hỗ trợ và liên hệ</span>
            <strong>2</strong>
            </a>
            <ul class="sub" style="display: none;">
                <li>
                    <a href="">
                    Hỗ trợ
                    </a>
                </li>
                <li>
                    <a href="">
                    Liên hệ
                    </a>
                </li>
            </ul>
        </li>
        <li class="content">
            <a href="" class="exp inactive">
            <span>Nội dung</span>
            <strong>4</strong>
            </a>
            <ul class="sub" style="display: none;">
                <li>
                    <a href="<?php echo admin_url('Slide') ?>">
                    Slide                           
                    </a>
                </li>
                <li>
                    <a href="">
                    Tin tức                         
                    </a>
                </li>
                <li>
                <li>
                    <a href="">
                    Video                           
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="clear"></div>

