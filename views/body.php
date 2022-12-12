<body>
<div class="container">
      <?php foreach($listCard as $item): ?>
        <div class="card">
          <div class="card-img">
            <img src="<?php echo $item -> image ?>" alt="">
          </div>
          <div class="text-card">
            <i class="<?php echo $item -> category -> addPic() ?> " ></i>
            <h2><?php echo $item -> name ?></h2>
            <p><?php echo $item -> category -> type ?></p>
            <p><?php echo $item -> price ?> &euro; </p>
            <?php if(get_class($item) === 'Food'): ?>
              <p><?php echo $item -> weight ?> kg </p>
              <p> Ingredients : <?php echo $item -> ingredients ?> </p>
              <p> Taste: <?php echo $item -> taste ?> </p>
              <p>Healthy:  <?php echo $item -> changeHealthy()  ?>  </p>
             <?php elseif(get_class($item) === 'Toy'): ?>
              <p>Dimesioni:  <?php echo $item -> size ?> </p>
              <p> Healthy: <?php  echo $item -> changeHealthy()  ?> </p>
               <?php elseif(get_class($item) === 'Sit'): ?>
              <p><?php  $item -> changeComfortable() ?> </p>
              <p>Dimesioni: <?php echo $item -> size ?> </p>
              <p> Razza : <?php echo $item -> race ?> </p>
              <?php endif; ?>
          </div>
        </div>
        <?php endforeach; ?>
  </div>
</body>
</html>