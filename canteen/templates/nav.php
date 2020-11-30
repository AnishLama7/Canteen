
<style type="text/css">
  a{
    font-size: 20px;
  }
  navbar-nav ml-auto{
    color: white;
  }
 
</style>

<section>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <a class="navbar-brand" href="home.php">
        <img src="images/newlogo.png" width="80px" height="40px">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="<?php echo url('home.php'); ?>">Home</a>
          </li>

            <li class="nav-item mr-3">
            <a class="nav-link" href="<?php echo url('about.php'); ?>">About Us</a>
          </li>

          <li class="nav-item mr-3">
            <a class="nav-link" href="<?php echo url('menu.php'); ?>">Menu</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo url('contact.php'); ?>">
              Contact
            </a>
          </li>

        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-2">
            <a href="<?php echo url('cms/login.php'); ?>" class="mr-3"><i class="fas fa-sign-in-alt text-secondary " ></i>Login</a>
          </li>

          <li class="nav-item">
            <a href="<?php echo url('cms/signup.php'); ?>" ><i class="fas fa-user text-secondary"></i> Sign Up</a>
          </li> 
      
        </ul>
        
    </nav>
  </div>
</div>
</section>
