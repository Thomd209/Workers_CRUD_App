<?php
    $notes_one_page = 2;
    $num_pages = count_pages($all_table_rows, $notes_one_page);

    function count_pages($all_table_rows, $notes_one_page) {
        $num_table_rows = count_table_rows($all_table_rows);
        $num_pages = ceil($num_table_rows / $notes_one_page);
        return $num_pages;
    }

    function count_table_rows($all_table_rows) {
        $num_table_rows = count($all_table_rows);
        return $num_table_rows;
    }

    $step = 0;

    if (empty($_GET['step'])) {
        $table_rows = get_first_two_rows($db_connect, $notes_one_page);
    }

    if (isset($_GET['step'])){
        $table_rows = get_two_rows($db_connect, $_GET['step'], $notes_one_page);
    }

    function get_first_two_rows($db_connect, $notes_one_page) {
        $query_pagination = "SELECT * FROM workers WHERE id > 0 LIMIT 0, $notes_one_page";
        $query_pagination_result = mysqli_query($db_connect, $query_pagination) or die(mysqli_error($db_connect));
        for ($table_rows = []; $table_row = mysqli_fetch_assoc($query_pagination_result); $table_rows[] = $table_row);
        return $table_rows;
    }

    function get_two_rows($db_connect, $step, $notes_one_page) {
        $query_pagination = "SELECT * FROM workers WHERE id > 0 LIMIT $step, $notes_one_page";
        $query_pagination_result = mysqli_query($db_connect, $query_pagination) or die(mysqli_error($db_connect));
        for ($table_rows = []; $table_row = mysqli_fetch_assoc($query_pagination_result); $table_rows[] = $table_row);
        return $table_rows;
    }
?>