<?php $this->load->view('admin/Products/head', $this->data); ?>
<div class="line"></div>
<div class="wrapper">
    <div class="widget">
        <div class="title">
            <h6>Thêm mới sản phẩm</h6>
        </div>
        <form id="form" class="form" enctype="multipart/form-data" method="post" action="<?php echo admin_url('Products/add')?>">
            <fieldset>
                <div class="formRow">
                            <label for="param_name" class="formLeft">Tên sản phẩm:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo set_value('tensp')?>" name="tensp"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('tensp') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Title:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="title"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('title') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_sale" class="formLeft">Mô tả:</label>
                            <div class="formRight">
                                <span class="oneTwo"><textarea cols="" rows="4" id="param_gifts" name="mota"></textarea></span>
                                <span class="autocheck" name="sale_autocheck"></span>
                                <div class="clear error" name="sale_error"><?php echo form_error('mota') ?></div>
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
                                <input type="text" _autocheck="true" class="format_number" id="param_price" style="width:100px" name="gia">
                                <img src="<?php echo public_url('admin')?>/crown/images/icons/notifications/information.png" style="margin-bottom:-8px" class="tipS" original-title="Giá bán sử dụng để giao dịch">
                                </span>
                                <span class="autocheck" name="price_autocheck"></span>
                                <div class="clear error" name="price_error"><?php echo form_error('gia') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Price -->
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Số lượng:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="soluong"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('soluong') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Băng thông:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="bangthong"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('bangthong') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">CPU:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="cpu"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('cpu') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Bộ nhớ:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="bonho"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('bonho') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Bảo mật:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="baomat"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('baomat') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Ram:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="ram"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('ram') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Cảm biến:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="cambien"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('cambien') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Pin:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="pin"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('pin') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Màn hình:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="manhinh"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('manhinh') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Camera trước:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="camtruoc"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('camtruoc') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Camera sau:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="camsau"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('camsau') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Sim:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="sim"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('sim') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Màu:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="mau"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('mau') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Tình trạng sản phẩm:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="tinhtrangsp"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('tinhtrangsp') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label class="formLeft">Hình ảnh:<span class="req">*</span></label>
                            <div class="formRight">
                                <div class="left">
                                    <input type="file" name="anh" id="anh" size="25">
                                </div>
                                <div class="clear error" name="image_error"><?php echo form_error('anh') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_sale" class="formLeft">Khuyến mãi:</label>
                            <div class="formRight">
                                <span class="oneTwo"><textarea cols="" rows="4" id="param_gifts" name="khuyenmai"></textarea></span>
                                <span class="autocheck" name="sale_autocheck"></span>
                                <div class="clear error" name="sale_error"><?php echo form_error('khuyenmai') ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- <div class="formRow">
                            <label for="param_cat" class="formLeft">Danh mục:<span class="req">*</span></label>
                            <div class="formRight">
                                <select name="id_danhmuc" class="left" >
                                    <?php foreach($danhmuc as $row): ?>
                                        <option value="<?php echo $row->id ?>">
                                            <?php echo $row->name ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="autocheck" name="cat_autocheck"></span>
                                <div class="clear error" name="cat_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div> 
                        <div class="formRow">
                            <label for="param_cat" class="formLeft">Nhà cung cấp:<span class="req">*</span></label>
                            <div class="formRight">
                                <select name="id_nhacungcap">
                                    <?php foreach($nhacc as $row): ?>
                                        <option value="<?php echo $row->id ?>">
                                            <?php echo $row->tenncc ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="autocheck" name="cat_autocheck"></span>
                                <div class="clear error" name="cat_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div> -->
                <div class="formSubmit">
                    <input type="submit" class="redB" value="Thêm mới">
                    <input type="reset" class="basic" value="Nhập lại">
                </div>
            </fieldset>
        </form>
    </div>
</div>

