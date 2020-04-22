<?php

session_start();
$con = mysqli_connect('localhost', 'root');
if($con){
    //echo "Connection successful";
}
else{
  echo "Connection failed";
}

$db = mysqli_select_db($con,'onlinecanteen');
// check whether user submits the form
if(isset($_POST['submit'])){
 $name = $_POST['uname'];
 $pwd = $_POST['pwd'];

        $sql = mysqli_query("SELECT type FROM useradmin WHERE username = '$name' AND password = '$pwd' LIMIT 1 ");
        $type = mysqli_fetch_array($sql);
       // $query =mysqli_query($con,$sql);

        // $row = mysqli_num_rows($query);
        // admin
      if($type == 1){
        echo "Login successful";
        echo $type['type'];
        $_SESSION['user'] = $name;
        header('location:inside.php'); 
      }
      elseif($type == 0) {
         echo "Login successful";
        // $_SESSION['user'] = $name;
        // header('location:contact.php');
      }
      else{
        echo "password incorrect";
        header('location:home.php');
      }
    }
    ?>


      <!-- comment -->
       <!--  // tring alternative by copying check.php
        // if($result)
        // {
        //   $row = mysqli_fetch_assoc($result);

        // $user_type = $row['type']; // you get user type here whether he's admin or user

        // if ($user_type == 1) { 

        //      // this use is admin
        //     // do stuff here or redirect to admin panel or wherever you want
        //   $_SESSION['user'] = $name;
        //   header('location:inside.php');
        // }

        // elseif ($user_type == 0) {
        //     // this user is member
        //     // do stuff here or redirect wherever you want
        //   $_SESSION['user'] = $name;
        //   header('location:contact.php');
        // }

    //     else
    //     {
    //         // if there's some other value, simplyredirect to login page again
    //       header('location:home.php');
    //     }
    //   } // close of if($result)
    //   else
    //   {
    //     // redirect to login page again
    //     echo "query failed"; 
    //     header('location:home.php');// redirect to login page again
    //   }

    // }

    // else
    // {
    //     // redirect to login page again 
    //   header('location:home.php');        
    // } -->

  