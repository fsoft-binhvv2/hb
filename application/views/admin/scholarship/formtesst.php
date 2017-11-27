<?php
        
        //tat ca cai nay dung de cau hinh cho ckeditter
        $config_mini = array();  
 
        $config_mini['toolbar'] = array(
            array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ,'-', 'Link', 'Unlink', 'Anchor','Image')
        );
         
// B?n có th? dùng m?ng full tùy ch?n
 $config_mini =array(
            array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' ));
//---- Ho?c tùy bi?n kích thu?c
  $this->ckeditor->config['width'] = '1100px';
  $this->ckeditor->config['height'] = '700px';

        /* Y la configuración del kcfinder, la debemos poner así si estamos trabajando en local */
                                    $config_mini['filebrowserBrowseUrl'] = base_url()."ckeditor/ckfinder/ckfinder.html";
                                    $config_mini['filebrowserImageBrowseUrl'] = base_url()."ckeditor/ckfinder/ckfinder.html?type=Images";
                                    $config_mini['filebrowserUploadUrl'] = base_url()."ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
                                    $config_mini['filebrowserImageUploadUrl'] = base_url()."ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
 
        //ket thuc cau hinh cho ckediter
?>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/jquery.timepicker.css" />
  <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery-ui.min.css" >
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
                <a href="javascript:void(0);" onclick="location.href = '<?= $this->index_url; ?>admin/scholarship';" class="button">Cancel</a>
            </div>
        </div><!--End heading-->
        <div class="content">
            <div id="tabs" class="htabs">
                <a href="#tab_1" class="selected">Thông tin học bổng</a>
                <!--<a href="#tab_2">Tab 2</a>
                <a href="#tab_3">Tab 3</a>-->
            </div><!--End tabs-->

            <form action="<?= $action; ?>" method="post" enctype="multipart/form-data" id="frm_add">
                <div id="tab_1" style="display:block;">
                    <table width="100%" class="form">
                        <tbody>
                            <tr>
                                <td width="169" align="left"><label>Tên học bổng:</label></td>
                                <td width="922">
                                    <?php if (@$article->name != '') : ?>
                                        <input name="name" type="text" id="name" value="<?php echo @$article->name; ?>" size="100" />
                                    <?php else : ?>
                                        <input name="name" type="text" id="name" value="<?php echo set_value('name'); ?>" size="100" />
                                    <?php endif; ?>
                                    <?= form_error('name'); ?>
                                </td>
                            </tr>
                            <tr>                                 
                                <td width="169" align="left"><label>Trường:</label></td> 
                                <td width="922">                                    	
                                    <select name="id_university">                                            
                                        <option value="0" selected >Chọn</option> 

                                        <?php if (!empty($cat)) : ?>	
					
                                         <?php foreach ($cat as $c) : ?>			
						
                                        <?php if (@$article->id_university != '') : ?>      
                                            <option value="<?php echo $c->id; ?>" <?php if (@$article->id_university == $c->id) echo "selected"; ?>>
                                            <?php   echo $c->name ?></option>       
                                          <?php else : ?>      
                                            <option value="<?= $c->id; ?>" <?php echo set_select('id_university', $c->id); ?>><?php  echo $c->name; ?></option>   
                                            <?php endif; ?>                                                                                                  
                                    <?php endforeach; ?>                                           
                                   <?php endif; ?>                                       
                                   </select>          
                          	<?= form_error('id_university'); ?>                                
                                </td>                              
                            </tr>
                             <tr>
                                <td width="169" align="left"><label>Bậc học:</label></td>
                                <td width="922">
                                    <input type="checkbox" id="inlineCheckbox1" name="type_scholarship_str[]" value="1"  > Thạc sĩ
                                    <input type="checkbox" id="inlineCheckbox1" name="type_scholarship_str[]"  value="2"  > Tiến sĩ
                                    <input type="checkbox" id="inlineCheckbox1" name="type_scholarship_str[]"  value="3"  > Post-doc
                                    <input type="checkbox" id="inlineCheckbox1" name="type_scholarship_str[]"  value="4"  > Đại học
                                    <input type="checkbox" id="inlineCheckbox1" name="type_scholarship_str[]"  value="5"  > Ngắn hạn
                                </td>
                            </tr>   
                             
                           <tr>
                                  <td width="169" align="left"><label>Deadline:</label><br /><span class="help"> </span></td>
                                    <td width="200">
                                    	<?php if(@$article->ngayquay !='') :?>
                                        <input name="deadline" type="text" id="deadline" value="<?php echo @$article->deadline;?>" size="100" />
                                        <?php else : ?>
                                        <input name="deadline" type="text" id="deadline" value="<?php echo set_value('deadline');?>" size="100" />
                                        <?php endif;?>
                                    	<?=form_error('deadline');?>
                                	</td>
                                </tr> 
                            <tr>
                                <td width="169" align="left"><label>Đường link gốc:</label></td>
                                <td width="922">
                                    <?php if (@$article->link != '') : ?>
                                        <input name="link" type="text" id="ord" value="<?php echo @$article->link; ?>" size="100" />
                                    <?php else : ?>
                                        <input name="link" type="text" id="ord" value="<?php echo set_value('link'); ?>" size="100" />
                                    <?php endif; ?>
                                    <?= form_error('link'); ?>
                                </td>
                            </tr>
                            
                             <tr>
                                  
                                  <td width="169" align="left"><label>Host Institution(s) :</label><br><span class="help">Mô tả thông tin chi tiết về sản phẩm cần bán: Thông số, chức năng,...</span></td>
                                    <td width="922">
                                        <?php if(@$article->Institution !='') { 
                                      
                                            echo $this->ckeditor->editor("Institution", @$article->Institution, $config_mini);
                                        
                                          } else { 
                                            //echo $this->ckeditor->editor("content", "", $config_mini);
                                            echo $this->ckeditor->editor("Institution", "", $config_mini);
                                        } ?>
                                        <?=form_error('Institution');?>
                                    </td>
                                </tr>
                            
                            
                            
                            <tr>
                                <td width="169" align="left"><label>Thứ tự:</label></td>
                                <td width="922">
                                    <?php if (@$article->order != '') : ?>
                                        <input name="order" type="text" id="ord" value="<?php echo @$article->order; ?>" size="100" />
                                    <?php else : ?>
                                        <input name="order" type="text" id="ord" value="<?php echo set_value('order'); ?>" size="100" />
                                    <?php endif; ?>
                                    <?= form_error('order'); ?>
                                </td>
                            </tr>
                             
                        </tbody>
                    </table>
                </div>
                <!--<div id="tab_2" style="display:none;">Noi dung tabs 2</div>
                <div id="tab_3" style="display:none;">Noi dung tabs 3</div>-->
                <input type="hidden" id="id" name="id" value="<?= @$article->id; ?>">
            </form>

        </div><!--End content-->
    </div><!--End box-->

</div><!--End content-->
 