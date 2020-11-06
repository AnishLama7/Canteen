<?php 
  require_once 'includes/init.php';
  require_once 'includes/db_connection.php';
   require_once 'includes/user_check.php';
  $title = 'order-details';
  require 'templates/header.php';
 ?>
 <h1 style="text-align: center;">Order details</h1>
 <hr>

 <style type="text/css">
   b{
    color: darkorange;
   }
 </style>

 <h5><b>Name: </b><?php echo $_SESSION['user']['name']; ?></h5>
 <h5><b>Date: </b><?php echo $_SESSION['logged_in_datetime'] = date("d M H:i:s"); ?></h5>
 <table class="table table-bordered table-striped">
   <thead>
     <th>Order Name</th>
     <th>Quantity</th>
     <th>Price</th>
    <th>Subtotal</th>
   </thead>

   <tbody>

    <?php 
      $sql = "SELECT * FROM orders WHERE user_id ='{$_SESSION['user']['id']}'";
      $result = db_query($con, $sql);
     ?>

    <tr>
       
    </tr>

    <tr>
      <td colspan="3" class="text-right"><b>TOTAL</b></td>
      <td class="text-right"></td>                    
    </tr>

   </tbody>
 </table>


<?php require 'templates/footer.php'; ?>
