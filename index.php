<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "the post data is: name: $name email:$email";


    if(!empty($_FILES['file']['name'])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $sourcePath = $_FILES['file']['tmp_name'];
        $targetPath = "uploads/".$fileName;
        if(move_uploaded_file($sourcePath,$targetPath)){
            echo "file saved";

        }else echo "file was not saved";
    }

}



?>