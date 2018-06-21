<a href="?user=0">first user</a><br>
<a href="?user=1">second user</a><br>
<a href="?user=2">third user</a><br>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Weight</th>
        </tr>
    </thead>
    <tbody>
            <?php $user = getUser($_GET['user']); ?>
            <tr>
                <td><?= $user['name']; ?></td>
                <td><?= $user['age']; ?></td>
                <td><?= $user['weight']; ?></td>
            </tr>

    </tbody>
</table>

