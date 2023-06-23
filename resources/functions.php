<?php
 
function check_login($con)
{
    // session here check admin_username field in db
    if(isset ($_SESSION['user_name']))
    {

        $adminUsername = $_SESSION['user_name'];
        $query ="SELECT * FROM users WHERE user_name = '$adminUsername' limit 1";

        $result = mysqli_query($con,$query); 
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_info = mysqli_fetch_assoc($result);
            return $user_info;
        }
    }

    // redirect to login
    header("location: login-form");
    die;
}

 ?>

