<?php

$cakes = simplexml_load_file('web.xml');      


if ($cakes === false) {
    echo "Failed to load XML file.";
    exit;
}

function h($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>

<?php if (!empty($cakes->cake)): ?>
    <h1>Cakes List</h1>
    <ul>
        <?php foreach ($cakes->cake as $cake): ?>
            <li>
                <strong>Name:</strong> <?= h($cake->name) ?><br>
                <strong>Price:</strong> $<?= h($cake->price) ?><br>
                <strong>Description:</strong> <?= h($cake->description) ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No cakes found in the XML file.</p>
<?php endif; ?>
