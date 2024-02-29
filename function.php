<?php
include "config.php";
class users extends DB{
  public $DB;
  
  public function __construct(){
      $dbobj = new DB();
      $this->DB = $dbobj->connect();
  }


public function insertuser($data){
  
    $name = @$data['name'];
    $mobile = @$data['mobile'];
    $email = @$data['email'];
    $pass = @$data['pass'];
    
    $sql = "INSERT INTO oops (name, mobile,email,pass) VALUES ('$name', '$mobile', '$email','$pass')";
  
    if ($this->DB->query($sql) === TRUE) {
      header('location:index.php');
     // echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" .  $this->DB->error;
    }
    }
   
    public function Login($email, $pass){  
      $res ="SELECT * FROM oops WHERE email = '$email' AND pass = '$pass'"; 
      $getquery = $this->DB->query( $res); 
      $user_data = mysqli_fetch_array($getquery);  
      // print_r($user_data); 
      // die(); 
       
        return   $user_data;
      
  }  

    public function getuser($id){
      $sql ="SELECT * FROM oops WHERE id ='$id'";
      $getquery = $this->DB->query( $sql);
      $data = mysqli_fetch_array($getquery);
      return $data;
      }


    public function table(){
      $sql ="SELECT * FROM oops ";
       $getquery = $this->DB->query( $sql);
       $resarray = array();
       while($data = mysqli_fetch_array($getquery)){
           $resarray[] = $data;      
       }
       return $resarray;
    }


    public function delete($id){
      $sql = "DELETE  FROM oops WHERE id ='$id'";
          $qurey= $this->DB->query($sql);
      if ($qurey) {
        return true;
      } else {
        return mysqli_error($this->DB);
      }
      }


        public function updatedata($data, $id){
            $name = $data['name'];
            $mobile = $data['mobile'];
            $email = $data['email'];
            $pass = $data['pass'];
    
            $Query = "UPDATE oops SET name='$name',  mobile='$mobile',email='$email', pass='$pass' WHERE id='$id'";
            $result = $this->DB->query($Query);
            if($result){
                return true;
            }else{
                return false;
            }
        }
      
    
            public function __destruct(){
                $this->DB->close();
        }
    }    
?>