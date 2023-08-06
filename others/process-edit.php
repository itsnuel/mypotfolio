<!-- <?php 
    require_once('logic/dbconnection.php');

    if(isset($_POST['update']))
    {
        // fetch form data
        $photo=$_POST['photo'];
        

        // perform the sql query
        $edit=mysqli_query($conn, "UPDATE images SET 
        photo='$photo' WHERE no='".$_GET['id']."'");

        if($edit)
        {
            $data="Editedsuccessfully";
        }
        else
        {
            $data="Error occured while editing user";
        }

    }
?> -->