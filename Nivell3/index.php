

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Banco</title>
</head>
<body>
    <h1>Este es mi Banco</h1>
    <p>Bienvenida a tu banco</p>
    <?php
    include 'Account.php';
    $cuenta = new Account(246, "Mari", "Perez Garcia",0);
    ?>

</body>
</html>