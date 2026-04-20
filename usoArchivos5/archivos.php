<?php
    echo "contro de tipo y tam combinado<br>";
    if ($_FILES['file1']['error']==UPLOAD_ERR_OK) {
        $nombre=$_FILES['file1']['name'];
        echo $nombre."<br>";
        $tipo=$_FILES['file1']['type'];
        echo $tipo."<br>";
        $temporal=$_FILES['file1']['tmp_name'];
        echo $temporal."<br>";
        //$error=$_FILES['file1']['error'];
        //echo $error."<br>";
        $tam=$_FILES['file1']['size'];
        echo $tam."<br>";
        $extension=strtolower(pathinfo($_FILES['file1']['name'],PATHINFO_EXTENSION));
        echo $extension."<br>";
        if (($extension=="pdf"||$extension=="docx")&&$_FILES['file1']['size']<=2097152) {
                echo "<h3>archivo valido</h3> ";
                echo "$nombre ".round($tam/1024)." kb";
        }//si ambos son correctos
        else if (($extension!="pdf"&&$extension!="docx")&&$_FILES['file1']['size']>2097152) {
            # code...
            echo "la extension $extension y ".round($tam/1024)."kb no son validos";
        }//si la extension y el tamano no son validos... 
        else if (($extension=="pdf"||$extension=="docx")&&$_FILES['file1']['size']>2097152) {
            # code...
            echo "$extension es correcta, pero el tamano ".round($tam/1024)."kb no es valido";
        }//si el tamano no es valido
        else if (($extension!="pdf"&&$extension!="docx")&&$_FILES['file1']['size']<=2097152) {
            # code...
                echo "$extension es incorrecta, pero el tamano ".round($tam/1024)."kb es valido";    
        }//si la extension no es valida
    }
    else{
            echo "<h3>No cargo ningun archivo</h3>";

    }
?>