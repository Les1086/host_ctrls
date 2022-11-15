@include('nav');
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTRL-S | ENG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .foto {
            padding: 5px;
            border: 2px solid black;
            float: right;
            width: 250px;
        }

        h3 {
            color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <center><img src="english.png" width="200"></center>
        <div class="row">
            <div class="col-md-12">
                <!--AGREGAMOS A CARD-->
                <div class="card">
                    <div class="card-header">
                        CREATE NEW STUDENTS
                        <a href="{{route('read-eng')}}" class="btn btn-outline-primary btn-sm float-end">BACK</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <label for="email">CODE:</label>
                            <input type="text" value="#01AP2240" disabled size="7">
                            <img src="AA.png" class="foto">
                            <br><br>
                            <label for="email">NAME:</label>
                            <input type="text" value="Palma Martínez, Allison Daniela" size="40">
                            <label for="email">YEAR:</label>
                            <input type="text" value="2022" disabled size="1">
                            <label for="email">LEVEL:</label>
                            <input type="text" value="Senior" disabled size="2"><br>
                            <label for="email">E-MAIL:</label>
                            <input type="email" placeholder="nombre.apellido@hilasal.superate.org.sv" size="40"><br>
                            <h2>Scores</h2>
                            <label for="email">SPK:</label>
                            <input type="text">
                            <label for="email">WRT:</label>
                            <input type="text"><br>
                            <label for="email">RED:</label>
                            <input type="text">
                            <label for="email">LIS:</label>
                            <input type="text">
                            <br><br>
                            <h3>Average: 10.00</h3>
                            <br><br>
                            <button type="button" class="btn btn-outline-success">ADD</button>
                            <button type="button" class="btn btn-outline-danger">CANCEL</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>