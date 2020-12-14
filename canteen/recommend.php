<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<h1 class="text-center">Recommeded For You</h1>

<div class="row">

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

            if($result && db_num_rows($result) > 0 ): ?>
           <?php while( $std_order = db_fetch_assoc($result)): ?>

  <div class="column">
    <img src="<?php echo url('images/'.$std_order['image']); ?>" class = "img-fluid" style="width:100%">
    <div class="text-center">
        <h3><?php echo $std_order['name']; ?></h3>
    </div>
  </div>

<?php endwhile; ?>
<?php endif; ?>
 

<?php  
      
      }else{
        $sql = "SELECT * FROM menu ORDER BY RAND() LIMIT 0,3";
        $result = db_query($con,$sql);
      }

        if($result && db_num_rows($result) > 0 ): ?>
        <?php while( $menu = db_fetch_assoc($result)): ?>

        <div class="column">
          <img src="<?php echo url('images/'.$menu['image']); ?>" class = "img-fluid" style="width:100%">
          <div class="text-center">
              <h3><?php echo $menu['name']; ?></h3>
          </div>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>


</div>
      
