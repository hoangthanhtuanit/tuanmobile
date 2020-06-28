

<!-- head -->
<?php $this->load->view('admin/admin/head', $this->data)?>
<div class="line"></div>
<div class="wrapper">
    <div class="widget">
        <div class="title">
            <h6>Thêm mới quản trị viên</h6>
        </div>
        <form id="form" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>
                <div class="formRow">
                    <label for="param_name" class="formLeft">Tên:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo set_value('fullname') ?>" name="fullname"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"><?php echo form_error('fullname') ?></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="param_username" class="formLeft">Username:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" value="" id="param_username" value="<?php echo set_value('username') ?>" name="username"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"><?php echo form_error('username') ?></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="param_username" class="formLeft">Password:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input type="password" _autocheck="true" id="param_password" name="password"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"><?php echo form_error('password') ?></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="param_name" class="formLeft">Email:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_email" value="<?php echo set_value('email') ?>" name="email"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"><?php echo form_error('email') ?></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="param_name" class="formLeft">Số điện thoại:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_sdt" value="<?php echo set_value('sdt') ?>" name="sdt"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"><?php echo form_error('sdt') ?></div>
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

