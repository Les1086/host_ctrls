@include('nav');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTRL-S | ENG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="\pancho.png">
</head>
<body>
<?php
$mysql = new mysqli("localhost", "root", "", "csapp");
if ($mysql->connect_error)
    die("Problems with the conection");

$mysql->query("delete from productos where code=$_REQUEST[code]") or
    die($mysql->error);

$mysql->close();

header("Location:{{ route('subjects.index') }}")
?>
</body>
</html>