<?php
session_start();
    $con = mysqli_connect('localhost','root','','signup');

    if(isset($_POST['submit']))
    {
       
       

            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['pass']);
            $qur = "select * from nregistration where Email='".$email."'";

            $result = mysqli_query($con,$qur);
            if($row=mysqli_fetch_assoc($result))
            {
                        $hashpass = password_verify($password,$row['Password']);
                        if($hashpass==false)
                        {
                            ?> <script>
                            alert("Password is incorrect");
                            window.location.href="newlog.php"
                        </script>
                        <?php
                        }
                        elseif($hashpass==true)
                        {

                            $_SESSION['ud']=$row['ID'];
                            $_SESSION['ud1']=$row['Name'];
                            $_SESSION['ud4']=$row['Email'];
                            $_SESSION['ud3']=$row['Phonenumber'];
                            $_SESSION['ud2']=$row['location'];
                            $_SESSION['ud5']=$row['Password'];

                            ?> <script>
                                alert("login successfull");
                                window.location.href="page2.php ?login"
                                window.location.href="scooter.php ?login"
                                window.location.href="atv.php ?login"
                                window.location.href="mini.php ?login"
                                


                            </script>
                            <?php
                        

                        }
                        
            
            }
            else{
                ?> <script>
                                alert("Email is incorrect");
                                window.location.href="newlog.php"

                            </script>
                            <?php
            }
            
    }
    else{
        header("location:login1.php");
        exit();
    }
  
?>