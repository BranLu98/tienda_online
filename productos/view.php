<!doctype html>
<html lang="en">

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tienda</title>
</head>

<body>
    <div class="container-fluid">
        <h1>View</h1>
        <a href="index.php">Lista de productos</a>

        <form>
            <?php include 'db/db_view.php'; ?>
        </form>

    </div>
</body>

</html>