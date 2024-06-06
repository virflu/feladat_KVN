<head>
    <title>Advertisements</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<section>
    <h2>Advertisements:</h2>
    <ul>
        <?php foreach ($ads as $ad): ?>
            <li><?php echo htmlspecialchars($ad->title); ?> by: <?php echo htmlspecialchars($ad->username); ?></li>
        <?php endforeach; ?>
    </ul>
</section>

