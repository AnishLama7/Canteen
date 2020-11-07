<?php 
  require_once 'includes/init.php';
  require_once 'includes/user_check.php';
  require_once 'includes/student_check.php';
  require_once 'includes/db_connection.php';
  $title = 'Home';
  $active = 'home';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <title> <?php echo $title; ?> - Order Page</title>

  <link rel="stylesheet" type="text/css" href="<?php echo url('css/bootstrap.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo url('css/all.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo url('css/cms.css')?>">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

 <style type="text/css">
   img{
    height: 30px;
    width: 60px;
   }
 </style>
 
 </head>
<body>
  <div class="container-fluid">
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand"><img src="<?php echo url('images/newlogo.png'); ?>" width="60px" height="30px"></a>
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

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo url('std_profile.php'); ?>"title="My Profile"><i class="fas fa-user"></i></a></li>
        <li style="color: white;"></i><?php echo $_SESSION['user']['name']; ?></li>
        <li style="color: white;">&nbsp;&nbsp;<i class="fas fa-user-clock"></i><?php echo date('h:i:s A')?></li>
        <li> <a href="<?php echo url('cms/logout.php'); ?>" title="Logout" >&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i></a></li>
    </ul>
    </div>
  </nav>
  <br>

  <div class="row">
    <div class="col-md-12">
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
  </div>

 <!--  <select id="typelist" class="btn btn-default" style="color:orange">
    <option>Select Your food type</option>
    <option>VEG</option>
    <option>NON-VEG</option>
  </select> -->
  <hr>

 <?php include 'recommend.php'; ?>

  <hr>

  <div class="container">
  <h1 class="page-header text-center">ORDER</h1>
  <p style="text-align:right;"><a href="<?php echo url('std_details.php') ?>" class="btn btn-dark">Order Details</a></p>

    <table class="table table-striped table-bordered">
      <thead>
        <th>Food Name</th>
        <th>Food Image</th>
         <th>Price</th>
         <th>Category</th>
         <th>Order No</th>
         <th>Available</th>
         <th>Quantity</th>
         <th>Time</th>
         <th>Action</th>
      </thead>
      <tbody>

        <?php include_once 'cms/templates/message.php'; ?>
         
        <?php 
        if (isset($_GET['type'])) {
          $slug = ($_GET['type']);
          $sql = "SELECT * FROM menu WHERe type='$slug' LIMIT 0,10 "; 
        }else{

         $sql = "SELECT * FROM menu LIMIT 0,10 "; 
        }
        $result = db_query($con, $sql);
        if($result && db_num_rows($result) > 0 ): ?>
       <?php while( $menu = db_fetch_assoc($result)): ?>
        <form method="POST" action="<?php echo url('std_order_store.php'); ?>" enctype = "multipart/form-data">
            <tr>
             
              <td> 
                <label for="name">
                  <input type="text" name="name" class="form-control" value="<?php echo $menu['name']; ?>" readonly>
                  <input type="hidden" name="order_id" value="<?php echo $menu['id']?> ">
                </label>
              </td>

              <td>
                 <?php  if(!empty($menu['image'])): ?>
                 <img src="<?php echo url('images/'.$menu['image']); ?>" class="img-fluid">
                 <?php endif; ?>
              </td>

              <td class="text-right">&#x20A8; <?php echo number_format($menu['price']); ?></td>
              <?php 
                  $qry = "SELECT name FROM categories WHERE id = '{$menu['category_id']}'";
                  $res = db_query($con, $qry);
                  $Category = db_fetch_assoc($res);
                 ?>
              <td><?php echo $Category['name']; ?></td>
              
              <td>
                <label for="order_no">
                  <input type="number" name="order_no" class="form-control" value="<?php echo rand(111,999); ?>" readonly>
                </label>
              </td>

              <td>
                <input type="number" class= "form-control" name="total" value="<?php echo $menu['total']; ?>" readonly>
              </td>

             <td>
               <input type="number" class="form-control" name="quantity" max="<?php echo $menu['total']; ?>">
             </td>

              <td><?php echo date('M d, Y h:i A', strtotime($menu['created_at'])) ?></td>

           <!--   <td></td> -->

             <td>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Order</button>
             </td>

           </tr>
  </form>


          <?php endwhile; ?>
      </tbody>
    </table>
  <?php endif; ?>
    
</div>

  </div>
</body>

<script type="text/javascript">
  $(document).ready(function(){
    $("#typelist").on('change', function(){
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


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

  <script type="text/javascript" src="<?php echo url('js/bootstrap.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/cms.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/all.js')?>"></script>
 </body>
 </html>