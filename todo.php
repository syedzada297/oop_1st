<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <form action="insert.php" method="GET">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-dark mt-3 py-3 col-md-6">
                <h3 class="row justify-content-center text-white">TODO APP</h3>
                <div class="col-8">
                    <input type="text" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-success ">Add</button>
                </div>
            </div>
        </div>
    </form>
    <?php
    include "db_connection.php";
    $tabledata = mysqli_query($conn, "SELECT * FROM `pakistan` ");
    ?>
    <div class="container">
        <div class="col-8 bg-dark m-auto mt-3">
            <table class="table bg-warning">
                <tbody class="text-dark">
                    <?php
                    while ($row = mysqli_fetch_assoc($tabledata)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['list'] ?></td>
                            <td style="width:10%;"><a class="btn btn-danger"
                                    href="delete.php? ID= <?php echo $row['id'] ?>">Delete</a></td>
                        </tr>
                    <?php
                    };
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
