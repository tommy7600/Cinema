<?php  $logged_as=Auth::instance()->logged_in('admin') ?>
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
                    <?php echo $seance->movie->title; ?>
                </th>

                <td>
                    <?php echo $seance->movie->duration; ?>
                </th>
                <?php if($logged_as): ?>
                    <td>
                         <a href="/adm_cinema/delete_show/<?php echo $seance->id ?>
                            <?php if (isset($selected)): ?>
                            /?date=<?php echo $selected ?>">                            
                                <?php endif ?>
                         <i class="icon-remove"></i>
                         </a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>