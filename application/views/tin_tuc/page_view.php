<div class="panel panel-default">
     <div class="panel-heading">
        <h4><i class="fa fa-newspaper-o"></i> Tin tức</h4>
     </div>
     <div class="panel-body pad-top-10">
     <ol class="breadcrumb">
        <?php foreach($render_path as $key => $val) : ?>
            <li><a href="<?=$val;?>"><?=$key;?></a></li>
          <?php endforeach;?>
        </ol>
        <div id="area_product">
                <div class="product_list">
                    <h1 style="font-size:20px; margin-bottom:10px; font-weight:normal; color:#662693;"><?=$news->title;?></h1>
                    <p style="font-weight:bold; margin-bottom:10px;"><?=$news->intro;?></p>
                    <div>
                        <div class="fb-like" data-href="https://www.facebook.com/C%C3%B4ng-ty-x%E1%BB%95-s%E1%BB%91-%C4%91i%E1%BB%87n-to%C3%A1n-vi%E1%BB%87t-nam-vietmeganet-1804114183174605/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                        <div class="fb-share-button" data-href="<?php  echo (current_url());?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fvietmega.net%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
                        <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                        
					  </div>
					 
                    <hr>
                    <p class="content_news"><?=$news->content;?></p>
                    <div class="other_news" style="border-top:1px solid #cccccc; margin-top:20px; padding-top:5px;">
                    	<h1 style="font-size:20px; font-weight:normal; margin:0;">Bài viết khác</h1>
                    	<?php if(!empty($other_news)) : ?>
                        <ul style="list-style:none;padding:5px;">
                        	<?php foreach($other_news as $other) : ?>
                            <li style="padding:7px 0px;">&raquo; <a href="<?=site_url($url_view . $other->id .'-'. $this->util->alias($other->title));?>" title="<?=$other->title;?>"><?=$other->title;?></a> <span style="font-size:11px; font-style:italic;">(Đăng ngày: <?=mdate('%d/%m', $other->create_date);?>)</span></li>
                            <?php endforeach;?>
                        </ul>
                        <?php endif;?>
                    </div>
                    
                </div><!--End product list-->
                <div class="product_list_bottom"></div>
            </div><!--End area product-->   
     </div>
  </div>
				  
			
 