
<style type="text/css">
  a{
    font-size: 22px;
  } 
</style>


  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <div class="col-1">
      <a class="navbar-brand" href="<?php echo url('home.php'); ?>">
        <img src="<?php echo url('images/newlogo.png'); ?>" class="img-fluid" alt="Responsive image">
      </a>
    </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">

          <li class="<?php if($page == 'home'){echo 'active';} ?>">
            <a class="nav-link" href="<?php echo url('home.php'); ?>">Home <span class="sr-only">(current)</span></a>
          </li>

            <li class="<?php if($page == 'about'){echo 'active';} ?>">
            <a class="nav-link mr-3" href="<?php echo url('about.php'); ?>">About Us</a>
          </li>

          <li class="<?php if($page == 'menu'){echo 'active';} ?>">
            <a class="nav-link mr-3" href="<?php echo url('menu.php'); ?>">Menu</a>
          </li>

          <li class="<?php if($page == 'contact'){echo 'active';} ?>">
            <a class="nav-link" href="<?php echo url('contact.php'); ?>">
              Contact
            </a>
          </li>

        </ul>

        <ul class="navbar-nav ml-auto">
            <li class= "mr-2">
            <a href="<?php echo url('cms/login.php'); ?>" class="mr-3 text-white bg-dark"><i class="fas fa-sign-in-alt " ></i>Login</a>
          </li>

          <li>
            <a href="<?php echo url('cms/signup.php'); ?>" class="text-white bg-dark" ><i class="fas fa-user"></i> Sign Up</a>
          </li> 
      
        </ul>
        
    </nav>
  </div>
</div>
</section>
