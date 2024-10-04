<?php
if (isset($_GET['email'])) {
    


    $link = mysqli_connect("localhost", "root", "", "weblabdatabase");


    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $email = mysqli_real_escape_string($link, $_GET['email']); 

    $result = mysqli_query($link, "DELETE FROM persons WHERE email = '$email'");

    if ($result) {
        echo "Запис успішно видалено.";
    } else {
        echo "Помилка видалення запису: " . mysqli_error($link);
    }


    mysqli_close($link);
} else {
    echo "Email не задано.";
}
?>
