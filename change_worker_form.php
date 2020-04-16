<?php 
    require_once 'app/config.php';  
    require_once 'app/check_form_data.php'; 
    require_once 'app/clean_data.php';
    require_once 'app/change_worker_script.php'; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change worker form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/styles/header.css">
    <link rel="stylesheet" href="public/styles/change_worker.css">
    <link rel="stylesheet" href="public/styles/footer.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo" href="index.php">Workers_CRUD_App</a>
        </header>
        <main class="content">
            <span class="form_update_worker_name">Изменить работника</span>
            <form class="form_update_worker" action="change_worker_form.php?change=<?php print($_GET['change']); ?>" method="POST">
                <div class="form-group">
                    <label for="name">Имя:</label>
                    <input class="form-control form_update_worker__update_worker_input" type="text" value="<?php print($_POST['name']); ?>" name="name" id="name">
                    <span class="form__empty_update_field"><?php print($name_checked); ?></span>
                </div>
                <div class="form-group">
                    <label for="age">Возраст:</label>
                    <input class="form-control form_update_worker__update_worker_input" type="text" value="<?php print($_POST['age']); ?>" name="age" id="age">
                    <span class="form__empty_update_field"><?php print($age_checked); ?></span>
                </div>
                <div class="form-group">
                    <label for="salary">Зарплата:</label>
                    <input class="form-control form_update_worker__update_worker_input" type="text" value="<?php print($_POST['salary']); ?>" name="salary" id="salary">
                    <span class="form__empty_update_field"><?php print($salary_checked); ?></span>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Отпраить</button>
            </form>
        </main>
        <footer class="footer">
            <span class="footer_copyright">&copy; Workers_CRUD_App, 2020 | Все права защищены</span>
        </footer>
    </div>
</body>
</html>