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
      $ids = [];
      $query = "SELECT * FROM food_recommend WHERE user_id = '{$_SESSION['user']['id']}' order by count desc LIMIT 0,3";
      $result = db_query($con ,$query);
    
      if($result && db_num_rows($result) > 0 ){
        while( $menu = db_fetch_assoc($result)){
            $ids[]=$menu['menu_id'];
        }?>
    <?php foreach($ids as $id):?>
    <?php
            $sql = "SELECT * FROM menu WHERE id = '{$id}'";
            $result = db_query($con,$sql);
            if($result && db_num_rows($result) > 0 ):?>
    <?php $menu = db_fetch_assoc($result);?>
    <div class="column">
        <img src="<?php echo url('images/'.$menu['image']); ?>" class="img-fluid" style="width:100%">
        <div class="text-center">
            <h4><?php echo $menu['name']; ?></h4>
        </div>
    </div>

    <?php endif; ?>
    <?php endforeach?>


    <?php  
      
      }else{
        $sql = "SELECT * FROM menu ORDER BY RAND() LIMIT 0,3";
        $result = db_query($con,$sql);
      }

        if($result && db_num_rows($result) > 0 ): ?>
    <?php while( $menu = db_fetch_assoc($result)): ?>

    <div class="column">
        <img src="<?php echo url('images/'.$menu['image']); ?>" class="img-fluid" style="width:100%">
        <div class="text-center">
            <h3><?php echo $menu['name']; ?></h3>
        </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>


</div>