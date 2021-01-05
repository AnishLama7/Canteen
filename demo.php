<style>
  .sizered{
    width:35%;
  }
  .carousel-inner img {
  width: 100%;
  height: 100%;
}
</style>

<h1 style="text-align: center">Recommended For You</h1>
<section class="container sizered">
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <?php 

      $query = "SELECT * FROM recommend WHERE user_id = '{$_SESSION['user']['id']}'";
      $result = db_query($con ,$query);
      $result = db_fetch_assoc($result);
      if(isset($result)){
        $type = 'veg';
        if ($result['veg_count'] < $result['nonveg_count']) {
           $type= 'non-veg';
         } 
        $sql = "SELECT * FROM menu WHERE type = '{$type}' order by RAND() LIMIT 3  ";
        $result = db_query($con,$sql);
        // var_dump($sql);


            if($result && db_num_rows($result) > 0 ): ?>
           <?php while( $std_order = db_fetch_assoc($result)): ?>
    
        <div class="carousel-item-active">
            <img src="<?php echo url('images/'.$std_order['image']); ?>" class = "img-fluid">
           
          <div class="carousel-caption">
            <h3><?php echo $std_order['name']; ?></h3>
          </div>
        </div> 
 
        <?php endwhile; ?>
        <?php endif; ?>
      </div>


        <?php  
      
      }else{
        $sql = "SELECT * FROM menu ORDER BY RAND() LIMIT 0,3";
        $result = db_query($con,$sql);
      }

        if($result && db_num_rows($result) > 0 ): ?>
           <?php while( $menu = db_fetch_assoc($result)): ?>
    
        <div class="carousel-item-active">
          <?php  if(!empty($menu['image'])): ?>
            <img src="<?php echo url('images/'.$menu['image']); ?>" class = "img-fluid">
          <?php endif; ?> 
          <div class="carousel-caption">
            <h3><?php echo $menu['name']; ?></h3>
          </div>
         

      </div>
 
  
    </div>
    

    <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
<?php endwhile; ?>
        <?php endif; ?>
</section>