<?php 
 	require_once 'includes/init.php';
 	require_once 'includes/db_connection.php';
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="order.php">
      	<img src="images/newlogo.png" width="60px" height="30px">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav mr-auto">
         <?php 
          $sql = "SELECT name, slug FROM categories ";
          $result = db_query($con, $sql);
          if($result && db_num_rows($result) > 0):
        ?>
   
        <?php endif; ?>
      </ul> 
        </div> 


      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><span class="glyphicon glyphicon-time"></span>Time</a></li>
      	<li><a href="#"><span class="glyphicon glyphicon-user"></span> My profile</a></li>
        <li><a href="<?php echo url('cms/logout.php'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/alu.jpg" alt="Image">
          <div class="carousel-caption">
             <h3>Recommendation</h3>
          </div>      
        </div>

        <div class="item">
          <img src="images/aluchop.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>Recommendation</h3>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<hr>
</div>

<div class="container text-center">    
  <h3>Today's Menu</h3>
  <br>
	<div class="row">
		<?php 
			$sql = "SELECT * FROM menu LIMIT 4";
			$result = db_query($con, $sql);
			if($result && db_num_rows($result) > 0 ):
		 ?>

		 <?php $menu = db_fetch_assoc($result);?>
	<div class="col-sm-3">
		
		 
		 <?php  if(!empty($menu['image'])): ?>
	  	<img src="<?php echo url('images/'.$menu['image']); ?>" class="img-responsive" style="width:100%" alt="Image">
		<?php endif; ?>
	 	<form action="/action_page.php">
	        <h4 class="card-title"><?php echo $menu['name']; ?></h4>
	        <div class="form-group">
	          <label>Price:<?php echo $menu['price']; ?> </label>
	        </div>
	        <div class="form-group">
	          <label>Available amount:<?php echo $menu['total']; ?> </label>
	        </div>
	        <div class="form-group">
	          <label>Your order amount:</label>
	          <input type ="number">
	        </div>
	        <div class="form-group text-center" >
	          <button type="submit" class="btn btn-secondary mt-2 font-weight-bold">Order</button>
	        </div>
	    </form>
	<?php endif; ?>
	</div>
   
  </div>
  <hr>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
