<?php 
require_once 'db_conn.php';
if (!isset($_GET['user_id'])) {
    header('Location: db_stuff.php');
    die;
} 
$user = $db->getUser($_GET['user_id']);
if (!$user) {
    header('Location: db_stuff.php');
    die;        
}

echo json_encode($user);
?>