<?php
    include '../config/config.php';
?>
<?php
    extract($_POST);  

    $food= array();
  
        $temp2= mysqli_query($con,"SELECT * FROM foo1");
        if (mysqli_num_rows($temp2) >0){
            while($row = mysqli_fetch_array($temp2)){
                $food['1'][$row['IDfood']]=$row['url'];
                $food['2'][$row['IDfood']]=$row['name'];
                $food['3'][$row['IDfood']]=$row['price'];
            }
        }

    if (isset($_POST['readrecord'])){

        if ( $_POST['readrecord'] == "") echo ''; else {
        $idor= $_POST['readrecord'];
        $data= "";
        
    
        
        $temp=mysqli_query($con,"SELECT * FROM detailorder WHERE IDorder='$idor'");
        if (mysqli_num_rows($temp) >0){
        $num=1;
        
        while($row = mysqli_fetch_array($temp))
        {
            
           
            $data .= '<tr>
                <td>' . $num++ . '</td>
                <td><img src="' . $food['1'][$row['IDfood']] . '" width="25"></td>
                <td>' . $food['2'][$row['IDfood']]  . '</td>
                <td>' . $row['number'] . '</td>
                <td>' . $food['3'][$row['IDfood']] . '</td>
                <td>' . $row['total'] . '</td>
                </tr>';
            
        }
        }
        
        echo $data;
    }
    } 

    if (isset($_POST['total1'])){
        
        if ( $_POST['total1'] != "") {
        $idor= $_POST['total1'];
        $money= "";
        
        $temp=mysqli_query($con,"SELECT * FROM orders WHERE IDorder='$idor'");
        if (mysqli_num_rows($temp) >0){
        $row = mysqli_fetch_array($temp);
        $money=$row['total-price'];
        }
         echo $money;

        }
        
        
    } 

    

?>