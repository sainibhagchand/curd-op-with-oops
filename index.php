<?php
//include "header.php";
include "function.php";
    $userobj = new users();
   
    if(isset($_POST['signup'])){
    
      $done = $userobj->insertuser($_POST);
      if($done){
        header('location:index.php');
      }
     }
     $result = $userobj->table();
     if(isset($_GET['id'])){
      // echo $_GET['id'];
      // die();
      $del = $userobj->delete($_GET['id']);
      if($del){
            header('location:index.php');
      }else{
        echo $del;
      }
    }
?>


 <button style="background-color:red; font-size:20px;width:100px;"> <a href="registration.php">ADD</a></button><br><br>
<table class=" table table-hover">
               <tr style="background-color:yellow;">
                    <th>id</th>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Pass</th>
                    <th scope="col">Action</th>
                    <th scope="col">Action</th>
                 </tr>
          <?php foreach($result as $row){ ?>
                 <tr>
                        <td><?php echo $row['id'];?></td>
                        
                        
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                        <td><?php echo $row['pass'];?></td>
                        
                        <td style=" font-size:20px;width:150px;"> <a href="update.php?id=<?php echo $row['id'];?>">Edit</a>    </td>
                         <td> <a href="index.php?id=<?php echo $row['id'];?>">Delete</a>
                         </td>
                    </tr>
            <?php
          
          } 
        
          ?>

            
     </table>
     <?php
     
     
      //    $userobj = new users();
      //  $sql1="SELECT * from oops";
      //  $result=mysqli_query($conn , $sql1) or die('failde');
      //  if (mysqli_num_rows($result)>0) {
      //    $total_records=mysqli_num_rows($result);
      //    $limit=2;
      //    $total_page= ceil($total_records/ $limit);
      //   echo '<ul class="pagination admin-pagination">';
      //    for($i=1;$i<= $total_page;$i++){
      //     echo '<li> <a  href="index.php?page='.$i.'">'.$i.'</a></li>';
      //    }
      //    echo'</ul>';
      //  }  
     ?>
     <!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->