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
   <thead style="text-align:center;">
     <th>Order Name</th>
     <th>Quantity</th>
     <th>Price</th>
    <th>Subtotal</th>
    <th>Rate the order</th>
   </thead>

   <tbody>

    <?php 
      $sql = "SELECT * FROM orders WHERE user_id ='{$_SESSION['user']['id']}'";
      $result = db_query($con, $sql);

      if($result && db_num_rows($result) > 0 ): ?>
     <?php while( $order = db_fetch_assoc($result)): ?>

    <tr>
      <td><?php echo $order['order_name']; ?></td>

      <td><?php echo $order['quantity']; ?></td>

      <?php 
       $qry = "SELECT price FROM menu WHERE id = '{$order['menu_id']}'";
          $res = db_query($con, $qry);
          $menu = db_fetch_assoc($res);
       ?>
      <td><?php echo $menu['price']; ?></td>

      <td class="text-right">&#x20A8;
        <?php
            $subt = $menu['price']*$order['quantity'];
            echo number_format($subt, 2);
        ?>
    </td>

    <td style="text-align: center;">
      <span class="far fa-grin-stars" title="excellent"></span>
      <span class="far fa-grin-stars" title="excellent"></span>
      <span class="far fa-grin-stars" title="excellent"></span>
      <span class="far fa-grin-stars" title="excellent"></span>
      <span class="far fa-grin-stars" title="excellent"></span>
    </td>
    </tr>

  <?php endwhile; ?>

  <tr>
      <td colspan="3" class="text-right"><b>TOTAL</b></td>
      <td class="text-right">&#x20A8;<?php echo number_format($subt, 2); ?></td>                    
    </tr> 

   </tbody>
 </table>
<?php endif; ?>


<?php require 'templates/footer.php'; ?>
