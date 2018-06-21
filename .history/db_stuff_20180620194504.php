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
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($db->getAllUsers() as $user) { ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user[3]; ?></td>
                    <td><a href="user.php?user_id=<?= $user['id']; ?>" class="user-link">View</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <div id="user-data">
        The select user's name is <strong id="user-data-name"></strong>, and ID is <strong id="user-data-id"></strong>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.user-link').click(function(event){
            event.preventDefault();
            var url = $(this).attr('href');
            $.getJSON(url, function(reponse){
                $('#user-data-name').text(reponse.username);
                $('#user-data-id').text(reponse.id);
            });            
        });

    </script>
</body>
</html>