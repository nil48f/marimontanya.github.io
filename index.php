<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Mar i montanya</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<!--
    docker exec -it MongoDB_M09 mongosh
    db.usuarios.insertOne({nombre:'Nil Balaguer',contrasenya:'1234',email:'nilbalaguer@gmail.com',tlf:'69976234',naixement:'08/07/2005',comarca:'Barcelona'})
-->
<?php
    require("protection.php");
?>
<body id="grid">
    <div id="leftheader">
        <img src="images/logo.webp" width="50%">
    </div>
    <header id="imgbanner">
        <img src="images/banner.png" width="50%">
    </header>
    <section id="leftmenu">
        <div>
            <a href="index.php"><img src="images/home.png"></a>
        </div>
        <div>
            <a href="login.html"><img src="images/login.png"></a>
        </div>
        <div>
            <a href="perfil.php"><img src="images/perfil.png"></a>
        </div>
    </section>
    <section id="divpublicaciones">
        <div class="publicaciones">
            <img src="images/certascan.jpg">
            <div>
                <img src="images/perfil.png">
            </div>
        </div>
    </section>
    <div id="leftfooter">
        <a href="politques.html">Politiques<br>i<br>Privacitat</a>
    </div>
    <footer>
        <div>
            <p>Copyright 2024 &#169; Mar i Montanya <br> Tots els drets reservats</p>
        </div>
        <div>
            <a>Crear Publicacio</a>
        </div>
    </footer>
</body>
</html>