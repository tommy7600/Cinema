<!-- 
    $movies array format: 
    array(Model_Movie(1)->id => array('title' => Model_Movie->title, 'genres' => (string)genres, 'seances' => (string)seances),
          Model_Movie(2)->id => array('title' => Model_Movie->title, 'genres' => (string)genres, 'seances' => (string)seances)) 
-->
<script src="/assets/js/myJavaScript.js"></script>
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
            <?php foreach ($movies as $movie => $info): ?>
            <tr>
                <td> 
                    <a class="movieDescription" href="#movieDescription" role="button" data-toggle="modal" id="<?php echo $movie?>">
                        <?php echo $info['title'] ?> 
                    </a> 
                </td>
                <td> <?php echo $info['genres'] ?> </td>
                <td> <?php echo $info['seances'] ?> </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php endif;