<?php 
require_once '../includes/init.php';
require_once '../includes/db_connection.php';
require_once '../includes/user_check.php';
$title = 'Menu';
// require_once 'templates/header.php';
$active = 'menu';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
          <img src="../images/newlogo.png" width="130px" height="60px">
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
        </li>
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
  <section>
    <div class="tab-content">
      <!-- 1. veg lunch -->
      <div id="lunch-veg" class="container tab-pane active"><br>
        <h2 class="text-center">Veg Lunch</h2>
        <hr width="25%">
        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px;">
            <img class="card-img-top" src="../images/mutton.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Veg Rice</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px">
            <img class="card-img-top" src="../images/mutton.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Special Veg lunch</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px">
            <img class="card-img-top" src="../images/breadchop.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Roti tarkari</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- 2. nonveg lunch -->
      <div id="lunch-nonveg" class="container tab-pane fade"><br>
        <h2 class="text-center">Non-Veg Lunch</h2>
        <hr width="25%">
        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px;">
            <img class="card-img-top" src="../images/chicken.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Chicken Rice</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px">
            <img class="card-img-top" src="../images/mutton.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Mutton lunch</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px">
            <img class="card-img-top" src="../images/chicken.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Roti tarkari(chicken curry)</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- 3. veg breakfast menu -->
      <div id="break-veg" class="container tab-pane fade"><br>
        <h2 class="text-center">Veg Breakfast</h2>
        <hr width="25%">
        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px;">
            <img class="card-img-top" src="../images/3.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Samosa</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px">
            <img class="card-img-top" src="../images/aluparatha.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Alu Paratha</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px">
            <img class="card-img-top" src="../images/breadchop.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Bread Chop</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- 4. nonveg breakfast -->
      <div id="break-nonveg" class="container tab-pane fade"><br>
        <h2 class="text-center">Non-Veg Breakfast</h2>
        <hr width="25%">
        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px;">
            <img class="card-img-top" src="../images/boiledegg.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Boiled Egg</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px">
            <img class="card-img-top" src="../images/4.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <form action="/action_page.php">
                <h4 class="card-title">Chicken Momo</h4>
                <div class="form-group">
                  <label>Price: </label>
                </div>
                <div class="form-group">
                  <label>Available amount: </label>
                </div>
                <div class="form-group">
                  <label>Your order amount:</label>
                  <input type ="number">
                </div>
                <div class="form-group text-center" >
                  <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6 col-12" style="width:400px">
            <img class="card-img-top" src="../images/5.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
             <form action="/action_page.php">
               <h4 class="card-title">Chicken Chowmein</h4>
               <div class="form-group">
                <label>Price: </label>
              </div>
              <div class="form-group">
                <label>Available amount: </label>
              </div>
              <div class="form-group">
                <label>Your order amount:</label>
                <input type ="number">
              </div>
              <div class="form-group text-center" >
                <button type="submit" class="btn btn-secondary mt-2 font-weight-bold"> Order</button>
              </div>
            </form>
          </div>
        </div>
      </div>      
    </div>
  </section>
</body>
