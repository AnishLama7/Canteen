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
  <title> Order <?php echo $title; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo url('css/bootstrap.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo url('css/all.css')?>">

  <style type="text/css">
    a{
      color: white;
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
      <li style="color: white;">&nbsp;&nbsp;<i class="fas fa-user"></i><?php echo $_SESSION['user']['name']; ?></li>
      <li style="color: white;">&nbsp;&nbsp;<i class="fas fa-user-clock"></i><?php echo $_SESSION['logged_in_datetime'] = date("d M H:i:s"); ?></li>
      <li><a href="<?php echo url('cms/profile.php'); ?>" title="My Profile">&nbsp;&nbsp;<i class="fas fa-user"></i></a></li>
      <li> <a href="<?php echo url('cms/logout.php'); ?>" title="Logout" >&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i></a></li>
      </ul>

  </div>
</nav>

<div class="row">
  <div class="col-12 text-center">
    <h3>Today's Menu</h3> <br>
    <hr>
   <div class="row">
    <?php 
      $sql = " SELECT * FROM menu " ;
      $result = db_query($con, $sql);
      if($result && db_num_rows($result) > 0 ): ?>
     <?php while( $menu = db_fetch_assoc($result)): ?>

     <!--  <div class="col-3">
      <div class="row list-menu">
        <div class="col-12">
          <?php if(!empty($menu['image'])): ?>
          <div class="list-thumbnail" style="background-image: url(<?php echo url('images/'.$menu['image']); ?>)">
          <?php else: ?>
            <div class="list-thumbnail" style="background-image: url(<?php echo url('images/food.png')?>)">
          <?php endif; ?>
          </div>
        </div>
        <div class="col-12 text-center">
          <a href="<?php echo url('menu/'.$menu['slug']); ?>" class="list-title"><?php echo $menu['name']; ?></a>
        </div>
      </div>
    </div> -->
  
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

</div>
</body>


 
  <script type="text/javascript" src="<?php echo url('js/jquery.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/bootstrap.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/cms.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/all.js')?>"></script>
 </body>
 </html>

 <!-- $sql = " SELECT * FROM menu AND EXITS(SELECT id FROM categories WHERE categories.slug = '{$_GET['slug']}') "; -->
 