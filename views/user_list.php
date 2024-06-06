<head>
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<section>
    <h2>Users:</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo htmlspecialchars($user->name); ?></li>
        <?php endforeach; ?>
    </ul>
</section>

