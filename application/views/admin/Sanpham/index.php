
<?php $this->load->view('admin/Sanpham/head', $this->data); ?>
<div class="line"></div>
<div class="wrapper" id="main_product">
    <div class="widget">
        <div class="title">
            <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck"></span>
            <h6>
                Danh sách sản phẩm
            </h6>
            <div class="num f12">Số lượng: <b><?php echo $total_rows ?></b></div>
        </div>
        <table class="sTable mTable myTable" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
            <thead class="filter">
                <tr>
                    <td colspan="6">
                        <form class="list_filter form" action="<?php echo admin_url('Products') ?>" method="get">
                            <table width="80%" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td class="label" style="width:40px;"><label for="filter_id">Mã số</label></td>
                                        <td class="item"><input name="id" value="<?php echo $this->input->get('id') ?>" id="filter_id" type="text" style="width:55px;"></td>
                                        <td class="label" style="width:40px;"><label for="filter_id">Tên</label></td>
                                        <td class="item" style="width:155px;"><input name="name" value="<?php echo $this->input->get('name') ?>" id="filter_iname" type="text" style="width:155px;"></td>
                                        <td style="width:150px">
                                            <input type="submit" class="button blueB" value="Lọc">
                                            <input type="reset" class="basic" value="Reset" onclick="window.location.href = '<?php echo admin_url('Products'); ?>'; ">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </td>
                </tr>
            </thead>
            <thead>
                <tr>
                    <td style="width:21px;"><img src="<?php echo base_url(); ?>public/admin/images/icons/tableArrows.png"></td>
                    <td style="width:60px;">Mã số</td>
                    <td>Tên</td>
                    <td>Giá</td>
                    <td style="width:75px;">Ngày tạo</td>
                    <td style="width:120px;">Hành động</td>
                </tr>
            </thead>
            <tfoot class="auto_check_pages">
                <tr>
                    <td colspan="6">
                        <div class="list_action itemActions">
                            <a href="#submit" id="submit" class="button blueB" url="admin/product/del_all.html">
                            <span style="color:white;">Xóa hết</span>
                            </a>
                        </div>
                        <div class="pagination">
                            <?php echo $this->pagination->create_links()?>
                        </div>
                    </td>
                </tr>
            </tfoot>
            <tbody class="list_item">
                <?php foreach ($list as $row): ?>
                <tr class="row_9">
                    <td><input type="checkbox" name="id[]" value="<?php echo $row->id ?>"></td>
                    <td class="textC"><?php echo $row->id ?></td>
                    <td>
                        <div class="image_thumb">
                            <img src="<?php echo base_url('upload/product/').$row->anh ?>" height="50">
                            <div class="clear"></div>
                        </div>
                        <a class="tipS" title="" target="_blank">
                        <b><?php echo $row->name; ?></b>
                        </a>
                    </td>
                    <td class="textR">
                        <?php echo $row->gia ?>
                    </td>
                    <td class="textC"><?php echo $row->created_at ?>0</td>
                    <td class="option textC">
                        <a href="<?php echo admin_url('Sanpham/edit/'.$row->id )?>" title="Chỉnh sửa" class="tipS">
                        <img src="<?php echo base_url(); ?>public/admin/images/icons/color/edit.png">
                        </a>
                        <a href="<?php echo admin_url('Sanpham/del/'.$row->id)?>" title="Xóa" class="tipS verify_action">
                        <img src="<?php echo base_url(); ?>public/admin/images/icons/color/delete.png">
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

