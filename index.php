<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Gästbok</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">¨

        <h1>Gästbok</h1>

    <form action="save.php" method="post">

        <label for="name">namn:</label>
        <input type="text" id="namn" name="namn" required>

        <label for="comment">kommentarer:</label>
        <textarea id="comment" name="comment" rows="5" required></textarea>

        <button type="submit">skriv i el gästbok cuh</button>

</form>
<a href="guestbook.php">visa de inlägg som finns</a>

    </div>

</body>
</html>