<table class=" table table-striped table-bordered">
    <thead>
        <tr>
            <th>
                Time
            </th>
            <th>
                Title
            </th>
            <th>
                Options
            </th>
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
                </td>
                
                <td>
                       <a href="wstawLinkaDoRemove" class="confirm"><i class="icon-flag"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>