<?php
    include 'header.php';
?>
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
<?php
    include 'footer.php';
?>