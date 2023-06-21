—————————————————

LOGIN AND REGISTER CODES

—————————————————



LOGIN (login.php):



<?php


// Get user input from the login form

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];

    $password = $_POST["password"];



    // Prepare the SQL statement using placeholders

    $sql = "SELECT password FROM users WHERE username = ?";

    $stmt = $conn->prepare($sql);



    // Bind the parameter and execute the statement

    $stmt->bind_param("s", $username);

    $stmt->execute();



    // Get the result

    $result = $stmt->get_result();



    if ($result->num_rows === 1) {

        $row = $result->fetch_assoc();

        $hashedPassword = $row["password"];



        // Verify the password

        if (password_verify($password, $hashedPassword)) {

            echo "Login successful!";

        } else {

            echo "Invalid username or password.";

        }

    } else {

        echo "Invalid username or password.";

    }



    // Close the statement

    $stmt->close();

}



// Close the database connection

$conn->close();

?>



REGISTRATION




=====================================

———-—————————

Logout after inactivity

———-—————————

<?php

// Start the session

session_start();



// Set the last activity time in the session

$_SESSION['last_activity'] = time();



// Check if the session variable exists and if the user has been inactive for 10 seconds

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > 10) {

    // Redirect to the home page

    header("Location: home.php");

    exit; // Make sure to exit after redirection

}



// Update the last activity time in the session

$_SESSION['last_activity'] = time();

?>



<!-- Add the JavaScript code to track user activity and redirect -->

<script>

// Function to track user activity and redirect after 10 seconds

function trackUserActivity() {

    setTimeout(function() {

        window.location.href = "home.php";

    }, 10000); // 10 seconds in milliseconds

}



// Call the function when the page loads or when there is user activity

window.onload = trackUserActivity;

document.onmousemove = trackUserActivity;

document.onkeypress = trackUserActivity;

</script>