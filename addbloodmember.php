<?php 
    $isSaved = false;
    $con = mysqli_connect('localhost', 'root','','manoj');
    $group = $_POST['group'];
     $bloodname = $_POST['bloodname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $year = $_POST['year'];
    //$checkbox = $_POST['checkbox'];
    $bloodt = $_POST['bloodt'];
    $remark = $_POST['remark'];
    
    
    // $qy= " insert into bloodbank(bloodgroup, donorname, address, city, state, country, mobileno, email, age, sex, lastdonatedyear, timedonated, remarks, newdonar) values 
    // ('$bloodname','$group','$address','$city','$state','$country','$email','$mobile','$age','$sex','$year','$checkbox',
    // '$bloodt','$remark')";
    $qy= " insert into bloodbank(bloodgroup,donorname,address, city, state,country,mobileno,email,age,sex,lastdonatedyear,timedonated, remarks) values
    ('$group','$bloodname','$address','$city','$state','$country','$email','$mobile','$age','$sex','$year','$bloodt','$remark')";
    mysqli_query($con, $qy);    
    header('Content-Type: application/json');
    echo json_encode(array('isSaved' => true));
    exit;
?>