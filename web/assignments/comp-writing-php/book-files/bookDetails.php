<?php
session_start();
require '/Users/dillonchristensen/Documents/cs313/db-php-files/connect-comp-writing-db.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
</head>
<body>

<?php include '../header.php';

$id = $_GET["id"];

$stmt = $db->prepare("SELECT b.title AS title, b.sub_title AS sub, b.date_published AS pub, b.volume AS volume,
                                      b.date_added AS added, a.first_name AS first, a.last_name AS last
                                    FROM book AS b, author AS a, author_book_lookup AS ab
                                    WHERE b.book_id = ab.book_id
                                    AND a.author_id = ab.author_id
                                    AND b.book_id = :id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
$pubStmp = strtotime($result[pub]);
$addStmp = strtotime($result[added]);

echo "<h1>$result[title]";
if ($result[sub] !== NULL) {
    echo ":</h1><h2>$result[sub]</h2>";
}
else {
    echo "</h1>";
}

echo "<strong><p>Volume: $result[volume]</p>";
echo "<p>Author: $result[first] $result[last]</p></strong>";
echo "<p>Published: " . date("d/m/Y", $pubStmp) . "</p>";
echo "<p>Added to Site: " . date("d/m/Y", $addStmp) . "</p>";

?>
</body>
</html>