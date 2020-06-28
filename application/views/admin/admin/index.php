

<?php $this->load->view('admin/admin/head', $this->data); ?>
<div class="line"></div>
<div class="wrapper">
    <?php $this->load->view('admin/message', $this->data); ?>
    <div class="widget">
        <div class="title">
            <span class="titleIcon">
                <div class="checker" id="uniform-titleCheck"><span><input type="checkbox" id="titleCheck" name="titleCheck" style="opacity: 0;"></span></div>
            </span>
            <h6>Danh sách Admin</h6>
            <div class="num f12">Tổng số: <b><?php echo $total ?></b></div>
        </div>
        <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
            <thead>
                <tr>
                    <td style="width:10px;"><img src="<?php echo base_url(); ?>public/admin/images/icons/tableArrows.png" /></td>
                    <td style="width:80px;">Mã số</td>
                    <td>Họ và tên</td>
                    <td>Email</td>
                    <td>Điện thoại</td>
                    <td style="width:100px;">Hành động</td>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="7">
                        <div class="list_action itemActions">
                            <a href="#submit" id="submit" class="button blueB" url="user/del_all.html">
                            <span style='color:white;'>Xóa hết</span>
                            </a>
                        </div>
                        <div class='pagination'>
                        </div>
                    </td>
                </tr>
            </tfoot>
            <tbody>
            	<?php foreach ($list as $row): ?>
                <tr>
                    <td><input type="checkbox" name="id[]" value="<?php echo $row->id ?>" /></td>
                    <td class="textC"><?php echo $row->id ?></td>
                    <td>
                    	<span title="<?php echo $row->fullname ?>" class="tipS">
                        	<?php echo $row->fullname ?>
                    	</span>
                    </td>
                    <td>
                    	<span title="<?php echo $row->email ?>" class="tipS">
                        	<?php echo $row->email ?>
                        </span>
                    </td>
                    <td>
                        <?php echo $row->sdt ?>
                    </td>
                    <td class="option">
                        <a href="<?php echo admin_url('admin/edit/'.$row->id )?>" title="Chỉnh sửa" class="tipS ">
                            <img src="<?php echo base_url(); ?>public/admin/images/icons/color/edit.png" />
                        </a>
                        <a href="<?php echo admin_url('admin/delete/'.$row->id )?>" title="Xóa" class="tipS verify_action" >
                            <img src="<?php echo base_url(); ?>public/admin/images/icons/color/delete.png" />
                        </a>
                    </td>
                </tr>
            	<?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clear mt30"></div>

