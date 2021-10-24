<?php
session_start();
ob_start();
?>
<?php
if(isset($_POST['btnsubmit']))
{

    include "z_db.php";


      $casperid = mysqli_real_escape_string($con, $_POST['casperid']);
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
      $email = mysqli_real_escape_string($con, $_POST['email']);

      $query = "insert into member(casperid, name, mobile, email) values('$casperid','$name','$mobile','$email')";
      $q = mysqli_query($con,$query);

        if($q)
        {

          ?>
          <script>
              alert("Member added successfully.");
          </script>
          <?php

      }
      else{
        ?>
        <script>
            alert("Something went wrong!");
        </script>
        <?php
      }
    }

    else
    {
        header("Location:index8.php");
    }

?>
