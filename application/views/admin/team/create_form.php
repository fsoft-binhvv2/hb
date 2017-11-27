<?php
//tat ca cai nay dung de cau hinh cho ckeditter
$config_mini = array();

$config_mini['toolbar'] = array(
    array('Source', '-', 'Bold', 'Italic', 'Underline', 'Strike', '-', 'Link', 'Unlink', 'Anchor', 'Image')
);

// B?n có th? dùng m?ng full tùy ch?n
$config_mini = array(
    array('Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'NumberedList', 'BulletedList'));
//---- Ho?c tùy bi?n kích thu?c
$this->ckeditor->config['width'] = '800px';
$this->ckeditor->config['height'] = '300px';

/* Y la configuración del kcfinder, la debemos poner así si estamos trabajando en local */
$config_mini['filebrowserBrowseUrl'] = base_url() . "ckeditor/ckfinder/ckfinder.html";
$config_mini['filebrowserImageBrowseUrl'] = base_url() . "ckeditor/ckfinder/ckfinder.html?type=Images";
$config_mini['filebrowserUploadUrl'] = base_url() . "ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
$config_mini['filebrowserImageUploadUrl'] = base_url() . "ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";

//ket thuc cau hinh cho ckediter
?>
<div id="content">
    <div class="breadcrumb">
        <?php if ($render_path) : ?>
            <?php foreach ($render_path as $key => $val) : ?>
                <a href="<?= $val; ?>"><?= $key; ?></a> ::
            <?php endforeach; ?>
        <?php endif; ?>
    </div><!--End breadcrumb-->
    <div class="warning" style="display:none;"><?php if ($this->session->flashdata('warning')) echo $this->session->flashdata('warning'); ?></div>
    <div class="box">
        <div class="heading">
            <h1><img src="<?= base_url(); ?>admin_template/image/category.png" /><?= $heading_title; ?></h1>
            <div class="buttons">
                <a href="javascript:void(0);" onclick="$('#frm_add').submit();" class="button">Save</a>
                <a href="javascript:void(0);" onclick="location.href = '<?= $this->index_url; ?>admin/team';" class="button">Cancel</a>
            </div>
        </div><!--End heading-->
        <div class="content">
            <div id="tabs" class="htabs">
                <a href="#tab_1" class="selected">Thông tin team</a>
                <!--<a href="#tab_2">Tab 2</a>
                <a href="#tab_3">Tab 3</a>-->
            </div><!--End tabs-->

            <form action="<?= $action; ?>" method="post" enctype="multipart/form-data" id="frm_add">
                <div id="tab_1" style="display:block;">
                    <table width="100%" class="form">
                        <tbody>
                            <tr>
                                <td width="169" align="left"><label>Tên:</label></td>
                                <td width="922">
                                    <?php if (@$q->name != '') : ?>
                                        <input name="name" type="text" id="name" value="<?php echo @$q->name; ?>" size="100" />
                                    <?php else : ?>
                                        <input name="name" type="text" id="name" value="<?php echo set_value('name'); ?>" size="100" />
                                    <?php endif; ?>
                                    <?= form_error('name'); ?>
                                </td>
                            </tr>

                            <tr>
                                <td width="169" align="left"><label>Vị trí:</label></td>
                                <td width="922">
                                    <?php if (@$q->position != '') : ?>
                                        <input name="position" type="text" id="position" value="<?php echo @$q->position; ?>" size="100" />
                                    <?php else : ?>
                                        <input name="position" type="text" id="position" value="<?php echo set_value('position'); ?>" size="100" />
                                    <?php endif; ?>
                                    <?= form_error('position'); ?>
                                </td>
                            </tr> 
                            <tr>
                                <td width="169" align="left"><label>Hình ảnh:</label></td>
                                <td width="922">
                                    <input type="file" name="image_team" /> <br>
                                    <?php if (@$q->image != '') : ?>
                                        <img src="<?= base_url(); ?><?= @$q->image; ?>" width="150" height="150">
                                    <?php endif; ?>                                   	
                                </td>
                            </tr>
                            
                            <tr>
                                <td width="169" align="left"><label>Giới thiệu:</label><br><span class="help">Mô tả thông tin chi tiết</span></label></td>
                                <td width="922">
                                    <?php if (@$q->description != '') : ?>
                                        <?php echo $this->ckeditor->editor("description", @$q->description, $config_mini); ?>
                                    <?php else : ?>
                                        <?php echo $this->ckeditor->editor("description", "", $config_mini); ?>
                                    <?php endif; ?>
                                    <?= form_error('description'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td width="169" align="left"><label>Link Facebook:</label></td>
                                <td width="922">
                                    <?php if (@$q->position != '') : ?>
                                        <input name="infoface" type="text" id="infoface" value="<?php echo @$q->infoface; ?>" size="100" />
                                    <?php else : ?>
                                        <input name="infoface" type="text" id="infoface" value="<?php echo set_value('infoface'); ?>" size="100" />
                                    <?php endif; ?>
                                    <?= form_error('infoface'); ?>
                                </td>
                            </tr> 
                            <tr>
                                <td width="169" align="left"><label>Link Tweeter:</label></td>
                                <td width="922">
                                    <?php if (@$q->position != '') : ?>
                                        <input name="infotweeter" type="text" id="infotweeter" value="<?php echo @$q->infotweeter; ?>" size="100" />
                                    <?php else : ?>
                                        <input name="infotweeter" type="text" id="infotweeter" value="<?php echo set_value('infotweeter'); ?>" size="100" />
                                    <?php endif; ?>
                                    <?= form_error('infotweeter'); ?>
                                </td>
                            </tr> 
                            <tr>
                                <td width="169" align="left"><label>Link Google:</label></td>
                                <td width="922">
                                    <?php if (@$q->infogoole != '') : ?>
                                        <input name="infogoole" type="text" id="infogoole" value="<?php echo @$q->infogoole; ?>" size="100" />
                                    <?php else : ?>
                                        <input name="infogoole" type="text" id="infogoole" value="<?php echo set_value('infogoole'); ?>" size="100" />
                                    <?php endif; ?>
                                    <?= form_error('infogoole'); ?>
                                </td>
                            </tr> 
                            <tr>
                                <td width="169" align="left"><label>Link linkin:</label></td>
                                <td width="922">
                                    <?php if (@$q->position != '') : ?>
                                        <input name="infolinkin" type="text" id="infolinkin" value="<?php echo @$q->infolinkin; ?>" size="100" />
                                    <?php else : ?>
                                        <input name="infolinkin" type="text" id="infolinkin" value="<?php echo set_value('infolinkin'); ?>" size="100" />
                                    <?php endif; ?>
                                    <?= form_error('infolinkin'); ?>
                                </td>
                            </tr> 
                            <tr>
                                <td width="169" align="left"><label>Thứ tự:</label></td>
                                <td width="922">
                                    <?php if (@$q->ord != '') : ?>
                                        <input name="ord" type="text" id="infolinkin" value="<?php echo @$q->ord; ?>" size="100" />
                                    <?php else : ?>
                                        <input name="ord" type="text" id="ord" value="<?php echo set_value('ord'); ?>" size="100" />
                                    <?php endif; ?>
                                    <?= form_error('ord'); ?>
                                </td>
                            </tr> 
                        </tbody>
                    </table>
                </div>
                <!--<div id="tab_2" style="display:none;">Noi dung tabs 2</div>
                <div id="tab_3" style="display:none;">Noi dung tabs 3</div>-->
                <input type="hidden" id="id" name="id" value="<?= @$q->id; ?>">
                <input type="hidden" name="oldImage" value="<?= @$q->image; ?>">
            </form>

        </div><!--End content-->
    </div><!--End box-->

</div><!--End content-->