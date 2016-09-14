<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP2</title>
</head>
<body>
<?php
    require __DIR__ . '/autoload.php';

    $db = new \App\Db();
   $data = $db->query('SELECT * FROM foo');

var_dump($data);
?>
</body>
</html>