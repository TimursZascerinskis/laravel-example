<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Forma</title>
</head>
<body>
    <h1>Ievades forma</h1>
    <form action="/submit.php" method="POST">
    @csrf
    <label for="name">Vārds:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="email">E-pasts:</label>
    <input type="email" id="email" name="email"><br><br>

    <button type="submit">Sūtīt</button>
</form>
</body>
</html>
