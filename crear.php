<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5"></script>
  <link rel="stylesheet" href="style.css">

    <title>Lista de tareas</title>
</head>

<body>
    <?php
    include('db.php');
    ?>

<div class="container">
        <header class="text-center text-light my-4">
            <h1 class="mb-4">Crear nueva Tarea</h1>
        </header>
</div>
    

    <div class="card-body">

      <?php
        //$cod = mysqli_real_escape_string($connexion, (strip_tags($_GET["cod"], ENT_QUOTES)));
        $tareas = '';
        if (isset($_POST['btnGuardar'])) {
            $tarea = $_POST['tarea'];
            //$location = $_POST['location'];
            //$rsU = mysqli_query($connexion, "INSERT INTO tareas (tarea) VALUES('$tareas')");
            $rsU = mysqli_query($connexion, "INSERT INTO tareas(tarea) VALUES('nomtarea')");
            

           // $mysqli->query("INSERT INTO tareas (tarea) VALUES('$tareas')") or die($mysqli->error);

            $_SESSION['message'] = "Record has been saved!";
            $_SESSION['msg_type'] = "success";

            header('location: todo.php');
        }
        ?>
        <header class="text-center text-light my-4">
            <h4 class="mb-4">Descripción de las tareas</h4>
        </header>

        <form class="form-horizontal" action="" method="post">


            <div class="row justify-content-center">
                
                <input type="text" id="inputName" class="form-control" name="tarea" value="<?php echo $tareas; ?>">
            </div>
            <br>
            <br>
            <br>
            <div class="row justify-content-center">
                <a href="todo.php" class="btn btn-info">Atras</a>
                <input type="submit" value="Guardar" class="btn btn-danger" name="btnGuardar">
            </div>
    </div>
    </form>
</body>

</html>