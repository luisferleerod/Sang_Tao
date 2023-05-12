<?php
$dbhost = "192.168.77.45";
$dbuser= "jjosegomez";
$dbpass = "luchopelucho";
$dbname ="casti";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con){ //En caso de que falle, establecer que no hay conexion
    die("No hay conexion: " . mysqli_connect_error());
}
<?php
$dbhost = "192.168.77.45";
$dbuser= "jjosegomez";
$dbpass = "luchopelucho";
$dbname ="casti";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con){ //En caso de que falle, establecer que no hay conexion
    die("No hay conexion: " . mysqli_connect_error());
}

