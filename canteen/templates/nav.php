
<style type="text/css">
  a{
    font-size: 20px;
  }
  navbar-nav ml-auto{
    color: white;
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

          <li class="nav-item <?php echo $active == 'home' ? 'class="active"' : ''; ?>">
            <a class="nav-link" href="<?php echo url('home.php'); ?>">Home <span class="sr-only">(current)</span></a>
          </li>

            <li class="nav-item">
            <a class="nav-link mr-3" href="<?php echo url('about.php'); ?>">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mr-3" href="<?php echo url('menu.php'); ?>">Menu</a>
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
