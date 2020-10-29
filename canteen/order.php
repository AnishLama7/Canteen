<?php 
  require_once 'includes/init.php';
  require_once 'includes/db_connection.php';
  require_once 'includes/student_check.php';
  require_once 'includes/user_check.php';
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
          <a class="nav-link" href="<?php echo url('order.php'); ?>"><i class="fas fa-home"></i></a>
        </li>
          <?php 
            $sql = "SELECT name, slug FROM categories ";
            $result = db_query($con, $sql);
            if($result && db_num_rows($result) > 0):
          ?>
          <?php while($category = db_fetch_assoc($result)): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url('category/'.$category['slug']); ?>"><?php echo $category['name'];  ?></a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>

       <ul class="nav navbar-nav navbar-right">
        <li style="color: white;">&nbsp;&nbsp;<i class="fas fa-user"></i><?php echo $_SESSION['user']['name']; ?></li>
        <li style="color: white;">&nbsp;&nbsp;<i class="fas fa-user-clock"></i><?php echo $_SESSION['logged_in_datetime'] = date("d M H:i:s"); ?></li>
        <li><a href="<?php echo url('cms/profile.php'); ?>" title="My Profile">&nbsp;&nbsp;<i class="fas fa-user"></i></a></li>
        <li><a href="<?php echo url('cms/logout.php'); ?>" title="Logout" ><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
    </div>
  </nav>

  <div class="container">
  <h1 class="page-header text-center">ORDER</h1>
   
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
      </thead>
      <tbody>

        <?php include_once 'cms/templates/message.php'; ?>
         <form method="POST" action="<?php echo url('order_store.php'); ?>" enctype = "multipart/form-data">
        <?php 
         $sql = "SELECT * FROM menu LIMIT 0,10 "; 
        $result = db_query($con, $sql);
        if($result && db_num_rows($result) > 0 ): ?>
       <?php while( $menu = db_fetch_assoc($result)): ?>
        ?>
            <tr>
             
              <td> 
                <label for="name">
                  <input type="text" name="name" class="form-control" value="<?php echo $menu['name']; ?>" readonly>
                </label>
              </td>
              <td>
                 <?php  if(!empty($menu['image'])): ?>
                 <img src="<?php echo url('images/'.$menu['image']); ?>" class="img-fluid">
                 <?php endif; ?>
              </td>
              <td class="text-right">&#x20A8; <?php echo number_format($menu['price'], 2); ?></td>
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
               <input type="number" class="form-control" name="quantity">
             </td>

              <td><?php echo date('M d, Y h:i A', strtotime($menu['created_at'])) ?></td>

            </tr>

          <?php endwhile; ?>
      </tbody>
    </table>
  <?php endif; ?>

  <div class="row">
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Order</button>
      </div>
    </div>
    
  </form>
</div>

  </div>
</body>

 
  <script type="text/javascript" src="<?php echo url('js/jquery.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/bootstrap.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/cms.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/all.js')?>"></script>
 </body>
 </html>