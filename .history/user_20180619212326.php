<?php 
require_once 'db_conn.php';
if (!isset($_GET['user_id'])) {
    header('Location: db_stuff.php');
} 
$user = $db->getUser($_GET['user_id']);
if (!$user) {
    header('Location: db_stuff.php');    
}
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

