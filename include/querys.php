<?php 
    include 'include/conection.php';
    
    // consulta para abstraer los datos de tipos de usuarios para el registro 
    $TusuariosC = "SELECT * FROM TipoUsuario WHERE Id_Tusuario > 1";
    $ETusuariosC = $Conection->query($TusuariosC);

?>