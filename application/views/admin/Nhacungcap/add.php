

<!-- head -->
<?php $this->load->view('admin/Nhacungcap/head', $this->data)?>
<div class="line"></div>
<div class="wrapper">
    <div class="widget">
        <div class="title">
            <h6>Thêm mới nhà cung cấp</h6>
        </div>
        <form id="form" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>
                <div class="formRow">
                    <label for="param_name" class="formLeft">Tên nhà cung cấp:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo set_value('tenncc')?>" name="tenncc"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"><?php echo form_error('tenncc')?></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="param_name" class="formLeft">Địa chỉ:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo set_value('diachi')?>" name="diachi"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"><?php echo form_error('diachi')?></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="param_name" class="formLeft">Số điện thoại:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo set_value('sdt')?>" name="sdt"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"><?php echo form_error('sdt')?></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="param_name" class="formLeft">Email:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo set_value('email')?>" name="email"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"><?php echo form_error('email')?></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="param_name" class="formLeft">Tên người đại diện:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo set_value('name')?>" name="name"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"><?php echo form_error('name')?></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formSubmit">
                    <input type="submit" class="redB" value="Thêm mới">
                    <input type="reset" class="basic" value="Nhập lại">
                </div>
            </fieldset>
        </form>
    </div>
</div>

