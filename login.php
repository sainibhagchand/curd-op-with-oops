<?php
 include 'header.php';
 include "function.php";
    $userobj = new users();  
  
   
     if(isset($_POST['login'])){  
        $email = $_POST['email'];  
        $pass = $_POST['pass'];  
        $user = $userobj->Login($email, $pass);  
        if ($user) {  
            // Registration Success  
           header("location:index.php");  
        } else {  
            // Registration Failed  
            echo "<script>alert('Email / Password Not Match')</script>";  
        }  
    }  
 ?>

<div class='container'>
            <div class='row'>
                <div class='col-12 text-center text-primary'>
                    <h1><b>Login</b></h1>
                </div>
            </div>
<form method="post" action="" name="login">
      <div class="row">
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">username</label>
        <div class="col-sm-10">
          <input type="email" name="email" class="form-control" id="staticEmail" placeholder="enter username">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="pass"  class="form-control" id="staticEmail" placeholder="enter password">
        </div>
      </div>
      <div class="col-6 ">
        <a class="btn btn-primary" href="signup.php">signup</a>
    </div>
      <div class="col-6 text-end">
         <button type="submit" name="login" class="btn btn-primary">Login</button> 
        <!-- <input type="submit" name="login" value="Login" >  -->
    </div>

    </div>
    </form>
    </div>

<?php 
include 'footer.php';
?>