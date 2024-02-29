<?php
 include 'header.php';
 include "function.php";

 
 ?>
<div class='container'>
            <div class='row'>
                <div class='col-12 text-center text-primary'>
                    <h1><b>Signup</b></h1>
                </div>
            </div>
            <form method="post" action="index.php">
<div class="row">
<div class="mb-3 row">
<!-- <input type="file" name="file" value="upload"/><br /> -->
    <label for="staticEmail" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-10">
      <input type="text"  name="name"class="form-control" id="name" placeholder="enter name" >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="staticEmail" placeholder="enter email" >
    </div>
  </div>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">mobile</label>
    <div class="col-sm-10">
      <input type="number"  name="mobile"class="form-control" id="mobile" placeholder="enter mobile">
    </div>
  </div>
 <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword"placeholder="enter password">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" name="pass"class="form-control" id="inputPassword"placeholder="enter password">
    </div>
  </div>
  <div class="col-12 text-end">
     <input type="submit" name="signup" class="btn btn-primary" value="signup">
</div>
</div>
</form>
</div>
<?php 
include 'footer.php';
?>