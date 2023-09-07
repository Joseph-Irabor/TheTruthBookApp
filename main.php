<?php

session_start();

   $_SESSION;

include("./resources/connection.php"); 
include("./resources/functions.php");

// to check if the user is signed in check_login($con) fucntion is created externally

$user_info = check_login($conn);



?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- icons -->
    <script src="https://kit.fontawesome.com/72dad66e89.js" crossorigin="anonymous"></script>
<!-- ==================================== -->

<!-- google fonts -->

<!-- ==================================== -->

<!-- jquery CDN -->
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <!-- ==================================== -->

<!-- bstrp CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<!-- ==================================== -->



<!-- my CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/truth-main.css">
    <link rel="icon"  href="media/images/logo.jpg">
    
<!-- ==================================== -->
    <title> The Truth In Reality</title>
</head>


<body >

<section style="text-align: center;" class="user-data">
<?php 
    $user =  $user_info['user_name']; 
?>
<span id="user-type">  <?php echo $user; ?></span>
</section>
<!-- 
    <div class="view-overlay" id="more-view-overlay">
        <div class="close-button" id="close-button"></div>
        <div class="contents-container"> 
            
                <p class="card-text">
                        At one time in reality, I was an entity. I was void, and to be void is to be empty and to be empty is to be without knowledge. Thus, I had to learn. The acquisition of this knowhow, gave birth to teaching. It is inevitable to evolve without learning. A good example is our sense organs, we use our nose to smell scents, the eyes to see visual images, the tongue to taste items and the ear to hear different sounds. Certainly, we have these specific organs to help us remember different states, events and vibrations. In elaboration, we see an event with our eyes and we can remember and identify the same event, we perceive with our nose and remember the scent if perceived in iteration. This Unequivocally shows that, learning is an activities we undergo voluntarily or unwillingly, and it’s a building process for any homo-sapiens. 
                        <div class="mini-cta">
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-regular fa-thumbs-up"></i>
                            <i class="fa-regular fa-thumbs-down"></i>
                        </div>
                       

                    </p>
        </div>
    </div> -->
    
<div class="header-menu">

</div>
<div class="menu-header">
    <div class="menu-icon" id="toggle-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <i class="fa-solid fa-circle-user user-profile" style="float: right;"></i>
</div>

      <script>
        const menuIcon = document.querySelector('.menu-icon');
        menuIcon.addEventListener('click', () => {
        menuIcon.classList.toggle('active');
});
      </script>
</div>

<div class="overlay" id="overlay"></div>


    <div class="header">
        <img src="/media/images/logo-transparent2.png" alt="" class="header-img">
        <div class="motto">
            <span class="sub-header-text"><em>Hidden in plain sight... It's not that deep</em></span>
        </div>
    </div>     

   
    <!-- body content -->
    <div class="body-container" >       
        <!-- Search bar -->

        <div class="search-container">
            <form action="/search" class="search-form">
              <div class="search-box">
                <button type="submit"><i class="fa fa-search"></i></button>
                <input type="text" placeholder="Search topics" name="search">
            </div>
            </form>
          </div>

        <!-- Threads -->
        <h3 class="topic-thread">Topics Thread</h3>
        <section class="threads">
            
            <div class="cards">
                <h2 class="card-heading">TEACHING & LEARNING</h2>
                <P>
                    At one time in reality, I was an entity. I was void, and to be void is to be empty and to be empty is to be without knowledge.
                   
                </P> <i class="fa-solid fa-eye" id="t1"></i> 
                

                
            </div>
            <div class="cards">
                <h2 class="card-heading">HOW WE LEARN</h2>
                <P>
                    The human mind is in a continuous state of confused curiosity. How, when, what is, why, who, for what?.
                </P> <i class="fa-solid fa-eye"></i>
            </div>
            <div class="cards">
                <h2 class="card-heading">MISCONCEPTION</h2>
                <P>
                    Facts are withheld from a learner intentionally. This usually would be done to prevent confusion for the learner, as he is not equipped for that type of data
                </P> <i class="fa-solid fa-eye"></i>
            </div>
            <div class="cards">
                <h2 class="card-heading">CONCEPT OF CONCEPT</h2>
                <P>
                    People are unconditionally put in the position to lead, teach or command. In some cases, they do not possess all the information required by the learner
                </P>
            </div>
            <div class="cards">
                <h2 class="card-heading">TRUTH & REALITY</h2>
                <P> 
                    There is only one reality. We all exit in that the same reality but experience the reality differently.
                </P> <i class="fa-solid fa-eye"></i>
            </div>
        </section>
       
                 
        
    </div>
    
    <footer class="footer-menu">
        <nav class="footer-nav">
          <ul>
            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
          </ul>
        </nav>
    </footer>
   

   


  

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</body>




<!-- scripts for jquery...  -->
<script src="./jquery/jquery.js" ></script>
<script src="./jquery-ui/jquery-ui.js" ></script>
<script src="./jquery/main.js" ></script>



</html>