<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Food Court Management</title>
        <link rel="stylesheet" type="text/css" href="css\home.css">
        <link rel="stylesheet" type="text/css" href="css\updateinventory.css">
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
                <li><a href="product.php"><i class="fa fa-pizza-slice" aria-hidden="true"></i>Sản phẩm
                    </a></li>
                <li><a href="report.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>Báo cáo
                        </a></li>
                <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Cập nhật
                    <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu3">
                        <li><a href="updateorder.php">Đơn hàng</a></li>
                        <li><a href="updatecustomer.php">Khách hàng</a></li>
                        <li><a href="updatestaff.php">Nhân viên</a></li>
                        <li><a href="updatestore.php">Cửa hàng</a></li>
                        <li><a href="updateinventory.php">Kho hàng</a></li>
                        
                        
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div class="orders imports">
            
                    <div class="orders-act">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="left-action text-left clearfix">
                                <h2>Danh sách kho hàng</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btnadd btn-primary"  onclick="showput()">
                                <i class="fa fa-plus"></i> Tạo phiếu nhập
                            </button>
                            <button type="button" class="btnremove btn-primary"  onclick="showremove()">
                                <i class="fa fa-plus"></i> Tạo phiếu xuất
                            </button>
                               
                        </div>
                    </div>
               
            <div class="main-space orders-space"></div>
            <div class="orders-content">
                <div class="imports-main-body">
                    
                </div>
            </div>
        </div>
        <div class="putproduct">
            <div class="subremoveproduct" id="subremoveproduct">
                <form method="post" action="">  
                    *Phiếu xuất 
                    <button type="button" class="offremove" onclick="showremove()" style="width: 20px; height: 20px; margin-left: 380px;">X</button>
                    <br><br>
                    Tên sản phẩm: <input type="text" name="name">
                    <br><br>
                    ID Cửa hàng: <input type="text" name="email">
                    <br><br>
                    Số lượng xuất: <input type="text" name="website">
                    <br><br>
                    Ghi chú: <textarea name="comment" rows="5" cols="55"></textarea>
                    <br><br>
                    Chọn đơn vị: <select id="cars" name="cars">
                        <option value="kilogam">Kilogam</option>
                        <option value="lit">Lit</option>
                        <option value="gam">Gam</option>
                        <option value="loc">Lock</option>
                      </select>
                    <br><br>
                    <input type="submit" name="submit" value="Xuất ra" 
                    style="width: 80px; height: 30px; border-radius: 0.5rem; ">  
                  </form>
            </div>
            <div class="subputproduct" id="subputproduct">
                <form method="post" action="">  
                    *Phiếu nhập 
                    <button type="button" class="offadd" onclick="showput()" style="width: 20px; height: 20px; margin-left: 380px;">X</button>
                    <br><br>
                    Tên sản phẩm: <input type="text" name="name">
                    <br><br>
                    ID Cửa hàng: <input type="text" name="email">
                    <br><br>
                    Số lượng nhập: <input type="text" name="website">
                    <br><br>
                    Nhà cung cấp: <input type="text" name="name">
                    <br><br>
                    Ghi chú: <textarea name="comment" rows="5" cols="55"></textarea>
                    <br><br>
                    Chọn đơn vị: <select id="cars" name="cars">
                        <option value="kilogam">Kilogam</option>
                        <option value="lit">Lit</option>
                        <option value="gam">Gam</option>
                        <option value="loc">Lock</option>
                      </select>
                    <br><br>
                    <input type="submit" name="submit" value="Thêm vào" 
                    style="width: 80px; height: 30px; border-radius: 0.5rem; ">  
                  </form>
            </div>
            <div class="show-import" >
                12345
            </div>
        </div>
        
        <script type="text/javascript" src="js/home.js"></script>

    </body>
</html>