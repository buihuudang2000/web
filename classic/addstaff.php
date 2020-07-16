<?php
    include '../config/config.php';
?>
<?php
    extract($_POST);  
    $temp= mysqli_query($con,"SELECT * FROM sto1");
    $idtoname= array();
    while($row = mysqli_fetch_array($temp)){
        $idtoname[$row['IDstall']]=$row['name'];
    }
    

    if (isset($_POST['readrecord'])){
        $data= ' <table class="table table-bordered table-striped" >
        <tr>
            <th >STT</th>
            <th >Tên nhân viên</th>
            <th >Mã nhân viên</th>
            <th >Vị trí</th>
            <th >Cửa hàng</th>
            <th >Email</th>
            <th >Số điện thoại</th>
            <th>Cập nhật</th>
            
        </tr>';
        
        $result= mysqli_query($con,"SELECT * FROM staff");

        if (mysqli_num_rows($result) > 0){
            $num=1;
            
            while($row = mysqli_fetch_array($result))
            {
                if ($row['Object']=='1') $Ob="Admin"; 
                else if ($row['Object']=='2') $Ob="Quản lí"; 
                else  $Ob="Nhân viên"; 

                $data .= '<tr>
                    <td>' . $num . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['ID'] . '</td>
                    <td>' . $Ob . '</td>
                    <td>' . $idtoname[$row['IDstall']] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['phone'] . '</td>
                    <td>  
                        <button onclick="Update(' .  $row['ID'] . ')" class="btn btn-warning"> <i class="fas fa-edit"></i></button>
                     
                        <button onclick="Delete(' . $row['ID'] . ')"  class="btn btn-danger"> <i class="far fa-trash-alt"></i></button>
                    </td>
                    </tr>';
                $num++;
            }
        }
        $data.='</table>';
        echo $data;
    }


?>