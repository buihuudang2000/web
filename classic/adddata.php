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
                $data .= '<tr>
                    <td>' . $num++ . '</td>
                    <td><img src="' . $row['urlStall'] . '" width="25"></td>
                    <td>' . $row['IDstall'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>   
                        <button onclick="GetUser('. $row['IDstall'] .')" class="btn btn-warning"> <i class="fas fa-edit"></i></button>
                    </td>
                    <td>   
                    <button onclick="DeleteUser('. $row['IDstall'] .')" class="btn btn-danger"> <i class="far fa-trash-alt"></i></button>
                    </td>
                    </tr>';
            
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

?>