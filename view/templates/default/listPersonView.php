<div class="table-responsive">

    <table class="table table-striped">

        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>IDADE</th>
        </tr>

        <?php
        
            foreach ($data as $key => $object) {
                
                echo '<tr>';

                    echo '<td>' . $object["_id"]. '</td>';
                    echo '<td>' . $object["firstname"] . '</td>';
                    echo '<td>' . $object["lastname"] . '</td>';
                    echo '<td>' . $object["age"] . '</td>';

                echo '</tr>';
                
            }
        
        ?>

    </table>

</div>