<div class="container">
    <div class="row" style="margin-top: 20px;margin-bottom: 20px">
        <div class="col-md-7">
            <div class="form-group">
                <input  class="form-control" type="text" value="" style="width: 80%" placeholder="Nhập thông tin cần search ở đây"    >
            </div>

        </div>
        <div class="col-md-5">
            <div class="form-group form-inline  pull-right">
                <label  style="margin-right:10px">Sort </label>
                <select class="form-control ">
                    <option>By date possted</option>
                    <option>By date possted</option>

                </select>

            </div>

        </div>
    </div>
    <div class="row " style="border:#ccc 1px solid;padding:10px">
        <div class="row">
            <div class="col-md-2">

                <label >Tìm kiếm học bổng</label>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label >Quốc gia</label><br>
                    <select id="country" multiple="multiple" class ="form-control" name="country">
                        <?php if(!empty($country)) : ?>
                        <?php foreach($country->result() as $item) : ?>
                        <option value="<?php echo $item->id;?>"><?php echo $item->name;?></option>
                        <?php endforeach;?> 
                        <?php endif;?>
                         
                    </select>
                </div>
            </div>
            <div class="col-md-3">

                <div class="form-group">
                    <label >Trường</label><br>
                    <select id="schools"  class ="form-control" name="schools" >
                        <?php if(!empty($university)) : ?>
                        <?php foreach($university->result() as $item) : ?>
                        <option value="<?php echo $item->id;?>"><?php echo $item->name;?></option>
                        <?php endforeach;?> 
                        <?php endif;?>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label >Nghành học</label><br>
                    <select id="brand" multiple="multiple" class ="form-control" name="brand" >
                        <?php if(!empty($brand)) : ?>
                        <?php foreach($brand->result() as $item) : ?>
                        <option value="<?php echo $item->id;?>"><?php echo $item->name;?></option>
                        <?php endforeach;?> 
                        <?php endif;?>

                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label > </label>

                </div>
                <label >Clear All</label>
            </div>
        </div>

        <div class="row"  style=" padding-left:15px">
            <div class="col-md-4  col-md-offset-2">
                <div class="row">
                    <div class="form-group">
                        <label >Bậc học</label>
                    </div>
                </div>
                <div class="row">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1"  > Thạc sỹ
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="2"  > Tiến sĩ

                    </label>
                </div>

                <div class="row">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="3"  > Post-doc
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="4"  > Đại học
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="5"  > Ngắn hạn
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="form-group">
                        <label >Hạn nộp hồ sơ</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">   
                        <div class="form-group">
                            <label >Từ ngày</label>


                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Đến ngày</label>
                            <div class='input-group date' id='datetimepicker2'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-2">
                <button type="button" class="btn btn-danger  btn-lg">Apply Filter</button>
            </div>
        </div>
    </div> 
    
    <?php if(!empty($scholarship)) : ?>
    <?php foreach($scholarship->result() as $item) : ?>
    <div class="row"  style="border:#ccc 1px solid;padding:10px;margin-top: 20px;margin-bottom: 20px"  >
        <div  class="col-md-2">
            <img class="img-responsive" src="<?=base_url();?><?php echo $item->image;?>" style="width:160px; height:180px" alt="<?php echo $item->name;?>">
        </div>
        <div class="col-md-8">
            <h3 class="entry-title"><a href="<?php echo base_url();?>home/chitiethocbong/<?php echo $item->id;?>"><?php echo $item->name;?></a></h3>
            <P><span class="glyphicon glyphicon-hand-right" style="padding-right: 10px"></span>
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
            </P>
            <P><span class="glyphicon glyphicon-hand-right" style="padding-right: 10px"></span><?php echo $item->university_name;?></P>
            <P><span class="glyphicon glyphicon-hand-right" style="padding-right: 10px"></span><?php  echo $this->db->query("SELECT GROUP_CONCAT(' ',name) as name FROM `brand` WHERE `id` IN (".$item->id_brand_str.")")->result()[0]->name;?></P>
        </div>
        <div  class="col-md-2">
            <div class="row" style="width:100%;min-height:100px;border:#ccc 1px solid;padding: 20px">
                <p class="text-center  text-success">
                    <?php if(strtotime(date("Y-m-d")) > strtotime($item->deadline))
                    {
                        echo "<p class='text-center  text-danger'><strong>Đã Hết hạn</strong></p>";
                    }
                    else {
                        echo "<p class='text-center  text-success'><strong>Sẽ hết hạn ngày ".$item->deadline."</strong></p>";;
                    }
                   
                 
                    ?>
                </p>
            </div>
            <div class="row" style="margin-top: 15px;">
                <a class="btn btn-primary" href="<?php echo base_url();?>home/chitiethocbong/<?php echo $item->id;?>">Xem chi tiết</a>
            </div>
        </div>
    </div>
    <?php endforeach;?> 
    <?php endif;?>
    
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php if(!empty($page)) :?>
            <?php echo $page;?>
            <?php endif;?>
        </ul>
    </nav>
</div>
<style>
    .pagination {

    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}
.pagination a ,.pagination strong{
   
    float: left;
    padding: 6px 12px;
     
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
</style>    