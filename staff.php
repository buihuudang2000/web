<?php
    include 'config/config.php';
    include 'header.php';
    
    
?>
     <ul class="navbar-nav ml auto">
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
            
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-id-card" style="margin-right:5px;"></i>
            Nhân viên</a></li>
            
        </ul>
        <?php
    include 'menu.php';
?>


    
<div class="container">
  <!-- Button to Open the Modal -->
  <h2></h2>
  
  <div class="d-fex justify-content-end" style="text-align: right;">
      
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  <i class="fas fa-plus-circle"></i> Thêm thành viên
  </button>
  </div>
  <div>
  <h4>Danh sách nhân viên:</h4>
  <div id="records-contant"></div>
  
  </div>
  
  

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thêm thành viên</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" >

          <form class="form-group" action="">
              <label> Tên nhân viên:</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Ví dụ: KFC">

          </form>
          <form class="form-group" action="">
              <label> Email:</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Ví dụ: KFC">

          </form>
          <form class="form-group" action="">
              <label> Pass:</label>
              <input type="text" class="form-control" name="pass" id="pass" placeholder="Ví dụ: KFC">

          </form>
          <form class="form-group" action="">
              <label> Vị trí:</label>
              <input type="url" class="form-control" name="ob" id="ob" placeholder="Ví dụ: http://www.kfc.com/home">

          </form>
          <form class="form-group" action="">
              <label> Cửa hàng làm việc:</label>
              <input type="text" class="form-control" name="stall" id="stall" placeholder="Ví dụ: KFC">

          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="addRecord()">Lưu</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
        </div>
        
      </div>
    </div>
  </div>



  <!--Update -->



       
    <script type="text/javascript">
    
        $(document).ready(function(){readRecord();});

        function readRecord(){
            var readrecord= "readrecord";

            $.ajax({
                url:"classic/addstaff.php",
                type:'post',
                data: {
                    readrecord:readrecord
                },
                success: function(data, status){
                    $('#records-contant').html(data);
                },
            });
        }

        function addRecord(){
            
            var name= $('#name').val();
            var url= $('#url').val();
            
            $.ajax({
                url:"classic/addstaff.php",
                type:'post',
                data: {
                    name:name,
                    url: url
                },
                success: function(data, status){
                    alert(data);
                    readRecord();
                }, 
            });
        }

        function Delete(dataid) {
            var conf= confirm("Bạn có chắc chắn muốn xóa? ");
            if (conf==true){
                $.ajax({
                url:"classic/addstaff.php",
                type:'post',
                data: {
                    dataid:dataid
                },
                success: function(data, status){
                    readRecord();
                },
                });
            }
        }
        
        function Update(id) {

            $('#hidden-store').val(id);
            
            
            $.ajax({
                url:"classic/addstaff.php",
                type:'post',
                data: {
                    id:id
                },
                success: function(data, status){
                    var user= JSON.parse(data);
                    $('#up-name').val(user.name);
                    $('#up-url').val(user.urlStall);
                },
                });

            $('#up-myModal').modal("show");
            
        }
        function updatestoredatail() {
            var upname=$('#up-name').val();
            var upurl=$('#up-url').val();
            var index=$('#hidden-store').val();

            $.ajax({
                url:"classic/addstaff.php",
                type:'post',
                data: {
                    index:index,
                    upname:upname,
                    upurl:upurl
                },
                success: function(data, status){
                    alert(data);
                   readRecord();
                },
            });
        }

    </script>
        
<?php
    include 'footer.php';
?>