<?php
error_reporting();
$nombre_f=$_FILES["archivo"]["name"];
$tmp_f=$_FILES["archivo"]["tmp_name"];
echo $tmp_f; echo "<br>";
print_r($_FILES);

    if (!file_exists("../carpeta_archivos")){
        mkdir ("../carpeta_archivos", 0777, true);
        move_uploaded_file($tmp_f, "../carpeta_archivos/".$nombre_f);  
        echo "Archivo guardado con éxito";
    }
    elseif(file_exists("../carpeta_archivos")){
        move_uploaded_file($tmp_f, "../carpeta_archivos/".$nombre_f);  
        echo "Archivo guardado con éxito";
    }
    else{
        echo "Error, el archivo no ha podido subirse con éxito";
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            <input type="file" name="archivo" id=""><br><br>
            <button type="submit"> Enviar  </button>
        </form>

</body>
</html>