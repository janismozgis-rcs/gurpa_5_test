<?php
var_dump($_GET);

function getUser($key) {
    $users = [
        [
            'name' => 'Johnny',
            'age' => '20',
            'weight' => '200',
        ],
        [
            'name' => 'Billy',
            'age' => '21',
            'weight' => '50',
        ],
        [
            'name' => 'Juris',
            'age' => '22',
            'weight' => '100',
        ],
    ];
    return $user[$key];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php'; ?>    
    <?php include 'content.php'; ?>    
    <?php include 'footer.php'; ?>    
</body>
</html>