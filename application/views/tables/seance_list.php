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
                <th>
                    <?php echo $seance->time; ?>
                </th>
                <th>
                    <?php echo $seance->movie->title; ?>
                </th>
                <?php if($logged_as): ?>
                    <td>
                           <a href="wstawLinkaDoRemove" class="confirm"><i class="icon-remove"></i></a>
                    </td>
                <?php endif; ?>
            </tr>

        <?php endforeach; ?>

    </tbody>

</table>