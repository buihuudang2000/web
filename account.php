<?php
    include 'header.php';
?>
        
        <div class="title">
            <h2>Thông tin người đăng nhập</h2>
                        
        </div>
        <div class="row-account-info">
            <div class="col-md-6">
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="name">Tên nhân viên</label>
                        </div>
                        <div class="col-md-8" style="position: absolute; left: 200px;top: 0px;">
                            123
                            <span class=""><?php echo isset($user) ? $user['display_name'] : ''; ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="name">Mã Nhân Viên</label>
                        </div>
                        <div class="col-md-8" style="position: absolute; left: 200px;top: 20px;">
                         456
                            <strong><span class=""><?php echo isset($user) ? $user['username'] : ''; ?></span></strong>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="name">Mật khẩu</label>
                        </div>
                        <div class="col-md-8 padd-0" style="position: absolute; left: 200px;top: 45px;">
                            ******
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="name">Email</label>
                        </div>
                        <div class="col-md-8" style="position: absolute; left: 200px;top: 60px;">
                            @hhhj
                            <span class=""><?php echo isset($user) ? $user['email'] : ''; ?></span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
<?php
    include 'footer.php';
?>