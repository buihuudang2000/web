<?php
    include '../config/config.php';
?>
<?php
    extract($_POST);  

    if (isset($_POST['readrecord'])){
        $data= ' <table class="table table-bordered table-striped" >
        <tr>
            <th >STT</th>
            <th >#</th>
            <th >Mã cửa hàng</th>
            <th >Tên cửa hàng</th>
            <th>Chỉnh sửa</th>
            <th>Xóa</th>
        </tr>';
        
        $result= mysqli_query($con,"SELECT * FROM sto1");

        if (mysqli_num_rows($result) > 0){
            $num=1;
            
            while($row = mysqli_fetch_array($result))
            {
                $datatocheck= 7;

                $data .= '<tr>
                    <td>' . $num . '</td>
                    <td><img src="' . $row['urlStall'] . '" width="25"></td>
                    <td>' . $row['IDstall'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>  
                        <button onclick="Update(' . $row['id'] . ')" class="btn btn-warning"> <i class="fas fa-edit"></i></button>
                    </td>
                    <td>   
                        <button onclick="Delete(' . $row['IDstall'] . ')"  class="btn btn-danger"> <i class="far fa-trash-alt"></i></button>
                    </td>
                    </tr>';
                $num++;
            }
        }
        $data.='</table>';
        echo $data;
    }

    if (isset($_POST['name']) && isset($_POST['idstore'])) {
        $query = "INSERT INTO `sto1` (`IDstall`,`name`, `urlStall`)
                VALUES ('$idstore','$name','$url')";

        mysqli_query($con, $query);

    }

    if (isset($_POST['dataid'])){
        $idcheck= $_GET['dataid'];
        $deletequery= "DELETE FROM `sto1` WHERE IDstall= '$idcheck'";

        mysqli_query($con, $deletequery);

    }

    if (isset($_POST['id'])){

        $stall_id= $_POST['id'];

        $updatequery= "SELECT * FROM `sto1` WHERE id='$stall_id'";

        if (!$result=mysqli_query($con, $updatequery)){
            exit(mysqli_error());
        } 

        $response= array();
        
        if (mysqli_num_rows($result) >0){
            while($row=mysqli_fetch_assoc($result)){
                $response=$row;
            }
        } else {
            $response['status']=200;
            $response['message']="Data not found!";
        }

        echo json_encode($response);
        

    } else {
        $response['status']=200;
        $response['message']="Invaid Request!";
    
    }

?>