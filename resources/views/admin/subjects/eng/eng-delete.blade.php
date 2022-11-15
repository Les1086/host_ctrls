<?php
//CONEXIÓN CON LA BASE DE DATOS
$mysql = new mysqli("localhost", "root", "", "csapp");
if ($mysql->connect_error)
    die("Conection issues");
//INSERTAR EN DB
$mysql->query("delete from users where CODIGO=$_GET[CODIGO]") or
    die($mysql->error);

header("Location:{{ route(read-eng) }}")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>STUDENT DELETED</title>
    <style>
        * {
            padding-top: 5em;
            margin: 0;
            padding: 0;
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>

<body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'The Student was Deleted',
            showConfirmButton: false,
            timer: 5000
        })

        setTimeout(function() {
            window.location.href = "{{ route('read-eng')}}";
        }, 3000);
    </script>
</body>

</html>