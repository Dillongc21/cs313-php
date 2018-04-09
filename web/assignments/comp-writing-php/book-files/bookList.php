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

    <?php include '../header.php' ?>

    <h1>Book List</h1>

    <?php

    /*$statement = $db->prepare("SELECT b.title AS title, b.sub_title AS sub, b.date_published AS pub,
                                               b.volume AS volume, a.first_name AS first, a.last_name AS last
                                        FROM book AS b, author AS a, author_book_lookup AS ab
                                        WHERE b.book_id = ab.book_id
                                        AND a.author_id = ab.author_id");*/

    $statement = $db->prepare("SELECT book_id, title, sub_title AS sub, date_published AS pub, volume FROM book");
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

        //$timestamp = strtotime($row[pub]);

        echo '<p>';
        echo '<strong>';
        echo "<a href=\"bookDetails.php?id=$row[book_id]\"> $row[title]";
        if (!empty($row[volume])) {
            echo '- Vol. ' . $row[volume];
        }
        if (!empty($row[sub])) {
            echo ': ' . $row[sub] . '</a></strong></p>';
        }
        //echo '</strong>Written by ' . $row[first] . ' ' . $row[last] . '<br>';
        //echo "Published: " . date("d/m/Y", $timestamp) . '</p>';
    }
    ?>
</body>
</html>
