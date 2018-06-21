
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Weight</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach(getUserData() as $user){ 
            echo "<tr>
                <td>" . $user['name'] . "</td>
                <td>" . $user['age'] . "</td>
                <td>" . $user['weight'] . "</td>
            </tr>";
         } ?>
    </tbody>
</table>

