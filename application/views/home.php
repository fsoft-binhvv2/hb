<section id="main-slider">
    <div class="owl-carousel">
        <div class="item" style="background-image: url(asset/images/slider/bg1.jpg);">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h2>Học bổng Thạc sĩ Tiến sĩ</h2>
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label for="exampleInputAmount">Chọn bậc học </label>
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option>Thạc sỹ</option>
                                                <option>Tiến sỹ</option>
                                                <option>Khác</option>
                                            </select>

                                        </div>
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-primary">Tìm học bổng ngay</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.item-->
        <div class="item" style="background-image: url(asset/images/slider/bg2.jpg); display:hidden">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h2>Bài test Hollencode</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna incididunt ut labore aliqua. </p>
                                <a class="btn btn-primary btn-lg" href="#">Test</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.item-->
    </div>
    <!--/.owl-carousel-->
</section>
<!--/#main-slider-->
<section id="cta" class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="column-title">Học bổng Thạc sĩ Tiến sĩ</h3> 
                <p>
                    Dự án Học bổng Thạc sĩ Tiến sĩ được thành lập với sứ mạng trở thành địa chỉ tin cậy,
                    hỗ trợ hiệu quả cho các bạn đang quan tâm đến việc xin học bổng ở bậc Thạc sĩ,
                    Tiến sĩ, sau Tiến sĩ  và các bậc học khác (đặc biệt trong lĩnh vực khoa học xã hội). 
                </p>
                <p>Bên cạnh đó, đội ngũ sáng lập và điều hành cũng kỳ vọng sẽ xây dựng Học bổng Thạc sĩ Tiến sĩ  trở thành một không gian học thuật với chuẩn mực quốc tế trong lĩnh vực Khoa học xã hội. </p>
                <p>Các hoạt động chính của Dự án Học bổng Thạc sĩ Tiến sĩ bao gồm:</p>
                <p>1 Thông tin Học bổng TOÀN PHẦN ở bậc học Thạc sĩ, Tiến sĩ và các bậc học khác KỊP THỜI, TIN CẬY (chủ yếu tập trung vào Học bổng các ngành khoa học xã hội và Nhân văn)</p>
                <p>2 Chương trình Research Coach định hướng công bố tạp chí thuộc danh mục ISI, Scopus trong Khoa học Xã hội (theo lớp hoặc 1-1): </p>
                <p>3 Khoá Đào tạo Reading a Journal’s Article </p>
                <p>4 Khoá Đào tạo Searching an Academic Document </p>
                <p>5 Khoá Đào tạo Paraphrasing, Citation and References </p>
                <p>6 Khoá Đào tạo Research Proposal Writing </p>
                <p>7 Khoá Đào tạo Data Analysis </p>
                <p>8 Khoá Đào tạo Advanced Coaching: Publishing for Success</p>
                <p>9 Seminar Công bố quốc tế trong Khoa học xã hội </p>
                <p>10 Bài Test Nghề phù hợp </p>
                <p>11 ĐẶC BIỆT, tư vấn miễn phí 1-1 sáng Thứ 3 và Chủ nhật hàng tuần </p>

            </div>
        </div>
    </div>
</section>

<?php if(!empty($featureNotFee)) : ?>
<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Các tính năng miễn phí</h2>
        </div>
        <div class="portfolio-items">
            <?php foreach($featureNotFee->result() as $item) : ?>
            <div class="portfolio-item creative">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="<?=base_url();?>images/portfolio/01.jpg" alt="<?php echo $item->name;?>">
                    <div class="portfolio-info">
                        <h3><a href="<?=base_url();?> "><?php echo $item->name;?></a></h3>
                        <?php echo $item->content;?>
                        <a class="preview" href="<?=base_url();?>images/portfolio/full.jpg" rel="prettyPhoto">
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php endif;?>


<?php if(!empty($scholarship)) : ?>
<div id="hocbongtoanphan"  class="wow fadeIn section_toanphan" style="padding-top:100px ">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Các học bổng toàn phần mới cập nhật</h2>
        </div>
        <div class="row">
            <?php foreach($scholarship->result() as $item) : ?>
            <div class="col-sm-4">
                <!-- Product -->
                <div class="shop-item">
                    <!-- Product Image -->
                    <div class="image">
                        <a href="<?php echo base_url();?>home/chitiethocbong/<?php echo $item->id;?>"><img src="<?=base_url();?><?php echo $item->image;?>" width="345" height="210" alt="Item Name"></a>
                    </div>
                    <!-- Product Title -->
                    <div class="title">
                        <h3><a href="<?php echo base_url();?>home/chitiethocbong/<?php echo $item->id;?>"><?php echo $item->name;?></a></h3>
                    </div>
                    <div class="description">
                        <p> <strong>
                            <?php 
                            $type_scholarship_str = $item->type_scholarship_str;
                            $array_scholarship = explode(',', $type_scholarship_str);
                            $str_scholarship = "";
                            if (in_array(1, $array_scholarship)) { $str_scholarship = $str_scholarship. "Thạc sĩ, "; }
                            if (in_array(2, $array_scholarship)) { $str_scholarship = $str_scholarship. "Tiến sĩ, "; }
                            if (in_array(3, $array_scholarship)) { $str_scholarship = $str_scholarship. "Post-doc, "; }
                            if (in_array(4, $array_scholarship)) { $str_scholarship = $str_scholarship. "Đại học, "; }
                            if (in_array(5, $array_scholarship)) { $str_scholarship = $str_scholarship. "Ngắn hạn, "; }
                            echo substr($str_scholarship, 0, -2);
                            ?>
                            </strong>
                        </p>
                    </div>
                    <div class="description">
                        <p> <strong><?php echo $item->university_name;?></strong></p>
                    </div>
                    <div class="description">
                        <p> <strong><?php  echo $this->db->query("SELECT GROUP_CONCAT(' ',name) as name FROM `brand` WHERE `id` IN (".$item->id_brand_str.")")->result()[0]->name;?></strong></p>
                    </div>
                    <div class="description">
                        <p> <strong>Deadline: <span class="text-danger" ><?php echo $item->deadline;?></span></strong></p>
                    </div>
                    <div class="description">
                        <?php echo mb_substr($item->Institution,0,300);?>
                    </div>
                </div>
                <!-- End Product -->
            </div>
            <?php endforeach;?> 
        </div>
    </div>
</div>
<?php endif;?>

<?php if(!empty($team)) : ?>
<section id="meet-team">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Đội ngũ sáng lập và điều hành</h2>
        </div>
        <div class="row">
            <?php foreach($team->result() as $item) : ?>
            <div class="col-sm-6 col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <div class="team-img">
                        <img class="img-responsive"  src="<?=base_url();?><?php echo $item->image;?>" alt="<?php echo $item->name;?>" style="width:260px!important;height:280px !important">
                    </div>
                    <div class="team-info">
                        <h3><?php echo $item->name;?></h3>
                        <span><?php echo $item->position;?></span>
                    </div>
                    <?php echo mb_substr($item->description,0,450);?>
                    <ul class="social-icons">
                        <li><a href="<?php echo $item->infoface;?>"><i class="fa fa-facebook" style="line-height: 32px;"></i></a></li>
                        <li><a href="<?php echo $item->infotweeter;?>"><i class="fa fa-twitter" style="line-height: 32px;"></i></a></li>
                        <li><a href="<?php echo $item->infogoole;?>"><i class="fa fa-google-plus" style="line-height: 32px;"></i></a></li>
                        <li><a href="<?php echo $item->infolinkin;?>"><i class="fa fa-linkedin" style="line-height: 32px;"></i></a></li>
                    </ul>
                </div>
            </div>
            <?php endforeach;?> 
        </div>
    </div>
</section>
<?php endif;?>

<?php if(!empty($featureFee)) : ?>
<section id="portfolio"  class="wow fadeIn">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Các tính năng tính phí</h2>
        </div>
        <div class="portfolio-items">
            
            <?php foreach($featureFee->result() as $item) : ?>
            <div class="portfolio-item creative">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="<?=base_url();?>images/portfolio/01.jpg" alt="<?php echo $item->name;?>">
                    <div class="portfolio-info">
                        <h3><a href="<?=base_url();?>"><?php echo $item->name;?></a></h3> 
                        <?php echo $item->content;?>
                        <a class="preview" href="<?=base_url();?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach;?> 
        </div>
    </div>
</section>
<?php endif;?>
 
<section id="animated-number">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Thống kê</h2>
            <p class="text-center wow fadeInDown">Thống kê danh sách học bổng</p>
        </div>
        <div class="row text-center">
            <div class="col-sm-4 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <div class="animated-number" data-digit="<?php  echo $this->db->query("SELECT count(1) as so FROM `scholarship`")->result()[0]->so;?>" data-duration="1000"></div>
                    <strong>Tổng số học bổng</strong>
                </div>
            </div>
            
            <div class="col-sm-4 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                    <div class="animated-number" data-digit="<?php  echo $this->db->query("SELECT count(DISTINCT(id_brand)) as so FROM `scholarship_brand`")->result()[0]->so;?>" data-duration="1000"></div>
                    <strong>Số nghành được cấp học bổng</strong>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                    <div class="animated-number" data-digit="<?php  echo $this->db->query("SELECT count(DISTINCT(id_country)) as so FROM `scholarship_country`")->result()[0]->so;?>" data-duration="1000"></div>
                    <strong>Số quốc gia cấp học bổng</strong>
                </div>
            </div>
        </div>
    </div>
</section>



<?php if(!empty($news)) : ?>
<section id="blog">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Tin tức về chúng tôi</h2>
        </div>
        <div class="row">
            <div class="table-container">
                <table class="table table-filter">
                   <tbody>
                        <?php foreach($news->result() as $item) : ?>
                        <tr data-status="pagado">
                        <td>
                            <div class="media">
                               <a href="#" class="pull-left">
                                   <img src="<?=base_url();?><?php echo $item->image;?>" style="width:128px;height:128px" class="media-photo">
                               </a>
                               <div class="media-body">
                                  <span class="media-meta pull-right"><?=mdate('%d/%m/%Y', $item->modify_date);?></span>
                                  <h4 class="title">
                                     <?php echo $item->title;?>
                                     <span class="pull-right <?php if($item->type == 1) echo "pagado"; else echo " pendiente";?>">(<?php if($item->type == 1) echo "Kinh nghiệm học bổng";
                                         else echo "Nhà nghiên cứu phát triển"; ?>)</span>
                                  </h4>
                                  <p class="summary"><?php echo mb_substr($item->intro, 0,450);?></p>
                               </div>
                            </div>
                         </td>
                        </tr>
                    <?php endforeach;?>  
                   </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<style>
/*    --------------------------------------------------
         :: General
         -------------------------------------------------- */
         body {
         font-family: 'Open Sans', sans-serif;
         color: #353535;
         }
         .content h1 {
         text-align: center;
         }
         .content .content-footer p {
         color: #6d6d6d;
         font-size: 12px;
         text-align: center;
         }
         .content .content-footer p a {
         color: inherit;
         font-weight: bold;
         }
         /*	--------------------------------------------------
         :: Table Filter
         -------------------------------------------------- */
         .panel {
         border: 1px solid #ddd;
         background-color: #fcfcfc;
         }
         .panel .btn-group {
         margin: 15px 0 30px;
         }
         .panel .btn-group .btn {
         transition: background-color .3s ease;
         }
         .table-filter {
         background-color: #fff;
         border-bottom: 1px solid #eee;
         }
         .table-filter tbody tr:hover {
         cursor: pointer;
         background-color: #eee;
         }
         .table-filter tbody tr td {
         padding: 10px;
         vertical-align: middle;
         border-top-color: #eee;
         }
         .table-filter tbody tr.selected td {
         background-color: #eee;
         }
         .table-filter tr td:first-child {
         width: 38px;
         }
         .table-filter tr td:nth-child(2) {
         width: 35px;
         }
         .ckbox {
         position: relative;
         }
         .ckbox input[type="checkbox"] {
         opacity: 0;
         }
         .ckbox label {
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         }
         .ckbox label:before {
         content: '';
         top: 1px;
         left: 0;
         width: 18px;
         height: 18px;
         display: block;
         position: absolute;
         border-radius: 2px;
         border: 1px solid #bbb;
         background-color: #fff;
         }
         .ckbox input[type="checkbox"]:checked + label:before {
         border-color: #2BBCDE;
         background-color: #2BBCDE;
         }
         .ckbox input[type="checkbox"]:checked + label:after {
         top: 3px;
         left: 3.5px;
         content: '\e013';
         color: #fff;
         font-size: 11px;
         font-family: 'Glyphicons Halflings';
         position: absolute;
         }
         .table-filter .star {
         color: #ccc;
         text-align: center;
         display: block;
         }
         .table-filter .star.star-checked {
         color: #F0AD4E;
         }
         .table-filter .star:hover {
         color: #ccc;
         }
         .table-filter .star.star-checked:hover {
         color: #F0AD4E;
         }
         .table-filter .media-photo {
         width: 120px;
         }
         .table-filter .media-body {
         display: block;
         /* Had to use this style to force the div to expand (wasn't necessary with my bootstrap version 3.3.6) */
         }
         .table-filter .media-meta {
         font-size: 11px;
         color: #999;
         }
         .table-filter .media .title {
         color: #2BBCDE;
         font-size: 14px;
         font-weight: bold;
         line-height: normal;
         margin: 0;
         }
         .table-filter .media .title span {
         font-size: .8em;
         margin-right: 20px;
         }
         .table-filter .media .title span.pagado {
         color: #5cb85c;
         }
         .table-filter .media .title span.pendiente {
         color: #f0ad4e;
         }
         .table-filter .media .title span.cancelado {
         color: #d9534f;
         }
         .table-filter .media .summary {
         font-size: 14px;
         }
      </style>
