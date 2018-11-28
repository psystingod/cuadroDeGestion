<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Generador de cuadros de gestión</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Cablesat</a>
        </div>
    </nav>
    <div class="container-fluid">
        <br>
        <h2 class="text-center">Generador de cuadros de gestión</h2>
        <br>
        <form action="">
            <div class="form-row">
                <div class="form-group col-md-4">
                    
                </div>
                <div class="form-group col-md-4">
                    <select id="meses" class="form-control">
                        <option selected>Elegir un mes...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <input type="submit" class="btn btn-info" value="Generar">
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <th>Domingo</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
        </table>
    </div>
</body>
</html>