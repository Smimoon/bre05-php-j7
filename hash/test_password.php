<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post" action="decrypt_password.php">
        <label for="password">Mot de passe : </label>
        <input type="password" name="password"/>
        <label for="hash-password">Mot de passe chiffré : </label>
        <input type="password" name="hash-password"/>
        <button type="submit">Valider</button>
    </form>
</body>
</html>