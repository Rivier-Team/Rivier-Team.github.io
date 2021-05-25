<?php   

include_once ("./conexao.php");
session_start();
ob_start();

$opencart = filter_input(INPUT_POST, 'opencart', FILTER_SANITIZE_NUMBER_INT);
$wireframe = filter_input(INPUT_POST, 'wireframe', FILTER_SANITIZE_NUMBER_INT);
$prototipo_site = filter_input(INPUT_POST, 'prototipo_site', FILTER_SANITIZE_NUMBER_INT);
$tools_app = filter_input(INPUT_POST, 'tools_app', FILTER_SANITIZE_NUMBER_INT);
$bd_site_app = filter_input(INPUT_POST, 'bd_site_app', FILTER_SANITIZE_NUMBER_INT);
$front_site_app = filter_input(INPUT_POST, 'front_site_app', FILTER_SANITIZE_NUMBER_INT);
$back_site_app = filter_input(INPUT_POST, 'back_site_app', FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "SELECT * FROM tbl_progress";
$resultado_usuario = mysqli_query($con, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);


if($row_usuario != 0){
    
    $con-> query("UPDATE tbl_progress SET opencart='$opencart'");
    $con-> query("UPDATE tbl_progress SET wireframe='$wireframe'");
    $con-> query("UPDATE tbl_progress SET prototipo_site='$prototipo_site'");
    $con-> query("UPDATE tbl_progress SET tools_app='$tools_app'");
    $con-> query("UPDATE tbl_progress SET bd_site_app='$bd_site_app'");
    $con-> query("UPDATE tbl_progress SET front_site_app='$front_site_app'");
    $con-> query("UPDATE tbl_progress SET back_site_app='$back_site_app'");


    $_SESSION['opencart'] = $row_usuario['opencart']; 
    $_SESSION['wireframe'] = $row_usuario['wireframe'];  
    $_SESSION['prototipo_site'] = $row_usuario['prototipo_site'];
    $_SESSION['tools_app'] = $row_usuario['tools_app'];
    $_SESSION['bd_site_app'] = $row_usuario['bd_site_app'];
    $_SESSION['front_site_app'] = $row_usuario['front_site_app'];
    $_SESSION['back_site_app'] = $row_usuario['back_site_app'];
    header("Location: ../../index.php");

}else{
    $result_progress = "INSERT INTO tbl_progress (opencart, wireframe, prototipo_site, tools_app, bd_site_app, front_site_app, back_site_app) VALUES ('$opencart', '$wireframe', '$prototipo_site', '$tools_app', '$bd_site_app', '$front_site_app', '$back_site_app')";
    
    $resultado = mysqli_query($con, $result_progress);
    
    echo "opencart: $opencart";

}   


?>