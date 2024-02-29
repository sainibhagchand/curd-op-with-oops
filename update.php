<?php
 include "function.php";
 $userobj = new users();
 if($_GET['id']){
    $editdata = $userobj->getuser($_GET['id']);
   }
    if(isset($_POST['update'])){
        // echo $_GET['id'];
        // die();
      $updates = $userobj->updatedata($_POST,$_GET['id']);
      if($updates){
            header('location:index.php');
      }else{
        echo error;
      }
    }
    ?>


     <div class='container'>
     <div class="row">
            <form method="post" action="">
           
            <input type="text"  name="name"class="form-control" id="name" placeholder="enter name" value="<?php echo $editdata['name']?>"><br><br><br>
            <input type="email" name="email" class="form-control" id="staticEmail" placeholder="enter email" value="<?php echo $editdata['email']?>"><br><br><br>
            <input type="number"  name="mobile"class="form-control" id="mobile" placeholder="enter mobile" value="<?php echo $editdata['mobile']?>"><br><br><br>
            <input type="password" name="pass" class="form-control" id="inputPassword"placeholder="enter password" value="<?php echo $editdata['pass']?>"><br><br><br>
  
    <div class="col-12 ">
         <input type="submit"  name="update"  value="update">
    </div>
  </form>
  </div>