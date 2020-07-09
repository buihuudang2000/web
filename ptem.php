<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Food Court Management</title>
        <link rel="stylesheet" type="text/css" href="css\home.css">
        
        <script src="https://kit.fontawesome.com/a00706d209.js" crossorigin="anonymous"></script>

    </head>
    <body>
       
        <img class="bg" src="picture/bghome1.png" alt="Photo">
        <h1 class="black">VIO Management </h1>
        <div>
            <button class="btnaccount" onclick="showacc()">Admin  <i class="fas fa-user-circle"></i></button>
            <div class="accountmenu" id="acc">
                <li><a href="account.html">Tài Khoản</a></li>
                <li><a href="index.html">Thoát</a></li>
            </div>
        </div>
        <h1 class="account"></h1>
        <div class="text1">
            <h1>FOOD COURT MANAGEMENT</h1>
        </div>
        <div class="text">
            <h4>QUẢN LÍ NHÀ KHO * CẬP NHẬT DANH SÁCH ĐẶT HÀNG * BÁO CÁO</h4>
            <h1>FOOD COURT MANAGEMENT</h1>
        </div>
        
        <nav class="menu">
            <ul id="mainmenu">
                <li><a href="home.html"><i class="fa fa-home" aria-hidden="true"></i>Trang chủ
                    </a></li>
                <li><a href="import.html"><i class="fa fa-plus-circle" aria-hidden="true"></i>Nhập hàng
                    </a></li>
                <li><a href="export.html"><i class="fa fa-truck" aria-hidden="true"></i>Xuất hàng
                    </a></li>
                <li class="thuchi"><a href="#"><i class="fa fa-usd" aria-hidden="true"></i>Thu chi
                    <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu3">
                        <li><a href="#">Phiếu thu</a></li>
                        <li><a href="#">Phiếu chi</a></li>
                        <li><a href="#">Báo cáo thu</a></li>
                        <li><a href="#">Báo cáo chi</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>Báo cáo
                    <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu2">
                        <li><a href="#">Tồn kho</a></li>
                        <li><a href="#">Lợi nhuận</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Cập nhật
                    <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu3">
                        <li><a href="#">Khách hàng</a></li>
                        <li><a href="#">Hàng hóa</a></li>
                        <li><a href="#">Nhà cung cấp</a></li>
                        <li><a href="#">Nhân viên</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <script type="text/javascript" src="js/home.js"></script>
        
        
    </body>
</html>