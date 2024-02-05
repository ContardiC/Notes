<!DOCTYPE html>
<html>
<head>
    <title>
        Registrazione
    </title>
</head>
<body>
<form method="post" action="../src/reg_script.php">
    <input type="text" name="username" maxlength="60" minlength="4" required/>
    <input type="email" name="email" maxlength="60" required/>
    <input type="password" name="password" maxlength="12" minlength="6" required />
    <input type="submit">
</form>
</body>
</html>