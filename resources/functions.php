<?php
 
function check_login($conn)
{
    // session here check admin_username field in db
    if(isset ($_SESSION['user_name']))
    {

        $sessionUsername = $_SESSION['user_name'];
        $query ="SELECT * FROM users WHERE user_name = '$sessionUsername' limit 1";

        $result = mysqli_query($conn,$query); 
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_info = mysqli_fetch_assoc($result);
            return $user_info;
        }
    }

    // redirect to login
    header("location:login-form");
    die;
}

 ?>

