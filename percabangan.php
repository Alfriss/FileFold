<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
</head>
<body>
    <form method="post" action="">
        Masukan nilai anda: <input type="text" name="nilai" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST["nilai"];

    if ($nilai >= 90) {
        echo "Lulus dengan pujian.";
    }
    if ($nilai >=75 && $nilai <= 89) {
        echo "Lulus.";
    }
    if ($nilai >= 50 && $nilai <= 74) {
        echo "Remedial";
    }
    if ($nilai < 50) {
        echo "Tidak Lulus.";
    }
}
?>