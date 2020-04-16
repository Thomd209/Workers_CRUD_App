<?php 
    //Удаление работника

    if (isset($_GET['delete'])) {
        delete_worker($_GET['delete']);
    }

    function delete_worker($delete){
        global $pdo;
        $query_delete = "DELETE FROM workers WHERE id = ?";
        $query_delete_result = $pdo->prepare($query_delete);
        $query_delete_result->execute([$delete]);
    }
?>