<table class=" table table-striped table-bordered">
    <thead>
        <tr>
            <th>
                Godzina
            </th>
            <th>
                Tytuł
            </th>
            <th>
                Opis
            </th>
        </tr>
    </thead>

    <tbody>    

        <?php //foreach (): ?>
            <tr>
                <th>
                    1
                </th>
                <th>
                   Film
                </th>
                
                <td>
                       <a href="javascript:decision('Czy na pewno chcesz zrobić rezerwację na ten film?',
                       'reservation')"><i class="icon-flag"></i></a>
                </td>
            </tr>

        <?php //endforeach; ?>

    </tbody>

</table>