<?php
    //Функции, проверяющие поля формы на пустоту
    
    function check_name_form_data($name){
        if (empty($name)) {
            $name_checked = 'Name is required';
        } else {
            $name_checked = '';
        }

        return $name_checked;
    }

    function check_age_form_data($age){
        if (empty($age)) {
            $age_checked = 'Age is required';
        } else {
            $age_checked = '';
        }

        return $age_checked;
    }

    function check_salary_form_data($salary){
        if (empty($salary)) {
            $salary_checked = 'Salary is required';
        } else {
            $salary_checked = '';
        }

        return $salary_checked;
    }
?>