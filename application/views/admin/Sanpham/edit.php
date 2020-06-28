<?php $this->load->view('admin/Sanpham/head', $this->data); ?>
<div class="line"></div>
<div class="wrapper">
    <div class="widget">
        <div class="title">
            <h6>Cập nhật sản phẩm</h6>
        </div>
        <form id="form" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>
                <div class="formRow">
                            <label for="param_name" class="formLeft">Tên sản phẩm:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo $product->name?>" name="name"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('name') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_price" class="formLeft">
                            Giá :
                            <span class="req">*</span>
                            </label>
                            <div class="formRight">
                                <span class="oneTwo">
                                <input type="text" _autocheck="true" value="<?php echo $product->gia?>" class="format_number" id="param_price" style="width:100px" name="gia">
                                <img src="<?php echo public_url('admin')?>/crown/images/icons/notifications/information.png" style="margin-bottom:-8px" class="tipS" original-title="Giá bán sử dụng để giao dịch">
                                </span>
                                <span class="autocheck" name="price_autocheck"></span>
                                <div class="clear error" name="price_error"><?php echo form_error('gia') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Số lượng:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" value="<?php echo $product->soluong?>" id="param_name" name="soluong"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('soluong') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Danh mục:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo $product->danhmuc?>" name="danhmuc"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('danhmuc') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div><div class="formRow">
                            <label for="param_name" class="formLeft">GPU:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" value="<?php echo $product->gpu?>" _autocheck="true" id="param_name" name="gpu"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('gpu') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">CPU:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input value="<?php echo $product->cpu?>" type="text" _autocheck="true" id="param_name" name="cpu"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('cpu') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Bộ nhớ:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" value="<?php echo $product->bonho?>" _autocheck="true" id="param_name" name="bonho"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('bonho') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Camera:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input value="<?php echo $product->camera?>" type="text" _autocheck="true" id="param_name" name="camera"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('camera') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Màu:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input value="<?php echo $product->mau?>" type="text" _autocheck="true" id="param_name" name="mau"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('mau') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Tình trạng sản phẩm:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" value="<?php echo $product->tinhtrangsp?>" _autocheck="true" id="param_name" name="tinhtrangsp"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('tinhtrangsp') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Ram:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input value="<?php echo $product->ram?>" type="text" _autocheck="true" id="param_name" name="ram"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('ram') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Màn hình:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input value="<?php echo $product->manhinh?>" type="text" _autocheck="true" id="param_name" name="manhinh"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('manhinh') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label class="formLeft">Hình ảnh:<span class="req">*</span></label>
                            <div class="formRight">
                                <div class="left">
                                    <input type="file" name="anh" id="image" size="25">
                                    <img src="<?php echo base_url('upload/product/'.$product->anh)?>" style="width:100px;height:70px">
                                </div>
                                <div class="clear error" name="image_error"></div>
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

