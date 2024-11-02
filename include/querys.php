<?php 
    include 'include/conection.php';
    
    // consulta para abstraer los datos de tipos de usuarios para el registro 
    $TusuariosC = "SELECT * FROM TipoUsuario WHERE Id_Tusuario > 1";
    $ETusuariosC = $Conection->query($TusuariosC);
   // consulta para extraer los datos de genero 
    $Genero = "SELECT * FROM Genero ORDER BY NomGenero ASC";
    $EGenero = $Conection->query($Genero);
    // consulta para extraer datos de todos los usuarios con tipo super usuario
    $SuperUser = "SELECT * FROM Usuarios WHERE Tusuario = 1 ORDER BY NombreUser ASC";
    $ESuperUser = $Conection->query($SuperUser);
    // extraer el numero de registros super usuario
    $TSuperUser = $ESuperUser->num_rows;
    // consulta para extraer datos de todos los usuario con tipo paciente 
    $PacienteUser = "SELECT * FROM Usuarios WHERE Tusuario = 2 ORDER BY NombreUser ASC";
    $EPacienteUser = $Conection->query($PacienteUser);
    // extraer el numero de registros paciente
    $TPacienteUser = $EPacientetUser->num_rows;
    // consulta para extraer datos de todos los usuario con tipo especialista
    $EspecialistUser = "SELECT * FROM Usuarios WHERE Tusuario = 3 ORDER BY NombreUser ASC";
    $EEspecialistUser = $Conection->query($EspecialistUser);
    // extraer el numero de registros especialista
    $TEspecialista = $EEspecialistUser->num_rows;
    // consulta para extraer datos de todos los usuario con tipo invitado
    $PacientetUser = "SELECT * FROM Usuarios WHERE Tusuario = 4 ORDER BY NombreUser ASC";
    $EPacientetUser = $Conection->query($PacientetUser);
    // extraer el numero de registros invitados
    $Tinvitados = $EPacientetUser->num_rows;
    // consulta para extraer a los usuarios online 
    $UserOnline = "SELECT * FROM Usuarios WHERE OnlineEstatus = 1";
    $EUserOnline = $Conection->query($UserOnline);



    // consulta para extraer las universidades registradas en el sistema 
    $Universidades = "SELECT * FROM  Universidades ORDER BY NomUnive ASC";
    $EUniversidades = $Conection->query($Universidades);
    

    

?>