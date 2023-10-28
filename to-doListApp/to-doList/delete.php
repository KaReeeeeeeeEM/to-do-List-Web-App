<?php
    include_once 'connection.php';
    $id = $_GET['id'];
    $query = "DELETE FROM toDoList WHERE id = ? ";
    $stmt = mysqli_prepare($con,$query);
    $stmt->bind_param("s",$id);
    $stmt->execute();

    header("Location: index.php?status=success");
?>