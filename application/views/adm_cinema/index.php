<?php if(isset($seances)) :?>
<table>
    <?php foreach($seances as $show) :?>
    <tr>
        <td>
           <?php echo $show ?> 
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
Brak wyników.
<?php endif; ?>


