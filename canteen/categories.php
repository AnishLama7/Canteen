<?php 
	require_once 'includes/init.php';
 	require_once 'includes/db_connection.php';
 
 $sql = "SELECT * FROM categories WHERE slug = '{$_GET['slug']}'";
  $result = db_query($con, $sql);

  if(!$result || db_num_rows($result) <= 0) {
    die('Page not found.');
  }

  $cat = db_fetch_assoc($result);

  $title = $cat['name'];

  $active = $cat['slug'];
  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> <?php echo $title; ?> - Order Page</title>
 	<link rel="stylesheet" type="text/css" href="<?php echo url('css/bootstrap.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/all.css')?>">

  <style type="text/css">
    a{
      color: white;
    }
  </style>
 </head>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand"><img src="images/newlogo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item <?php echo $active == 'home' ? 'active' : ' '; ?>">
        <a class="nav-link" href="<?php echo url('order.php'); ?>"><i class="fas fa-home"></i></a>
      </li>
        <?php 
          $sql = "SELECT name, slug FROM categories";
          $result = db_query($con, $sql);
          if($result && db_num_rows($result) > 0):
        ?>
        <?php while($category = db_fetch_assoc($result)): ?>
      <li class="nav-item">
        <a class="nav-link <?php echo $active == $category['slug'] ? 'active' : ' '; ?>" href="<?php echo url('category/'.$category['slug']); ?>"><?php echo $category['name'];  ?></a>
      </li>
      <?php endwhile; ?>
      <?php endif; ?>
    </ul>

     <ul class="nav navbar-nav navbar-right">
        <li  style="color: white;"><i class="fas fa-user-clock"></i>Time</li>
        <li><a href="#"><i class="fas fa-user"></i> My profile</a></li>
        <li><a href="<?php echo url('cms/logout.php'); ?>"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
      </ul>
  </div>
</nav>

    <!-- Recommendation starts here -->
<!-- <div class="container">
<div class="row">
  <div class="col-sm-8">
        <div class="item active">
          <img src="images/alu.jpg" alt="Image" style="height: 250px; width: 250px;">
             <h3>Recommendation</h3>
          </div>      
        </div>
  </div>
</div>
<hr>
</div> -->
<!-- Recommendation ends here -->

<div class="container text-center">    
  <h3>Today's Menu</h3>
  <br>
  <div class="row">
    <?php 
      $sql = " SELECT * FROM menu AND EXITS(SELECT id FROM categories WHERE categories.slug = '{$_GET['slug']}') ";
      $result = db_query($con, $sql);
      if($result && db_num_rows($result) > 0 ): ?>
     <?php while( $menu = db_fetch_assoc($result)): ?>

      <?php endwhile; ?>
      <?php endif; ?>
   
  </div>
  <hr>
</div>

 <body>
 
 	<script type="text/javascript" src="<?php echo url('js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?php echo url('js/bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?php echo url('js/cms.js')?>"></script>
	<script type="text/javascript" src="<?php echo url('js/all.js')?>"></script>
 </body>
 </html>