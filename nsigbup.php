<?php
session_start();
include'dbcon.php';

if(isset($_POST['submit']))
{

	$username=mysqli_real_escape_string($con, $_POST['username']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$mobile=mysqli_real_escape_string($con, $_POST['mobile']);
	$password=mysqli_real_escape_string($con, $_POST['password']);
	$cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);
	
	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$token= bin2hex(random_bytes(15));

	$emailquery = "select * from registration where email='$email' ";
	$query = mysqli_query($con,$emailquery);

	$emailcount =mysqli_num_rows($query);
	

	if($emailcount >0)
	{
		?>
			<script>
				alert ("Email already exists");
			</script>

		<?php
	}
	else
	{
		if($password===$cpassword)
		{
			$insertquery = " INSERT INTO registration (username,email,mobile,password,cpassword,token,status) VALUES ('".$username."','".$email."','".$mobile."','".$pass."','".$cpass."','".$token."','inactive')";
			$iquery=mysqli_query($con,$insertquery);

			if($iquery)
			{
						
					
					?>
					<script>
						alert ('Done');
					</script>
					<?php
						    header('location:newlog.php');

					 

			}
			else
			{
						?>
							<script>
								alert("Some Thing Wrong...!!");
							</script>

						<?php
			}
		}
		else
		{
			?>
				<script>
					alert("password Not maching...");
				</script>

			<?php
		}
	}


}
?>
