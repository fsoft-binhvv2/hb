<div class="panel panel-default">
     <div class="panel-heading">
        <h4><i class="fa fa-newspaper-o"></i> Tin tức xổ số mới nhất</h4>
     </div>
     <div class="panel-body pad-top-10">
     	<div>
    <div class="fb-like" data-href="https://www.facebook.com/C%C3%B4ng-ty-x%E1%BB%95-s%E1%BB%91-%C4%91i%E1%BB%87n-to%C3%A1n-vi%E1%BB%87t-nam-vietmeganet-1804114183174605/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
    <div class="fb-share-button" data-href="<?php  echo (current_url());?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fvietmega.net%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
    <div class="g-plus" data-action="share" data-annotation="bubble"></div>
		</div>
        <hr>	
        <ul id="news-list" class="product_list">  
         <?php if(!empty($news)) : ?> 
         <?php foreach($news as $new) : ?>  
            <li class="news-item">
                <div class="news-photo col-md-4 col-sm-4 col-xs-4">
                    <a href="<?=site_url($url_view . $new->id .'-'. $this->util->alias($new->title));?>"><img src="<?=base_url();?><?=$new->image;?>"></a>
               </div>
               <div class="news-text col-md-8 col-sm-8 col-xs-8">
                <div class="news-title">
                        <a href="<?=site_url($url_view . $new->id .'-'. $this->util->alias($new->title));?>"><h4><?=$new->title;?></h4></a>
                    </div>
                  <div class="news-time">
                        <h6><?=mdate('%d/%m/%Y', $new->modify_date);?></h6>
                  </div>
                  <div class="news-description">
                        <h5><?=$new->intro;?></h5>
                  </div>  
               </div>
           </li>
          <?php endforeach;?>
          <?php endif;?>
		   </ul>
          

			 <div class="pagination">
				<div class="link">
					 <?php if(!empty($page)) :?>
					<?php echo $page;?>
					<?php endif;?>
				</div>
			</div><!--End pagination-->   		
     </div>
  </div>
				  
				  
				  




           
<script type="text/javascript">
        	function loadUrl(url, id)
			{
				$('.' + id ).load(url);
			}
			
</script>


