<?php 
require_once 'db_conn.php';
$user = $db->getUser($_GET['user_id']) 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="db_stuff.php"><- back</a>
    <pre>
        <?php var_dump($user); ?>
    </pre>    
</body>
</html>

