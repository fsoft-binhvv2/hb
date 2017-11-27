<?php 

$day=date("Y-m-d");
$thuquay =  strtolower(date("l", strtotime($day)));
 
	switch ($thuquay) {
		 
        case "sunday":
            $homnay="Mega 6/45";
            $ngaymai="Không có";
            break;
        case "monday":
            $homnay="Không có";
            $ngaymai="Max 4D";
            break;
        case "tuesday":
           $homnay="Max 4D";
           $ngaymai="Mega 6/45";
            break;
        
        case "wednesday":
           $homnay="Mega 6/45";
           $ngaymai="Max 4D";
            break;
        case "thursday":
            $homnay="Max 4D";
           $ngaymai="Mega 6/45";
            break;
        case "friday":
            $homnay="Mega 6/45";
           $ngaymai="Max 4D";
            break;
        case "saturday":
            $homnay="Max 4D";
            $ngaymai="Mega 6/45";
            break;
        default:
            echo "Unknown";
            break;
        }

?>
<div class="panel panel-default border0">
	<div class="panel-heading">
		<h4><i class="fa fa-random" aria-hidden="true"></i> Lịch mở thưởng Vietlott</h4>
	</div>
	
	<div class="panel-body pad0">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover mar0">
				<tbody>
					<tr class="red bold">
						<td>Hôm nay</td>
						<td><?php echo $homnay;?></td>
						<td>18h10'</td>
					</tr>
					<tr>
						<td>Ngày mai</td>
						<td><?php echo $ngaymai;?></td>
						<td>18h10'</td>
					</tr>
				</tbody>
			</table>
		</div>
		
	</div>
	
</div> 
<div class="panel panel-default">
 <div class="panel-heading">
    <h4><i class="fa fa-newspaper-o"></i> Tin tức Vietlott mới nhất</h4>
 </div>
 <div class="panel-body">
 <ul class="news-box">
  <?php if(!empty($news)) : ?> 
      <?php foreach($news as $new) : ?>
 		<li><a href="<?=site_url($url_view . $new->id .'-'. $this->util->alias($new->title));?>"><?=$new->title;?></a></li>
      <?php endforeach;?>
  <?php endif;?>
 </ul>
 </div>
</div>
<div class="panel panel-default">
 <div class="panel-heading">
    <h4><i class="fa fa-newspaper-o"></i> Tin vietlott xem nhiều nhất</h4>
 </div>
 <div class="panel-body">
 <ul class="news-box">
  <li><a href="http://vietmega.net/xem-tin/72-choi-vietlott-mien-phi-trung-the-cao-khung-cung-vietmega-net.html" target="	_blank">Chơi vietlott miễn phí - Trúng thẻ cào khủng cùng vietmega.net</a></li>
  <li><a href="http://vietmega.net/xem-tin/67-phat-tien-den-20trieu-doi-voi-hanh-vi-ban-ve-dao.html" target="	_blank">PHẠT TIỀN đến 20 triệu đối với hành vi bán vé dạo</a></li>
  
 </ul>
 </div>
</div>
<a href="http://vietmega.net/xem-tin/72-choi-vietlott-mien-phi-trung-the-cao-khung-cung-vietmega-net.html" target="	_blank" title="Xổ số tự chọn Max4d">
<img src="<?php echo base_url();?>asset/images/right1.png" alt="chơi vietlott nhận thưởng vietmega.net"  class="red-border img-responsive">
</a> 

<div class="fb-page" data-href="https://www.facebook.com/xosovietmega/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/xosovietmega/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/xosovietmega/">Vietmega.net</a></blockquote></div>
        