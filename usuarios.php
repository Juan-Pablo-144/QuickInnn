 <!DOCTYPE html>
 <html lang="en">
     <title>Registrar usuarios</title>
</head>
<body bgcolor="#32323">
<body text="#ffffff">
    <font face = "tahoma">
        <font size = "2">
            <body link = "#e5e5e5">
                <p aling = "center">
                    <STRONG>SU REGISTRO SE A COMPLETADO  EXITO</STRONG>
                    <BR>
                   </html>
                   <?php
                   $nombre = $_POST['nombre'];
                   $user = $_POST['user'];
                   $cont = $_POST['cont'];
                   $mail = $_POST['mail'];
                   include 'conexion.php';
                   $conexion = mysqli_connect($host_db,$user_db,$pass_db,$db_name);
                   if(mysqli_connect_errno()){
                       printf("Falló la conexión: %s\n", mysqli_connect_errno());
                       exit();
                   }
                   $insercion = mysqli_query($conexion, "INSERT INTO usuarios(
                       nombre, user, cont, mail) VALUES ('$nombre', '$user','$cont','$mail')");
                       echo 'REGISTRADO';
                       echo "<br>";
                       echo "<strong>BIENVENIDO $nombre";
                       echo "<a href=login.html>Iniciar sesión";
                       ?>
                    
