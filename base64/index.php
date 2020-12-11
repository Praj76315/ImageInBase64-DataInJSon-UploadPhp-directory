<!-- Start of Section for showing alerts   -->
<?php
if(isset($_GET['insert']) && $_GET['insert']=="true"){
  echo ' <div class="ml-5 mr-5 text-center alert alert-success alert-dismissible fade show my-0" role="alert">
         <strong>Success</strong> Data inserted successfully in the file.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
          </div>';
}
if(isset($_GET['insertfail']) && $_GET['insertfail']=="true"){
  echo ' <div class="ml-5 mr-5 text-center alert alert-warning alert-dismissible fade show my-0" role="alert">
         <strong>Error!</strong> Unable to insert data into  the file.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
          </div>';
}
if(isset($_GET['update']) && $_GET['update']=="true"){
  echo ' <div class="ml-5 mr-5 text-center alert alert-success alert-dismissible fade show my-0" role="alert">
         <strong>Success!</strong> Data updated successfully into  the file.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
          </div>';
}
if(isset($_GET['updatefail']) && $_GET['insertfail']=="true"){
  echo ' <div class="ml-5 mr-5 text-center alert alert-warning alert-dismissible fade show my-0" role="alert">
         <strong>Error!</strong> Unable to update data into  the file.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
          </div>';
}
if(isset($_GET['InvalidExtension']) && $_GET['InvalidExtension']=="true"){
  echo ' <div class="ml-5 mr-5 text-center alert alert-warning alert-dismissible fade show my-0" role="alert">
         <strong>Error!</strong> Sorry we only support (jpg,jpeg,png) format.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
          </div>';
}
if(isset($_GET['delete']) && $_GET['delete']=="true"){
  echo ' <div class="ml-5 mr-5 text-center alert alert-danger alert-dismissible fade show my-0" role="alert">
         <strong>Success</strong> Data deleted successfully from the file.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
          </div>';
}


?>

<!--  End of alert section    -->


<!-- Html for From  start-->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>File Upload</title>
  </head>
  <body>
      
  <div class="container">
  <form method="post" action="" enctype="multipart/form-data" >
    <h1 class="text-center m-5">User Registration</h1>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" placeholder="" name="firstName" id="firstName">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" placeholder="" name="lastName" id="lastName">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="" name="email" id="email">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="phone"placeholder="phone">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
    <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="file" placeholder="Password">
  </div>

    <button type="submit" class="btn btn-primary btn-block" name="upload">Submit</button>
  </form>
</div>
<hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>

<!-- End of html code for form -->

<!-- Start of Code for Inserting data into the table -->
<?php
if(isset($_POST['upload'])){
$id = rand(1,100);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$file_name1 = $_FILES['file']['name'];
$file_type = $_FILES['file']['type'];
$file_size = $_FILES['file']['size'];
$file_temp_loc = $_FILES['file']['tmp_name'];

$file_ext = explode('.',$file_name1);
$file_extension = strtolower(end($file_ext));
$extensions= array("jpeg","jpg","png");
if(in_array($file_extension,$extensions)){
    $path = 'upload/'.$id.'.json';
    $base64Var = file_get_contents($file_temp_loc);
    $base64 = 'data:' . $file_type . ';base64,' . base64_encode($base64Var);
    $userData = array('id'=>$id,'firstName'=>$firstName,'lastName'=>$lastName,'email'=>$email,'phone'=>$phone,'url'=>$base64);
    $userData = json_encode($userData,true);
    $success = file_put_contents($path,$userData);
    if($success){
       header('location:index.php?insert=true');
    }
    else{
        header('location:index.php?insertfail=true');
    }
    
}
else{
   header('location:index.php?InvalidExtension=true');
}
}
?>

<!-- End Of data insertion code -->


<!--Start of Code for Showing the result of folder -->

<div class="container">
  <div class="row">
    <div class="col-12">
		<table class="table table-image">
		  <thead>
<tr>
		      <th scope="col">FirstName</th>
		      <th scope="col">LastName</th>
		      <th scope="col">Email</th>
		      <th scope="col">Phone</th>
		      <th scope="col">Images</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
<?php
$folder = "upload/";
$file = scandir($folder);
foreach(array_slice($file,2) as $value){
  $data = file_get_contents($folder.$value);
  $data = json_decode($data,true);
 echo'
 <tr>
 <td class="mt-4">'.$data["firstName"].'</td>
 <td class="mt-4">'.$data["lastName"].'</td>
 <td class="mt-4">'.$data["email"].'</td>
 <td class="mt-4">'.$data["phone"].'</td>
 <td class="w-25">
 <img src="'.$data["url"].'" alt="Sheep" width="150px" height="100px">
</td>
<td>
<a type="submit" href="delete.php?id='.$data["id"].'" class="btn btn-danger mt-4" name="delete">Delete</a> <a type="submit" href="update.php?id='.$data["id"].'" class="btn btn-primary mt-4" name="update">Update</a>
</td>
</tr>
 
 
 ';
}

?>

<!--End of data displaying section -->