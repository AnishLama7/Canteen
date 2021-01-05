<?php 
  require_once 'includes/init.php';
  require_once 'includes/user_check.php';
  require_once 'includes/student_check.php';
  require_once 'includes/db_connection.php';

  if (isset($_GET['slug'])) {
    
  $sql = "SELECT * FROM categories WHERE slug = '{$_GET['slug']}'";
  $result = db_query($con, $sql);

  if(!$result || db_num_rows($result) <= 0) {
    die('Page not found.');
  }

  $cat = db_fetch_assoc($result);

  $title = $cat['name'];

  $active = $cat['slug'];
    }

 ?>


 <!DOCTYPE html>
 <html>
 <head>
  <title> <?php echo $title; ?> - Order</title>

  <link rel="stylesheet" type="text/css" href="<?php echo url('css/bootstrap.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo url('css/all.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo url('css/cms.css')?>">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
          <a class="nav-link" href="<?php echo url('std_order.php'); ?>"><i class="fas fa-home"></i></a>
        </li>
          <?php 
            $sql = "SELECT name, slug FROM categories ";
            $result = db_query($con, $sql);
            if($result && db_num_rows($result) > 0):
          ?>

          <?php while($category = db_fetch_assoc($result)): ?>
            
        <li class="nav-item">
          <a class="nav-link <?php echo $active == $category['slug'] ? 'active' : ''; ?>" href="<?php echo url('categories.php?slug='.$category['slug']); ?>"><?php echo $category['name']; ?></a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>

      <ul class="nav navbar-nav navbar-right mr-5">
        <li class="nav-item my-2 mr-3" style="color:white;"><a href=""></a><i class="fas fa-user-clock ml-3"></i><?php echo date('Y/m/d H-i-s A')?></li>


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


  <div class="container-fluid">
  <h1 class="page-header text-center">ORDER</h1>

    <table class="table table-striped table-bordered table-responsive">
      <thead>
        <th>Food Name</th>
        <th>Food Image</th>
         <th>Price</th>
         <th>Category</th>
         <th>Order No</th>
         <th>Available</th>
         <th>Time</th>
         <th>Quantity</th>
         <th>Break Time</th>
         <th>Action</th>
      </thead>
      <tbody>

        <?php include_once 'cms/templates/message.php'; ?>
         

        <?php 
       
        if (isset($_GET['slug'])) {
          $query = "SELECT * FROM categories WHERE slug ='{$_GET['slug']}' limit 1";

          var_dump($sql);

          $result = db_query($con, $query);

          $data = (db_fetch_assoc($result));
          $slugId = '';
          if (isset($data)>=1) {
            $slugId = $data['id'];
          }

          $sql = "SELECT * FROM menu WHERE category_id = '{$slugId}'";
         $result = db_query($con, $sql);
         $category = db_fetch_assoc($result);
         
        }

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

              <td style="height: 90px; width: 120px;">
                <input type="hidden" name="image" class="form-control" value="<?php echo $menu['image']; ?>">
                <?php  if(!empty($menu['image'])): ?>
                <img src="<?php echo url('images/'.$menu['image']); ?>" class="img-fluid">
                <?php endif;?>
              </td>
             

              <td style="width:120px;">
                <input type="number" name="price" class="form-control" value="<?php echo number_format($menu['price']); ?>" readonly>
              </td>

              
              <?php 
                  $qry = "SELECT name FROM categories WHERE id = '{$menu['category_id']}'";
                  $res = db_query($con, $qry);
                  $Category = db_fetch_assoc($res);
                 ?>
              <td><?php echo $Category['name']; ?></td>
              
              <td style="width:120px;">
                <label for="order_no">
                  <input type="number" name="order_no" class="form-control" value="<?php echo rand(111,999); ?>" readonly>
                </label>
              </td>

              <td style="width:150px;">
                <input type="number" class= "form-control" name="total" value="<?php echo $menu['total']; ?>" readonly>
              </td>

               <td><?php echo date('M d, Y h:i A', strtotime($menu['created_at'])) ?></td>

             <td style="width: 150px;">
               <input type="number" class="form-control" name="quantity" max="<?php echo $menu['total']; ?>" required>
             </td>

             <td>
               <input type="time" class="form-control" name="order_time" required>
             </td>

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

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->


 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

  <script type="text/javascript" src="<?php echo url('js/bootstrap.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/cms.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/all.js')?>"></script>
 </body>
 </html>