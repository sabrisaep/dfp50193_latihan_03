<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1>Asas PHP</h1>

    <?php 
    // komeng satu baris
    # komeng satu baris
    /*
        komeng banyak baris
    */

    $namapelajar = 'Ali';
    echo "<h2>Hello $namapelajar</h2>"; # output

    $hadir = false;
    $umur = 22;
    $nokp = '0011122334455';
    ?> 

    <p>
        <?php
        echo 20 . 21;
        ?>
    </p>

    <h2>
        <?php
        $bandar = 'Arau';
        $baru = 'Bandar: ';
        for($x = 0; $x < strlen($bandar); $x++) {
            $baru .= $bandar[$x] . ' ';
        }
        echo $baru;
        ?>
    </h2>
</body>
</html>