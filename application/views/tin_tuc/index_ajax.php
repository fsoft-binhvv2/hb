
         <?php if(!empty($news)) : ?> 
         <?php foreach($news as $new) : ?>  
            <li class="news-item">
                <div class="news-photo col-md-4 col-sm-4 col-xs-4">
                    <img src="<?=base_url();?><?=$new->image;?>">
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
       
				  




           
<script type="text/javascript">
        	function loadUrl(url, id)
			{
				$('.' + id ).load(url);
			}
			
</script>