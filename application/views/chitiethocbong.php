<div class="container">
    <div class="row "  style=" margin-top: 20px;padding: 20px'padding-left:0px;"  >
        <h3 class="column-title"><?php echo $scholarship->name;?></h3>
    </div>
    <div class="row " style=" border:#ccc 1px solid;padding: 20px"> 

        <div class="col-md-3">
            <span class="glyphicon glyphicon-hand-right" style="padding-right: 10px"></span>
            <?php 
            $type_scholarship_str = $scholarship->type_scholarship_str;
            $array_scholarship = explode(',', $type_scholarship_str);
            $str_scholarship = "";
            if (in_array(1, $array_scholarship)) { $str_scholarship = $str_scholarship. "Thạc sĩ, "; }
            if (in_array(2, $array_scholarship)) { $str_scholarship = $str_scholarship. "Tiến sĩ, "; }
            if (in_array(3, $array_scholarship)) { $str_scholarship = $str_scholarship. "Post-doc, "; }
            if (in_array(4, $array_scholarship)) { $str_scholarship = $str_scholarship. "Đại học, "; }
            if (in_array(5, $array_scholarship)) { $str_scholarship = $str_scholarship. "Ngắn hạn, "; }
            echo substr($str_scholarship, 0, -2);
            ?>
        </div>
        <div class="col-md-3">
            <span class="glyphicon glyphicon-hand-right" style="padding-right: 10px"></span><?php echo $scholarship->university_name;?>
        </div>
        <div class="col-md-3">
            <span class="glyphicon glyphicon-hand-right" style="padding-right: 10px"></span>
            
            <?php  echo $this->db->query("SELECT GROUP_CONCAT(' ',name) as name FROM `country` WHERE `id` IN (".$scholarship->id_country_str.")")->result()[0]->name;?>
            
        </div>
        <div class="col-md-3">
            <span class="glyphicon glyphicon-hand-right" style="padding-right: 10px"></span>Deadline: <?php echo $scholarship->deadline;?>
        </div>


    </div>     
    <div class="row "  style=" margin-top: 20px;padding: 20px" >
        <div class="col-md-2"  >
            <a class="btn btn-primary" style="  padding: 20px" href="<?php echo $scholarship->link;?>">Đường link gốc</a>
        </div>
        <div class="col-md-2   col-md-offset-8">
            <div class="row" style="width:80%;min-height:100px;border:#ccc 1px solid;padding: 20px">
                <p class="text-center  text-success"><?php if(strtotime(date("Y-m-d")) > strtotime($scholarship->deadline))
                    {
                        echo "<p class='text-center  text-danger'><strong>Đã Hết hạn</strong></p>";
                    }
                    else {
                        echo "<p class='text-center  text-success'><strong>Sẽ hết hạn ngày ".$scholarship->deadline."</strong></p>";;
                    }
                   
                 
                    ?></p>
            </div>
        </div>
    </div>         

    <div class="row ">
        <h2>Host Institution(s)</h2>

        <?php echo $scholarship->Institution;?>
    </div>
    <div class="row ">
        <h2>Field(s) of study</h2>

        <?php echo $scholarship->Fieldofstudy;?>
    </div>
    <div class="row ">
        <h2>Eligibility</h2>

        <?php echo $scholarship->Eligibility;?>
    </div>
    <div class="row ">
        <h2>Application instructions</h2>

        <?php echo $scholarship->Applicationinstructions;?>
    </div>
    <div class="row ">
        <h2>Other Information</h2>

        <?php echo $scholarship->Otherinformation;?>
    </div>
</div>