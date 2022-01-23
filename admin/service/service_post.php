<?php
session_start();
if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $icon = trim(htmlentities($_POST['icon_class']));
    $box_class = trim(htmlentities($_POST['icon_box_class']));


    if (empty($title)) {
        $_SESSION['title'] = "Enter Your Banner Title";
    }

    if (!empty($title)) {
        require '../db.php';
        $query = "INSERT INTO services(title, description, icon_class, box_class_name) VALUES ('$title','$description','$icon','$box_class')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $_SESSION['success'] = "Service Insert successfull!";
            header("Location: index.php");
        }
    } else {
        header("Location: insert.php");
    }
}
