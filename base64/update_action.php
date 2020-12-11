<?php
if(isset($_POST['update'])){
$id = $_GET['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_POST['image'];
$path = 'upload/'.$id.'.json';
if($_FILES['file']['name']==""){
    $userData = array('id'=>$id,'firstName'=>$firstName,'lastName'=>$lastName,'email'=>$email,'phone'=>$phone,'url'=>$image);
    $userData = json_encode($userData,true);
    $success = file_put_contents($path,$userData);
    if($success){
       header('location:index.php?update=true');
    }
    else{
        header('location:index.php?updatefail=true');
    }
}
else{
    $file_name1 = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_temp_loc = $_FILES['file']['tmp_name'];
    $base64Var = file_get_contents($file_temp_loc);
    $base64 = 'data:' . $file_type . ';base64,' . base64_encode($base64Var);
    $userData = array('id'=>$id,'firstName'=>$firstName,'lastName'=>$lastName,'email'=>$email,'phone'=>$phone,'url'=>$base64);
    $userData = json_encode($userData,true);
    $success = file_put_contents($path,$userData);
    if($success){
       header('location:index.php?update=true');
    }
    else{
        header('location:index.php?updatefail=true');
    }
    
}

}


?>