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
        create_worker($_POST['name'], $_POST['age'], $_POST['salary']);
    }

    function create_worker($name, $age, $salary){
        global $pdo;
        $name = clean_data($name);
        $query_create = "INSERT INTO workers SET name = ?, age = ?, salary = ?";
        $query_create_result = $pdo->prepare($query_create);
        $query_create_result->execute([$name, $age, $salary]);
        header('Location: index.php');
    }
?>