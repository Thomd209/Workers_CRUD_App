<?php
    $name_checked = '';
    $age_checked = '';
    $salary_checked = '';

    if (isset($_POST['submit'])) {
        $name_checked = check_name_form_data($_POST['name']);
        $age_checked = check_age_form_data($_POST['age']);
        $salary_checked = check_salary_form_data($_POST['salary']);
    }

    if (isset($_POST['submit']) && $_POST['name'] != '' && $_POST['age'] != '' && $_POST['salary'] != '') {
        change_worker($_POST['name'], $_POST['age'], $_POST['salary'], $_GET['change']);
    }

    function change_worker($name, $age, $salary, $change){
        global $pdo;
        $name = clean_data($name);
        $query_change = "UPDATE workers SET name = ?, age = ?, salary = ? WHERE id = ?";
        $query_change_result = $pdo->prepare($query_change);
        $query_change_result->execute([$name, $age, $salary, $change]);
        header('Location: index.php');
    }
?>