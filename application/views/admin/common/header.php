<div id="header">
    <div class="div1">
        <div class="div2"><h1 style="margin:0;">TRANG QUẢN TRỊ</h1></div>
        <div class="div3">
            <img src="<?= base_url(); ?>admin_template/image/lock.png" />
            Bạn đăng nhập với tài khoản <span><?php echo $this->session->userdata('username'); ?> | <a href="<?= $this->index_url; ?>admin/user/logout" style="color:#ffffff; text-decoration:none;">Thoát</a></span>
        </div>
    </div>
    <div id="menu">
        <ul class="left">
            <li id="dashboard"><a href="<?= $this->index_url; ?>admin" class="top">Admin page</a></li>
            <li><a href="#" class="top">Hệ thống</a>
                <ul>
                    <li><a href="<?= $this->index_url; ?>admin/setting">Cài đặt chung</a>

                    <li><a href="<?= $this->index_url; ?>admin/user">Thành viên</a></li>
                    <li><a href="<?= $this->index_url; ?>admin/user_group">Nhóm quyền</a></li>

            </li>
        </ul>
        </li>
        <li><a href="#" class="top">Học bổng</a>
            <ul>

                <li><a href="<?= $this->index_url; ?>admin/country">Quốc gia</a></li>
                <li><a href="<?= $this->index_url; ?>admin/university">Trường đại học</a></li>
                <li><a href="<?= $this->index_url; ?>admin/brand">Nghành học</a></li>
                <li><a href="<?= $this->index_url; ?>admin/scholarship">Học bổng</a></li>
                <li><a href="<?= $this->index_url; ?>admin/team">Team</a></li>
            </ul>
        </li>
        <li><a href="#" class="top">Tin tức </a>
            <ul>
                <li><a href="<?= $this->index_url; ?>admin/news">Tin tức</a></li>
                <li><a href="<?= $this->index_url; ?>admin/danhmucdichvu">Dịch vụ</a></li>
                <li><a href="<?= $this->index_url; ?>admin/introduc">Giới thiệu</a></li>

            </ul>
        </li>
        <li><a href="#" class="top">Thông tin khác</a>
            <ul>
                <li><a href="<?= $this->index_url; ?>admin/maillienhe">Liên hệ </a></li>
                <li><a href="<?= $this->index_url; ?>admin/slide">Quản lý Slide</a></li>

            </ul>
        </li>

        </ul>
    </div><!--End menu-->
</div><!--End header-->