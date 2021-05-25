<?php
session_start();
ob_start();
include_once 'conexao.php';


$result_usuario = "SELECT * FROM tbl_comments";
$resultado_usuario = mysqli_query($con, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

$cmt_opencart = $_POST['cmt_opencart'];
$cmt_wireframe = $_POST['cmt_wireframe'];
$cmt_prototipo_site = $_POST['cmt_prototipo_site'];
$cmt_tools_app = $_POST['cmt_tools_app'];
$cmt_bd_site_app = $_POST['cmt_bd_site_app'];
$cmt_front_site_app = $_POST['cmt_front_site_app'];
$cmt_back_site_app = $_POST['cmt_back_site_app'];

if(isset($_POST['btn_comment'])) {  
  if($row_usuario != 0){ 
    $con->query("UPDATE tbl_comments SET cmt_opencart='$cmt_opencart'");   
    header(("Location: ../../index.php"));
  }else{$query=mysqli_query($con, "INSERT INTO tbl_comments (cmt_opencart) VALUES ('$cmt_opencart')");}
}

elseif(isset($_POST['btn_cmt_wireframe'])) {  
  if($row_usuario != 0){ 
    $con->query("UPDATE tbl_comments SET cmt_wireframe='$cmt_wireframe'");   
    header(("Location: ../../index.php"));
  }else{$query=mysqli_query($con, "INSERT INTO tbl_comments (cmt_wireframe) VALUES ('$cmt_wireframe')");}
}

elseif(isset($_POST['btn_cmt_prototipo_site'])) {  
  if($row_usuario != 0){ 
    $con->query("UPDATE tbl_comments SET cmt_prototipo_site='$cmt_prototipo_site'");   
    header(("Location: ../../index.php"));
  }else{$query=mysqli_query($con, "INSERT INTO tbl_comments (cmt_prototipo_site) VALUES ('$cmt_prototipo_site')");}
}

elseif(isset($_POST['btn_cmt_tools_app'])) {  
  if($row_usuario != 0){ 
    $con->query("UPDATE tbl_comments SET cmt_tools_app='$cmt_tools_app'");   
    header(("Location: ../../index.php"));
  }else{$query=mysqli_query($con, "INSERT INTO tbl_comments (cmt_tools_app) VALUES ('$cmt_tools_app')");}
}

elseif(isset($_POST['btn_cmt_bd_site_app'])) {  
  if($row_usuario != 0){ 
    $con->query("UPDATE tbl_comments SET cmt_bd_site_app='$cmt_bd_site_app'");   
    header(("Location: ../../index.php"));
  }else{$query=mysqli_query($con, "INSERT INTO tbl_comments (cmt_bd_site_app) VALUES ('$cmt_bd_site_app')");}
}

elseif(isset($_POST['btn_cmt_front_site_app'])) {  
  if($row_usuario != 0){ 
    $con->query("UPDATE tbl_comments SET cmt_front_site_app='$cmt_front_site_app'");   
    header(("Location: ../../index.php"));
  }else{$query=mysqli_query($con, "INSERT INTO tbl_comments (cmt_front_site_app) VALUES ('$cmt_front_site_app')");}
}

elseif(isset($_POST['btn_cmt_back_site_app'])) {  
  if($row_usuario != 0){ 
    $con->query("UPDATE tbl_comments SET cmt_back_site_app='$cmt_back_site_app'");   
    header(("Location: ../../index.php"));
  }else{$query=mysqli_query($con, "INSERT INTO tbl_comments (cmt_back_site_app) VALUES ('$cmt_back_site_app')");}
}

?>