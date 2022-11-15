@include('nav');
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTRL-S | ENG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" href="\pancho.png">
    <style>
        * {
            padding-top: 5em;
            margin: 0;
            padding: 0;
            font-family: 'Quicksand', sans-serif;
        }

        table {
            border: none;
            width: 95%;
            border-collapse: collapse;
            text-align: left;
            font-size: 90%;
        }

        th {
            background-color: #39A3A8;
            color: #ececec;
            padding: 2%;
            width: auto;
        }

        td {
            padding: 2%;
        }

        a {
            transition: 0.2s;
            text-decoration: none;
            color: #484849;
        }

        th,
        td {
            padding: 2%;
        }

        th {
            background-color: #39A3A8;
            color: white;
        }

        tr {
            transition: 0.2s linear;
        }

        tr:hover {
            background-color: #6ec9ce;
            color: black;
        }

        tr:hover a {
            color: #000;
        }
    </style>
</head>

<body>
    <center><img src="english.png" width="200"></center>
    <a href="{{ route('create-eng') }}" class="btn btn-outline-primary btn-sm float-end">NEW STUDENT</a>

    <div class="">
        <h2>LIST OF STUDENTS</h2> <br><br>
        <center>
            <table align="center">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>YEAR</th>
                    <th>MAIL</th>
                    <th>AVERAGE</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>

                <?php
                $mysql = new mysqli("localhost", "root", "", "csapp");
                if ($mysql->connect_error)
                    die("Conection issues");

                $registros = $mysql->query("SELECT * FROM users") or
                    die($mysql->error);

                while ($reg = $registros->fetch_array()) {
                    echo '<tr>';
                    echo '<td>';
                    echo $reg['CODIGO'];
                    echo '</td>';
                    echo '<td>';
                    echo $reg['NAME'];
                    echo '</td>';
                    echo '<td>';
                    echo $reg['YEAR'];
                    echo '</td>';
                    echo '<td>';
                    echo $reg['MAIL'];
                    echo '</td>';
                    echo '<td>';
                    echo "9";
                    echo '</td>';
                    echo '<td>';
                    echo '<a href="">EDIT</a>';
                    echo '</td>';
                    echo '<td>';
                    echo '<a href="">DELETE</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                echo '<table> <br>';

                $mysql->close();
                ?>


                <!--
                    TENGO QUE HACER QUE EL PHP SEA LOCAL AL DELETEAR,
                    CREAR UNA FUCION PHP, Y UNA JS, CON LA FUNCION JS LLAMAR A LA
                    PHP PARA QUE SE EJECUTE CON ONCLICK
                -->


                <?php
                //CONEXIÓN CON LA BASE DE DATOS
                
                //INSERTAR EN DB
                
                function DeleteUser(){
                    $mysql = new mysqli("localhost", "root", "", "csapp");
                    if ($mysql->connect_error)
                    die("Conection issues");

                    $mysql->query("delete from users where CODIGO=[cod]") or
                    die($mysql->error);
                }
                ?>
                <!-- <tr>
                    <td>01SH2255</td>
                    <td>Palma Martínez, Allison Daniela</td>
                    <td>SENIOR</td>
                    <td>allison@gmail.com</td>
                    <td>10</td>
                    <td><a href="{{route('edit-eng')}}">EDIT</a></td>
                    <td><a href="javascript:del()">DELETE</a></td>
                </tr> -->
            </table>
        </center>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function del() {
            Swal.fire({
                title: 'Are you sure?',
                text: "The student will be eliminated",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'DONE',
                        'The student was deleted successfully',
                        'success'
                    )
                }
            })
        }
    </script>
</body>

</html>

</html>