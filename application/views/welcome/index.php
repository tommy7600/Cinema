<ul class="nav nav-tabs">
   <?php foreach($days as $key => $value): ?>
        <?php if($selected == $value): ?>
            <li class="active">
                <a href="/seances/get_seances?date=<?php echo $value; ?>"><?php echo $key; ?></a>  
            </li>
        <?php else: ?>
            <li>
                <a href="/seances/get_seances?date=<?php echo $value; ?>"><?php echo $key; ?></a>  
            </li>
        <?php endif;?>
   <?php endforeach;?>
</ul>