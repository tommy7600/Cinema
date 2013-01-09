<?php $genres = array('thriller', 'horror'); ?>
<?php $directors = array('Tim Burton', 'Ingmar Bergman', 'Quentin Tarantino'); ?>
<?php $films = '["movie1", "movie2", "movie3", "bleble"]'; ?>
<form>
    <div class="controls">
        <h4>Gatunki</h4>
        <?php foreach ($genres as $genre): ?>
        <label class="checkbox">
            <input type="checkbox" name="genre" value="<?php echo $genre ?>"> <?php echo $genre ?> <br>
        </label>
        <?php endforeach; ?>
    </div>
    
    <div>
        <h4>Tytul filmu</h4>
	<input type="text" data-provide="typeahead" data-source='<?php echo $films ?>'>
    </div>
    
    <div>
        <h4>Rezyser</h4>
        <select id="element">
            <?php foreach ($directors as $director): ?>
            <option value="<?php echo $director ?>"><?php echo $director ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</form>