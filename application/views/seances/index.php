<ul class="nav nav-tabs">
   <?php foreach($days as $key => $value): ?>
        <?php if($selected == $value): ?>
            <li class="active">
                <a href="/seances?date=<?php echo $value; ?>"><?php echo $key; ?></a>  
            </li>
        <?php else: ?>
            <li>
                <a href="/seances?date=<?php echo $value; ?>"><?php echo $key; ?></a>  
            </li>
        <?php endif;?>
   <?php endforeach;?>
</ul>
<?php if($seances->count() > 0): ?>
    <?php include Kohana::find_file('views', 'tables/seance_list') ?>
<?php else: ?>
    <h5>No seances.</h5>
<?php endif; ?>