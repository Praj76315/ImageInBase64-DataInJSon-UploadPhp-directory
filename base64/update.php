<?php
$file = 'upload/'.$_GET['id'].'.json';
$data = file_get_contents($file);
$data = json_decode($data,true);
$firstName = $data['firstName'];
$lastName = $data['lastName'];
$email = $data['email'];
$phone = $data['phone'];
$url =$data['url'];
?>


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
  <form method="post" action="update_action.php?id=<?php echo $data['id'];?>" enctype="multipart/form-data" >
    <h1 class="text-center m-5">Update User Data</h1>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" placeholder="" name="firstName" id="firstName" value="<?php echo $firstName ;?>">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" placeholder="" name="lastName" id="lastName" value="<?php echo $lastName ;?>">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="" name="email" id="email" value="<?php echo $email ;?>">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="phone"placeholder="phone" value="<?php echo $phone ;?>">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
    <div class="form-group">
    <label for="image">OldImage</label>
    <input type="text" class="form-control" id="image" name="image" value="<?php echo$url;  ?>">
  </div>
    <div class="form-group">
    <label for="image">NewImage</label>
    <input type="file" class="form-control" id="image" name="file" placeholder="Image" >
  </div>
  <input type="hidden" name="MAX_FILE_SIZE" value="12000" />
    <button type="submit" class="btn btn-primary btn-block" name="update">Submit</button>
  </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>