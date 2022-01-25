<?php 

if(isset($_POST['submit'])){
    
    $title_one = trim(htmlentities($_POST['title_one']));
    $description_one = trim(htmlentities($_POST['description_one']));
    $icon_one = trim(htmlentities($_POST['icon_one']));
    $title_two = trim(htmlentities($_POST['title_two']));
    $description_Two = trim(htmlentities($_POST['description_Two']));
    $icon_two = trim(htmlentities($_POST['icon_two']));
    $video_url = trim(htmlentities($_POST['video_url']));
    $photo = $_FILES['banner_img'];
}