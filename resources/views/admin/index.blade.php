<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTRL-S</title>
    <link rel="stylesheet" href="/main.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bgcolor">

</body>
<!--card para materias
      ----ENGLISH-------  -->
    <!-- imagenes en public y llamar normal --> 
<div class="card" style="width: 18rem;">
  <img src="english.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Clic to go to english</p>
    <a href="{{ url('/create-eng') }}" class="btn btn-primary">Let's go!</a> <!-- url no route  -->
  </div>
</div>
</html>