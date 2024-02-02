<!DOCTYPE html>
<html lang="it">
<head>
    <title>Registrazione</title>
</head>
<body>
<form method="post" action="../src/reg_script.php">
    <input type="text" name="username" maxlength="60" required placeholder="Username"/>
    <input type="email" name="email" maxlength="60" required placeholder="Email"/>
    <input type="password" name="password" maxlength="12" required placeholder="Password"/>
    <input type="submit">
    <input type="reset">
</form>
</body>
</html>
