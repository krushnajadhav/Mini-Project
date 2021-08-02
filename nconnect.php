<?php
    $con = mysqli_connect('localhost','root','','signup');

    if(isset($_POST['signup']))
    {
        
    

            $fname = mysqli_real_escape_string($con,$_POST['fname']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $phn = mysqli_real_escape_string($con,$_POST['ph']);
            $location = mysqli_real_escape_string($con,$_POST['location']);
            $password = mysqli_real_escape_string($con,$_POST['pass']);

           

            
                    $qu = " select * from nregistration where Email='".$email."'";
                    $res = mysqli_query($con,$qu);
    
                    if(mysqli_fetch_assoc($res)){
                            ?> <script>
                                alert("Email already exist");
                            </script>
                            <?php
                        
                    }else{
                        $qu = " select * from nregistration where Phonenumber='".$phn."'";
                    $res = mysqli_query($con,$qu);
    
                    if(mysqli_fetch_assoc($res)){
                        ?> <script>
                                alert("Contact Number already exist");
                            </script>
                            <?php
                    

                    }else{
                        $hash = password_hash($password,PASSWORD_DEFAULT);

                        $query = "insert into nregistration (Name,Email,Phonenumber,location,Password) values('$fname','$email','$phn','$location','$hash')";

                        $a = mysqli_query($con,$query);
                        if($a)
                        {
                            ?> <script>
                            alert("Successfully Register");
                            window.location.href = "newlog.php";
                        </script>

                        <?php
                        
                        }else{
                            
                            ?> <script>
                            alert("Not Register");
                        </script>
                        <?php
                        }

                    }

                }
                    


    

        
    }
    else{
        header("location:train.php");
        exit();
    }
  
?>