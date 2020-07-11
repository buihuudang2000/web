<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Food Court Management</title>
        <link rel="stylesheet" type="text/css" href="css\home.css">
        <link rel="stylesheet" type="text/css" href="css\inventory.css">
        <script src="https://kit.fontawesome.com/a00706d209.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <h1 class="black">VIO Management </h1>
        <div>
            <button class="btnaccount" onclick="showacc()">Admin  <i class="fas fa-user-circle"></i></button>
            <div class="accountmenu" id="acc">
                <li><a href="account.php">Tài Khoản</a></li>
                <li><a href="index.php">Thoát</a></li>
            </div>
        </div>
        <h1 class="account"></h1>
        <nav class="menu">
            <ul id="mainmenu">
                
                <li><a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Trang chủ
                    </a></li>
                <li><a href="payment.php"><i class="fa fa-cash-register" aria-hidden="true"></i>Thanh toán
                    </a></li>
                <li><a href="import.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Nhập hàng
                    </a></li>
                <li><a href="inventory.php"><i class="fa fa-truck" aria-hidden="true"></i>Tồn kho
                    </a></li>
                <li><a href="report.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>Báo cáo
                        </a></li>
                <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Cập nhật
                    <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu3">
                        <li><a href="updatecustomer.php">Khách hàng</a></li>
                        <li><a href="updatestore.php">Cửa hàng</a></li>
                        <li><a href="updatestaff.php">Nhân viên</a></li>
                        <li><a href="updateorder.php">Đơn hàng</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div class="showinventory">
            <div class="header-inventory">
                <h2>Cập nhật danh sách nhân viên</h2>
            </div>
                     
                        
                
             
        </div>
        
        <script type="text/javascript" src="js/home.js"></script>

    </body>
</html>