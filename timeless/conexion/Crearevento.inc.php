
<?php 

include ("dbh.inc.php");

session_start();
if(isset($_SESSION['username'])){

$username = $_SESSION['username'];
$titulo = $_POST["titulo"];
$desc = $_POST["descripcion"];
$dia = $_POST["dia"];
$horai = $_POST["horai"];
$horaf = $_POST["horaf"];

$hora_unixi=strtotime($horai);
$horaimysql=date('H:i:s', $hora_unixi);

$hora_unixf=strtotime($horaf);
$horafmysql=date('H:i:s', $hora_unixf);



if(isset($_POST["crear"])){

    if($dia=='lunes'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',1,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.php");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='martes'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',2,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.php");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='miercoles'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',3,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.php");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='jueves'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',4,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.php");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='viernes'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',5,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.php");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='sabado'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',6,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.php");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='domingo'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',7,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.php");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }



}

}








<?php 

include ("dbh.inc.php");

session_start();
if(isset($_SESSION['username'])){

$username = $_SESSION['username'];
$titulo = $_POST["titulo"];
$desc = $_POST["descripcion"];
$dia = $_POST["dia"];
$horai = $_POST["horai"];
$horaf = $_POST["horaf"];

$hora_unixi=strtotime($horai);
$horaimysql=date('H:i:s', $hora_unixi);

$hora_unixf=strtotime($horaf);
$horafmysql=date('H:i:s', $hora_unixf);



if(isset($_POST["crear"])){

    if($dia=='lunes'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',1,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.html");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='martes'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',2,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.html");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='miercoles'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',3,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.html");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='jueves'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',4,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.html");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='viernes'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',5,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.html");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='sabado'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',6,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.html");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    if($dia=='domingo'){
        $sqlgraba = "INSERT INTO evento_fijo(usuario,titulo,descripcion,id_dia_semana,hora_inicio,hora_fin) 
        values ('$username','$titulo','$desc',7,'$horaimysql','$horafmysql')";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.html");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }



}

}



?>