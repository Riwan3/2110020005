<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hello Feri Gunawan dan 2110020005</title>
</head>

<body>
    <h1>Selamat Datang di Web <?= $nama; ?> NPM <?= $npm; ?></h1>
    <?php
    if (isset($mvc)) {
        echo $mvc;
    }
    ?>
</body>

</html>