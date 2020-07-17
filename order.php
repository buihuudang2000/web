<?php
    include 'config/config.php';
    include 'header.php';
    
    
?>
     <ul class="navbar-nav ml auto">
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
            
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-file-text-o" aria-hidden="true" style="margin-right:5px;"></i>
            Đơn hàng</a></li>
            
        </ul>
<?php
    include 'menu.php';
?>


    
    <div class="container">
  <!-- Button to Open the Modal -->
  <div>
  <h2></h2>
  <div>
  <h4>Đơn hàng chưa hoàn thành:</h4>
  <div id="notrecords-contant"></div>
  
  </div>
  </div>
  <div>
  <h2></h2>
  <div>
  <h4>Đơn hàng đã hoàn thành:</h4>
  <div id="records-contant"></div>
  
  </div>
  </div>

  </div>
  
  

       
    <script type="text/javascript">
    
        $(document).ready(function(){readRecord();});

        function readRecord(){
            var notreadrecord= "notreadrecord";
            var readrecord= "readrecord";

            $.ajax({
                url:"classic/addorder.php",
                type:'post',
                data: {
                    notreadrecord:readrecord
                },
                success: function(data, status){
                    $('#notrecords-contant').html(data);
                },
            });

        }

        function Delete(dataid) {
            var conf= confirm("Bạn có chắc chắn muốn xóa? ");
            if (conf==true){
                $.ajax({
                url:"classic/addorder.php",
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
        
       

    </script>
        
<?php
    include 'footer.php';
?>