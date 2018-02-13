<?php

try
{
    $user = 'postgres';
    $password = 'Wasabi1121';
    $db = new PDO('pgsql:host=localhost;dbname=scriptures',$user,$password);

} catch (PDOException $ex)
{
    echo 'Error!: ' . $ex->getMessage();
    die();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Scripture Display</title>
</head>
<body>
<?php
$book = $_POST['book'];
$chap = $_POST['chap'];
$ver = $_POST['ver'];
$cont = $_POST['cont'];

$stmt = $db->prepare('INSERT INTO "scripture"(book, chapter, verse, content) 
                                VALUES (:book, :chap, :ver, :cont)');
$stmt->execute(array(':book' => $book, ':chap' => $chap, ':ver' => $ver, ':cont' => $cont));

foreach ($db->query('SELECT * FROM "scripture"') as $row)
{
    echo '<h1>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</h1>';
    echo '<p>' . $row['content'] . '</p>';
}

?>
</body>
</html>