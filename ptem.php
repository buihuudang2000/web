<?php
    include 'config/config.php';
?>      
<?php
    $result = mysqli_query($con,"SELECT * FROM foo1");


echo "<table border='1'>
<tr>
<th>Name</th>
<th>IDfood</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['IDfood'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>

<!--in inventory.css-->
<div class="product-results">
    <?php
    $result = mysqli_query($con,"SELECT * FROM foo1");


    echo "<table border='1'>
    <tr>
    <th>STT</th>
    <th>Mã cửa hàng</th>
    <th >Mã sản phẩm</th>
    <th >Tên sản phẩm</th>
    <th >Giá bán</th>
    </tr>";
            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td> 1 </td>";
            echo "<td>" . $row['IDstall'] . "</td>";
            echo "<td>" . $row['IDfood'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
            ?>

<?php
            extract($_POST);
            $name='';
            $idstore='';
            $url='';

            if(isset($_POST["name"]) && isset($_POST["idstore"])) {
                $name=$_POST['name'];
                $idstore=$_POST['idstore'];
                if(isset($_POST["url"])) { $url = $_POST['url']; }

                $sql = "INSERT INTO foo1 (IDstall,name, urlStall)
                VALUES ('$idstore','$name','$url')";

            }
            ?>
/*đúng */
<?php
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
  ?>

<button type="submit" onclick="Update('. $row['IDstall'] .')" class="btn btn-warning"> <i class="fas fa-edit"></i></button>

$('#hidden-store').val(updateid);
            
            $.post("classic/adddata.php",
                {
                    updateid:updateid
                },
                success: function(data, status){
                    var user= JSON.parse(data)
                    $('#up-idstore').val(user.IDstall);
                    $('#up-name').val(user.name);
                    $('#up-url').val(user.urlStall);
                }
            );

            $('#up-myModal').modal("show");

            echo ' <table class="table table-bordered table-striped" >
        <tr>
            <th >rfhjgSTT</th>
            <th >ggfjhk#</th>
            <th >fhgjMã cửa hàng</th>
            <th >Tên cửa hàng</th>
            <th>Chỉnh sửa</th>
            <th>Xóa</th>
        </tr>';
        
        $stall_id= $_POST['id'];

        $updatequery= "SELECT * FROM `sto1` WHERE id='$stall_id'";

        if (!$result=mysqli_query($con, $updatequery)){
            exit(mysqli_error());
        }

        $response= array();
        
        if (mysqli_mun_rows($result) >0){
            while($row=mysqli_fetch_assoc($result)){
                $response=$row;
            }
        } else {
            $response['status']=200;
            $response['message']="Data not found!";
        }

        echo json_encode($response);