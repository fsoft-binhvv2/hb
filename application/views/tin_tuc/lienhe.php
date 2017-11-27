<div class="panel panel-default">
     <div class="panel-heading">
        <h4><i class="fa fa-envelope-o"></i> Liên hệ</h4>
     </div>
     <div class="panel-body">
     		<div class="intro">
            <h4>Về chúng tôi</h4>
            <hr>
            <?php echo $content;?>
            <form action=" <?php  echo base_url(); ?>send-lien-he" method="post" name="lienhe">
             <h4>Vui lòng liên hệ với chung tôi theo mẫu sau:</h4>
             	<div class="contact col-md-6 col-sx-12">
                		<b>Họ tên:</b>
                    <input type="text" class="form-control" name="hoten" placeholder="Họ tên"  value="<?php echo set_value('hoten'); ?>">  <font color="red"> <?php echo form_error('hoten');?> </font>
                </div>
                <div class="contact col-md-6 col-sx-12">
                		<b>Email:</b>
                    <input type="text" class="form-control" name="email" placeholder="Email"  value="<?php echo set_value('email'); ?>">    <font color="red"><?php echo form_error('email');?></font>
                </div>
                <div class="contact col-md-12 col-sx-12 ">
                		<b>Nội dung:</b>
                    <textarea class="form-control" rows="3" name="noidung" placeholder="Nội dung..."><?php echo set_value('noidung'); ?></textarea>    <font color="red"><?php echo form_error('noidung');?></font>
                </div>
                
                 <div class="contact col-md-6 col-sx-12">
                		<b>Nhập mã này vào ô bên cạnh: <font color="red"> <?php   echo "  ".$this->session->userdata('security_code');?></font></b>
                </div>
                <div class="contact col-md-6 col-sx-12">
                	<input type="text" class="form-control" name="capcha" placeholder="Nhập mã số bên trái vào đây">    <font color="red"><?php echo form_error('capcha').$loicapcha;?></font>
                </div>
                
                
                 
                <div class="contact col-md-12 col-sx-12 ">
                	<button type="submit" class="btn btn-default">Submit</button>
                </div>
               </form> 
			</div>
     </div>
  </div>