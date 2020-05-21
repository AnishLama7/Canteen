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
    a{
      color: white;
    }
  /* .list-menu{
    margin-bottom: 15px;
}
  .list-article {
  height: 150px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}*/
  </style>
 </head>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand"><img src="images/newlogo.png" width="60px" height="30px"></a>
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
      <li> <a href="<?php echo url('cms/logout.php'); ?>" title="Logout" ><i class="fas fa-sign-out-alt"></i></a></li>
      </ul>
  </div>
</nav>

    <!-- Recommendation starts here -->
<div class="container">
<div class="row">
  <div class="col">
        <div class="item active text-center">
          <img src="images/alu.jpg" alt="Image" style="height: 250px; width: 250px;">
             <h3>Recommendation</h3>
          </div>      
        </div>
  </div>
</div>
<hr>
</div>
<!-- Recommendation ends here -->

<div class="row">
  <div class="col-12 text-center">
    <h3>Today's Menu</h3><br>
   <div class="row">
    <?php 
      $sql = "SELECT * FROM menu LIMIT 0,10 ";
      $result = db_query($con, $sql);
      if($result && db_num_rows($result) > 0 ): ?>
     <?php while( $menu = db_fetch_assoc($result)): ?>

  <div class="col-3">  
    <div class="row list-menu">
      <div class="col">
     <?php  if(!empty($menu['image'])): ?>
      <img src="<?php echo url('images/'.$menu['image']); ?>" class="img-fluid" >
      <?php endif; ?>
            <h5 class="card-title text-center"><?php echo $menu['name']; ?></h5>
     
        <label>Price:<?php echo $menu['price']; ?> </label><br>
        <label>Available:<?php echo $menu['total']; ?> </label><br>
          <div class="qty mt-2">
            <span class="minus bg-dark">-</span>
            <input type="number" class="count" name="qty" value="0">
            <span class="plus bg-dark">+</span>
        </div>

     <!--  <div class="form-group">
        <label>Price:<?php echo $menu['price']; ?> </label>
      </div>

       <div class="form-group">
        <label for="type">Food Type:<?php echo $menu['type']; ?></label>
      </div>

      <div class="form-group">
        <label>Available amount:<?php echo $menu['total']; ?> </label>
      </div>

      <div class="form-group">
        <label>Your order amount:</label>
        <input type ="number" size="">
      </div> -->

      <div class="form-group text-center" >
        <button type="submit" class="btn btn-secondary mt-2 font-weight-bold">Order</button>
      </div> 
    </div>
</div>
</div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
</div>

 

 <body>
 
  <script type="text/javascript" src="<?php echo url('js/jquery.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/bootstrap.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/cms.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/all.js')?>"></script>
 </body>
 </html>