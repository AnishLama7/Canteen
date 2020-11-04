<?php 
  require_once 'includes/init.php';
  require_once 'includes/db_connection.php';
   require_once 'includes/user_check.php';
  $title = 'order-details';
  require 'templates/header.php';
 ?>
 <h1 style="text-align: center;">Order details</h1>
 <hr>

 <h5>Name:<?php echo $_SESSION['user']['name']; ?></h5>
 <h5>Date:<?php echo $_SESSION['logged_in_datetime'] = date("d M H:i:s"); ?></h5>
 <table class="table table-bordered table-striped">
   <thead>
     <th>Order Name</th>
     <th>Quantity</th>
     <th>Total</th>
     <th>Status</th>
   </thead>

   <tbody>
     <td>MOMO</td>
     <td>2</td>
     <td>200</td>
     <td>ready</td>
   </tbody>
 </table>


     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->

<?php require 'templates/footer.php'; ?>
