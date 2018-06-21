
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Weight</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach(getUserData() as $user){ ?>
            <tr>
                <td><?= $user['name']; ?></td>
                <td><?= $user['age']; ?></td>
                <td><?= $user['weight']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

