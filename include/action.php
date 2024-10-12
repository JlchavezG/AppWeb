<?php 
    include 'conection.php';
    // insertar nuevo usuarios 
    if(isset($_POST['btnRegistrar'])){
        $NomUser = $Conection->real_escape_string($_POST['Nombre']);
        $Apaterno = $Conection->real_escape_string($_POST['Apaterno']);
        $Amaterno = $Conection->real_escape_string($_POST['Amaterno']);
        $TelefonoUser = $Conection->real_escape_string($_POST['TelefonoUser']);
        $EmailUser = $Conection->real_escape_string($_POST['EmailUse']);
        $TipoUser = $Conection->real_escape_string($_POST['Tusuario']);
        $UserNick = $Conection->real_escape_string($_POST['userNick']);
        $PassUser = $Conection->real_escape_string($_POST['passUser']);
        
        
    }

?>