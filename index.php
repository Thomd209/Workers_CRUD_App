<?php 
    require_once 'app/config.php';
    require_once 'app/delete_worker_script.php';
    require_once 'app/get_all_workers.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers_CRUD_App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/styles/header.css">
    <link rel="stylesheet" href="public/styles/style.css">
    <link rel="stylesheet" href="public/styles/footer.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo" href="index.php">Workers_CRUD_App</a>
        </header>
        <main class="content">
            <span class="content__table_name">Работники</span>
            <a href="create_worker_form.php" class="btn btn-success content__btn_add_worker">Добавить работника</a>
            <table class="table table-responsive content__table_workers">
                <tr class="thead-dark">
                    <th scope="col">имя</th>
                    <th scope="col">возраст</th>
                    <th scope="col">зарплата</th>
                    <th scope="col center">изменить</th>
                    <th scope="col">удалить</th>
                </tr>
                <?php while ($row = $query_get_result->fetch()) { ?>
                <tr>
                    <td><?php print($row['name']); ?></td>
                    <td><?php print($row['age']); ?></td>
                    <td><?php print($row['salary']); ?></td>
                    <td>
                        <a href="change_worker_form.php?change=<?php print($row['id']); ?>" class="btn btn-primary">Изменить работника</a>
                    </td>
                    <td>
                        <a href="?delete=<?php print($row['id']); ?>" class="btn btn-danger">Удалить работника</a>
                    </td>
                </tr>
                <?php } ?>    
            </table>
        </div>
        <footer class="footer">
            <span class="footer_copyright">&copy; Workers_CRUD_App, 2020 | Все права защищены</span>
        </footer>
    </div>
</body>
</html>
