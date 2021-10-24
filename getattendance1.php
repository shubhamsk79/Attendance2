<?php
session_start();
ob_start();
?>
<?php
include "z_db.php";
$date = mysqli_real_escape_string($con,$_POST['cyear'].$_POST['cmonth'].$_POST['cdate']);
$casperid = mysqli_real_escape_string($con, $_POST['casperid']);
	if(isset($_POST['btnsubmit']))
	{
    $query1 = "insert into attendance(member_id ,  date ,  attendance) values('$casperid','$date','YES')";
		$q1 = mysqli_query($con,$query1);
		if($q1)
		{
		?>
		<script>
				alert("Attendance given successfully......");
		</script>
		<?php
		}
		else
		 {
				 header("Location:index8.php");
		 }
  }

			else
			{
        $query1 = "insert into attandance(member_id ,  date ,  attendance) values('$casperid','$date','NO')";
				$q1 = mysqli_query($con,$query1);
				if($q1)
	      {
	      ?>
	      <script>
	          alert("Attendance given successfully......");
	      </script>
	      <?php
	      }
	      else
		     {
			       header("Location:index8.php");
		     }
			}


?>
<?php include "footer.php"; ?>
