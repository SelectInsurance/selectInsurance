<?php
//Convertir esto en un objeto para reutilizar
        $directorio = 'archivos/';
        $subir_archivo = $directorio . basename($_FILES['subir_archivo']['name']);
        echo "<div>";
        if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
            echo "El archivo es válido y se cargó correctamente.<br><br>";
            echo "<a href='" . $subir_archivo . "' target='_blank'><img src='" . $subir_archivo . "' width='150'></a>";
        } else {
            echo "La subida ha fallado";
        }
        echo "</div>";
