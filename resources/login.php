<?php 
// session_start();

include('knt.php');


// Get user input from the registration form

try{
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $username =  $_POST['username'];
        $loginPassword =  $_POST['password'];

        $hashedLoginPassword = password_hash($loginPassword, PASSWORD_DEFAULT);
       

            $querySelectFromTable ="SELECT * FROM user WHERE user_name = '$username' ";
            
            $result = mysqli_query($con, $querySelectFromTable);

            if($result )
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_info = mysqli_fetch_assoc($result);

                    if($username['user_password']=== $loginPassword)
                    {
                        echo 'CORRECT CREDENTIALS';
                    //   $_SESSION['admin_username'] = $user_info['admin_username'];
                    //     header("location: index");
                    //     die; 
                        
                    }
                }
            }
              echo "Wrong user credentials";
            
       
    }
   
}

catch(Exception $ex){
        
    echo 'FATAL ERRO' .$ex;

}




?>