<?php
    include_once "connection.php";

 if(isset($_POST['submit'])){
    $query = "INSERT INTO toDoList(heading,content) VALUES(?,?);";
    
    $stmt = mysqli_prepare($con,$query);
    $stmt->bind_param("ss",$_POST['heading'],$_POST['content']);
    $stmt->execute();
       
    echo '<script type="text/javascript">
                window.location.href = "index.php?new=New note added!";
              </script>';
    
    if(!$stmt->execute()){
        echo 'Error saving note!'.mysqli_connect_err();
    }
 }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Note</title>
</head>
<style>
    *{
        margin:0;
        top:0;
    }

    form{
        width:95%;
    }

    .note{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input[type=text]{
        height: 40px;
        width:95%;
        margin-top: 20px;
        text-align: center;
        font-size: 18px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    textarea{
        max-width: 95%;
        width: 95%;
    }

    textarea:hover{
        border: 1px solid #000;
    }

    input[type=text], textarea{
        font-size: 18px;
        padding: 5px 10px; 
        font-family: cursive; 
    }

    input[type=submit]{
        background: rgb(226, 230, 4);
        border-radius: 10px;
        text-decoration: none;
        font-family: cursive;
        font-size:20px;
        padding: 8px 12px;
        margin: 20px 32px;
        color: #333;
    }



</style>
<body>
    <div class="note">
        <form method="post">
            <input type="text" name="heading" placeholder="Heading" class="head"><br>
            <textarea class="content" name="content"></textarea><br>
            <input type="submit" name="submit" value="SAVE">
        </form>
    </div>
</body>
</html>