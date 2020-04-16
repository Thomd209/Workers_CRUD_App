<?php 
    require_once 'scripts/config.php';
    require_once 'scripts/check_form_data.php'; 
    require_once 'scripts/clean_data.php';
    require_once 'scripts/create_worker_script.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create worker form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/create_worker.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo" href="index.php">CRUD App</a>
        </header>
        <main class="content">
            <span class="form_create_worker_name">Create worker</span>
            <form class="form_create_worker" action="create_worker_form.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control form_create_worker__create_worker_input" type="text" value="<?php print($_POST['name']); ?>" name="name" id="name">
                    <span class="empty_create_field"><?php print($name_checked); ?></span>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input class="form-control form_create_worker__create_worker_input" type="text" value="<?php print($_POST['age']); ?>" name="age" id="age">
                    <span class="empty_create_field"><?php print($age_checked); ?></span>
                </div>
                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input class="form-control form_create_worker__create_worker_input" type="text" value="<?php print($_POST['salary']); ?>" name="salary" id="salary">
                    <span class="empty_create_field"><?php print($salary_checked); ?></span>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
            </form>
        </main>
        <footer class="footer">
            <span class="footer_copyright">&copy; CRUD App, 2020 | All rights reserved</span>
        </footer>
    </div>
</body>
</html>


