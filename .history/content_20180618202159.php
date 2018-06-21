
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
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['age']; ?></td>
                <td><?php echo $user['weight']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

