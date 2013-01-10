<?php include Kohana::find_file('views', 'movie/description')  ?>

<form class="form-inline" action = "" method = "get">
    <div class="controls">
        <h4>Gatunki</h4>
        <?php foreach ($genres as $genre): ?>
        <label class="checkbox">
            <input type="checkbox" name="genre[]" value="<?php echo $genre->id ?>"> <?php echo $genre->name ?> &emsp;
        </label>
        <?php endforeach; ?>
    </div>
    
    <div>
        <h4>Tytul filmu</h4>
	<input type="text" name="title" data-provide="typeahead" data-source='<?php echo $titles ?>'>
    </div> 
    
    <br>
    
    <div>
        <button type = "submit">Szukaj</button>
    </div>
</form>
<?php include Kohana::find_file('views', 'movie/table')  ?>