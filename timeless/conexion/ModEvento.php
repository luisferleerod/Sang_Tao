<?php 

include ("dbh.inc.php");

session_start();
if(isset($_SESSION['username'])){

$username = $_SESSION['username'];
$tituloA=$_POST["tituloA"];
$titulo = $_POST["titulo"];
$desc = $_POST["descripcion"];
$dia = $_POST["dia"];
$horai = $_POST["horai"];
$horaf = $_POST["horaf"];

$hora_unixi=strtotime($horai);
$horaimysql=date('H:i:s', $hora_unixi);

$hora_unixf=strtotime($horaf);
$horafmysql=date('H:i:s', $hora_unixf);


$tituloexiste= "SELECT titulo FROM evento_fijo WHERE titulo='$tituloA'";
$query = mysqli_query($con,$tituloexiste);
$nr = mysqli_num_rows($query);
if($nr==1){


    if(isset($_POST["Cambiar"])){

        if($dia=='lunes'){
            $sqlgraba = "UPDATE evento_fijo SET titulo='$titulo',descripcion='$desc',id_dia_semana=1,hora_inicio='$horaimysql',hora_fin='$horafmysql',id_dia_semana=1 WHERE usuario = '$username'
            AND titulo='$tituloA'";
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
            $sqlgraba = "UPDATE evento_fijo SET titulo='$titulo',descripcion='$desc',id_dia_semana=2,hora_inicio='$horaimysql',hora_fin='$horafmysql',id_dia_semana=1 WHERE usuario = '$username'
            AND titulo='$tituloA'";
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
            $sqlgraba = "UPDATE evento_fijo SET titulo='$titulo',descripcion='$desc',id_dia_semana=3,hora_inicio='$horaimysql',hora_fin='$horafmysql',id_dia_semana=1 WHERE usuario = '$username'
            AND titulo='$tituloA'";
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
            $sqlgraba = "UPDATE evento_fijo SET titulo='$titulo',descripcion='$desc',id_dia_semana=4,hora_inicio='$horaimysql',hora_fin='$horafmysql',id_dia_semana=1 WHERE usuario = '$username'
            AND titulo='$tituloA'";
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
            $sqlgraba = "UPDATE evento_fijo SET titulo='$titulo',descripcion='$desc',id_dia_semana=5,hora_inicio='$horaimysql',hora_fin='$horafmysql',id_dia_semana=1 WHERE usuario = '$username'
            AND titulo='$tituloA'";
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
            $sqlgraba = "UPDATE evento_fijo SET titulo='$titulo',descripcion='$desc',id_dia_semana=6,hora_inicio='$horaimysql',hora_fin='$horafmysql',id_dia_semana=1 WHERE usuario = '$username'
            AND titulo='$tituloA'";
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
            $sqlgraba = "UPDATE evento_fijo SET titulo='$titulo',descripcion='$desc',id_dia_semana=7,hora_inicio='$horaimysql',hora_fin='$horafmysql',id_dia_semana=1 WHERE usuario = '$username'
            AND titulo='$tituloA'";
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
else{
    echo '<script language="javascript">alert("No existe la actividad antigua");window.location.href="../interfaz/ModAct.html"</script>';
}


}

?>