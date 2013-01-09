<form action = "" method = "post">
    <div class="controls">
        <h4>Gatunki</h4>
        <?php foreach ($genres as $genre): ?>
        <label class="checkbox">
            <input type="checkbox" name="genre" value="<?php echo $genre->name ?>"> <?php echo $genre->name ?> <br>
        </label>
        <?php endforeach; ?>
    </div>
    
    <div>
        <h4>Tytul filmu</h4>
	<input type="text" name="title" data-provide="typeahead" data-source='<?php echo $titles ?>'>
    </div>
    <div>
        <button type = "submit">Szukaj</button>
    </div>
</form>

<?php if(isset($movies)): ?>
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
                <td> <?php echo $title ?> </td>
                <td> <?php echo $info[0] ?> </td>
                <td> <?php echo $info[1] ?> </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php endif; ?>
