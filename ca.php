<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="" method="GET">
                <input type="number" name="ds" placeholder="Escolha seu pokemon!" />
                <input type="submit" name="submit" value="Resposta!">
        </form>
</body>

</html>


<?php

if (isset($_GET['ds'])) {
        //var_dump($_GET['ds']);
        //echo filter_input(INPUT_GET, 'ds');
        var_dump(filter_input(INPUT_GET, 'ds', FILTER_VALIDATE_INT));
}
