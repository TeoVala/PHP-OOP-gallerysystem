<?php
    require_once ("init.php");

    $user = new User();


    if (isset($_POST['imageName'])) {
        $user -> ajax_save_user_image($_POST['imageName'], $_POST['userId']);

    }

    if (isset($_POST['photoId'])) {
        Photo::display_sidebar_data($_POST['photoId']);

    }

?>