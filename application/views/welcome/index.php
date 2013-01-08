<div class="tabbable"> 
     <?php $days = Kohana::$config->load('week.days') ?>
    <ul class="nav nav-tabs">
       <?php foreach($days as $day): ?>
        <?php echo '<li><a href=#'.$day[0].' data-toggle="tab">'.$day[1].'</a></li>'?>  
        <?php endforeach;?>
    </ul>
    <div class="tab-content">
        <?php foreach($days as $day): ?>
         <?php echo '<div class="tab-pane" id='.$day[0].'>'; ?>
           <?php include Kohana::find_file('views', 'tables/movie') ?>
        <?php echo '</div>' ?>
        <?php endforeach;?>      
    </div>
</div>