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
                        <a href="{{ url('/read-eng') }}" class="btn btn-outline-primary btn-sm float-end">BACK</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('eng-create-panel') }}" method="get">
                            <label for="email">CODE:</label>
                            <input type="text" name="code" maxlength="8" size="7">
                            <input type="file" name="img" class="foto">
                            <br><br>
                            <label for="email">NAME:</label>
                            <input type="text" name="name" size="40">
                            <label for="email">YEAR:</label>
                            <select name="year" id="">
                                <option value="SENIOR">SENIOR</option>
                                <option value="JUNIOR">JUNIOR</option>
                                <option value="FRESHMEN">FRESHMEN</option>
                            </select><br>
                            <label for="email">eMAIL:</label>
                            <input type="email" name="mail" placeholder="nombre.apellido@hilasal.superate.org.sv" size="40"><br>
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
                            <br><br>
                            <input type="submit" value="ADD" class="btn btn-outline-success">
                            <button type="button" class="btn btn-outline-danger">CANCEL</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>