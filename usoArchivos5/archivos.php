<?php
    if ($_FILES['file1']['error']==UPLOAD_ERR_OK) {
        $nombre=$_FILES['file1']['name'];
        echo $nombre."<br>";
        $tipo=$_FILES['file1']['type'];
        echo $tipo."<br>";
        $temporal=$_FILES['file1']['tmp_name'];
        echo $temporal."<br>";
        $error=$_FILES['file1']['error'];
        echo $error."<br>";
        $tam=$_FILES['file1']['size'];
        echo $tam."<br>";
        $extension=pathinfo($_FILES['file1']['name'],PATHINFO_EXTENSION);
        echo $extension;
        if ($extension=="pdf") {
            # code...
            echo "Holaaaaa";
        }
    }
    else{
            echo "<h3>No cargo ningun archivo</h3>";

    }
?>