<?php
    function get_all_workers() {
        global $pdo;
        $query_get = "SELECT * FROM workers";
        $query_get_result = $pdo->query($query_get);
        return $query_get_result;
    }

    $query_get_result = get_all_workers();
?>