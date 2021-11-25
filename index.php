<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>


    <form action="welcome.php" method="post">
        Name: <input type="text" name="name" id="nameId" placeholder="Your Name Here....">
        Email: <input type="email" name="email" id="emailId" placeholder="Your Email Here...">
        <input type="checkbox" name="operador" value=" + ">
        <label for="vehicle1"> + </label><br>
        <input type="checkbox" name="operador" value=" - ">
        <input type="submit" value="Submit">
    </form>
    <?php



    $var = 'Hello World';
    $status = false;

    switch ($status) {
        case false:
            echo '<h2> Be quit </h2>';
            for ($varInt = 0; $varInt <= 5; $varInt++) {
                echo '<h2>' . $varInt . '</h2>';
            }
            break;

        default:
            echo '<h2> Be Not Quit </h2>';
            break;
    }
    $a = 1;
    do {
        echo "$a";
        $a++;
    } while ($a <= 10);
    $arrayName = array('Hello World', 'Good Bay World', 'Hello Mars', 'Good Night Mars');
    foreach ($arrayName as $value) {
        echo "<b> <br> $value</b>";
    }
    $ad = 0;
    while ($ad <=  10) {
        echo "<b> $ad </b>";
        $ad++;
    }
    echo ("<button onclick='' type=" . 'button' . " class=" . 'btn btn-primary' . "> Pulsame </button>");

    if ($status == true) {
        echo '<h1>Good Morning</h1>';
    } else {
        echo "<h1>Good Night $var </h1>";
    }


    ?>
</body>

</html>