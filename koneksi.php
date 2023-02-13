<?php

   //koneksi database
   $server = "localhost";
   $user = "root";
   $password = "";
   $database = "db_pkl";

   //buat koneksi
   $koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));


function template_header($title) {
   echo <<<EOT
<!DOCTYPE html>
<html>
   <head>
   <title>$title</title>
   <link href="style.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://use.fontawesome.com/realeases/v5.7.1/css/all.cs">
   </head>
   <body>
   <nav class="navtop">
   <div>
   <h1>website title</h1>
   <a href="index.php"><1 class="fas fa-home"></1>Home</a>
   <a href="info.php"><1 class="fas fa-address-book"></1>contacts</a>
   </div>
   </nav>

EOT;
}
function templat_footer(){
   echo <<<EOT
   </body>
   </html>
   EOT;
}
?>