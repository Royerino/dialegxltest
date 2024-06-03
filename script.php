<?php
$directorio = '/home/leonardo.francisco.b/Público/Campus_PRO/Robotix/dialegxltest/';

if (!is_dir($directorio)) {
    die('El directorio no existe');
}

$imagenes = glob($directorio . '/*.{jpg,jpeg,png,PNG,JPG,gif}', GLOB_BRACE);

foreach ($imagenes as $imagen) {
    $nuevoNombre = $directorio . '/177_' . basename($imagen);
    if (!rename($imagen, $nuevoNombre)) {
        echo "Error al renombrar $imagen\n";
    }
}
?>