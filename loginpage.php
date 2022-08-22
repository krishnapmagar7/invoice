<?php
include('includes/navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Open+Sans:wght@500&family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
   
    <!-- for favicon -->
    <!-- <link rel="icon" type="images/png" href="images/png"> -->
    <title>Login page</title>
   

</head>

<body data-bs-spy="scroll" data-bs-target=".body">
    

    <div class="container">
        <section class="body">
            <h5 class="title"><span>Log In</span></h5>
       
            <form action="#" class="loginform">
        
         
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" id="email" placeholder=" Enter Your Email ">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" id="password" placeholder=" Enter Your Password ">
                </div>
              
            </div> <br>
        <a >Forgot Your Password?</a>
                <br>
                <br>
          <button class="login">Log in</button><br>
          <p class="message">Don't have an account? <a href="#">Sign up</a></p> <br>
     <h6> OR</h6><br>
     <div class="col">
              <a href="#" class="google btn"><i class="fab fa-google"></i> Sign up with Google
            </a>
            <br>
          
              <a href="#" class="fb btn">
              <i class="fab fa-facebook"></i> Sign up with Facebook
             </a>
        
      
        </div>
        </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
