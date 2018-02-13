<!DOCTYPE html>
<html>
    <head>
        <title>Scripture Input</title>
    </head>
    <body>
        <form action="display.php" method="post">
            <label for="book">Book</label>
            <input type="text" name="book" id="book"><br>

            <label for="chap">Chapter</label>
            <input type="number" name="chap" id="chap"><br>

            <label for="ver">Verse</label>
            <input type="number" name="ver" id="ver"><br>

            <label for="cont">Content</label>
            <textarea name="cont" id="cont" cols="30" rows="10"></textarea><br>

            <button type="submit">Send 'er in</button>

        </form>
    </body>
</html>