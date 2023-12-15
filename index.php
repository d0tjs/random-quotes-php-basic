<?php

include_once("quotes.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $length = count($quotes);

    $random_index = rand(0, $length - 1);

    ?>
    <h1><?php echo $quotes[$random_index]['text']; ?></h1>
    <p>By ----------------------------- <?php echo $quotes[$random_index]['author']; ?></p>
</body>

</html>