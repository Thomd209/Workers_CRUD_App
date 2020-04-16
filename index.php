<?php 
    require_once 'scripts/config.php';
    require_once 'scripts/delete_worker_script.php';
    require_once 'scripts/get_all_workers.php';
    //require_once 'scripts/pagination.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo" href="index.php">CRUD App</a>
        </header>
        <main class="content">
            <span class="content__table_name">"Workers" table</span>
            <a href="create_worker_form.php" class="btn btn-success content__btn_add_worker">Add worker</a>
            <table class="table table-responsive content__table_workers">
                <tr class="thead-dark">
                    <th scope="col">name</th>
                    <th scope="col">age</th>
                    <th scope="col">salary</th>
                    <th scope="col center">Change</th>
                    <th scope="col">Delete</th>
                </tr>
                <?php while ($row = $query_get_result->fetch()) { ?>
                <tr>
                    <td><?php print($row['name']); ?></td>
                    <td><?php print($row['age']); ?></td>
                    <td><?php print($row['salary']); ?></td>
                    <td>
                        <a href="change_worker_form.php?change=<?php print($row['id']); ?>" class="btn btn-primary">Change</a>
                    </td>
                    <td>
                        <a href="?delete=<?php print($row['id']); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>    
            </table>
        </div>
        <footer class="footer">
            <span class="footer_copyright">&copy; CRUD App, 2020 | All rights reserved</span>
        </footer>
    </div>
</body>
</html>
