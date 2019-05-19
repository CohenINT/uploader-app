<?php

error_reporting(E_ALL);
require("config.php");
//loading files and sending the link to user
//like file stroing service

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_FILES["file"])&& $_FILES["file"]["error"]==0)
    {
        //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $target_folder="uploads/";
        $target_file=$target_folder.basename($_FILES["file"]["name"]);
        $allowed = array("png","jpg","jpeg","doc","docx","pdf","xls","zip","rar","txt");
        $ext= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        if(!in_array($ext,$allowed))
        {
            die("File format is not allowed by server policy.");
        }

        if(file_exists($target_file))
        {
            die("Sorry, file already exist by that name.");
        }

        if($_FILES["file"]["size"]>(10 *1024*1024) )
        {
            die("Your file exceeds the allowed weight amount.");
        }
        

        move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]);
        $link=HOST.":".PORT."/".PROJECT_FOLDER."/".UPLOAD_FOLDER."/".$_FILES["file"]["name"];
      $message_to_user="File uploaded successfully. Link:<br> "."<mark>$link</mark>";
      echo "<h3> $message_to_user </h3>";

    }
}

