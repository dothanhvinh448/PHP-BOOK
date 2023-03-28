
<header class="row no-gutters">
    <!-- nav san pham -->
    <section class="col-12" style="height:40px;">
        <div class="col-12">
            <div class="row">

                <!-- test -->
                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                    <!-- Brand -->
                    <!-- <a class="navbar-brand"  href="index.php?action=sanpham">Trang Chủ</a> -->
             

                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="navbar-brand"  href="index.php?action=sanpham">Trang Chủ</a>
                        </li>
                        
                        <!-- Quản trị Doanh Mục -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Quản Trị Doanh Mục
                            </a>
                            <div class="dropdown-menu">
                          
                                <a class="dropdown-item" href="index.php?action=sanpham">Sản Phẩm</a>
                                <a class="dropdown-item" href="index.php?action=user">Người Dùng</a>
                        
                            </div>
                        </li>
                        <!-- Thống kê -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Thống Kê
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Sách mượn nhiều nhất</a>
                                <a class="dropdown-item" href="#">Sách mượn ít nhất</a>
                                <a class="dropdown-item" href="index.php?action=thongke">Thống kê</a>
                            </div>
                        </li>
                        <!-- Báo cáo -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Báo Cáo
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?action=thongke&act=thongke_thang">Tháng</a>
                                <a class="dropdown-item" href="#">Quý</a>
                                <a class="dropdown-item" href="#">Năm</a>
                            </div>
                        </li>
                        <!-- Báo cáo Tồn kho -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tồn Kho</a>
                        </li>
                        <?php
                                if(isset($_SESSION['username'])):
                                 echo '   <li class="nav-item">
                                 <a href="index.php?action=login&act=logout" class="nav-link">Đặng Xuất</a>
                             </li>'
                            ?>
                             <?php
                                endif;
                            ?>
                    </ul>
                </nav>
                <!-- end test -->
            </div>
        </div>

    </section>



</header>
<!-- dang ky -->