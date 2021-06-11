<?php
    // getting value of form
    $searchedgroup = $_POST['searchedgroup'];
   

    




    // $searchedName = $_POST['Serchgroup'];
    // $searchedfname = $_POST['searchedfname'];

   
    $ID ='';
     $bloodgroup = '';
    $bloodname='';
    $city='';
    $mobile='';
    $con = mysqli_connect('localhost', 'root','','manoj');
    $sql = "select * from bloodbank where bloodgroup ='$searchedgroup' ";
    
    
    //name = '$searchedName' and fathername ='$searchedfname'";
    $result = $con->query($sql);
    
    header('Content-Type: application/json');
    $data = array();
    
    if ($result->num_rows > 0)
     {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $row_data = new stdClass();
            $row_data->bloodgroup = $row['bloodgroup'];
            $row_data->id = $row['id'];
            $row_data->donorname=$row['donorname'];
            $row_data->city=$row['city'];
            $row_data->mobile=$row['mobileno'];
           
            array_push($data ,$row_data);
        }
        
        
        // {
        //     'bloodgroup' : $bloodgroup,
        //     'ID': $ID,
        //     'donorname':$bloodname,
        //     'city':$city,
        //     'mobile':$mobile
        // });
   echo json_encode($data);
    }
    else
    {
        echo json_encode(array('noDataFound'=>'true'));
    }
    $con->close();

    
    exit;
?>