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
                <a href="javascript:void(0);" onclick="location.href = '<?= $this->index_url; ?>admin/university';" class="button">Cancel</a>
            </div>
        </div><!--End heading-->
        <div class="content">
            <div id="tabs" class="htabs">
                <a href="#tab_1" class="selected">Thông tin trường đại học</a>
                <!--<a href="#tab_2">Tab 2</a>
                <a href="#tab_3">Tab 3</a>-->
            </div><!--End tabs-->

            <form action="<?= $action; ?>" method="post" enctype="multipart/form-data" id="frm_add">
                <div id="tab_1" style="display:block;">
                    <table width="100%" class="form">
                        <tbody>
                            <tr>
                                <td width="169" align="left"><label>Tên trường:</label></td>
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
                                <td width="169" align="left"><label>Quốc gia:</label></td> 
                                <td width="922">                                    	
                                    <select name="id_country">                                            
                                        <option value="0" selected >Chọn</option> 

                                        <?php if (!empty($cat)) : ?>	
					
                                         <?php foreach ($cat as $c) : ?>			
						
                                        <?php if (@$article->id_country != '') : ?>      
                                            <option value="<?php echo $c->id; ?>" <?php if (@$article->id_country == $c->id) echo "selected"; ?>>
                                            <?php   echo $c->name ?></option>       
                                          <?php else : ?>      
                                            <option value="<?= $c->id; ?>" <?php echo set_select('id_country', $c->id); ?>><?php  echo $c->name; ?></option>   
                                            <?php endif; ?>                                                                                                  
                                    <?php endforeach; ?>                                           
                                   <?php endif; ?>                                       
                                   </select>          
                          	<?= form_error('id_country'); ?>                                
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