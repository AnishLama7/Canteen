<?php 
  require_once 'includes/init.php';
  require_once 'includes/user_check.php';
  require_once 'includes/student_check.php';
  require_once 'includes/db_connection.php';
  $title = 'Home';
  $active = 'home';
  include 'templates/header.php';
 ?>

 </head>
<body>
  <div class="container-fluid">
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand"><img src="<?php echo url('images/newlogo.png'); ?>" width="80px" height="40px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item  <?php echo $active == 'home' ? 'active' : ' '; ?>">
          <a class="nav-link <?php echo $active == $category['slug'] ? 'active' : ' '; ?>" href="<?php echo url('std_order.php'); ?>"><i class="fas fa-home"></i></a>
        </li>

        <?php 
            $sql = "SELECT name, slug FROM categories ";
            $result = db_query($con, $sql);
            if($result && db_num_rows($result) > 0):
          ?>
           <?php while($category = db_fetch_assoc($result)): ?>
          
         
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url('category/'.$category['slug']); ?>"><?php echo $category['name']; ?></a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>

      <ul class="nav navbar-nav navbar-right mr-5">

        <li class="nav-item my-2 mr-3" style="color: white;"><a href=""></a><i class="fas fa-user-clock ml-3"></i><?php echo date('Y/m/d H-i-s A')?></li>


        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo url('std_profile.php'); ?>"title="My Profile"><i class="fas fa-user"></i><?php echo $_SESSION['user']['name']; ?></a>

          <a class="dropdown-item mr-5" href="<?php echo url('cms/logout.php'); ?>" title="Logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
      </li>
        
    </ul>
    </div>
  </nav>
  <br>

  <div class="row">
    <div class="col-md-6">
      <select id="typelist" class="btn btn-default">
      <?php
      
        $sql="SELECT DISTINCT type FROM menu";
          $result=db_query($con,$sql); 
          while($menu = db_fetch_assoc($result)){
          $menu_id = isset($_GET['type']) ? $_GET['type']: 0;
          $selected = ($menu_id == $menu['type']) ? " selected" : "";
          echo "<option$selected value=".$menu['type'].">".$menu['type']."</option>";
        }
      ?>
      </select>
    </div>

    

    <!-- <div class="col-12">
		<div class="alert alert-success ">

    <?php 
      $sql = "SELECT notify FROM can_order where notify = '1' AND order_no = '{$order_no}'";
      $result = db_query($con, $sql);
      echo "your Order is ready"
      ?>
		</div>
	  </div> -->

     

 <?php include './cms/templates/message.php';?>


  <div class="container-fluid">
    <!-- ?php include 'recommend.php'; ?> -->
    <?php include 'demo.php'; ?>
  <h1 class="page-header text-center">Today's Menu</h1>

  
<div class="table-responsive-sm">
    <table class="table table-striped table-bordered w-auto">
      <thead class="text-center">
        <th>Food Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Category</th>
        <th>Order No</th>
        <th>Available</th>
       <!--  <th>DateTime</th> -->
        <th>Quantity</th>
        <th>Break Time</th>
        <th>Action</th>
        <th>Review</th>
      </thead>
      <tbody>
         
        <?php 
        if (isset($_GET['type'])) {
          $slug = ($_GET['type']);
          $sql = "SELECT * FROM menu WHERE type='$slug' LIMIT 0,20 "; 
        }else{

         $sql = "SELECT * FROM menu LIMIT 0,30"; 
        }
        $result = db_query($con, $sql);
        if($result && db_num_rows($result) > 0 ): ?>
       <?php while( $menu = db_fetch_assoc($result)): ?>
        <?php if ($menu['total'] > 0) {?>
        
        <form method="POST" action="<?php echo url('order_store.php'); ?>" enctype = "multipart/form-data">
            <tr>
             
              <td style="width:200px;"> 
                <label for="name">
                  <input type="text" name="name" class="form-control" value="<?php echo $menu['name']; ?>" readonly>
                  <input type="hidden" name="order_id" value="<?php echo $menu['id']?> ">
                </label>
              </td>

              <td style="height: 60px; width: 80px;">
                <input type="hidden" name="image" class="form-control" value="<?php echo $menu['image']; ?>">
                <?php  if(!empty($menu['image'])): ?>
                <img src="<?php echo url('images/'.$menu['image']); ?>" class="img-fluid">
                <?php endif;?>
              </td>
             

              <td>
                <input type="number" name="price" class="form-control" value="<?php echo number_format($menu['price']); ?>" readonly>
              </td>

              
              <?php 
                  $qry = "SELECT name FROM categories WHERE id = '{$menu['category_id']}'";
                  $res = db_query($con, $qry);
                  $Category = db_fetch_assoc($res);
                 ?>
              <td>
                <?php echo $Category['name']; ?>
                <input type="hidden" name="type" value="<?php echo $menu['type']; ?>">
              </td>
              
              <td>
                <label for="order_no">
                  <input type="number" name="order_no" class="form-control" value="<?php echo rand(111,999); ?>" readonly>
                </label>
              </td>

              <td>
                <input type="number" class= "form-control" name="total" value="<?php echo $menu['total']; ?>" readonly>
              </td>

              <!--  <td style="width:200px;"><?php echo date('M d, Y h:i A', strtotime($menu['created_at'])) ?></td> -->

             <td>
               <input type="number" class="form-control" name="quantity" max="<?php echo $menu['total']; ?>" required>
             </td>

             <td>
               <input type="time" class="form-control" name="break_time" required>
             </td>

             <td>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Order</button>
             </td>

             <td class="text-center">
              <a href="<?php echo url('review.php'); ?>"><i class="fa fa-star" aria-hidden="true"></i></a>
            </td>

           </tr>
  </form>
<?php }?>

          <?php endwhile; ?>
      </tbody>
    </table>
  </div>
  <?php endif; ?>
    
</div>

  </div>
</body>

<script type="text/javascript">
  $(document).ready(function(){
    $("#typelist").On('change', function(){
      if($(this).val() == 0)
      {
        window.location = 'std_order.php';
      }
      else
      {
        window.location = 'std_order.php?type='+$(this).val();
      }
    });
  });



</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<?php include 'templates/footer.php'; ?>
 </html>