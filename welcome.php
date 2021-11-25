<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Welcome:" . $_POST["name"] . "<br>";
    echo "Your email address is:" . $_POST["email"] . "<br>";
    if (isset($_POST["operador"])) {
        echo "Your Check:" . $_POST['operador'];
    }
    ?>

</body>

</html>