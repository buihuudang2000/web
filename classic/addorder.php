<?php
    include '../config/config.php';
?>

<?php
    extract($_POST);  

    $imfood= array();
    $nafood= array();

        $temp2= mysqli_query($con,"SELECT * FROM foo1");
        if (mysqli_num_rows($temp2) >0){
            while($row = mysqli_fetch_array($temp2)){
                $imfood[$row['IDfood']]=$row['url'];
                $nafood[$row['IDfood']]=$row['name'];
            }
        }
      


    if (isset($_POST['notreadrecord'])){
        $data= ' <table class="table table-bordered table-striped" >
        <tr>
            <th >Mã đơn hàng</th>
            <th >#</th>
            <th >Món ăn</th>
            <th >Số phần</th>
            <th>Cập nhật</th>
            
        </tr>';
       
            $temp=mysqli_query($con,"SELECT * FROM orders");
            if (mysqli_num_rows($temp) >0){
            $num=0;
            
            while($row = mysqli_fetch_array($temp))
            {
                
                if ($num != $row['IDorder']) $reid=$row['IDorder']; else $reid="";
                $num=$row['IDorder'];
                $data .= '<tr>
                    <td>' . $reid . '</td>
                    <td><img src="' . $imfood[$row['IDfood']] . '" width="25"></td>
                    <td>' . $nafood[$row['IDfood']] . '</td>
                    <td>' . $row['number'] . '</td>
                    <td>  
                        <button onclick="Update(' .  $row['IDorder'] . ')" class="btn btn-warning"> Sẵn sàng</button>
                    </td>
                    </tr>';
                
            }
            }
        
      
        $data.='</table>';
        echo $data;
    }


?>