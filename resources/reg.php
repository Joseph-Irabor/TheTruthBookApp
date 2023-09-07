<?php 
// session_start();

include('connection.php');


// Get user input from the registration form

try{

    if($_SERVER["REQUEST_METHOD"] === "POST") 
{

    $username = $_POST["register-username"];

    $password = $_POST["register-password"];
    $confirmPassword = $_POST["confirm-password"];

    // Hash the password for security

    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if (empty($username))
          {
            echo 'USERNAME CANNOT BE EMPTY';
          }
    if($password != $confirmPassword )
    {
        echo 'PASSWORD DO NOT MATCH';
        die;
    }

    $querySelectUsers ="SELECT * FROM users";

         $queryInsertToUsers= "INSERT INTO users (user_name, user_password) VALUES('$username','$password')";

            mysqli_query($conn,$querySelectUsers);
            mysqli_query($conn,$queryInsertToUsers);
        
            echo 'NEW USER HAS BEEN REGISTERED';
            header("location: login-form");
}


// Close the database connection

$conn->close();
}

        






catch (Exception $ex)
    {
        echo 'FATAL ERRO' .$ex;
    }
       
    





    // if($result)
    //     {
    //         if($result && mysqli_num_rows($result) > 0)
    //         {
    //           $user_info = mysqli_fetch_assoc($result);

    //           if($user_info['admin_username']=== $username) {
    //             echo "USER exists, pick another username!";
                
                
    //           }
              
              
            
    //     }
        // else
        // {
        //     $queryInsertToUsers= "INSERT INTO users (user_name, user_password) VALUES('$username','$hashedPassword')";

        //     mysqli_query($conn,$querySelectUsers);
        //     mysqli_query($conn, @$queryInsertToUsers);
        
        //     echo 'NEW USER HAS BEEN REGISTERED';

        // }
    


            

?>