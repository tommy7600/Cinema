<form>
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
	<input type="text" data-provide="typeahead" data-source='<?php echo $titles ?>'>
    </div>
</form>