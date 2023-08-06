<!-- <?php

require_once('logic/dbconnection.php');

if (isset ($_POST['save'])){
    $size=$_FILES['profile'] ['size'];
    $temp=$_FILES['profile'] ['tmp_name'];
    $type=$_FILES['profile'] ['type'];
    $profile_name=$_FILES['profile'] ['name'];
    $rand=mt_rand(1,9999);
    $image_name=$rand."jpg";
    if($profile_name=="") {
        echo "<script>alert('Please select image<script>";
        exit ();
    } 
    elseif (($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/png")) {
        move_uploaded_file($temp,"profile/image_name");
    }
    else {
        echo "<script>alert('Please select valid file<script>";
        exit ();
    }
    $name=$_POST['name'];
    $insert=mysqli_query($conn,"insert into student (name,file_name) values ('$name','$image_name')");
    if($insert) {
        echo "<script>alert('Data has been inserted'<script>";

    }
    else {
        echo "<script>alert('Data insert failed'<script>";

    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Image Upload</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>form</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="name">NAME:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">image:</label>
      <input type="file" class="form-control" id="file"  name="profile">
    </div>
    
    <button type="submit" class="btn btn-default" name="save">Save</button>
  </form>
</div>

</body>
</html> -->
