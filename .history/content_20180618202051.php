<?php
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
?>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Weight</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user){ ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['age']; ?></td>
                <td><?php echo $user['weight']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

