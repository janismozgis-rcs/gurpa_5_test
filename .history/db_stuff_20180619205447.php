<?php require_once 'db_conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>username</th>
                <th>created at</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($db->getAllUsers() as $user) { ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['created_at']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>