<?php  $logged_as=Auth::instance()->logged_in('admin') ?>
<?php include Kohana::find_file('views', 'movie/description')  ?>

<table class=" table table-striped table-bordered">
    <thead>
        <tr>
            <th>
                Time
            </th>
            <th>
                Title
            </th>
            <th style = "width: 15%">
                Duration [min]
            </th>
            <?php if($logged_as): ?>
                <th>
                    Options
                </th>
            <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($seances as $seance): ?>
            <tr>
                <td>
                    <?php echo $seance->time; ?>
                </td>

                <td>
                    <a class="movieDescription" href="#movieDescription" role="button" data-toggle="modal" id="<?php echo $seance->movie->id?>">
                    <?php echo $seance->movie->title; ?>
                    </a>
                </th>

                <td>
                    <?php echo $seance->movie->duration; ?>
                </th>
                <?php if($logged_as): ?>
                    <td>
                         <a class="confirm" rel="tooltip" title="Usuń seans" href="/adm_cinema/delete_show/<?php echo $seance->id;
                         if (isset($selected)): ?>/?date=<?php echo $selected ?>">                            
                                <?php endif ?>
                         <i class="icon-remove"></i>
                         </a>
                        <a rel="tooltip" title="Edytuj seans" href="#myModal"  data-toggle="modal"/>                        
                         <i class="icon-pencil"></i>
                        </a>                        
                    <?php include Kohana::find_file('views', 'tables/modal') ?>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

