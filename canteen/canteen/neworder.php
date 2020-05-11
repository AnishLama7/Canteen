<?php 
require_once 'includes/init.php';
require_once 'includes/db_connection.php';
$title = 'Order';
// require_once 'templates/header.php';
$active = 'order';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo url('css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo url('css/cms.css'); ?>">
  <link rel="stylesheet" href="<?php echo url('css/all.css'); ?>">
  <script src="<?php echo url('js/jquery.js'); ?>"></script>
  <script src="<?php echo url('js/all.js'); ?>"></script>
  <script src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
  <style type="text/css">
    a{
      color: #ffffff80;
    }

    .dropdown-menu, .dropdown-menu >a,.dropdown-menu>a:focus{
      background-color: #343a40;
      color: #ffffff80;
    }
    .dropdown-menu>a:hover{
      background-color: grey;
    }
    .card-img-top{
      padding: 10px;
    }
    a:focus, a:hover {
      color: rgba(255, 255, 255, 0.75);
    }
    .navbar-toggler{
      border: 1px solid grey;
    }
    .dropdown-item.active, .dropdown-item{
      background-color: darkgrey;
    }
    a{
      font-size: 19px;
    }
    ul a{
      margin-right: 30px;
    }
    input{
      width: 80px;
    }
    h2{
      color: darkorange;
    }
    /* Chrome, Safari, Edge, Opera input ko scroll hataune */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    .form-group {
     margin-bottom: 0; 
   }
 </style>
</head>
<body>
  <section class="bg-dark">
    <div class="container pb-2">
      <nav class="navbar navbar-expand-md nav-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="home.php">
          <img src="images/newlogo.png" width="130px" height="60px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
       <nav class="col-12 navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-expanded = "false" arial-label = "Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php 
          $sql = "SELECT name, slug FROM categories ";
          $result = db_query($con, $sql);
          if($result && db_num_rows($result) > 0):
        ?>
      <?php while($category = db_fetch_assoc($result)): ?>
        <li class="nav-item">
          <a class="nav-link  <?php echo $active == $category['slug'] ? 'active' : ' '; ?>" href="<?php echo url('category/'.$category['slug']); ?>"><?php echo $category['name']; ?></a>
        </li> -->
        <?php endwhile; ?>
        <?php endif; ?>

          <li class="ml-3 my-2">
              <a href="<?php echo url('logout.php'); ?>"><button class="bg-dark btn btn-primary"> Log Out </button></a>
            </li>

            <li class="ml-3 my-2">
              <a href="<?php echo url('cms/profile.php'); ?>"><button class="bg-dark btn btn-primary">My Profile</button></a>
            </li>
          </ul>
        </div>    
      </nav>
    </div>
  </section>

   <main class="row">
    <div class="col-12">
      <?php 
         $sql = " SELECT * FROM menu" ;
         $result = db_query($con, $sql);
         if($result && db_num_rows($result) > 0):
       ?>
       `<?php endif; ?>
       <div class="row top-menu">
      <div class="col-12 mt-2 text-center top-title">
      menu name
    </div>
      <div class="col">
        <div class="row">
          <div class="col-12">
          name
            <span class="top-info">
              
            </span>
          </div>
          </div>
          <div class="col-12 mt-2">
           
        </div>
      </div>

    </div>
    </div>
    </div>  
   </main>
  </nav>
</div>
</section>
 
           
