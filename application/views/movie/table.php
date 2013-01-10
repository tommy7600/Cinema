<!-- 
    $movies array format: 
    array(Model_Movie(1)->title => array('genres' => (string)genres, 'seances' => (string)seances),
          Model_Movie(2)->title => array('genres' => (string)genres, 'seances' => (string)seances)) 
-->
<?php if(isset($movies) AND count($movies) > 0 ): ?>
<div>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>
                    Tytuł
                </th>
                <th>
                    Gatunek
                </th>
                <th>
                    Seanse
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $title => $info): ?>
            <tr>
                <td> <a href="#movieDescription" role="button" data-toggle="modal"> <?php echo $title ?> </a> </td>
                <td> <?php echo $info['genres'] ?> </td>
                <td> <?php echo $info['seances'] ?> </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php endif;