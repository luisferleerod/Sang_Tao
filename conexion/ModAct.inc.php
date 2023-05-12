<?php 

include ("dbh.inc.php");

session_start();
if(isset($_SESSION['username'])){

$username = $_SESSION['username'];
$tituloA=$_POST["tituloA"];
$titulo = $_POST["titulo"];
$desc = $_POST["descripcion"];
$imp = $_POST["importancia"];
$fechai = $_POST["fechai"];
$fechaf = $_POST["fechaf"];
$fechaimysql =date('Y-m-d H:i:s', strtotime($fechai)); 
$fechafmysql =date('Y-m-d H:i:s', strtotime($fechaf)); 


$tituloexiste= "SELECT titulo FROM actividad WHERE titulo='$tituloA'";
$query = mysqli_query($con,$tituloexiste);
$nr = mysqli_num_rows($query);
if($nr==1){


    if(isset($_POST["Cambiar"])){

        if($imp=='importante'){
            $sqlgraba = "UPDATE actividad SET titulo='$titulo',descripcion='$desc',fecha_hora_inicio='$fechaimysql',fecha_hora_fin='$fechafmysql',id_importancia=1,id_urgencia=1 WHERE usuario = '$username'
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
        else if($imp=='no_importante'){
            $sqlgraba ="UPDATE actividad SET titulo='$titulo',descripcion='$desc',fecha_hora_inicio='$fechaimysql',fecha_hora_fin='$fechafmysql',id_importancia=2,id_urgencia=1 WHERE usuario = '$username'
            AND titulo='$tituloA'";
                if(mysqli_query($con,$sqlgraba)){
        
                    header("location: ../interfaz/principal.php");
                    die();
                }
                else{
                    header("location: ../interfaz/ModAct.html");
                    die();
                }      
        }



    }

}
else{
    echo '<script language="javascript">alert("No existe la actividad antigua");window.location.href="../interfaz/ModAct.html"</script>';
}

}

?>