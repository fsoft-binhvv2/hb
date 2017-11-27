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
<div id="content">
    	<div class="breadcrumb">
        	<?php if($render_path) : ?>
            <?php foreach($render_path as $key => $val) :?>
            <a href="<?=$val;?>"><?=$key;?></a> ::
            <?php endforeach;?>
            <?php endif;?>
        </div><!--End breadcrumb-->
        <div class="warning" style="display:none;"><?php if($this->session->flashdata('warning')) echo $this->session->flashdata('warning');?></div>
        <div class="box">
        	<div class="heading">
            	<h1><img src="<?=base_url();?>admin_template/image/category.png" /><?=$heading_title;?></h1>
                <div class="buttons">
                	<a href="javascript:void(0);" onclick="$('#frm_add').submit();" class="button">Save</a>
                    <a href="javascript:void(0);" onclick="location.href='<?=$this->index_url;?>admin/news';" class="button">Cancel</a>
                </div>
            </div><!--End heading-->
            <div class="content">
            	<div id="tabs" class="htabs">
                	<a href="#tab_1" class="selected">Thông tin bản tin</a>
                    <!--<a href="#tab_2">Tab 2</a>
                    <a href="#tab_3">Tab 3</a>-->
                </div><!--End tabs-->
                
                <form action="<?=$action;?>" method="post" enctype="multipart/form-data" id="frm_add">
               	  <div id="tab_1" style="display:block;">
                   	  <table width="100%" class="form">
						<tbody>
                           	  <tr>
                                  <td width="169" align="left"><label>Tiêu đề bản tin:</label></td>
                                    <td width="922">
                                    	<?php if(@$q->title !='') :?>
                                        <input name="title" type="text" id="title" value="<?php echo @$q->title;?>" size="100" />
                                        <?php else : ?>
                                        <input name="title" type="text" id="title" value="<?php echo set_value('title');?>" size="100" />
                                        <?php endif;?>
                                    	<?=form_error('title');?>
                                	</td>
                                </tr>
                                
                                <tr>
                                  <td width="169" align="left"><label>Loại tin:</label></td>
                                    <td width="922">
                                    	<select name="type">
                                               <option value="0" <?php if(@$q->type == 0) echo "selected";?>>Nhà nghiên cứu phát triển</option>
                                               <option value="1" <?php if(@$q->type == 1) echo "selected";?>>Kinh nghiệm học bổng</option>
                                        </select>
                                    	<?=form_error('type');?>
                                	</td>
                                </tr>
                                
                                <tr>
                                  <td width="169" align="left"><label>Mô tả ngắn:</label></td>
                                    <td width="922">
                                    	<?php if(@$q->intro !='') :?>
                                        <textarea name="intro" rows="5" cols="100"><?php echo @$q->intro;?></textarea>
                                        <?php else : ?>
                                        <textarea name="intro" rows="5" cols="100"><?=set_value('intro');?></textarea>
                                        <?php endif;?>
                                    	<?=form_error('intro');?>
                                	</td>
                                </tr>
                              	 
								
								 <tr>
                                  <td width="169" align="left"><label>Mô tả chi tiết:</label><br><span class="help">Mô tả thông tin chi tiết về bản tin</span></label></td>
                                    <td width="922">
                                    	<?php if(@$q->content !='') :?>
                                        
                                      <?php  echo $this->ckeditor->editor("detail", @$q->content, $config_mini); ?>
                                        <?php else : ?>
                                        <?php echo $this->ckeditor->editor("detail", "", $config_mini); ?>
                                        <?php endif;?>
                                    	<?=form_error('detail');?>
                                	</td>
                                    
                                    
                                </tr>
                                <tr>
                                  <td width="169" align="left"><label>Hình ảnh:</label></td>
                                    <td width="922">
										<input type="file" name="image_news" /> <br>
                                        <?php if(@$q->image !='') : ?>
                                        <img src="<?=base_url();?><?=@$q->image;?>" width="150" height="150">
                                        <?php endif;?>                                   	
                                	</td>
                                </tr>
                                 <tr>
                                  <td align="left"><label>Trạng thái:</label><br /><span class="help">Click nếu muốn hiển thị tin bên phải trang chủ</span></td>
                                    <td>
                                    <input type="checkbox" name="active" <?php if(@$q->active == 1) echo "checked=checked"; else "";?>/>
                                    <?=form_error('active');?>
                                </td>
                                </tr>
            		     </tbody>
                        </table>
                  </div>
                    <!--<div id="tab_2" style="display:none;">Noi dung tabs 2</div>
                    <div id="tab_3" style="display:none;">Noi dung tabs 3</div>-->
                    <input type="hidden" id="id" name="id" value="<?=@$q->id;?>">
                    <input type="hidden" name="oldImage" value="<?=@$q->image;?>">
                </form>
                
            </div><!--End content-->
        </div><!--End box-->
        
    </div><!--End content-->