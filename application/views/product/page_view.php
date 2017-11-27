
<div class="seo_breab">
<?php foreach($render_path as $key => $val) : ?>
<a href="<?=$val;?>"><?=$key;?></a> &raquo;
<?php endforeach;?>
</div>
            <div id="area_product">
            	<div class="heading_title"><?=$this->site_title;?></div>
                <div class="product_list">
                	<?php if(!empty($pro_view)) :?>
                    	<div style="float:left; text-align:center; margin-right:20px; width:200px;">
                        	<img src="<?=base_url();?><?=$pro_view->p_image_thumb;?>" alt="Hình sản phẩm"/><br />
                            <a href="<?=base_url();?><?=$pro_view->p_image;?>" class="image_larger" title="Sản phẩm <?=$pro_view->p_name;?>">Xem ảnh lớn</a>
                        </div>
                        <div style="float:left; border-left:1px solid #ccc; padding:10px; width:350px;">
                        	<h3><?=$pro_view->p_name;?></h3><br />
                            <strong>Giá bán : Liên hệ <?=$this->phone;?></strong><br /><br />
                            <strong><a href="<?=site_url('mua-hang');?>" style="background-color:#ccc; border-radius: 5px; padding:5px;" title="Mua hàng">Mua hàng</a></strong><br />
                        </div>
                        <div style="clear:both; margin-top:20px; padding-top:20px;">
                        	<h2 style="margin:10px;">Mô tả chi tiết:</h2>
                            <?=$pro_view->p_detail;?>
                        </div>
                    <?php endif;?>
                </div><!--End product list-->
                
                <div class="product_list">
                	<?php if(!empty($other_products)) : ?>
                    <div style="float:left; margin-bottom:10px;">
                    <?php foreach($other_products->result() as $pro) : ?>
                        <div class="box_pro">
                            <div class="pro_title"><a href="<?=site_url('xem-san-pham/'. $pro->id .'-'. $pro->catid . '-' . $pro->p_name_alias);?>" title="<?=$pro->p_name;?>"><?=$pro->p_name;?></a></div>
                            <div class="pro_image"><img src="<?=base_url();?><?=$pro->p_image_thumb;?>"/></div>
                            <div class="pro_cart_detail"><a href="<?=site_url('mua-hang');?>" title="Mua hang">Mua hàng</a> | <a href="<?=site_url('xem-san-pham/'. $pro->id .'-'. $pro->catid .'-' . $pro->p_name_alias);?>" title="Chi tiết sản phẩm">Chi tiết</a></div>
                        </div>
                    <?php endforeach;?>
                    </div>
                    <?php else :?>
                    <?php echo "Chưa có sản phẩm nào trong mục này";?>
					<?php endif;?>
                </div>
                <div class="product_list_bottom"></div>
            </div><!--End area product-->
         