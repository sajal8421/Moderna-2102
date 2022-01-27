<?php 
session_start();
if(isset($_POST['submit'])){
    
    $title_one = trim(htmlentities($_POST['title_one']));
    $description_one = trim(htmlentities($_POST['description_one']));
    $icon_one = trim(htmlentities($_POST['icon_one']));
    $title_two = trim(htmlentities($_POST['title_two']));
    $description_two = trim(htmlentities($_POST['description_two']));
    $icon_two = trim(htmlentities($_POST['icon_two']));
    $video_url = trim(htmlentities($_POST['video_url']));
    $photo = $_FILES['banner_img'];
    require '../db.php';
    if(!empty($photo['name'])){

        $photo_ex = explode('.',$photo['name']);
        $photo_name = 'why-us'.'.'. end($photo_ex);

       $upload = move_uploaded_file($photo['tmp_name'], '../../uploads/why-us/'.$photo_name);

       if($upload){
        $query = "UPDATE why_us SET photo='$photo_name',video_url='$video_url',title_one='$title_one',description_one='$description_one', icon_one='$icon_one',title_two='$title_two',description_two='$description_two',icon_two='$icon_two'";
        
        $result = mysqli_query($conn, $query);
        
        if ($result) {
          $_SESSION['success'] = 'Update Success!';
          header('Location:edit.php');
        }
       }
    }else{
        $query = "UPDATE why_us SET photo='$photo_name',video_url='$video_url',title_one='$title_one',description_one='$description_one', icon_one='$icon_one',title_two='$title_two',description_two='$description_two',icon_two='$icon_two'";
        
        $result = mysqli_query($conn, $query);
        
        if ($result) {
          $_SESSION['success'] = 'Update Success!';
          header('Location:edit.php');
        }
    }
}