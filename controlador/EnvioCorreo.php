<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $destinatario = 'juanguz1999@outlook.com';
        $nombre = $_POST['name'];
        $asunto = $_POST['asunto'];
        $correo = $_POST['email'];
        $mensaje = $_POST['message'];

        $mensajecompleto = $mensaje . "\n Atentamente" . $nombre;

        mail($destinatario, $asunto, $mensajecompleto, $correo);
        header("Location: /index_p.php");
        ?>
    </body>
</html>
